<!-- CS321: Web-Centric Programming -->
<!-- Shawna Banducci -->

<!doctype html>
<html lang="en">

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
            <strong>Tips & Tricks</strong>
          </div>
      </div>

      <div class="recpSite">
        <?php

          $tipTrickChoice = $_POST['tipTrickChoice'];


          //echo $tipTrickChoice;
          $nameQuery ='select * from TipsTricks where tipTrickID= '.$tipTrickChoice.';';
          $descQuery = 'select tipTrickDesc from TipsTricks where tipTrickID = '.$tipTrickChoice.';';


          if ($tipTrickChoice == "0"){
            $invalidErr = "That's not a choice! You have to make a selection!";
            echo $invalidErr;
            #https://www.php.net/manual/en/function.exit.php
            exit;
          } else {

          require "mariadb_connect.php";

            $result=$conn->query($nameQuery);
            $result2=$conn->query($descQuery);
            //
            while ($row=$result->fetch_assoc()){
              echo $row["tipTrickName"] . '<p></p>';
            }
            while ($row=$result2->fetch_assoc()){
              echo $row["tipTrickDesc"] .'<br>';
            }
          }
        ?>
      </div>
    </body>
</html>
