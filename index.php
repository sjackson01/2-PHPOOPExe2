<?php
include "class/recipes.php";
include "class/render.php";
include "inc/list.php";
include "class/recipecollection.php";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);


//Create new RecipeCollection
$breakfast = new RecipeCollection("Favorite Breakfast");
//Loop through breakfast recipes after we filter by tag
//Pass it breakfast and return each as recipe
foreach ($cookbook->filterByTag("breakfast") as $recipe);{
    //The addRecipe function will now add breakfast to recipe array
    $breakfast->addRecipe($recipe);
}

//Create new recipe collection 
$week1 = new RecipeCollection("Meal Plan: Week 1");
$week1->addRecipe($cookbook->filterByID(2));
$week1->addRecipe($cookbook->filterByID(3));
$week1->addRecipe($cookbook->filterByID(6));
$week1->addRecipe($cookbook->filterByID(16));

//List recipes in the $week1 collection 
echo Render::listRecipes($week1->getRecipeTitles());

//Create shopping list for our week1 collection 
echo Render::listShopping($week1->getCombinedIngredients());

//Call static melemon_chicken = new Recipe("Italian Lemon Chicken");
//echo Render::displayRecipe($lemon_chicken);
?>