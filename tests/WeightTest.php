<?php

namespace Sohel\UnitConversion\Tests;

use PHPUnit\Framework\TestCase;
use Sohel\UnitConversion\Weight;

class WeightTest extends TestCase
{
    /**
     * @test
     */

    public function it_can_convert_kilogram_to_lbs()
    {

        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.46, $lbs);

    }


}
