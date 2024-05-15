<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/func.php";

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//echo json_encode($Dados);

//if (isset($Dados) && !empty($Dados)) {

$nome = isset($Dados['nome_produto']) ? addslashes($Dados['nome_produto']) : '';
$valor = isset($Dados['valor_produto']) ? addslashes($Dados['valor_produto']) : '';

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $fotoTmpName = $_FILES['foto']['tmp_name'];
    $fotoName = $_FILES['foto']['name'];
    $uploadDir = 'img';
    $fotoPath = uniqid() . '_' . $fotoName;

    if (move_uploaded_file($fotoTmpName, $uploadDir . '/' . $fotoPath)) {

        $retornoInsert = addProduto($nome, $valor, $fotoPath);


        if ($retornoInsert > 0) {
            echo json_encode(['success' => true, 'message' => "Deu Certo!"], JSON_THROW_ON_ERROR);
        } else {
            echo json_encode(['success' => false, 'message' => "Deu Erro! Error Bd"], JSON_THROW_ON_ERROR);
        }
    } else {
        echo json_encode(['success' => false, 'message' => "Deu Erro! Error Variável"], JSON_THROW_ON_ERROR);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Deu Erro! ERRO NA FOTO"], JSON_THROW_ON_ERROR);
}


?>
