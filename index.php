<?php
include "class/Point.php";
include "class/MoveablePoint.php";

$point = new Point(5,6);
$move = new MoveablePoint(7,9,5,7);
$move->toString();

