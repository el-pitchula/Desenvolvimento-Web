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

----- Sleep e Die

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

----- Funções nativas

<?php

?>

----- Criando funções
