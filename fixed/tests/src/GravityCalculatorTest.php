<?php
/**
 * @author Pavel Kolomeitsev <p.kolomeitsev@gmail.com>
 */
namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\GravityCalculator;

class GravityCalculatorTest extends TestCase
{
    public function testCalc()
    {
        $gravities = ['earth' => 1];
        $calculator = new GravityCalculator($gravities);

        $this->assertEquals(GravityCalculator::DEFAULT_GRAVITY, $calculator->calc('earth'));
    }
}
