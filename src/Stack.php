<?php

namespace Src;

use Src\Interfaces\StackIF;

class Stack implements StackIF
{
    protected $size;
    protected $stack;

    public function __construct()
    {
        $this->size = 0;
        $this->stack = [];
    }

    public function getTop()
    {
        return $this->stack[0][0];
    }


    public function push($element)
    {
        array_push($this->stack, array($element));
        $this->size++;
    }


    public function pop()
    {
        unset($this->stack[0]);
        $this->size--;
    }

    public function getStack()
    {   
       for($i=0; $i < $this->size; $i++) {

            echo $this->stack[$i][0]. PHP_EOL;
    
        }
    }

    public function isEmpty() : bool
    {
        if ($this->size === 0) {
            return true;
        } 
        return false;
    }
}