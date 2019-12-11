<html>
<head>
  <title>Recipe Collection</title>
  <link href="https://fonts.googleapis.com/css?family=Italiana|Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="whiskWond.css">
  <meta charset="utf-8">
</head>

    <body>
      <div class="dropdown" style="float:left;">
        <button class="dropbtn">MENU</button>
        <div class="dropdown-content" style="left:0;">
          <a href="whiskWond.html">Home</a>
          <a href="CurrRec.html">Current Recipe</a>
          <a href="Site-Videos.html">Featured Site and Videos</a>
          <a href="Recp_Coll.html">Recipe Collection</a>
          <a href="TipsTricks.html">Tips & Tricks</a>
          <a href="contactFormWW.php">Contact Me</a>
        </div>
      </div>
      
      <div class="header">
          <div class="JoiningSiteTitle">
            <strong>Recipe Collection</strong>
          </div>
      </div>

      <div class="recpSite">
        <?php
        /*echo "Hello! You've come across a page in progress.";
        echo "<br>";
        echo "As time goes on this page will include more as more tips and tricks are added to the site.";
        echo "<br><br>";
        echo "Thanks for visiting!";*/
            //store selected value in variable


        $recipeChoice = $_POST['recipeChoice'];


          //echo $recipeChoice;
          $nameQuery ='select * from Recipe where recipeID= '.$recipeChoice.';';
          $ingrQuery = 'select ingredientName, amount, unit from RecipeIngredients ri
		                    inner join Ingredients i on i.ingredientID = ri.ingredientID where recipeID = '.$recipeChoice.';';
          $dirQuery = 'select stepNum, direction from RecipeDirections where stepNum > 0 and recipeID = '.$recipeChoice.' order by RecipeDirections.stepNum;';


          if ($recipeChoice == "0"){
            $invalidErr = "That's not a choice! You have to make a selection!";
            echo $invalidErr;
            #https://www.php.net/manual/en/function.exit.php
            exit;
          }
          elseif ($recipeChoice == "1"){
          }
          elseif ($recipeChoice == "2"){
          } else {
            $choiceErr = "You've reached a recipe in progress, check back in soon!";
            echo $choiceErr;
            exit;
          }

          require "mariadb_connect.php";

            $result=$conn->query($nameQuery);
            $result2=$conn->query($ingrQuery);
            $result3=$conn->query($dirQuery);
            //
            while ($row=$result->fetch_assoc()){
              echo $row["recipeName"] . '<p></p>';
            }
            echo "Ingredients: <p></p>";
            while ($row=$result2->fetch_assoc()){
              echo $row["ingredientName"];
              echo ' '. $row["amount"];
              echo ' '. $row["unit"] .'<br>';
            }

            echo "<p>Directions: <p></p>";

            while ($row=$result3->fetch_assoc()){
               echo ' '. $row["stepNum"];
               echo ' '. $row["direction"];
            }
        ?>
      </div>
    </body>
</html>
