<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';
    if (isset($_POST['login'])) {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
    }
        
        if (isset($_SESSION['candidato'])) {
            $usuarios = $_SESSION['candidato'];

            if (isset($usuarios) && is_array($usuarios)) {
                foreach ($usuarios as $usuario) {  
                    if ($usuario['username'] == $username && $usuario['password'] == $password) {                  
                            $_SESSION['logado'] = true;
                        header("Location: buscaempresa.php");
                        exit;
                    }
                }
            } else {
                echo "Erro: Dados de usuário não encontrados.";
                exit;
            }

}
if (isset($_SESSION['empresa'])) {
    $empresas = $_SESSION['empresa'];

    if (isset($empresas) && is_array($empresas)) {
        foreach ($empresas as $empresa) {  
            if ($empresa['username'] == $username && $empresa['password'] == $password) {                  
                    $_SESSION['logado'] = true;
                header("Location: buscaempresa.php");
                exit;
            }
        }
    } else {
        echo "Erro: Dados de empresa não encontrados.";
        exit;
    }

}
if(isset($_POST['cadastro']) && $tipo == 'empresa'){
header("Location: cadastroempresa.php");
exit; 
}
if(isset($_POST['cadastro']) && $tipo == 'candidato'){
    header("Location: cadastrousuario.php");
    exit; 
}
}


?>