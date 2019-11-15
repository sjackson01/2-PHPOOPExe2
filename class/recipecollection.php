<?php 

class RecipeCollection
{
    private $title; 
    private $recipes = array();

    public function __construct($title = null)
    {   
        $this->setTitle($title);
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

    //Add recipe to recipes array 
    public function addRecipe($recipe)
    {
        $this->recipes[] = $recipe; 
    }

    public function getRecipe()
    {
        return $this->recipe;
    }


    //Seperates and returns title
    //Being passed as an argument so it doesnt need a parameter? 
    public function getRecipeTitles()
    {   
        //Initialize titles array 
        $titles = array();
        //Cookbook recipes array? 
        foreach($this->recipes as $recipe){
            //Call get title method and add to $titles array 
            $titles[] = $recipe->getTitle();
        }
        return $titles; 
    }
    //Updated code the code in the tutorial video is broken
    public function getCombinedIngredients()
    {
        $ingredients = array();
        foreach($this->recipes as $recipe){
            foreach($recipe->getIngredients() as $ing){
                $item = $ing["item"];
                if(strpos($item, ",")){
                    $item = strstr($item, ",", true);
                }
                if(in_array($item."s", $ingredients)){
                    $item.="s";
                } else if(in_array(substr($item, 0, -1), $ingredients)){
                    $item = substr($item, 0, -1);
                }
                $ingredients[$item] = array(
                    $ing["amount"],
                    $ing["measure"]
                );
            }
        }
        return $ingredients;
    }
    

    //Pass in the tag for our search
    public function filterByTag($tag)
    {
        //Initialize a new tagged recipes array 
        $taggedRecipes = array();
        //Loop through our recipes array and seperate out tags
        foreach ($this->recipes as $recipe){
            //If in an array the tag is lowercase  call get tags
            if(in_array(strtolower($tag), $recipe->getTag())){
                //If tag is found add it to tagged recipes array 
               $taggedRecipes[] = $recipe;  
            }
        }
        return $taggedRecipes; 

    }

}


?>