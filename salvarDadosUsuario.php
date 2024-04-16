<?php
session_start();

if (!isset($_SESSION['candidato'])) {
    $_SESSION['candidato'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $descricao = $_POST["descricao"];

    $email_existe = false;

    foreach ($_SESSION['candidato'] as $usuario) {
        if ($usuario['email'] == $email) {
            $email_existe = true;
            echo "O email '$email' já está cadastrado.";
            break;
        }
    }

    if (!$email_existe) {
        $novo_usuario = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'descricao' => $descricao
        );

        $_SESSION['candidato'][] = $novo_usuario;
        header("Location: index.php");
        exit();
    }
}
?>