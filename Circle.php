<?php


class Circle implements Resizeable
{
    public $radius;

    public function resize($percentRadius)
    {
        $this->radius = self::firstRadius + $percentRadius * self::firstRadius;
        return $this->radius;
    }

    public function getArea()
    {
        $area = pi() * pow($this->radius * $this->radius, 2);
        return $area;
    }
}

