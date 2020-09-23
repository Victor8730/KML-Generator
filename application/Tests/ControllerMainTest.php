<?php

declare(strict_types=1);

namespace Tests;

use Controllers\ControllerMain;
use PHPUnit\Framework\TestCase;

class ControllerMainTest extends TestCase
{
    public object $main;

    protected function setUp(): void
    {
        $this->main = new ControllerMain();
    }

    public function testCreateArray()
    {
        $stack = $this->main->createArrayFromCsv($this->main->exampleCsv(), 1);
        $this->assertNotEmpty($stack);

        $stack = $this->main->createArrayFromXml($this->main->exampleXml(), 1);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    public function testTrim()
    {
        $actual = ['&acute;TestName','TestNam&uml;e','T&circ;estName','Te&grave;stName','TestN&ring;ame','TestNam&lig;e','TestN&quot;ame','TestName&rsquo;','Tes’tName'];
        foreach ($actual as $item) {
            $this->assertSame('TestName', $this->main->trimSpecialCharacters($item));
        }
    }
}
