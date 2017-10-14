<?php
require_once('Database.php');

class Usuarios {

    public static function validar($usuario, $senha) {
        $pdo = Database::connection();
        $sql = 'SELECT * FROM usuarios WHERE login_usuario = ? AND senha_usuario= ?';
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario, $senha));
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function add($nome, $usuario, $senha, $cpf, $matricula, $tipo) {
        $pdo = Database::connection();
        $sql = 'INSERT INTO usuarios(id,nome_usuario, login_usuario, senha_usuario)
        VALUES(null,?,?,?)';
        $query = $pdo->prepare($sql);
        $query->execute(array($nome, $usuario, $senha));
        if ($query->rowCount() > 0) {
            return $pdo->lastInsertId();
        } else {
            return false;
        }
    }

}
?>
