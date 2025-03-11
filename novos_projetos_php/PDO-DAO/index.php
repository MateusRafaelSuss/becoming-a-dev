<?php
require_once("config.php");
$root = new usuario();
$root -> loadByid(3);
echo $root;

?> 