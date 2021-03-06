<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical;
use PHPUnit\Framework\TestCase;

class CountBlankTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerCOUNTBLANK
     *
     * @param mixed $expectedResult
     */
    public function testCOUNTBLANK($expectedResult, ...$args)
    {
        $result = Statistical::COUNTBLANK(...$args);
        $this->assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerCOUNTBLANK()
    {
        return require 'data/Calculation/Statistical/COUNTBLANK.php';
    }
}
