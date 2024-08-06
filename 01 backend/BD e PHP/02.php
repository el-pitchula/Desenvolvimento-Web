----- SELECT (ferramenta de seleção de elementos para manipulação dos dados da tab)
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

    //puxando os dados da tabela (mostra no localhost tds as info (apenas uma prévia)):
    echo '<pre>';
    print_r($info);
    echo '</pre>';
    //mais legível:
    foreach ($info as $key => $value){
        echo 'Título: '.$value['titulo'];
        echo '<br />';
        echo 'Notícia: '.$value['conteudo'];
        echo '<hr>';
    }
    //ou
    for($i = 0; $i < count($info); %i++){
        echo 'Título: '.$info[$i]['titulo'];
        echo '<br />';
        echo 'Notícia: '.$info[$i]['conteudo'];
        echo '<hr>';
    }   
?>

- como puxar a categoria e depois a notícia dessa categoria:
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categorias_id = ?"); 
    //tmb pode ser feito direcionando um id específico
    //e tmb puxar diretamente no caminho URL (caso seja id específico):
    // caminhoprojeto/index.php?categorias_id=2
    $sql->execute(array($_GET['categoria_id']));
    $info = $sql->fetchAll();

    foreach ($info as $key => $value){
        echo 'Título: '.$value['titulo'];
        echo '<br />';
        echo 'Notícia: '.$value['conteudo'];
        echo '<hr>';
    }

    //dinâmica completa:

    $sql = $pdo->prepare("SELECT * FROM categorias"); 
    $sql->execute();
    $info = $sql->fetchAll();

    foreach ($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'Exibindo posts de: '.$value['nome'];
        echo '<br />';
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach ($infoPosts as $key => $value){
            echo 'Título: '.$value['titulo'];
            echo '<br />';
            echo 'Notícia: '.$value['conteudo'];
            echo '<hr>';
        }
    }
?>

- outros parâmetros: GROUPE, ORDER e LIMIT
<?php
    $pdo = new PDO('mysql:host=localhost;dbname=nomedapastacomosarquivosdeBD','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo ORDER BY nome ASC LIMIT 3");
    //seleciona nomes da tabela clientes de mesmo cargo (def por cargo 1 e 2)
    //para mostrar os nomes em ordem crescente e com limite de 3 nomes
    $sql->execute();
    $clientes = $sql->fetchAll();

    foreach ($clientes as $key => $value){
        echo $value['nome'];
        echo '<hr>';
    }
?>

- queries mais avançadas: JOIN (introduzir em exemplos mais avançados)
