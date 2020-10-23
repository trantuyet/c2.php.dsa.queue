<?php


class PalindromeQueue
{
    protected $arrQueue ;
    protected $limit;
    protected $str;

    public function __construct( $limit)
    {
        $this->arrQueue =array();
        $this->limit =$limit;
    }

    public function addItem($item)
    {
        $this->arrQueue[] = $item;
    }

    function getItem()
    {
        return array_shift($this->arrQueue);
    }

    function getAll()
    {   $this->str = implode("",$this->arrQueue);
        return $this->str;
    }

    function palindrome(){
        if (strrev($this->str) == $this->str){
            echo "Palindrome";
        }
        else{
            echo "Not a Palindrome";
        }
    }
}

