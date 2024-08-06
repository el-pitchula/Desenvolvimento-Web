----- SELECT ()
- neste exemplo foi criado outros dois BD "posts" e "categorias" 
(esse projeto está sendo pensado como se fosse um blog) no phpAdmin, 
dentro da pasta do projeto em questão com o outro BD "clientes"
criado anteriormente
    - "posts" contém: id, título, cetegoria_id e conteúdo 
    (4 posts de ex foram gerados, 2 para as duas categorias)
    - "categorias" contém: id e nome (por enquanto 2: 1-geral e 2-esportes)

- index.php (será puxado todas as informações contida nas tabelas criadas)
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $sql = $pdo->prepare("SELECT * FROM posts"); //o '*' é para pegar todas as colunas
    //mas com essa técnica de manipulação é mais seguro (? e array na execução)
    $sql->execute()
    $info = $sql->fetchAll(); //fetchAll pega tds as informações def em $sql

    echo '<pre>';
    print_r($info);
    echo '</pre>';
    //mostra no localhost tds as informações (apenas uma prévia)
?>

- para manipular informçãos específicas:
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $sql = $pdo->prepare("SELECT * FROM posts");
    $sql->execute()
    $info = $sql->fetchAll();

    echo '<pre>';
    print_r($info);
    echo '</pre>';
    //mostra no localhost tds as informações (apenas uma prévia)
?>
