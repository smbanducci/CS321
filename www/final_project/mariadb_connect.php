<!-- CS321: Web-Centric Programming -->
<!-- Shawna Banducci -->
<!-- Used code from CS333: Database Mgmt Syst -->
<!-- Used code from Tutorialspoint.com -->
<!-- Assistance from W3Schools and StackOverflow -->

<html>
   <head>
      <title>Connect to MariaDB Server</title>
   </head>

   <body>
      <?php
         $DB_HOST = 'localhost';
         $DB_USER = 'banducci';
         $DB_PASSWORD = '1785771';
         $DB_NAME = 'db_banducci';
         $conn = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

         if(! $conn ) {
            die('Could not connect: ' . mysqli_connect_error($conn));
         }

      ?>
   </body>
</html>
