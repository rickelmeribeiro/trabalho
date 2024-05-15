<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/func.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados);

if (isset($Dados) && !empty($Dados)) {

    $nome = isset($Dados['nome_contato_edit']) ? addslashes($Dados['nome_contato_edit']) : '';
    $numero = isset($Dados['numero_contato_edit']) ? addslashes($Dados['numero_contato_edit']) : '';
    $id = isset($Dados['id']) ? addslashes($Dados['id']) : '';


    $retornoInsert = editContato($nome, $numero, $id);


    if ($retornoInsert > 0) {
        echo json_encode(['success' => true, 'message' => "Deu Certo!"], JSON_THROW_ON_ERROR);
    } else {
        echo json_encode(['success' => false, 'message' => "Deu Erro! Error Bd"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Deu Erro! Error Variável"], JSON_THROW_ON_ERROR);
}
?>
