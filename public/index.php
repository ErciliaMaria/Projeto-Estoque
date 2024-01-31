<?php
require __DIR__ . '/../bootstrap.php';

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/';

if ($pagina == '/' ) {
    $titulo = 'Listagem de Produtos';
    include TEMPLATES . '/lista.phtml';
}

if ($pagina == '/produto') {
    
    $codigoProduto = isset($_GET['codigo']) ? $_GET['codigo'] : '';
    
    if ($codigoProduto) {
        $produtoDetalhe = '';
            //    foreach(PRODUTOS as $produto){
            //        if($produto['codigo'] == $codigoProduto){
             //       $produtoDetalhe = $produto;
             //           break;
             //       }
             //   }
        $produtoDetalhe = array_filter(PRODUTOS, function ($produto) use ($codigoProduto) {
                //retorna se o código do produto for o mesmo informado na URL
                return $produto['codigo'] == $codigoProduto;
        }
        );
        
        $produtoDetalhe = current($produtoDetalhe);
    }
    if(!$codigoProduto || !isset($produtoDetalhe) || !$produtoDetalhe )
     die('Produto não existe.');

     $titulo = 'Detalhes do Produto';
    
    include TEMPLATES . '/produto.phtml';
}

if ($pagina == '/produto/criar') {
    include TEMPLATES . '/criar-produto.phtml';
}

if ($pagina == '/produto/salvar') {
    print '<pre>';
    var_dump($_POST);
    var_dump($_FILES);
}