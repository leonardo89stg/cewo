# CEWO-Voto-App- 
Está incluso  o banco e dados com suporte a MySQL 

Aplicação de voto e cadastro de usuários em PHP 7.X.X
a View em  HTML5 e CSS3 ainda não inclui Java Script 
Servidor usado foi um  Apache 2.4 no 000webhost 

basta usar o filezila e  e fazer o upload   para a pasta root do servidor 
Banco de Dados basta fazer o import do Arquivo  SQL e mudar os parametros da variável $data que se encontra nos arquivos:
login.php/insert.php/painel-user.php/parcial.php/parcial2.php
que recebe um PDO conection.
##############################################################################################
$data = new PDO('mysql:host=servidor;dbname=bancodedados', "usuário", "senhadobanco");


thank's
