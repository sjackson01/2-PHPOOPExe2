<?php
class Render
{   
    //Parameter recipe object 
    public static function displayRecipe($recipe)
    {  //Will only being using recipe so no $this
       //Static method has to use get because it is
       // not a member of class it is accessing
       return $recipe->getTitle() . " by " . $recipe->getSource();
    }

}


?>