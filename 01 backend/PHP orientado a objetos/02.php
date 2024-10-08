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

- Class1.php
<?php
    namespace Sessao1; //como se fosse diretório de pasta
    //ou utilizando 'use Sessao2\Class2;' para 'new Class2();'
    //se obtem o mesmo resultado

    class Class1{
        function __construct(){
            new \Sessao2\Class2(); //diretórios são normalmente caracterizados pelo uso de '\'
            echo 'classe instanciada';
        }
    }
?>

- Class2.php
<?php
    namespace Sessao2;

    class Class2{
        function __construct(){
            echo 'Class2 instanciada';
        }
    }
?>

- index.php
<?php
    include('Class1.php');
    include('Class2.php');

    $class1 = new Class1();

    //Class2 instanciadaClasse instanciada
?>

----- Autoload
- é sobre como incluir dinamicamente as classes em projetos
(para evitar incluir manualmente as classes em cada arquivo)

- \classes\
    - Utilidades.php
    <?php
    class Utilidades{
        function __construct(){
        }
    }
    ?>

    - \Home\
        - inicial.php
        <?php
            namespace Home;
            class Inicial{
                function __construct(){
                    echo 'classe inicial chamada com sucesso';
                }
            }
        ?>

- index.php
<?php
    function myAutoLoad($class){
        if(file_exists('classes/'.$class.'.php')){ //teste para verificar se a pasta existe
            include('classes/'.$class.'.php');
        }
    }
    spl_autoload_register('myAutoLoad'); //chama a automatização
    new Utilidades();
    //classe inicial chamada com sucesso
    //é mais oganizado criar um arquivo 'config.php' com as função de autoload
?>

----- Constantes em Orientação ao Objeto

<?php
    class minhaClasse{
        const VALOR = 300;
        public function __construct(){
            echo self::VALOR;
        }
    }
    echo minhaClasse::VALOR;
?>
