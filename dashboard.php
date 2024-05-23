<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/func.php";

if ($_SESSION['idadm']) {
    $idadm = $_SESSION['idadm'];
} else {
    session_destroy();
    header('location: index.php');
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <title>Dashboard</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
          &gt;>
    <link rel="shortcut icon" type="imagex/png" href="./img/icon.ico">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
</head>
<body>
<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-dark text-white">
            <?php


            $listarFotoeNome = listarGeral('idadm, nome, foto', 'adm');
            if ($listarFotoeNome) {
                foreach ($listarFotoeNome as $itemfotoenome) {
                    $id = $itemfotoenome->idadm;
                    if ($id === $idadm) {
                        $nome = $itemfotoenome->nome;
                        $foto = $itemfotoenome->foto;

                        if ($_SESSION['idadm']) {
                            $id = $_SESSION['idadm'];
                            ?>
                            <span style="font-size: 150%;">ADM:<span
                                        class="text-success"><?php echo $nome ?></span></span>
                            <img src="./img/<?php echo $foto ?>" class="rounded-5" width="5%">
                            <?php
                        } else {
                            echo 'FOTO NAO ENCONTRADA';
                        }
                    }
                }
            } else {
                ?>
                <h1>NENHUM ADM CONECTADO</h1>
                <?php
            }
            ?>
            <span class="text-dark">..................................................................................................................................................................................................................................................................................................................................................................................................................................................</span>
            <button class="button_sair fim text-white" type="button" onclick="redireciona('index.php')">Sair</button>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-2 bg-dark vh-100">
        <div class="container-fluid">
            <div class="card bg-dark text-white" style="width: 18rem;border: transparent">
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho"
                     onclick="redireciona('listarMenu.php')">
                    <i class="fas fa-braille"></i>
                    MENU
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho">
                    <i class="fas fa-bacon"></i>
                    BANNER
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho"
                     onclick="carregaMenu('listarProduto')">
                    <i class="fas fa-cash-register"></i>
                    PRODUTO
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho"
                     onclick="carregaMenu('listarContato')">
                    <i class="fas fa-tty"></i>
                    CONTATO
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho" onclick="carregaMenu('listarAdm')">
                    <i class="fas fa-address-card"></i>
                    ADM
                </div>
            </div>
        </div>
    </div>
    <div class="col-10" id="carregaConteudo"></div>

</div>

<!-- MODAL ADICIONAR ADM -->
<div class="modal fade" id="ModalAddAdm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Administrador</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmAddAdm" id="frmAddAdm" action="#">

                    <div class="mb-3">
                        <label for="nome_adm" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_adm" name="nome_adm"
                               aria-describedby="emailHelp" required placeholder="Digite Seu Nome">
                    </div>

                    <div class="mb-3">
                        <label for="senha_adm" class="form-label">Senha:</label>
                        <input autocomplete="off" type="password" class="form-control" id="senha_adm"
                               name="senha_adm"
                               required maxlength="8" placeholder="••••••••••">
                    </div>

                    <div class="mb-3">
                        <label for="email_adm" class="form-label">Email:</label>
                        <input autocomplete="off" type="email" class="form-control" id="email_adm" name="email_adm"
                               required placeholder="Digite Seu Email">
                    </div>
                    <div class="mb-3">
                        <label for="cpf_adm" class="form-label">CPF:</label>
                        <input autocomplete="off" type="text" onkeydown="fMasc( this, mCPF );"
                               class="form-control cpf_adm" id="cpf_adm" name="cpf_adm" maxlength="14" required
                               placeholder="000.000.000-00">
                    </div>
                    <div class="mb-3">
                        <label for="foto_adm" class="form-label">Foto:</label>
                        <input autocomplete="off" type="file"
                               class="form-control" id="foto_adm" name="foto_adm" required>
                    </div>


                    <button type="submit" class="btn bg-dark text-white">Adicionar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- MODAL FIM ADICIONAR ADM -->

<!-- MODAL EDITAR ADM -->
<div class="modal fade" id="ModalEditAdm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Administrador</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmEditAdm" id="frmEditAdm" action="#">
                    <div class="mb-3">
                        <label for="nome_adm_edit" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_adm_edit"
                               name="nome_adm_edit"
                               aria-describedby="emailHelp" placeholder="Digite Seu Nome">
                    </div>
                    <div class="mb-3">
                        <label for="senha_adm_edit" class="form-label">Senha:</label>
                        <input autocomplete="off" type="password" class="form-control" id="senha_adm_edit"
                               name="senha_adm_edit" maxlength="8" placeholder="********">
                    </div>
                    <div class="mb-3">
                        <label for="email_adm_edit" class="form-label">Email:</label>
                        <input autocomplete="off" type="email" class="form-control" id="email_adm_edit"
                               name="email_adm_edit" placeholder="Digite Seu Email">
                    </div>
                    <div class="mb-3">
                        <label for="cpf_adm_edit" class="form-label">CPF:</label>
                        <input autocomplete="off" type="text" onkeydown="fMasc( this, mCPF );" class="form-control"
                               id="cpf_adm_edit" name="cpf_adm_edit" maxlength="14"
                               placeholder="000.000.000-00">
                    </div>
                    <div class="mb-3">
                        <label for="foto_adm_edit" class="form-label">Foto:</label>
                        <input autocomplete="off" type="file" class="form-control"
                               id="foto_adm_edit" name="foto_adm_edit" required>
                    </div>
                    <button type="submit" class="btn bg-dark text-white">Editar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- MODAL FIM EDITAR ADM -->

<!-- MODAL ADICIONAR PRODUTO -->
<div class="modal fade" id="ModalAddProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Produto</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmAddProduto" id="frmAddProduto" action="#">
                    <div class="mb-3">
                        <label for="nome_produto" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_produto" name="nome_produto"
                               aria-describedby="emailHelp" required placeholder="Digite o Nome do Produto">
                    </div>
                    <div class="mb-3">
                        <label for="desc_produto" class="form-label">Descrição:</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Digite a Descrição do Produto"
                                      name="desc_produto" id="desc_produto" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="valor_produto" class="form-label">Valor:</label>
                        <input autocomplete="off" type="text" onkeyup="atacado(this);" class="form-control"
                               id="valor_produto" name="valor_produto" required placeholder="0,00">
                    </div>
                    <div class="mb-3">
                        <label for="foto_produto" class="form-label">Imagem:</label>
                        <input autocomplete="off" type="file" class="form-control" id="foto_produto" name="foto_produto"
                               required>
                    </div>
                    <button type="submit" class="btn bg-dark text-white">Adicionar no Banco
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAL ADICIONAR PRODUTO -->

<!-- MODAL EDITAR PRODUTO -->
<div class="modal fade" id="ModalEditProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Produto</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmEditProduto" id="frmEditProduto" action="#">
                    <div class="mb-3">
                        <label for="nome_produto_edit" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_produto_edit"
                               name="nome_produto_edit"
                               aria-describedby="emailHelp" required placeholder="Digite o Nome do Produto">
                    </div>
                    <div class="mb-3">
                        <label for="desc_produto_edit" class="form-label">Descrição:</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Digite a Descrição do Produto"
                                      name="desc_produto_edit" id="desc_produto_edit" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="valor_produto_edit" class="form-label">Valor:</label>
                        <input autocomplete="off" type="text" onkeyup="atacado(this);" class="form-control"
                               id="valor_produto_edit" name="valor_produto_edit" required placeholder="0,00">
                    </div>
                    <div class="mb-3">
                        <label for="foto_produto_edit" class="form-label">Imagem:</label>
                        <input autocomplete="off" type="file" class="form-control" id="foto_produto_edit"
                               name="foto_produto_edit" required>
                    </div>
                    <button type="submit" class="btn bg-dark text-white">Editar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- FIM MODAL EDITAR PRODUTO -->

<!-- MODAL ADICIONAR CONTATO -->
<div class="modal fade" id="ModalAddContato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Contato</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmAddContato" id="frmAddContato" action="#">
                    <div class="mb-3">
                        <label for="nome_contato" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_contato" name="nome_contato"
                               aria-describedby="emailHelp" required placeholder="Digite Seu Nome">
                    </div>
                    <div class="mb-3">
                        <label for="numero_contato" class="form-label">Número:</label>
                        <input autocomplete="off" type="tel" maxlength="15" onkeyup="handlePhone(event)"
                               class="form-control phone" id="numero_contato"
                               name="numero_contato" required placeholder="(00) 00000-0000">
                    </div>
                    <button type="submit" class="btn bg-dark text-white">Adicionar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- FIM MODAL ADICIONAR CONTATO -->

<!-- MODAL EDITAR CONTATO -->
<div class="modal fade" id="ModalEditContato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Contato</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmEditContato" id="frmEditContato" action="#">
                    <div class="mb-3">
                        <label for="nome_contato_edit" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_contato_edit"
                               name="nome_contato_edit"
                               aria-describedby="emailHelp" required placeholder="Digite Seu Nome">
                    </div>
                    <div class="mb-3">
                        <label for="numero_contato_edit" class="form-label">Número:</label>
                        <input autocomplete="off" class="form-control" id="numero_contato_edit"
                               name="numero_contato_edit" required type="tel" maxlength="15"
                               onkeyup="handlePhone(event)" placeholder="(00) 00000-0000">
                    </div>
                    <button type="submit" class="btn bg-dark text-white">Editar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- FIM MODAL EDITAR CONTATO -->


<!-- MODAL EXCLUIR ADM -->
<div class="modal fade" id="ModalExcAdm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Administrador</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmexcAdm" id="frmexcAdm">
                    <h1>TEM CERTEZA DE QUE DESEJA EXCLUIR ESTE ADMINISTRADOR?</h1>
                    <br>

                    <h4>AO CONCLUIR ESTA AÇÃO, NÃO SERÁ MAIS POSSÍVEL RECUPERAR OS DADOS!</h4>
            </div>
            <div class="modal-footer bg-danger">
                <button type="submit" class="btn btn-dark">Excluir do Banco</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAL EXCLUIR ADM -->

<!-- MODAL EXCLUIR PRODUTO -->
<div class="modal fade" id="ModalExcProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Produto</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmexcProduto" id="frmexcProduto">
                    <h1>TEM CERTEZA DE QUE DESEJA EXCLUIR ESTE PRODUTO?</h1>
                    <br>

                    <h4>AO CONCLUIR ESTA AÇÃO, NÃO SERÁ MAIS POSSÍVEL RECUPERAR OS DADOS!</h4>
            </div>
            <div class="modal-footer bg-danger">
                <button type="submit" class="btn btn-dark">Excluir do Banco</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAL EXCLUIR PRODUTO -->

<!-- MODAL EXCLUIR CONTATO -->
<div class="modal fade" id="ModalExcContato" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar Contato</h1>
            </div>
            <div class="modal-body">
                <form method="post" name="frmexcContato" id="frmexcContato">
                    <h1>TEM CERTEZA DE QUE DESEJA EXCLUIR ESTE CONTATO?</h1>
                    <br>

                    <h4>AO CONCLUIR ESTA AÇÃO, NÃO SERÁ MAIS POSSÍVEL RECUPERAR OS DADOS!</h4>
            </div>
            <div class="modal-footer bg-danger">
                <button type="submit" class="btn btn-dark">Excluir do Banco</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAL EXCLUIR CONTATO -->
<script src="./func/func.js"></script>
<script src="./func/mascara.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
        integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
