<?php
session_start();
include 'functions.php';

if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];

   if (!isLoggedIn()) {
       registerUser($username, $password);
       $_SESSION['message'] = "User lgged in: $username<br>Password: " . $_SESSION['password'];
   } else {
       $_SESSION['message'] = "User '" . $_SESSION['username'] . "' is already logged in. Please log out first.";
   }

   header('Location: index.php');
   exit();
}

if (isset($_POST['logout'])) {
   if (isLoggedIn()) {
       session_destroy();
       session_start();
       $_SESSION['message'] = "Logged out successfully.";
   } else {
       $_SESSION['message'] = "Please log in first.";
   }

   header('Location: index.php');
   exit();
}
?>
