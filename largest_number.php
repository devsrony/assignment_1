<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {

  echo "{$num1} is grater number";
} elseif ($num2 > $num3 && $num2 > $num1) {
  echo "{$num2} is grater number";
} else {
  echo "{$num3} is grater number";
}
