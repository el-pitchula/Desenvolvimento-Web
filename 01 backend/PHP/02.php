! sempre rodar com o servidor ligado no xampp !

----- malipulação de variáveis no php:

<?php
    echo $_SERVER['SERVER_NAME']; //mostra o nome do servidor
    echo $_SERVER['DOCUMENT_ROOT']; //mostra a raíz do servidor (localização)

    echo '<pre>'; //organiza a lista de informações em linhas
    print_r($_SERVER); //mostra todas as informações do servidor
    echo '</pre>';
?>

----- criação de variáveis:

<?php
    $nome = 'João'; //cria variável
    echo 'meu nome é <br />'; //"print"
    echo $nome; //mostra a variável no navegador

    $idade = 23;
    echo $idade;

    $bool = true; //1
    $double = 10.09;
?>

----- constantes:

<?php
    define('NOME','João');
    echo NOME;

    //constantes são utilizadas para se definir uma vez (n é alterável), como o domínio por exemplo:
    define('DOMINIO','http://meudominio.com'); // 'nome do domínio', 'localhost (endereço)'
?>

----- arrays (variável com vários valores):



----- concatenação:

----- operações matemáticas:

