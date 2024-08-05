----- Design Patterns (Padrões de Projeto)
- Padrão de projeto: factory (fabricar)
<?php
    class Cachorro{
        public function __construct(){
            echo 'classe cachorro';
        }
    }
    class Gato{
        public function __construct(){
            echo 'classe gato';
        }
    }
    class Animal{
        public static function build($nomeClasse){  //simple factory
            return new $nomeClasse;
        }
    }

    //new Gato();  //antes de implementar o factory
    Animal::build('cachorro');  //simple factory
?>

- Facade Pattern (fachada)
    - exemplo de um carrinho de compras:
        - add/fechar carrinho
        - calcular frete
        - fechar pedido
<?php
    class Carrinho{
        public function fecharCarrinho(){
            echo 'carrinho fechado';
        }
    }
    class Frete{
        public function calcularFrete(){
            echo 'frete calculado';
        }
    }
    class Pedido{
        public function fecharPedido(){
            echo 'pedido fechado';
        }
    }
    class Loja{
        public function finalizarCompra(){
            $this->FecharCarrinho();
            $this->CalcularFrete();
            $this->FecharPedido();
        }
        public function fecharCarrinho(){
            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
        }
    }
    $loja = new Loja();
    $loja->finalizarCompra();
?>

- Singleton Pattern (único)
- Adapter Pattern (adaptador)