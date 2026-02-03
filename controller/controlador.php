<?php
include "./data/animais.php";

function mainPage(){
    global $items;
    $banner = "./images/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}

function gatosPage(){
    global $items;
    $banner = "./images/banner_cat.jpg";
    $title = "Gatos";
    $content = array_filter($items, function($animal){
        return $animal['type'] == "gato";
    }); 
    include "./include/layout.php";
}
function cachorrosPage(){
    global $items;
    $banner = "./images/banner_dog.jpg";
    $title = "Cachorros";
        $content = array_filter($items, function($animal){
        return $animal['type'] == "cachorro";
    });

    include "./include/layout.php";
}

function peixesPage(){
    global $items;
    $banner = "./images/banner_fish.jpg";
    $title = "Peixes";
        $content = array_filter($items, function($animal){
        return $animal['type'] == "peixe";
    });

    include "./include/layout.php";
}

function pesquisaPage(){
    global $items;
    $nome = $_GET['nome'] ?? "";
        $content = array_filter($items, function($animal) use($nome){
        return $animal['name'] == $nome;
    });

    include "./include/layout.php";
}

?>