<?php
$db_user='root';
$db_pass='root';
$link = mysqli_connect('localhost:3306',"$db_user", "$db_pass");
if (!$link) {
        die('Could not connect to MYSQL ');
        echo "\n";
}
echo 'Connected Successfully with MYSQL';
mysqli_close($link);
?>
