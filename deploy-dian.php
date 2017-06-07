<?php
$path = "/var/www/html/dian";
$a='';
chdir($path);
exec("sudo git fetch --all");
exec("sudo git reset --hard origin/master");
echo "<pre> Succesfully fetch all the files.</pre>";
?>