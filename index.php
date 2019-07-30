<?php
/**
 * Вы попали в компанию SpaceY
 *
 * Нужно доработать функционал системы по рассчету силы притяжения разных планет
 *
 */

$gravity=array('earth'=>1,'mars'=>0.3, 'jupiter'=> 2.5);

function get_earth_gravity(){
    global $gravity;
    return 9.8 * $gravity['earth'];
}

function get_mars_gravity()
{
    global $gravity;
    return 9.8 * $gravity['mars'];}

echo sprintf('Earth gravity is: %s m/c^2' . PHP_EOL, get_earth_gravity());
echo sprintf('Mars gravity is: %s m/c^2' . PHP_EOL, get_mars_gravity());

?>
