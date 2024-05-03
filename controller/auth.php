<?php
session_start();

include __DIR__ . '/../models/user.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $authenticated = array_filter($users, function ($user) use ($email, $password) {
            return $user['email'] === $email && $user['password'] === $password;
        });
       /*  var_dump($authenticated); */
        if (!empty($authenticated) > 0) {
            $user = array_shift($authenticated);
            $_SESSION['userId'] = $user['id'];
            $_SESSION['name'] = $user['name'];
    }
    header("Location: ./views/Index.php");
}
}