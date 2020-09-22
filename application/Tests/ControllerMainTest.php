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

    public function testEmpty()
    {
        $stack = $this->main->createArrayFromCsv('/main/ExampleCsv');
        $this->assertEmpty($stack);

        return $stack;
    }
}
