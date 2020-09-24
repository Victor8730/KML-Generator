<?php

declare(strict_types=1);

namespace Controllers;

use Core\Controller;
use Core\Route;
use Exceptions\NotExistFileFromUrlException;
use Exceptions\NotValidInputException;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;


class ControllerMain extends Controller
{
    /**
     * Show page with template main
     */
    public function actionIndex()
    {
        try {
            echo $this->view->render('main/' . $this->getNameView());
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }
    }

    /**
     * Show page with example data csv
     */
    public function actionExampleCsv(): void
    {
        echo $this->exampleCsv();
    }

    /**
     * Show page with example xml data
     */
    public function actionExampleXml(): void
    {
        echo $this->exampleXml();
    }

    /**
     * Generate kml file
     */
    public function actionKml(): void
    {
        $strOutside = $this->validate();
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $node = $dom->createElementNS('http://earth.google.com/kml/2.1', 'kml');
        $parNode = $dom->appendChild($node);
        $dnode = $dom->createElement('Document');
        $docNode = $parNode->appendChild($dnode);
        $restStyleNode = $dom->createElement('Style');
        $restStyleNode->setAttribute('id', 'exampleStyle');
        $restIconstyleNode = $dom->createElement('IconStyle');
        $restIconstyleNode->setAttribute('id', 'trainIcon');
        $restIconNode = $dom->createElement('Icon');
        $restHref = $dom->createElement('href', 'https://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png');
        $restIconNode->appendChild($restHref);
        $restIconstyleNode->appendChild($restIconNode);
        $restStyleNode->appendChild($restIconstyleNode);
        $docNode->appendChild($restStyleNode);
        $dataFromUrl = $this->getDataFromUrl($strOutside);
        $data = ($strOutside['type'] === 0) ? $this->createArrayFromCsv($dataFromUrl) : $this->createArrayFromXml($dataFromUrl);

        if (!empty($data) && is_array($data)) {
            foreach ($data as $item) {
                $this->createNode($item, $dom, $docNode);
            }
        }

        $kmlOutput = $dom->saveXML();
        header('Content-type: application/vnd.google-earth.kml+xml');
        header('Content-disposition: attachment; filename=KML_' . date("Ymd_His") . '.kml');

        echo $kmlOutput;
    }

    /**
     * Generate example csv file
     * @return string
     */
    public function exampleCsv(): string
    {
        return '1; Dnepr; 48.4786954; 35.021489' . "\n" . '2; Kiev; 50.4712958; 30.5151878' . "\n" . '3; Lviv; 49.8326679; 23.9421962';
    }

    /**
     * generate example xml
     * @return string
     */
    public function exampleXml(): string
    {
        $dom = new \DOMDocument();
        $dom->encoding = 'utf-8';
        $dom->xmlVersion = '1.0';
        $dom->formatOutput = true;
        $root = $dom->createElement('document');
        $movie_node = $dom->createElement('station');
        $child_node_title = $dom->createElement('id', '1');
        $movie_node->appendChild($child_node_title);
        $child_node_year = $dom->createElement('name', 'Dnepr');
        $movie_node->appendChild($child_node_year);
        $childNodeLng = $dom->createElement('lng', '35.021489');
        $movie_node->appendChild($childNodeLng);
        $childNodeLat = $dom->createElement('lat', '48.4786954');
        $movie_node->appendChild($childNodeLat);
        $root->appendChild($movie_node);
        $dom->appendChild($root);

        return $dom->saveXML();
    }

