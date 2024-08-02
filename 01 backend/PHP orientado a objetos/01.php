----- PHPOO (Orientado a Objeto) ou OOP -----
- é uma prática comum criar uma pasta "classe" apenas para 
armazenar os objetos criados em arquivos separados e serem
chamados no index.php (a "main")

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

// além de public e private, tem o método estático q vem do public
// funciona como um congelamento

----- Final class, heranças, protected


