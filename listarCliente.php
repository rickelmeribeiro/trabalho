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
            <p class="fs-3" style="text-decoration-line: underline">#Clientes</p>
        </div>
    </div>
    <div class="card-body">
        <table class="containers text-white rounded-4">
            <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="25%">Nome</th>
                <th scope="col" width="20%">Email</th>
                <th scope="col" width="15%">Cpf</th>
                <th scope="col" width="15%">Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $listarClientes = listarGeral('idcliente, nome, email, cpf', 'cliente');
            if ($listarClientes) {
                foreach ($listarClientes

                         as $itemCliente) {
                    $id = $itemCliente->idcliente;
                    $nome = $itemCliente->nome;
                    $email = $itemCliente->email;
                    $cpf = $itemCliente->cpf;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $id ?></th>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $cpf ?></td>
                        <td>
                            <button type="button" class="btn btn-warning rounded-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#ModalVermais<?php echo $id ?>">
                                <span class="mdi mdi-database-search text-dark"></span>
                            </button>
                        </td>
                    </tr>
                    <div class="modal fade" id="ModalVermais<?php echo $id ?>" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-white">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Informações</h1>
                                </div>
                                <div class="modal-body"
                                     style="display: flex;justify-content: center;align-items: center">
                                    <ul>
                                        <hr>
                                        <li>ID: <span style="font-weight: bold"><?php echo $id?></span></li>
                                        <hr>
                                        <li>NOME: <span style="font-weight: bold"><?php echo $nome?></span></li>
                                        <hr>
                                        <li>EMAIL: <span style="font-weight: bold"><?php echo $email?></span></li>
                                        <hr>
                                        <li>CPF: <span style="font-weight: bold"><?php echo $cpf?></span></li>
                                        <hr>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <th scope="row" colspan="5" class="text-center">Dados Não Econtrados!</th>
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