<?php
    declare(strict_types=1);
    require 'Calculator.php';

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$operator=$_POST['operator'];

$cal =new Calucalator($operator,(int)$num1,(int)$num2);

echo $cal ->perfromOperation();

