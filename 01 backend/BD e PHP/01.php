----- Utilizando POO para criação de Banco de dados -----
- ativar Apache e MySQL no XAMPP (como sempre antes de programar)
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

?>
