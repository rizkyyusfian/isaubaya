<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = getenv("dbusername");
$dbpassword = getenv("dbpassword");
$dbname = getenv("dbname");

echo getenv("dbusername");
die();

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>
