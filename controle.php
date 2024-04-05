<?php
$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);
if (!empty($controle) && isset($controle)) {

    if ($controle == 'listarPessoa') {
        include_once 'pessoa.php';
    } else if ($controle == 'editPessoa') {
        include_once 'pessoaEditar.php';
    } else if ($controle == 'listarPizza') {
        include_once 'pizza.php';
    } else if ($controle == 'addPessoa') {
        include_once 'pessoaAdd.php';
    } else if ($controle == 'ExcPessoa') {
        include_once 'pessoaExc.php';
    } else if ($controle == 'AddPizza') {
        include_once 'pizzaAdd.php';
    } else if ($controle == 'EditPizza') {
        include_once 'pizzaEditar.php';
    } else if ($controle == 'ExcPizza') {
        include_once 'pizzaExc.php';
    } else {
        include_once 'bemvindo.php';
    }
} else {
    include_once 'bemvindo.php';
}
