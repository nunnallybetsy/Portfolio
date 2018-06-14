
<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "betsyste_root";
 $dbpass = "zx0mrtA6682V0n4f";
 $dbname = "betsyste_contact";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>