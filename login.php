<?php
require('db.php');
 
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    var_dump($email);echo'<br><br>';
    var_dump($password);echo'<br><br>';
 
    $req = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $req->bindValue('email', $email);
    $req->execute();
    $resul = $req->fetch(PDO::FETCH_ASSOC);
    
    var_dump($resul);echo'<br><br>';
    
    if ($resul) {
        $passwordHash = $resul['password'];
        if (password_verify($password, $passwordHash)) {
            echo "Connexion réussie !";
        } else {
            echo "Identifiants invalides";
        }
    } else {
        echo "Identifiants invalides";
    }
}