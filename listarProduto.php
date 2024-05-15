<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/func.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
      &gt;>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="card text-center">
    <div class="card-header bg-dark text-white">
        <div class="d-flex justify-content-between align-items-center">
            <p class="fs-3" style="text-decoration-line: underline">#Produto</p>

            <div class="d-flex float-end align-items-center">
                <button class="btn btn-md btnbonitoo botaoAddEvento" data-bs-toggle="modal"
                        data-bs-target="#ModalAddProduto"
                        onclick="abrirModalJsCliente('nao','nao','ModalAddProduto','A','addProduto','frmAddProduto')">
                    Cadastrar Produto
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="containers text-white">
            <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="25%">Nome</th>
                <th scope="col" width="20%">Valor</th>
                <th scope="col" width="15%">Foto</th>
                <th scope="col" width="20%">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $listarProduto = listarGeral('*', 'produto');
            if ($listarProduto) {
                foreach ($listarProduto as $itemProduto) {
                    $id = $itemProduto->idproduto;
                    $nome = $itemProduto->nome;
                    $valor = $itemProduto->valor;
                    $fotoName = $itemProduto->foto;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $id ?></th>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $valor?></td>
                        <td><img src="./img/<?php echo $fotoName?>" alt="<?php echo $nome?>" width="50%"> </td>
                        <td>
                            <form>
                                <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                    <input type="hidden" id="id" name="id"
                                           value="<?php echo $id ?>">
                                    <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                                            data-bs-target="#ModalEditProduto"
                                            onclick="abrirModalJsCliente('<?php echo $id ?>','id','ModalEditProduto','A','editProduto','frmEditProduto')">
                                        <span class="mdi mdi-database-edit"></span>
                                    </button>
                            </form>
                            <form action="excProduto.php" method="post">
                                <input type="hidden" name="id" id="id"
                                       value="<?php echo $id ?>">
                                <button type="submit"
                                        onclick="abrirModalJsCliente('<?php echo $id ?>','id','nao','excProduto', 'nao')"
                                        class="btn btn-danger rounded-1"><span
                                        class="mdi mdi-database-remove"></span></button>
                            </form>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <th scope="row" colspan="6" class="text-center">Dados Não Econtrados!</th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-dark text-white">
        <?php
        date_default_timezone_set('America/Sao_Paulo');
        echo date('d/m/Y H:i:s');
        ?>
    </div>
</div>
<script src="./func/func.js"></script>