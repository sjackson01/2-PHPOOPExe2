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
        //loop through each recipe in the array
        foreach($this->recipes as $recipe){
            //Call get title method and add to $titles array 
            $titles[] = $recipe->getTitle();
        }
        return $titles; 
    }

}


?>