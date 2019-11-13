<?php
include("class/recipe.php");
include("class/render.php");

//Pass title directy to the recipe call with constuctor
$recipe1 = new Recipe("my first recipe ");
$recipe1->setSource("Alena Holligan ");

$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

//Instantiate second object
$recipe2 = new Recipe("my second recipe");
$recipe2->setSource("Bettery Crocker");

$recipe1->addInstructions(" this is my frist instruction");
$recipe1->addInstructions(" this is my second recipe");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYeild("6 servings");

echo $recipe1;
//Call static method
echo Render::displayRecipe($recipe1);

?>