<?php
$db_user='admin';
$db_pass='adminadmin';
$host=trim(file_get_contents('dns.txt'));
$link = mysqli_connect("$host","$db_user", "$db_pass");
if (!$link) {
        die('Could not connect to MYSQL ');
        echo "\n";
}
echo 'Connected Successfully with MYSQL';
mysqli_close($link);
?>
