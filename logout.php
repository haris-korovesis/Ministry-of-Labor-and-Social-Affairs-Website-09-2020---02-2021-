<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['success']);

//redirect to home page
header("location: index.php");
//redirect to the page you came from
//header("Location: ". $_SESSION['current_page']);

exit();
?>