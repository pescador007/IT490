<?php 
session_start(); 
unset($_SESSION['user']); 
session_destroy(); 
header('Location: login.html',3); 
?>
