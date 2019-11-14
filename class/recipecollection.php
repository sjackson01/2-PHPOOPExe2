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

    public function  getRecipe()
    {
        return $this->recipe;
    }

}


?>