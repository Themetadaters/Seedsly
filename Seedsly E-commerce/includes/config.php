<?php
define('DB_SERVER','localhost');
define('DB_USER','bloodona_mood704');
define('DB_PASS' ,'chaitanya1234');
define('DB_NAME', 'bloodona_mood704');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>