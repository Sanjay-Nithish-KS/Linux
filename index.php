<?php
$db_user='user_name';
$db_pass='password';
$host=trim(file_get_contents('dns.txt'));
$link = mysqli_connect("$host","$db_user", "$db_pass");
if (!$link) {
        die('Could not connect to MYSQL ');
        echo "\n";
}
echo 'Connected Successfully with MYSQL';
mysqli_close($link);
?>
