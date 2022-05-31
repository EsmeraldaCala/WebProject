<?php

require_once("login.php");
require_once("funksioni.php");


try{
    $pdo = new PDO($attribute, $user, $password);
    echo "Cdo gje ne rregull";
} catch(PDOException $e){
    echo "Gabim ne lidhje". $e->getMessage();
}


if(isset($_POST["name"]) && isset($_POST["Ingredients"]) && isset($_POST["PrepingTime"])
 && isset($_POST["CookingTime"]) 
&& isset($_POST["Notes"]))
{
    $emer=$_POST["name"];
    $ingredients=$_POST["Ingredients"];
    $PrepingTime=$_POST["PrepingTime"];
    $CookingTime=$_POST["CookingTime"];
    $Notes=$_POST["Notes"];
}

echo $emer;
addRecipe($pdo, $emer, $ingredients, $PrepingTime, $CookingTime,$Notes );



?>

