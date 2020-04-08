<?php
include "../classes/Calc.php";
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operator = $_GET["operator"];

$calculator = new Calc($num1, $num2, $operator);
echo "<p>Final Answer: " . $calculator->calculate() . " </p>";
?>