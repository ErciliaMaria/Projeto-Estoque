<?php
require __DIR__ . '/../bootstrap.php';

//Query String ou Query Params ou parâmetros de url
//localhost:3031?nome=Nanderson
//[nome => Nanderson]

//localhost:3031?nome=Nanderson&email=email@teste.com
//[nome => 'Nanderson', email => 'email@teste.com']
//var_dump($_GET);

//die;

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/';

if ($pagina == '/' ) {
    //também pode usar o require, 
    //mas ele quebra toda a execução 
    //caso o caminho de rotas venha 
    //a falhar
    include TEMPLATES . '/lista.php';
}

if ($pagina == '/produto') {
    include TEMPLATES . '/produto.php';
}