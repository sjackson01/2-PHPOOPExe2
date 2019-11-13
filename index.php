<?php
include("class/recipe.php");
include("class/render.php");

//Instantiate object
$recipe1 = new Recipe();
$recipe1->setSource("Alena Holligan ");

//Call setTitle and pass in lowercase title 
$recipe1->setTitle("my first recipe ");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

//Instantiate second object
$recipe2 = new Recipe();
$recipe2->setSource("Bettery Crocker");
$recipe2->setTitle("my second recipe");

$recipe1->addInstructions(" this is my frist instruction");
$recipe1->addInstructions(" this is my second recipe");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYeild("6 servings");

//Call static method
echo Render::displayRecipe($recipe1);

?>