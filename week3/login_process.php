<?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Correct email&password
    $correctEmail = "sok@gmail.com";
    $correctPassword = "12345678";

    // Check login form
    if ($email == $correctEmail && $password == $correctPassword) 
      echo "<h1>Success login! :)</h1>";
    else {
        header("Location: login.php");
      exit();
    }

    // Spam protection
    if (!empty($_POST["website"])) {
      header("Location: login.php");
      exit();
    }

  }

?>