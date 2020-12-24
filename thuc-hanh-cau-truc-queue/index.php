<?php
include_once 'Node.php';
include_once 'Queue.php';
$queue = new Queue();

/*Thêm 3 phần tử vào Queue*/
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);

/*lấy 2 phần tử từ Queue*/
$queue->dequeue();
$queue->dequeue();
/*Kiểm tra xem Queue có rỗng hay không*/
$queue->isEmpty();

/*Thêm 2 phần tử vào Queue*/
$queue->enqueue(9);
$queue->enqueue(7);

/*Lấy ra 3 phần tử từ Queue*/
$queue->dequeue();
$queue->dequeue();
/*Kiểm tra xem Queue có rỗng hay không*/
$queue->isEmpty();
