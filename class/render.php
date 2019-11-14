<?php
class Render
{   
    //Use tostring magic method to display info 
    public function __toString()
    {
       $output .= "<br /> \n The following methods are avaiable for " . __CLASS__ . " objects: <br /> \n";
       $output .= implode("<br /> \n", get_class_methods(__CLASS__));
       return $output; 
    }

    //Add static method to list ingredients arg recipe->getIngredients();
    public static function listIngredients($ingredients){
        $output = "";
        foreach ($ingredients as $ing) {
            $output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "<br /> \n";
        }
        return $output;
    }
    //Add static method to display recipe details arg recipe object 
    public static function displayRecipe($recipe)
    { 
       $output = "";
       $output .= $recipe->getTitle() . " by " . $recipe->getSource();
       $output .= "<br /> \n";
       $output .=  implode(",", $recipe->getTag());
       $output .= "<br /><br /> \n";
       //Use self keyword to call static method pass recipe ingriedents to method
       $output .= self::listIngredients($recipe->getIngredients());
       $output .= "<br /> \n";
       $output .= implode("<br /> \n", $recipe->getInstructions());
       $output .= "<br /> \n";
       $output .= $recipe->getYeild();
       return $output;
    }

}


?>