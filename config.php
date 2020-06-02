<?php

$hostname = "localhost"; /* Host name */
$username = "root"; /* User */
$password = ""; /* Password */
$dbname = "tags"; /* Database name */

$conn = mysqli_connect($hostname, $username, $password,$dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}