<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>title</title>
</head>
<body>
<form method="post">
    <label for="a"></label>
    <input type="text" name="input" id="a">
    <input type="submit" value="check">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['input'] != ''){
    $input = $_POST['input'];

    $stack = new SplStack();
    $queue = new SplQueue();

    $str_array = str_split($input);

    $result = 'đối xứng';

    foreach ($str_array as $item){
        $stack->push($item);
        $queue->enqueue($item);
    }

    for ($i = 0;$i < count($str_array);$i++){
        if ($stack->pop() !== $queue->dequeue()){
            $result = 'không đối sứng';
            break;
        }
    }
    echo $result;
}
