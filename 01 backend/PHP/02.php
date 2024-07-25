! sempre rodar com o servidor (Apache) ligado no XAMPP !
! os códigos são feitos no Sublime text !

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

<?php
    $nome = array('João','Ana','Felipe');
    echo $nome[2]; //Felipe
    //ou:
    $variaveis = ['João',32,true,10.09];
    echo $variaveis[2]; //mostra "1"
?>

----- concatenação:

<?php
    $idade = 23;
    define('N0ME','João');
    echo 'meu nome é '.NOME.'tenho '.$idade;
    //ou:
    echo "tenho $idade";
?>

----- operações matemáticas:

<?php
    $expressao = 10 + 20 * 2;
    echo $expressão; //50 
    //ele segue a ordem padrão de resolução matemática 
    //assim como o vem em () é resolvido primeiro
?>
