<?php
class Render
{   
    //Parameter recipe object 
    public static function displayRecipe($recipe)
    {  //Will only being using recipe so no $this
       return $recipe->title . " by " . $recipe->source;
    }

}


?>