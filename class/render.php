<?php
class Render
{   
    //Parameter recipe object 
    public static function displayRecipe($recipe)
    { 
       $output = "";
       $output .= $recipe->getTitle() . " by " . $recipe->getSource();
       $output .= "<br /> \n";
       $output .=  implode(",", $recipe->getTag());
       $output .= "<br /><br /> \n";
       foreach ($recipe->getIngredients() as $ing) {
           $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
           $output .= "<br /> \n";
       }
       $output .= "<br /> \n";
       $output .= implode("<br /> \n", $recipe->getInstructions());
       $output .= "<br /> \n";
       $output .= $recipe->getYeild();
       return $output;
    }

}


?>