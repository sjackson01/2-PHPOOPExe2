<?php
include "class/recipes.php";
include "class/render.php";
include "inc/list.php";

//Call static melemon_chicken = new Recipe("Italian Lemon Chicken");
echo Render::displayRecipe($lemon_chicken);
?>