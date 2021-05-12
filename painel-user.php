
    <?php session_start();?>
    <?php
$data = new PDO('mysql:host=localhost;dbname=id11976582_app', "id11976582_root", "leo89stgbrasil");
if (isset($_SESSION["nome"])) {
    echo '';

} else {
    header("location:index.php");
}
?>
<html>

    <head>
    <title>Encontro Resenha CEWO &copy <?php echo $data1; ?></title>
        <meta name="viewport" content="width=1.5, initial-scale=1">
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>
<style>
body{margin: 0px;padding: 0px;font-family: 'Quicksand', sans-serif;
background: #f9f9f9;}
#menu{background: #1ebea5; height: 120px;font-family: 'Quicksand', sans-serif;}
#btdeslog{padding: 10px;color:#fff;font-family: 'Quicksand', sans-serif;background: sienna;border:none;outline:none;
 text-decoration: none; margin: 20px 0px 0px 50px ;border-radius: 6px;}
 #datauser{color:#fff;font-family: 'Quicksand', sans-serif;}
 #form-vt{background: none;}
 #form-vt, input[type=radio]{color:#444;font-family: 'Quicksand', sans-serif;background: #f9f9f9; font-size: 18px;border-radius: 6px;}
  input[type=submit]{font-family: 'Quicksand', sans-serif;background: sienna;border:none;outline:none;border-radius: 6px;
 text-decoration: none; margin: 20px 0px 0px 50px ; padding: 15px; color:#fff;border-radius: 6px;width: 120px;}
</style>
    <body>
<div id="menu"><br>
<a href="index.php" id="btdeslog">Deslogar</a><br><br><br>
<?php echo '<div id="datauser">Logado como :' . $_SESSION['nome']; ?><br>
<?php echo 'Turma :' . $_SESSION['turma'] . '| seu ID:'.$_SESSION['id_users'].'</div>'; ?>
</div>
<br>
<div>
    <form id="form-vt" method="POST" action="voto.php">
<input type="hidden" name= "id" value="<?php echo $_SESSION['id_users']; ?>">
<input type="hidden" name= "turma" value="<?php echo $_SESSION['turma']; ?>">
<input type="hidden" name= "nome" value="<?php echo $_SESSION['nome']; ?>">
        <input type="radio" name= data value="Churrasco"> Churrasco <br>
        <input type="radio" name= data value="Encontrar no  Shopping">Encontrar no  Shopping<br>
        <input type="radio" name= data value="Encontro no Barzinho" >Encontro no Barzinho<br>
        <input type="radio" name= data value="Festa de Reencontro" >Festa de Reencontro <br>
        <input type="radio" name= data value="Outro" >Outro <br>
        <input type="submit"  name= bts value="Votar"><br>
    </form>
</div>

    </body>
</html>