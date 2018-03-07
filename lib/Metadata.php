<?php
namespace lib\Metadata;

class Metadata{
    
    private $mappedArr;
    
    public function __construct($mappedArray){
        $this->mappedArr = $mappedArray;
    }
    
    public function getConfiguration(){
        return $this->mappedArr;
    }
}