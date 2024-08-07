----- Avançado -----

----- Segurança
- primeiramente é uma boa pratica baixar os bancos de dados na maquina como backup
- existem alguns erros perigosos em q é possível até exibir a senha
- eese em específico é possível resolver com try-catch:

<?php
    define ('HOST','localhost');
    define ('DB','nome da pasta do projeto');
    define ('USER','root');
    define ('PASS','909090');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo '<h1>Erro ao conectar ao banco de dados: </h1>';
    }
?>

----- Lock tables (evitar conflito de informações)
- para poder bloquear tabelas até q a ação seja concluida

- index1.php
<?php

?>

- index2.php
<?php

?>

----- Pesquisa avançada com LIKE

----- IN e BETWEEN

----- Having clause

----- Subquery

----- Create, show tables e outras  queries