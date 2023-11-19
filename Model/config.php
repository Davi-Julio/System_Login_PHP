<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'login';

$mysqli = new mysqli($host, $user, $pass, $db);


// validação BackEnd para conferir se os dados do usúario são iguais ao que está no banco de dados


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE name = '$name' AND email = '$email' AND password = '$password'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        header("Location: Views/TelaPrincipal.php");
    } else {
        echo 'Usuario Não Cadastrado!';
    }
};


// Cadastrar Usúarios Novos No banco de dados

if (isset($_GET['cadastro'])) {
    $nameCadastro = $_GET['nameCadastro'];
    $emailCadastro = $_GET['emailCadastro'];
    $passwordCadastro = $_GET['passwordCadastro'];

    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        $nameCadastro = $_GET['nameCadastro'];
        $emailCadastro = $_GET['emailCadastro'];
        $passwordCadastro = $_GET['passwordCadastro'];

        $sql = "SELECT * FROM users WHERE name = '$nameCadastro' AND email = '$emailCadastro' AND password = '$passwordCadastro'";
        $result2 = $mysqli->query($sql);

        if ($result2->num_rows > 0) {
            echo 'Usuario já cadastrado';
        } else {

            $sqlCadastro = "INSERT INTO users (name,email,password) VALUES ('$nameCadastro','$emailCadastro', '$passwordCadastro')";
            $result = $mysqli->query($sqlCadastro);

            header("Location: Views/cadastro.php");
        }
    };
};
