<?php
include("class/recipes.php");

//Instantiate object
$recipe1 = new Recipe();
$recipe1->setSource("Grandma Holligan ");
//Call setTitle and pass in lowercase title 
$recipe1->setTitle("my first recipe ");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");


//Instantiate second object
$recipe2 = new Recipe();
$recipe2->setSource("Bettery Crocker");
$recipe2->setTitle("my second recipe");


echo $recipe1->getTitle();
//Display values stored in $recipe1 object
foreach ($recipe1->getIngredients() as $ing){
    echo "\n" 
    . $ing["amount"] . " " 
    . $ing["measure"] . " " 
    . $ing["item"];
}

$recipe1->addInstructions(" this is my frist instruction");
$recipe1->addInstructions(" this is my second recipe");

echo implode("<br /> \n", $recipe1->getInstructions());

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

echo implode ("<br /> \n", $recipe1->getTag());

$recipe1->setYeild("6 servings");
echo $recipe1->getYeild();
echo $recipe1->getSource();

?>