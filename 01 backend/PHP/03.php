----- PHP INTERMEDIÁIO -----

----- Foreach e For para arrays:

<?php
    $arr = array('chave1'=>'João','Ana','Felipe','Mario');
    foreach($arr as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';
    }
    /*
    chave1=>João
    0=>Ana
    1=>Felipe
    2=>Felipe
    */

    $arr = array('João','Ana','Felipe','Mario');
    $total = count($arr);
    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo '<br />';
    }
    /* 
    João
    Ana
    Felipe
    Mario
    */
?>

----- Array multidimencional:

<?php
    //arrays single:
    $arr = ['João','Ana'];
    $arr = array('João','chave2'=>'Ana');
    $arr[0] = 'João';
    $arr[] = 'Ana';

    //versão arrays multidimencionais:
    $arr2 = array(array('João','Ana'),array(23,45));
    $arr2[0] = array('chave1'=>'João','Ana');
    $arr2[0]['chave1'] = 'João';
    echo $arr2[0]['chave1'];
?>

----- Sleep e Die:

<?php
    //a função sleep é uma espécie de temporizador
    sleep(3); //3 segundos
    echo 'um';
    sleep(3);
    echo 'dois';

    //a função die é um "stop"
    $nome = 'João';
    if($nome == 'Ana'){
        echo 'tudo certo';
    }else{
        die("O script parou de ser executado  ");
    }
    //assim o restante do código não roda mais
?>

----- Criando funções:

<?php
    function calculadora($numero1 = 10,$numero2 = 5){
        echo ($numero1+$numero2);
    }
    calculadora();
    //15

    function retornarString(){
        return 'João';
    }
    echo retornarString();
?>

----- Include e Date (funções nativas):
! sempre consultar a documentação quando se trata de funções !

<?php
 date_default_timezone_set('America/Sao_paulo'); //fuso horário
 $data = date('d/m/Y H:i:s',time()+(60*10));
 echo $data;

 include('header.php'); //incluir este arquivo ("cabeçalho")
 //(ou seja é necessário ter ou criá-lo para chamar)
?>

<h1> Home </h1> 
//para lembrar que ele pode estar inserido em um html tmb, n só chamar outro arquivo fora
//ou seja, podem ser feitos vários "<?php?>" no mesmo arquivo:

<?php
    include('footer.php'); //rodapé do site
?>

----- Switch case (trocar caso), continue e break 

- Para exercer a função de if else:

<?php
    $nome = 'João';
    switch($nome){
        case 'João':
            echo 'a var é joão';
            break;
        case 'Ana':
            echo 'a var é Ana';
            break;
    }
    //a var é joão
?>

- Para exercer a função de For:

<?php
    for($i = 0; $i < 10; $i++){
        echo $i;
        echo '<hr>';
        if($i == 5)
            break; //quando chegar no 5 ele para de contar
    }
?>

<?php
    for($i = 0; $i < 10; $i++){
        if($i == 5)
            continue;
        echo $i;
        echo '<hr>';
    }
    /* 
    0
    1
    2
    3
    4 //pula o 5
    6
    7
    8
    9
    */
?>

----- Manipulação de arrays:
! existem várias funções com exemplos na documentação ofc !
