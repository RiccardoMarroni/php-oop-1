<?php
class Category
{
    public string $name;

    function __construct($name)
    {

    }

    public static function fetchCategories(){
        $data = file_get_contents(__DIR__."categories_db.json");
        $dataToArray = json_decode($data, true);
        $categories = [];

        foreach($dataToArray as $key => $value){
            $categories[] = new Category($value);
    }

    return $categories;
}
}