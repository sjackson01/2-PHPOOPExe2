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
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );

    //Magic method __constuct is called at the time and object is constucted
    public function __construct($title = null)
    {   
        $this->setTitle($title);
    }

    //Use__toString magic method to display info 
    public function __toString()
    {
       $output = "You are calling a " .  __CLASS__ . " object with the title \"";
       $output .= $this->getTitle() ."\"";
       $output .= "<br /> \n It is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
       $output .= "<br /> \n This display is form line" . __LINE__ . " in method " . __METHOD__;
       $output .= "<br /> \n The following methods are avaiable for objects of this class: <br /> \n";
       $output .= implode("<br /> \n", get_class_methods(__CLASS__));
       return $output; 
    }

    //Set title format
    public function setTitle($title)
    {   
        //Uppercase value wont create false null
         if(empty($title)){
            $this->$title = null;
            }else{
            $this->title = ucwords($title); 
        }
    }
    //Get title 
    public function getTitle()
    {
        return $this->title;      
    }

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        }
        if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }
       
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => strtolower($measure)
        );
    }
    
    //Get ingredients
    public function getIngredients()
    {
        return $this->ingredients;
    }

    //Set string into instructions array 
    public function addInstruction($string)
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
    public function setYield($yeild)
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