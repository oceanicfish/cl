<?php
$path = "/var/www/html/dian";
$a='';
chdir($path);
echo exec("sudo git fetch --all");
echo exec("sudo git reset --hard origin/master");
echo "<pre> Succesfully fetch all the files.</pre>";
?>