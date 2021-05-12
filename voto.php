
    <?php session_start();?>
    <?php
$data = new PDO('mysql:host=localhost;dbname=id11976582_app', "id11976582_root", "leo89stgbrasil");
if (isset($_SESSION["nome"])) {
    echo '';

} else {
    header("location:index.php");
}

$vry = $_POST['id'];

$query = ("SELECT * FROM votos WHERE id_v = :id_v  ");
$sql2 = $data->prepare($query);
$sql2->bindParam(":id_v", $vry);

$sql2->execute();
$users = $sql2->fetchAll(PDO::FETCH_ASSOC);
if (count($users) <= 0)  {
    $idv = $_POST['id'];
    $voto = $_POST['data'];
    $nome = $_POST['nome'];
    $turma = $_POST['turma'];

    $query = ("INSERT INTO `votos`(  `id_v`, `nome`, `turma`, `vt`) VALUES (:id_v,:nome,:turma,:vt)");
    $sql = $data->prepare($query);
    $sql->bindParam(":id_v", $idv);
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":turma", $turma);
    $sql->bindParam(":vt", $voto);
    $sql->execute();
    if ($sql) {echo 'Seu voto foi computado com sucesso ! <a href="painel-user.php">Voltar a Página anterior</a> ';} 
    else {echo "erroDB";}
                        }             




else {echo 'Você já tem voto computado! <a href="painel-user.php sttle="background:#333;"">Voltar a Página anterior</a>';}



                       
