<?php
class Stack{
    protected $stack;
    protected $limit;
    public function __construct($limit = 20)
    {
        $this->stack = array();
        $this->limit = $limit;
    }
/* Thêm phần tử vào trong stack*/
    public function push($item)
    {            array_unshift($this->stack,$item);


       /* if (count($this->stack) < $this->limit){
            array_unshift($this->stack,$item);
        }else{
            throw new RuntimeException('Stack is full!');
        }*/
    }
/*lấy phần tử ra khỏi stack*/
    public function pop()
    {
        if ($this->isEmpty()){
            throw new RunTimeException('Stack is empty!');
        }else{
            return array_shift($this->stack);
        }
    }
/*trả về phần tử sau cùng*/
    public function top() {
        return current($this->stack);
    }
/*kiểm tra xem stack có phần tử nào không*/
    public function isEmpty() {
       if (is_null($this->stack))  {

           echo "có phần tử";
       }
       else {
           echo "rỗng";
       }

      /*  return empty($this->stack);*/
    }
}
