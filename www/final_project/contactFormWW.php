<!-- CS321: Web-Centric Programming -->
<!-- Shawna Banducci -->
<!-- Used code from CS333: Database Mgmt Syst -->
<!-- Used code from WC3Schools and other resources noted below -->

<!doctype html>
<html lang="en">

  <head>
    <title>Contact Submission</title>
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
        </div>
      </div>
      
      <div class="header">
          <div class="JoiningSiteTitle">
            <strong>Contact Me</strong>
          </div>
      </div>

      <div class="recpSite">

        <?php
        #create variables for user input to validate php code, then come back and make questions

        #https://www.w3schools.com/php/php_form_required.asp
        #https://www.w3schools.com/php/php_form_url_email.asp
        #https://www.regular-expressions.info/email.html
        #https://stackoverflow.com/questions/3090862/how-to-validate-phone-number-using-php
        #https://stackoverflow.com/questions/43819545/php-check-if-a-string-has-only-words-of-less-than-4-characters


          $firstNameErr = $lastNameErr = $phoneErr = $emailErr = "";
          $first = $last = $phone = $email = $userComment = "";

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (strlen($_POST["firstName"]) <3) {
              $firstNameErr = "First name is required";
            } else {
                $first = test_input($_POST["firstName"]);
                if (!preg_match("/^[a-zA-Z]*$/", $first)){
                $firstNameErr = "Only letters and white space";
                }
              }
            if (strlen($_POST["lastName"]) <3) {
              $lastNameErr = "Last name is required";
            } else {
                $last = test_input($_POST["lastName"]);
                if (!preg_match("/^[a-zA-Z]*$/", $last)){
                $lastNameErr = "Only letters and white space";
                }
              }
            if (empty($_POST["email"])) {
              $emailErr = "Email is required";
            } else {
              #https://www.w3schools.com/php/func_string_strtolower.asp
                $email = strtolower(test_input($_POST["email"]));
                if(!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $email)){
                  $emailErr = "Enter a valid email";
                }
              }
            if (empty($_POST["phone"])) {
              $phoneErr = "Phone is required";
            } else {
                $phone = test_input($_POST["phone"]);
                if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)){
                  $phoneErr = "Enter a valid phone number";
                }
              }
            if (empty($_POST["userComment"])) {
              $userComment = "";
            } else {
              $userComment = test_input($_POST["userComment"]);
            }
          }
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
            }

                $commQuery = "INSERT ContactUs VALUES(null, '".$first."','".$last."','".$email."', '".$phone."', '".$userComment."');";

                require "mariadb_connect.php";

                $commResult=$conn->query($commQuery);

          ?>


          <p><span class= "error">* required field</span></p>
          <form method= "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            First Name:
            <br>
            <input type="text" name="firstName">
            <span class="error">* <?php echo $firstNameErr;?></span>
            <br><br>
            Last Name:
            <br>
            <input type="text" name="lastName">
            <span class="error">*
            <?php echo $lastNameErr;?></span>
            <br><br>
            E-mail:
            <br>
            <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            Phone (ex: 000-000-0000):
            <br>
            <input type="text" name="phone">
            <span class="error">* <?php echo $phoneErr;?></span>
            <br><br>
            Comment:
            <br>
            <textarea name="userComment" rows="5" cols="40"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Submit">
          </form>

          <?php
          echo '<p></p>';
          echo 'Your Input:';
          echo '<p>'.$first.' '.' '.$last.'</p>';
          echo $email;
          echo '<br><br>';
          echo $phone;
          echo '<br><br>';
          echo $userComment;
          ?>
      </div>
    </body>
</html>
