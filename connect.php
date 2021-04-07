<?php
    $usernamelogin = 'mhd_farras254';
    $passwordlogin = 'secret123';

    $usernamelogin2 = 'tabibito';
    $passwordlogin2 = '12345678';
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    }
    else if ($username == $usernamelogin2 && $password == $passwordlogin2) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home.php");
    }
    else {
        header("Location: login.php");
   }
?>