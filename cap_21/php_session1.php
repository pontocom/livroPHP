<?php
session_start();
$_SESSION['utilizador']='marques';
$_SESSION['password']='aeiou';
echo "entrou com sess�o - ". session_id();
?>
