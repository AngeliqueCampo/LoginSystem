<?php
session_start();
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login System</title>
</head>
<body>

<form method="POST" action="handleForm.php">
   <label>Username:</label><br>
   <input type="text" name="username" required><br><br>
   <label>Password:</label><br>
   <input type="password" name="password" required><br><br>
   <button type="submit" name="login">Login</button>
</form>

<br>

<form method="POST" action="handleForm.php">
   <button type="submit" name="logout">Logout</button>
</form>

<?php
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}
?>

</body>
</html>
