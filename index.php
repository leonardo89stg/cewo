<?php session_start();
session_destroy();

$data1 = date('Y');

?>
<html>

<head>
    <title>Encontro Resenha CEWO &copy <?php echo $data1 ; ?></title>
 
 
        <title></title>
        <meta name="viewport" content="width=1.5, initial-scale=1">
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>

<style>
body{margin: 0px;padding: 0px;font-family: "Quicksand", sans-serif;
background: #f9f9f9;}

</style>
<body>
<p style="font-family: verdana;font-size:16px; color:#333;" >Votos CEWO &copy<?php echo $data1 ; ?> </p>
<p>Feito com amor by LeoGomes<font color="sallmoon"> ♥ </font>  </p>
<form method="post" action="login.php">
<p style="font-family: verdana;font-size:22px; color:#333;">Logar</p><br>
<input type="text" placeholder="Nome" name="nom"   style="border-radius:4px; border:solid 1px #999; padding:10px;"><br><br>
<input type="text" placeholder="Turma" name="turma"  style="border-radius:4px; border:solid 1px #999;  padding:10px;"/><br><br><br>
<input type="submit" value="Logar"  style="border-radius:4px; border:solid 1px #999;  padding:10px; background:#f9f9f9;"/><br>
</form>
<hr><hr>
<form method="post" action="insert.php">
<p style="font-family: verdana;font-size:22px; color:#333;">cadastrar</p><br>
<input type="text" placeholder="Nome" name="nom"   style="border-radius:4px; border:solid 1px #999; padding:10px;"><br><br>
<input type="text" placeholder="Turma" name="turma"  style="border-radius:4px; border:solid 1px #999;  padding:10px;"/><br><br><br>
<input type="submit" value="Cadastrar"  style="border-radius:4px; border:solid 1px #999;  padding:10px; background:#f9f9f9;"/><br>
</form>
<hr>

</body>
</html>' 
