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

- Insert PDO (para inserir)
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'João','Pedro','2017-05-09
    19:00:00')"); //prepara uma query (comando SQL) no arquivo de dados "clientes"
    //primeiro valor é nulo pois é o primeiro id
    $sql->execute(); //executa a query, no caso, irá inserir os dados no BD do phpAdmin
?>

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = $_POST['momento_registro'];

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)"); //hr atual

        $sql->execute();
        echo 'cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro no banco</title>
</head>
<body>
    <form method="post"> //formulário
        <input type="text" name="nome" required />
        <input type="text" name="sobrenome" required />
        <input type="datetime-local" name="momento_registro" required />
//ou
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome"><br
        <label for="momento_registro">Momento de Registro:</label>
        <input type="datetime-local" id="momento_registro" name="momento_registro"><
        <input type="submit" name="acao" value="Inserir">

</body>
</html>
