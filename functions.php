<?php

function registerUser($username, $password) {
   $_SESSION['username'] = $username;
   $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT); 
}

function isLoggedIn() {
   return isset($_SESSION['username']);
}

function checkPassword($inputPassword) {
   if (isset($_SESSION['password'])) {
       return password_verify($inputPassword, $_SESSION['password']);
   }
   return false;
}
?>