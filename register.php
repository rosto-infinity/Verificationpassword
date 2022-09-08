<?php
require('db.php');
 
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
    var_dump($email);echo'<br><br>';
    var_dump($password);echo'<br><br>';
 
    $req = $pdo->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
    $req->bindValue('email', $email);
    $req->bindValue('password', $password);
    $rep = $req->execute();
 
    if ($rep) {
        echo "Inscription réussie";
    }
}