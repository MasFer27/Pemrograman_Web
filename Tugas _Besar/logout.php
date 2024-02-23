<?php
session_start();
include("lib/functions.php");
/*
Filename : logout.php
Tools : SimplePHPBot
Author : Freddy Wicaksono, M.Kom
*/

unset($_SESSION['nama']);
unset($_SESSION['email']);

// Destroy the entire session
session_destroy();

// Redirect to a login page or wherever you want the user to go after logging out
header("Location: ".base_url()."public/index.php");
exit();
?>