    /**
     * Creating a location according to the specified parameters
     * @param $dataDB
     * @param $dom
     * @param $docNode
     */
    private function createNode($dataDB, $dom, $docNode)
    {
        $description = '';

        try {
            $description = $this->view->render('kml/desc.twig', $dataDB);
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }

        // Creates a Placemark and append it to the Document.
        $node = $dom->createElement('Placemark');
        $placeNode = $docNode->appendChild($node);
        // Creates an id attribute and assign it the value of id column.
        $placeNode->setAttribute('id', 'placemark' . $dataDB['id']);
        // Create name, and description elements and assigns them the values of the name and address columns from the results.
        $nameNode = $dom->createElement('name', htmlentities($dataDB['name']));
        $placeNode->appendChild($nameNode);
        $descNode = $dom->createElement('description', $description);
        $placeNode->appendChild($descNode);
        $styleUrl = $dom->createElement('styleUrl', '#exampleStyle');
        $placeNode->appendChild($styleUrl);
        // Creates a Point element.
        $pointNode = $dom->createElement('Point');
        $placeNode->appendChild($pointNode);
        // Creates a coordinates element and gives it the value of the lng and lat columns from the results.
        $coorStr = $dataDB['lng'] . ',' . $dataDB['lat'];
        $coorNode = $dom->createElement('coordinates', $coorStr);
        $pointNode->appendChild($coorNode);
    }


    /**
     * Get data
     * @param array $dataOutside
     * @return false|\SimpleXMLElement|string[]
     */
    public function getDataFromUrl(array $dataOutside)
    {
        $rowsFromFile = '';

        try {
            $this->validator->checkFileExistFromUrl($dataOutside['url']);

            if($dataOutside['type'] === 0){
                $data = file_get_contents($dataOutside['url']);
                $rowsFromFile = explode("\n", $data);
            }else{
                $rowsFromFile =  simplexml_load_file($dataOutside['url']);
            }
        }catch (NotExistFileFromUrlException $e){
            Route::errorPage404();
        }

        return $rowsFromFile;
    }

    /**
     * Create array from csv data
     * @param array $dataFromUrl
     * @return array
     */
    public function createArrayFromCsv(array $dataFromUrl): array
    {
        $array = $inside = [];

        foreach ($dataFromUrl as $row) {
            if (!empty($row)) {
                $arrItemCsv = str_getcsv($row, ';');
                $inside['id'] = trim($arrItemCsv[0]);
                $inside['name'] = $this->trimSpecialCharacters(trim($arrItemCsv[1]));
                $inside['lat'] = trim($arrItemCsv[2]);
                $inside['lng'] = trim($arrItemCsv[3]);
                $array[$arrItemCsv[0]] = $inside;
            }
        }

        return $array;
    }

    /**
     * Create array from xml data
     * @param object $dataFromUrl
     * @return array
     */
    public function createArrayFromXml(object $dataFromUrl): array
    {
        $array = [];

        foreach ($dataFromUrl->station as $item) {
            if (!empty($item)) {
                $key = (string)$item->id;
                $array[$key]['id'] = $key;
                $array[$key]['name'] = $this->trimSpecialCharacters((string)$item->name);
                $array[$key]['lng'] = (string)$item->lng;
                $array[$key]['lat'] = (string)$item->lat;
            }
        }

        return $array;
    }

    /**
     * Delete special characters
     * @param string $str
     * @return string
     */
    public function trimSpecialCharacters(string $str): string
    {
        $replace = preg_replace('/&(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '', $str);

        return str_replace('’', '', $replace);
    }

    /**
     * Check data validity
     * @return array
     */
    private function validate(): array
    {
        $type = $_POST['type'] ?? 0;
        $exampleUrl = ($type == 0) ? 'http://' . $_SERVER['SERVER_NAME'] . '/main/examplecsv' : 'http://' . $_SERVER['SERVER_NAME'] . '/main/examplexml';
        $urlData = (isset($_POST['url-data']) && !empty($_POST['url-data'])) ? $_POST['url-data'] : $exampleUrl;

        try {
            $urlData = $this->validator->checkStr($urlData);
            $type = $this->validator->checkInt((int)$type);
        } catch (NotValidInputException $e) {
            echo $e->getMessage();
        }

        return ['url' => $urlData, 'type' => $type];
    }
}