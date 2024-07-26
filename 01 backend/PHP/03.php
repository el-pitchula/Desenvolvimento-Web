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
    
?>
