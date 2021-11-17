<?php
$db_user='root';
$db_pass='sample';
$link = mysqli_connect('mysql:3306',"$db_user", "$db_pass");
if (!$link) {
        die('Could not connect to MYSQL ');
        echo "\n";
}
echo 'Connected successfully';
mysqli_close($link);
?>
