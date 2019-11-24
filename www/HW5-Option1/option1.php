<!-- CS321: Web-Centric Programming -->
<!-- Shawna Banducci -->
<!-- Used code from CS333: Database Mgmt Syst -->
<!-- Used code from WC3Schools -->
<!--https://stackoverflow.com/questions/21722375/object-of-class-mysqli-result-could-not-be-converted-to-string-in -->

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
    require "option1_mariadb_connect.php";
    $chooseQuery ='select display_name from wp_users order by display_name ASC;';
    $userResult = $conn->query($chooseQuery);

  ?>
  <div class="find user name">
          <?php
                while ($row = $userResult->fetch_assoc()) {
                  if($row['display_name'] != 'admin'){
                    echo $row['display_name'] . '<br>';
                  }
                }
          ?>
  </div>

    <?php include 'option1_bottom.php'?>


</script>
</body>
</html>
