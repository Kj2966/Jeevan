
<?php
define('DB_SERVER','dbm.mksoftservice.com');//jeevans credentials
define('DB_USER','jeevandbm');//jeevans credentials
define('DB_PASS' ,'6ygaja6y9');//jeevans credentials
define('DB_NAME', 'dbserver_jeevan');//jeevans credentials
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
