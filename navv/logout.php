<?php 
require ('extra.php');

session_start();
session_destroy();
redirect('adminlogin.php');

?>