<?php
session_start();
$data = new PDO('mysql:host=localhost;dbname=id11976582_app', "id11976582_root", "leo89stgbrasil");
$nome = $_POST['nom'];

$turma = $_POST['turma'];
$query = ("SELECT * FROM dados WHERE nome = :nome AND  turma = :turma ");
$sql = $data->prepare($query);
$sql->bindParam(":nome", $nome);
$sql->bindParam(":turma", $turma);

$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($users) <= 0)
{
    echo '<label>Wrong Data</label><br><a href="index.php" style="background:darksalmon;color:#f7f7f7;font-size:18px;text-decoration:none;">Retornar ao index</a>';

    exit;
} 
 
// pega o primeiro usuário
$user = $users[0];
 
 
 
$_SESSION["nome"] = $_POST['nom'];
$_SESSION["turma"] = $_POST['turma'];
$_SESSION['id_users'] = $user['id_user'];
header("location:painel-user.php");
 

/*
$count = $users->rowCount();
if ($count > 0) {
    session_start();
    $_SESSION["nome"] = $_POST['nom'];
    $_SESSION["turma"] = $_POST['turma'];
    $_SESSION['id_users'] = $user['id_users'];
    header("location:painel.php");
} else {
    echo '<label>Wrong Data</label><br><a href="index.php" style="background:darksalmon;color:#f7f7f7;font-size:18px;text-decoration:none;">Retornar ao index</a>';
}
*/
 