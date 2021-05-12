<?php

$data = new PDO('mysql:host=localhost;dbname=id11976582_app', "id11976582_root", "leo89stgbrasil");



$nome = $_POST['nom'];

$turma = $_POST['turma'];
$query = ("SELECT * FROM dados WHERE nome = :nome AND  turma = :turma ");
$sql = $data->prepare($query);
$sql->bindParam(":nome", $nome);
$sql->bindParam(":turma", $turma);

$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($users) <= 0){
if ($data) {
    $nome = $_POST['nom'];

    $turma = $_POST['turma'];

    $query = ("INSERT INTO `dados`(  `nome`, `turma`) VALUES (:nome,:turma) ");

    $sql = $data->prepare($query);
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":turma", $turma);

    $sql->execute();
    if ($sql) {echo 'Cadastrado <a href="index.php">Voltar a Página principal</a> ';}
     else 
     {echo "erroDB";}}
} else
 {echo 'Você já possui  Cadastro <a href="index.php">Voltar a Página principal</a>';}
