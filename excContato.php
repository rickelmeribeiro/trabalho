<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/func.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados);

if (isset($Dados) && !empty($Dados)) {

    $id = isset($Dados['id']) ? addslashes($Dados['id']) : '';


    $retornoInsert = excContato($id);


    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Deu Certo!"], JSON_THROW_ON_ERROR);
        header('location: dashboard.php');

    } else {
        echo json_encode(['success' => false, 'message' => "Deu Erro! Error Bd"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Deu Erro! Error Variável"], JSON_THROW_ON_ERROR);
}
?>
