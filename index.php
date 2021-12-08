<?php
$db_user='admin';
$db_pass='adminadmin';
$link = mysqli_connect('localhost:3306',"$db_user", "$db_pass");
if (!$link) {
        die('Could not connect to MYSQL ');
        echo "\n";
}
echo 'Connected Successfully with MYSQL';
mysqli_close($link);
?>
