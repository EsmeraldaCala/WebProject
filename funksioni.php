<?php
function addRecipe($pdo, $e, $ing, $prep, $cook, $note)
{
  $statement=$pdo->prepare("INSERT INTO  receta
   VALUES(:emer, :ingredients, :PrepingTime, :CookingTime, :Notes)");

  if($statement->bindParam(':emer', $e)&&
      $statement->bindParam(':ingredients', $ing )&&
      $statement->bindParam(':PrepingTime', $prep )&&
      $statement->bindParam(':CookingTime', $cook)&&
      $statement->bindParam(':Notes', $note ) )
{
      if($statement->execute()){
           echo "<br>Insert u krye me sukses <br>";
      }
  else{
        echo "<br>Gabim ne ekzekutim";
  }
        
}
}
?>