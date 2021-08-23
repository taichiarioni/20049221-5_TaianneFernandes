<?php
require('homeController.php');
$css = 'produto.css';
$title = 'Produto';
$page = 'produto';
$id = null;

//Pega o produto de acordo com o id;
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id');
    if(isset($produtos[$id]) && !empty($produtos[$id])) {
        $produto = $produtos[$id];
    } else {
        echo 'ID inválido!';exit;
    }
    
}