<?php
  require_once("login.php");

  try{
    $pdo=new PDO($attribute, $user, $password);
    // echo "Lidhja me sukses";
  }
  catch(PDOException $e)
  {
    echo "Gabim i ndohur ne lidhje". $e->getMessage();
  }

 ?>

<html>
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="mainStyling.css">
  </head>
  <body>
    <div class="general">
      <header>
        <h1>Bibliography</h1>
        <nav>
          <ul>
            <li><a href="index.php" class="actual">Home</a></li>
            <li><a href="">Search Items</a></li>
            <li><a href="">Log In</a></li>
            <li><a href="">Add new Items</a></li>
          </ul>
        </nav>
      </header>
      <?php
        $query="SELECT * FROM bibliographies";

        if(!$result=$pdo->query($query))
            echo "Gabim ne ekzekutim";
        else {
          while($row=$result->fetch(PDO::FETCH_BOTH))
          {


       ?>
      <section>
        <article>
          <figure>
            <img src='images/<?php echo $row["imageURL"]; ?>'
            alt='<?php echo $row["caption"];?>'>
          <figcaption><?php echo $row["caption"];?></figcaption>
          </figure>
          <h3>Title :<?php echo $row["title"]; ?></h3>
          <h3>Author <?php echo $row["author"]; ?></h3>
          <h3>Year of Publication <?php echo $row["yearPublication"]; ?></h3>
          <h3>Publisher <?php echo $row["publisher"]; ?></h3>
          <h3> Edition <?php echo $row["edition"]; ?></h3>
          <p><?php echo $row["briefContent"]; ?></p>
        </article>
      </section>

      <?php
    }//end of while
  }//end of else

       ?>
      <footer>
          &copy;2022 Bibliography
      </footer>
    </div>

  </body>
</html>