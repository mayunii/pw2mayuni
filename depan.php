<?php

require 'app/View.php';
require 'src/View.php';

use app\View;

$v= new View();
$v->render();

$x=new \src\View();
$x->render();


?>