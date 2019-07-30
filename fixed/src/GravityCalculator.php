<?php
/**
 * @author Pavel Kolomeitsev <p.kolomeitsev@gmail.com>
 */

namespace App;


class GravityCalculator
{

    const DEFAULT_GRAVITY = 9.8;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function calc($planet)
    {
        return self::DEFAULT_GRAVITY * $this->data[$planet];
    }
}
