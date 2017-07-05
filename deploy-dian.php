<?php
$path = "/var/www/html/dian";
$a='';
chdir($path);
exec("sudo git fetch --all");
$return = exec("sudo git reset --hard origin/master");
echo $return;
?>