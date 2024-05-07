<?php

class Variables{
    public string $name;

    public float $value;

    public string $cover;


    public function __construct($name, $value, $cover)
    {
        $this->name = $name;
        $this->value = $value;
        $this->cover = $cover;
    }

    public function printOut(){
        echo "il film è".$this->name.
        "ha un voto di".$this->value."";
    }
}