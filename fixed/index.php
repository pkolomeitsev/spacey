<?php
/**
 * Вы попали в компанию SpaceY
 *
 * Нужно доработать функционал системы по рассчету силы притяжения для разных планет
 *
 */

require_once 'vendor/autoload.php';

use App\GravityCalculator;

$gravities = array('earth' => 1, 'mars' => 0.379, 'jupiter' => 2.5);

$gravityCalc = new GravityCalculator($gravities);

foreach ($gravities as $planet => $gravity) {
    $name = strtoupper($planet);
    echo sprintf('%s gravity is: %s m/c^2' . PHP_EOL, $name, $gravityCalc->calc($planet));
}

