! sempre rodar com o servidor (Apache) ligado no XAMPP !
! os códigos são feitos no Sublime text !
! sempre consultar a documentação oficial !

----- PHP BÁSICO -----

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
    define('DOMINIO','http://meudominio.com'); //'nome do domínio', 'localhost (endereço)'
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

----- condições if else (se então):

<?php
    $var1 = 'João';
    $var2 = 'Ana';

    if($var1 == $var2){
        echo 'são iguais';
    }else{
        echo '<div style="width:100px;height:100px;backgouund:red;"></div>';
        //esse resultado é um quadrado vermelho
        //é possível implementar html tranquilamente
        //tb é possível selecionar paginas html completas c if else
    }
?>

----- loopings:

- For:
<?php
    // $contador=10; $contador>0; $contador--  //de 10 a 0 (decrescente pois contador é --)
    for($contador=0;$contador<10;$contador++){ //de 0 a 10 em ordem crescente (++)
        echo 'Hi';
        echo '<hr>';
    }
?>

- While:
<?php
    $contador = 0;
    while($contador < 10){
        echo 'Hi';
        echo '<hr>';
    }
?>

- Do while:
<?php
    $contador = 0;
    do{
        echo 'Hi';
        echo '<br />';
        $contador++;
    }while($contador < 10);
?>
