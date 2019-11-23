<!-- CS321: Web-Centric Programming -->
<!-- Shawna Banducci -->
<!-- Used code from CS333: Database Mgmt Syst -->
<!-- Used code from WC3Schools -->

<!doctype html>
<html lang="en">

<head>
  <title>Contact Me</title>
  <link href="https://fonts.googleapis.com/css?family=Italiana|Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="option1.css">
  <meta charset="utf-8">
</head>

<body>

  <?php include 'option1_top.php'?>
  <?php
  #create variables for user input to validate php code, then come back and make questions
  $first=$_POST["first"];
  $last=$_POST["last"];
  $email=$_POST["email"];
  $usercomment=$_POST["info"];
  $query= 'insert into Contact (first, last, email, _comment)
    values("'.$first.'" ," '.$last.'" ," '.$email.'" ," '.$usercomment.'");';

      require "option1_mysqli_connect.php";

      $dbc->query($query);

      echo '<p>You entered your information as: </p>';
      echo '<p>Name - '.$first.' '.' '.$last.'</p>';
      echo '<p>Email - '.$email.'</p>';
      echo '<p>Comment - '.$usercomment.'</p>';

    ?>
    <?php include 'option1_bottom.php'?>


</script>
</body>
</html>
