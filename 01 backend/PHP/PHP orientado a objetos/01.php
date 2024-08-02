----- PHPOO (Orientado a Objeto) ou OOP -----

<?php
    class Pessoa { //obj pessoa {atributos}
        private $nome = 'João';
        private $idade = '23';
        private $peso = '70kg';

        public function crescer(){
            $this->comer();
            echo 'estou crescendo'
        }
        private function comer(){
            echo 'estou comendo';
        }
    }
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;
    $pessoa->crescer(); //para acessar o metodo/função crescer

    // estou comendoestou crescendo
?>

----- Public, private e static


