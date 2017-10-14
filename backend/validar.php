<?php
require_once('./database/Usuarios.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['login-user'];
    $senha = $_POST['login-senha'];
    $senha = md5($senha);
    $user = Usuarios::validar($usuario, $senha);
if($user) {
    session_start();
    $_SESSION['user'] = $user;
    header('Location: http://localhost/segura');
}
else{
    echo "Ocorreu um erro na autenticação.";
}


}
?>
