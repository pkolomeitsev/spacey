<?php
/**
 * Вы попали в компанию SpaceY
 *
 * Нужно доработать функционал системы по рассчету силы притяжения для разных планет
 *
 */

$gravities=array('earth'=>1,'mars'=>0.379, 'jupiter'=> 2.5);

function get_earth_gravity(){
    global $gravities;
    return 9.8 * $gravities['earth'];
}

function get_mars_gravity()
{
    global $gravities;
    return 9.8 * $gravities['mars'];}

echo sprintf('Earth gravity is: %s m/c^2'.PHP_EOL, get_earth_gravity());
echo sprintf('Mars gravity is: %s m/c^2'.PHP_EOL,get_mars_gravity());

?>
