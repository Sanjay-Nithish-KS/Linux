<?php
$link = mysqli_connect('localhost','root', 'Current-Root-Password');
if (!$link) {
        die('Could not connect to MYSQL ');
        echo "\n";
}
echo 'Connected successfully';
mysqli_close($link);
?>

