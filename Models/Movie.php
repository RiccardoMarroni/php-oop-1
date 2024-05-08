<?php

include __DIR__ ."/Variables.php";
include __DIR__ ."/Category.php";

class Movie extends Variables
{
    public $language;
     
    public function __construct($name, $language, $value, $cover)
    {
        $this->language = $language;
        parent::__construct($name, $value, $cover);
    }

    public static function fetchAll(){
        
        $data = file_get_contents(__DIR__."categories_db.json");
        $dataToArray = json_decode($data, true);
        $categories = Category::fetchCategories();
        $movies = [];

        foreach($dataToArray as $item){
            foreach($categories as $category){
                $category = null;
                if($categories->name == $item['category']){
                    $category = $categories;
                }
            }
            $movies[] = new Movie ($item['name'], $item['language'], $item['value'], $item['cover'], $categories);
    }

    return $movies;
    }
}