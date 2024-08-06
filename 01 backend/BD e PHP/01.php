----- Utilizando POO para criação de Banco de dados -----
- ativar Apache e MySQL no XAMPP (como sempre antes de programar)
- acessar: localhost/phpmyadmin/
- primeiro configurar o phpMyAdmin por exemplo
(onde os dados são organizado por tabelas e varios arquivos de BD)
    - base de dados > criar tabela > add dados > guardar
- conectar BD e php:

- index.php
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    //parâmetros: 'local dos arquivos de BD','login php Admin','senha'
    //se não aparecer nenhuma mensagem ele está funcionando
?>

----- condições nas queries INSERT, UPDATE, DELETE e SELECT -----
- são as queries mais comuns: inserir, atualizar, deletar e selecionar

----- INSERT (para inserir/criar um novo registro)
    - sobre a importação do BD
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'João','Pedro','2017-05-09
    19:00:00')"); //prepara uma query (comando SQL) no arquivo de dados "clientes"
    //primeiro valor é nulo pois é o primeiro id
    $sql->execute(); //executa a query, no caso, irá inserir os dados no BD do phpAdmin
?>

    - completo:
<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');  // $_POST['momento_registro'];

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)"); //hr atual

        $sql->execute(array($nome,$sobrenome,$momento_registro)); //para executar os dados em "?,?,?"
        //é uma forma de validação por questão de segurança (estudar sobre ataque hacker em BD)
        echo 'cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro no banco</title>
</head>
<body>
    <form method="post"> <!--formulário -->
        <input type="text" name="nome" required />  <!--required obriga a preencher o campo -->
        <input type="text" name="sobrenome" required />
        <!-- <input type="datetime-local" name="momento_registro" required /> -->
        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>

- quando os dados forem inseridos no localhost será guardado no BD

----- UPDATE (para atualizar um registro já inserido no BD)
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $id = 3  //para poder atualizar o id 3 (terceiro registo no BD)
    //tmb é possível alterar na URL (endereço do site) com GET
    $sql = $pdo->prepare();
?>

----- DELETE (para deletar um registro do BD)
