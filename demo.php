<?php
include "Resizeable.php";
include "Rectangle.php";
include "Circle.php";

$rec = new Rectangle(4,2);
$rec->resize(0.1);

$c = new Circle();
echo "radius: ".$c->resize(0.1) . '<br>';
echo "Area circle: ".$c->getArea();