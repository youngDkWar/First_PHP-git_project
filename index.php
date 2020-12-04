<?php
require 'vendor/autoload.php';

$t1 = new \App\Point(rand(0, 10), rand(0, 10));
$v1 = new \App\Vector(rand(1, 9), rand(1, 9));
$v2 = new \App\Vector(0, 0);
$v3 = new \App\Vector(-1*$v1->y, $v1->x);
$vectors = [$v1, $v2, $v3];

foreach ($vectors as $v)
    echo $v->get_len() . "\n";

if ($v1->isPerpendicular($v3))
    echo "true\n";

echo "(" . $t1->x . "; " . $t1->y . ") ";
$t1->change($v1->x, $v1->y);
echo "(" . $t1->x . "; " . $t1->y . ")";
