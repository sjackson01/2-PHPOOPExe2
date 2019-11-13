<?php

class Recipe
{
    //Define Properties
    private $title;
    private $ingredients =array();
    private $instructions = array();
    private $yeild;
    private $tag = array();
    private $source = "Alina Holligan";

    //Define measurments property
    private $measurements = array( 
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "fl oz",
        "pint",
        "quart",
        "gallon",
    );

    //Set title format
    public function setTitle($title)
    {
    //Object property / argument 
       $this->title = ucwords($title); 
    }
    //Get title 
    public function getTitle()
    {
        return $this->title;      
    }

    //Set addIngredient method to add ingredients to array  
    public function addIngredient($item, $amount = null, $measure = null)
    {   
        //if $amount != null !=float !=int exit and display type and user input
        if($amount != null && !is_float($amount) && !is_int($amount)){
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        //if $measure != null != values in array $measure exit display values
        if($measure != null && !in_array(strtolower($measure), $this->measurements)){
            exit("Please enter a valid measurement: " . implode(",", $this->measurements));
        }
        //Add $item, $amount, $measure to array
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure),
        );
    }
    
    //Get ingredients
    public function getIngredients()
    {
        return $this->ingredients;
    }

    //Set string into instructions array 
    public function addInstructions($string)
    {
        $this->instructions[] = $string;
    }
    
    //Get instructions 
    public function getInstructions()
    {
        return $this->instructions;
    }

    //Set tags into $tags array
    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    //Get tags
    public function getTag()
    {
        return $this->tags;
    }

    //Set yeild
    public function setYeild($yeild)
    {
        $this->yeild = $yeild;
    }

    //Get yeild 
    public function getYeild()
    {
        return $this->yeild;
    }

    //Set source 
    public function setSource($source)
    {
        $this->source = ucwords($source);
    }
    
    //Get source
    public function getSource()
    {
        return $this->source;
    }

    

}

?>