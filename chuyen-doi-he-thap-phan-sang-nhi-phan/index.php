<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đổi từ thập phân sang nhị phân</title>
</head>
<body>
<form action="index.php" method="get">
    <input type="number" name="name">
    <input type="submit">
</form>
</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] =='GET')
$input = $_GET['name'];
echo convertToBinary($input);
$stack = [];

function convertToBinary($number)
{
   $stack = new SplStack();

    $quotient = $number;
    while ($quotient != 0) {
        $remainder = $quotient % 2;
        $quotient = floor($quotient / 2);
        $stack->push($remainder);
    }
    $result = '';

    while (!$stack->isEmpty()){
        $result =$result . $stack->pop();
    }
    return $result;
}