----- PHPOO (Orientado a Objeto) ou OOP -----
- é uma prática comum criar uma pasta "classe" apenas para 
armazenar os objetos criados em arquivos separados e serem
chamados no index.php (a "main")

----- Classes

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
// static funciona como um congelamento
// e o protected, que funciona da seguinte forma:

----- Final class, heranças, protected

<?php
    final class Filha{  //não pode ser herdado (final)
        public function mostrarOla(){
            echo 'Olá';
        }
    }
    class Pai{
        public function mostrarTchau(){
            echo 'Tchau';
        }
    }

    $pai = new Pai;
    $pai->mostrarTchau();
    // Tchau

    ----------

    class Filha{
        public function mostrarOla(){
            echo 'Olá';
        }
    }
    class Pai extends Filha{  //pode extender/herdar (class Filha n é final)
        public function mostrarTchau(){
            echo 'Tchau';
        }
    }

    $pai = new Pai;
    $pai->mostrarOla(); //agora Pai pode herdar função da Filha
    // Olá
    // ante somente Filha poderia usar essa função "$filha->mostrarOla();"

    ----------

    class Filha{
        protected function funcaoTeste(){
            echo 'chamando função teste';
        }
        public function mostrarOla(){
            echo 'Olá';
        }
    }
    class Pai extends Filha{  //pode extender/herdar (class Filha n é final)
        public function mostrarTchau(){
            echo 'Tchau';
            echo '<br />';
            $this->funcaoTeste();
        }
    }

    $pai = new Pai;
    $pai->mostrarTchau();
    // Tchau
    // chamando função teste
?>

! falar mais sobre o funcionamento do protected !

----- Abstract, self...
- abstract é uma classe q só pode ser herdada, n pode ser instanciada
(é apenas para ser chamada)

por exemplo, não pode:

<?php
    abstract class test{
    }
    new test;
?>

o certo seria apenas chamá-la:

<?php
    abstract class teste{
        public function func1(){
            echo 'chamando função 1';
        }
    }
    class Principal extends teste{
    }

    $principal = new Principal;
    $principal->func1();
?>

- self é uma palavra reservada q faz referência a mesma classe

<?php
    abstract class teste{
        public function func1(){
            echo 'chamando função 1';
        }
        abstract function func2();
    }
    class Principal extends teste{
        public function func2(){
            echo 'declarando ofc um metodo abstrato';
        }
        public static function metodoEstatico(){
            echo 'metodo estático';
        }
        public function funcao(){
            self::metodoEstatico(); // referencia a mesma classe
        }
    }

    $principal = new Principal;
    $principal->funcao();
    // metodo estático
?>
