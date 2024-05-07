<?php

include __DIR__ ."/Variables.php";

class Movie extends Variables
{
    public $language;
     
    public function __construct($name, $language, $value, $cover)
    {
        $this->language = $language;
        parent::__construct($name, $value, $cover);
    }
}