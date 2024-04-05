<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";

$conn = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NOMEVAIAVEL = $_POST['NOMEINPUT'];
    $NOMEVAIAVEL = $_POST['NOMEINPUT'];

    // Verifique se o usuário é administrador
    $query = "SELECT * FROM TABELA WHERE CAMPO = :CAMPO AND CAMPO = :CAMPO";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':CAMPO', $CAMPO);
    $stmt->bindParam(':CAMPO', $CAMPO);
    $stmt->execute();
    $admin = $stmt->fetch();

    if ($admin) {

        session_start();
        header('location: adm.php');
        exit();
    }


    session_start();
    $_SESSION['error_message'] = "Usuário ou senha incorretos!";
    header('location: erro.php');
} else {
    session_start();
    $_SESSION['error_message'] = "Método de requisição inválido!";
    header('location: erro.php');
}
?>