<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados);

if (isset($Dados) && !empty($Dados)) {

    $NOMEVARIAVEL = isset($Dados['NOMEDOINPUTDOFORMULARIODAMODAL']) ? addslashes($Dados['NOMEDOINPUTDOFORMULARIODAMODAL']) : '';
    $NOMEVARIAVEL = isset($Dados['NOMEDOINPUTDOFORMULARIODAMODAL']) ? addslashes($Dados['NOMEDOINPUTDOFORMULARIODAMODAL']) : '';


    $retornoInsert = NOMEDAFUNCAO($NOMEVARIAVEL, $NOMEVARIAVEL);


    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Deu Certo!"], JSON_THROW_ON_ERROR);
    } else {
        echo json_encode(['success' => false, 'message' => "Deu Erro! Error Bd"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Deu Erro! Error Variável"], JSON_THROW_ON_ERROR);
}
?>

