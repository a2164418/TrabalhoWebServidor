<?php
session_start();
if (!isset($_SESSION['empresa'])) {
    $_SESSION['empresa'] = array();
 }

 
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nome_empresa = $_POST["nome_empresa"];
    $cnpj = $_POST["cnpj"];
    $endereco = $_POST["endereco"];
    $descricao = $_POST["descricao"];

 
    $cnpj_existe = false;
 
    foreach ($_SESSION['empresa'] as $empresa) {
        if ($empresa['cnpj'] == $cnpj) {
            $cnpj_existe = true;
            echo "O CNPJ '$cnpj' já está cadastrado.";
            break;
        }
    }
 
    if (!$cnpj_existe) {
        $nova_empresa = array(
            'username' => $username,
            'password' => $password,
            'nome_empresa' => $nome_empresa,
            'cnpj' => $cnpj,
            'endereco' => $endereco,
            'descricao' => $descricao
        );
 
        $_SESSION['empresa'][] = $nova_empresa;
        header("Location: index.php");
        exit();

    }
}

?>