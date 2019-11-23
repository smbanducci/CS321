<!-- CS321: Web-Centric Programming -->
<!-- Shawna Banducci -->
<!-- Used code from CS333: Database Mgmt Syst -->

<html>
<body>
<?php # Script 9.2 - mysqli_connect.php From Professor Ni, Simmons College LIS458

// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database to use, and sets the encoding.
// This file will be required in many other php files that need db connection.

// Set the database access information as constants:

DEFINE ('DB_USER', 'banducci');  //  you should put your username here
DEFINE ('DB_PASSWORD', '1785771'); //  you should put your password (studentID) here
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'db_banducci'); //  you should put the database name here.

// Make the connection.@ will make sure the error won't be returned if there is one.
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die ('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');


?>
</body>
</html>
