<?php

declare(strict_types=1);

namespace Controllers;

use Core\Controller;
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
            echo $this->view->render('main/' . $this->getNameView(), $this->dataProvider());
        } catch (LoaderError $e) {
        } catch (RuntimeError $e) {
        } catch (SyntaxError $e) {
        }
    }

    /**
     * Generate kml file
     */
    public function actionKml()
    {
        $strOutside = $this->validate();
// Creates the Document.
        $dom = new \DOMDocument('1.0', 'UTF-8');
// Creates the root KML element and appends it to the root document.
        $node = $dom->createElementNS('http://earth.google.com/kml/2.1', 'kml');
        $parNode = $dom->appendChild($node);
// Creates a KML Document element and append it to the KML element.
        $dnode = $dom->createElement('Document');
        $docNode = $parNode->appendChild($dnode);
// Creates Style elements trainStyle
        $restStyleNode = $dom->createElement('Style');
        $restStyleNode->setAttribute('id', 'trainStyle');
        $restIconstyleNode = $dom->createElement('IconStyle');
        $restIconstyleNode->setAttribute('id', 'trainIcon');
        $restIconNode = $dom->createElement('Icon');
        $restHref = $dom->createElement('href', 'https://maps.gstatic.com/mapfiles/ms2/micons/green-dot.png');
        $restIconNode->appendChild($restHref);
        $restIconstyleNode->appendChild($restIconNode);
        $restStyleNode->appendChild($restIconstyleNode);
        $docNode->appendChild($restStyleNode);
//Working with data
        if (!empty($strOutside['db'])) {
            $rowsFromDb = explode("\n", file_get_contents($strOutside['db']));
        } else {
            $rowsFromDb = ['id' => 1, 'title' => 'title', 'name' => 'name', 'value' => 'val', 'lng' => '', 'lat' => '', 'type' => 'train'];
        }
        $outside = $this->createArray($rowsFromDb);

        foreach ($outside as $dataDB) {
            if (!empty($dataDB)) {
                $this->createNode($dataDB, $dom, $docNode);
            }
        }

        $kmlOutput = $dom->saveXML();
        header('Content-type: application/vnd.google-earth.kml+xml');
        header('Content-disposition: attachment; filename=DN' . $strOutside['direction'] . '_' . date("Ymd_His") . '.kml');
        echo $kmlOutput;
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
        $styleUrl = $dom->createElement('styleUrl', '#' . $dataDB['type'] . 'Style');
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
     * Formation of a convenient array for working in a template
     * @param array $rowsFromDb
     * @return array
     */
    private function createArray(array $rowsFromDb): array
    {
        $outside = $inside = [];
        foreach ($rowsFromDb as $row) {
            if (!empty($row)) {
                $itemCsv = str_getcsv($row);
                $arrItemCsv = explode(';', $itemCsv[0]);
                $inside['id'] = $arrItemCsv[0];
                $inside['title'] = $arrItemCsv[1];
                $inside['name'] = $arrItemCsv[2];
                $inside['value'] = $arrItemCsv[3];
                $inside['lng'] = $arrItemCsv[4];
                $inside['lat'] = $arrItemCsv[5];
                $inside['type'] = 'train';
                $outside[$arrItemCsv[0]] = $inside;
            }
        }

        return $outside;
    }

    /**
     * Check data validity
     * @return array
     */
    private function validate(): array
    {
        $urlDb = $_POST['url-db'] ?? '';

        try {
            $urlDb = $this->validator->checkStr($urlDb);
        } catch (NotValidInputException $e) {
            echo $e->getMessage();
        }

        return ['db' => $urlDb];
    }

    /**
     * Data provider for page rendering, return array with data
     * @return array
     */
    private function dataProvider(): array
    {
        return [];
    }
}