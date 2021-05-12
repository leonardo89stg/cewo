<?php

$data = new PDO('mysql:host=localhost;dbname=id11976582_app', "id11976582_root", "leo89stgbrasil");

?>
<html>

    <head>
        <title></title>
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
<a href="index.php" id="btdeslog">Voltar a pagina principal </a><br><br><br>
<div id="datauser"> Veja como está a Parcial (não somos o STF  XD) </div>



</div>

<?php

$sql1 = $data->prepare("SELECT * FROM `votos` WHERE vt='Churrasco' ");

$sql1->execute();
$count = $sql1->rowCount();

echo "Churrasco - " . $count;
echo "<br>";
?>
<?php

$sql2 = $data->prepare("SELECT * FROM `votos` WHERE vt='Encontrar no  Shopping'");

$sql2->execute();
$count = $sql2->rowCount();

echo "Encontrar no  Shopping - " . $count;

echo "<br>";
?>
 <?php

$sql3 = $data->prepare("SELECT * FROM `votos` WHERE vt=' Encontro no Barzinho' ");

$sql3->execute();
$count = $sql3->rowCount();

echo "Encontro no Barzinho - " . $count;

echo "<br>";
?>
 <?php

$sql4 = $data->prepare('c');

$sql4->execute();
$count = $sql4->rowCount();

echo "Festa de Reencontro- " . $count;

echo "<br>";
?>


<?php

$sql5 = $data->prepare("SELECT * FROM `votos` WHERE vt='Outro' ");

$sql5->execute();
$count = $sql5->rowCount();

echo "Outro- " . $count;

echo "<br>";
?>
<br>


    </body>
</html>
