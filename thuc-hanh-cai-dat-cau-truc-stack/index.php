<?php
include_once 'Stack.php';

$lophoc = new Stack();
/*Thêm 5 phần tử vào stack*/
$lophoc->push('hocsinh1');
$lophoc->push('hocsinh4');
$lophoc->push('hocsinh2');
$lophoc->push('hocsinh1');
$lophoc->push('giaovien');
/*Xóa 3 phần tử trong stack*/
$lophoc->pop();
$lophoc->pop();
$lophoc->pop();
/*Thêm 2 phần tử vào stack*/
$lophoc->push('thaygiao');
$lophoc->push('cogiao');
/*Kiểm tra xem stack có rỗng hay không*/

$lophoc->isEmpty();


echo "<pre>";
var_dump($lophoc);