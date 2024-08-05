----- Inteface e implements -----
- diferente de uma classe, uma interface n pode ser instanciada

- Interface1.php
<?php
    interface Inteface1{
        public function printOnScreen($par);
    }
?>

- index.php

<?php
    include('Interface1.php');
    class Teste implements Interface1{
        public function printOnScreen($par){
            echo $par;
        }
    }
    $teste = new Teste;
    $teste->printOnScreen('olá');
    // olá
?>

----- Magic methods

- Class1.php
<?php
    class Class1{
        private $nome;
        private $idade;
        public function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
    }
?>

- index.php

<?php
    include('Class1.php');
    $teste = new Class1('João',23);
    echo $teste->getIdade();
    //23
?>

----- Keywords: Namespace e Use


