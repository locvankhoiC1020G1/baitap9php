<?php
include_once 'Node.php';
class Queue
{
    protected $front =null;
    protected $back = null;
    private $font;
/*Kiểm tra xem queue có rỗng hay không*/
    public function isEmpty()
    {
        return $this->font == null;
    }
    /*Thêm value vào đuôi của queue*/
    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }
   /* lấy ra phânf đầu của queue*/
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}