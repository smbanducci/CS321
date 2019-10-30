<!-- Shawna Banducci -->
<!-- CS321: Web-Centric Programming -->
<!--Buttons-->
<html>
<body>
<form method="get">
    <h2>Need to reach out to us?</h2>
    <p>Enter your information below and a short comment on why you're
      contacting us and I'll get back to you! Cheers!</p>

    <method="get" action="greet_user.php">
  Name:
  <input type="text" name="name">
  <input type="submit" value="Submit">
  <br>
  <br>
  Email:
  <input type="text" name="email">
  <input type="submit" value="Submit">
  <br>
  <br>
  Phone:
  <input type="text" name="phone">
  <input type="submit" value="Submit">
  <br>
  <br>
  </form>
  <p>Your name is: <?=$_GET['name'];?></p>
  <p>Your email address is: <?=$_GET['email'];?></p>
  <p>Your phone number is: <?=$_GET['phone'];?></p>
  <a href="index.php">Reset</a>
</body>
</html>
