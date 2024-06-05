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
            <p class="fs-3" style="text-decoration-line: underline">#Contato</p>

            <div class="d-flex float-end align-items-center">
                <button class="btn btn-md btnbonitoo botaoAddEvento"
                        data-bs-toggle="modal"
                        data-bs-target="#ModalAddContato"
                        onclick="abrirModalJsCliente('nao','nao','ModalAddContato','A','addContato','frmAddContato')">
                    Cadastrar Contato
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
                <th scope="col" width="20%">Número</th>
                <th scope="col" width="20%">Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $listaContato = listarGeral('*', 'contato');
            if ($listaContato) {
                foreach ($listaContato as $itemContato) {
                    $id = $itemContato->idcontato;
                    $nome = $itemContato->nome;
                    $numero = $itemContato->numero;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $id ?></th>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $numero ?></td>
                        <td>
                            <form>
                                <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                    <input type="hidden" id="id" name="id"
                                           value="<?php echo $id ?>">
                                    <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                                            data-bs-target="#ModalEditContato"
                                            onclick="abrirModalJsContato('<?php echo $id ?>','id','ModalEditContato','A','editContato','frmEditContato','<?php echo $nome?>','nome_contato_edit','<?php echo $numero?>','numero_contato_edit')">
                                        <span class="mdi mdi-database-edit"></span>
                                    </button>
                                </div>
                            </form>
                            <form name="frmvermais" method="post" id="frmvermais">
                                <input type="hidden" name="id" id="id"
                                       value="<?php echo $id ?>">
                                <button type="button"
                                        onclick="abrirModalJsContato('<?php echo $id ?>','id','ModalExcContato','A','excContato','frmexcContato','nao','nao','nao','nao')"
                                        class="btn btn-danger rounded-1"><span
                                        class="mdi mdi-database-remove"></span></button>

                                <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal"
                                        data-bs-target="#ModalVermais<?php echo $id?>">
                                    VER
                                </button>

                            </form>

                        </td>
                    </tr>
                    <div class="modal fade" id="ModalVermais<?php echo $id ?>" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <li> ID: <?php echo $id ?></li>
                                    <li> NOME: <?php echo $nome ?></li>
                                    <li> CPF: <?php echo $numero ?></li>
                                </div>
                            </div>
                        </div>
                    </div>
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
