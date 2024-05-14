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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body>
<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-dark">
            <span>...........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................</span>
            <button class="button_sair fim text-white" type="button" onclick="redireciona('index.php')">Sair</button>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-2 bg-dark vh-100">
        <div class="container-fluid">
            <div class="card bg-dark text-white" style="width: 18rem;border: transparent">
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho" onclick="carregaMenu('listarMenu')">
                    <i class="	fas fa-braille"></i>
                    MENU
                </div>
                <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho" onclick="carregaMenu('listarBanner')">
                    <i class="fas fa-bacon"></i>
                    BANNER
                </div> <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho" onclick="carregaMenu('listarProduto')">
                    <i class="fas fa-cash-register"></i>
                    PRODUTO
                </div> <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho" onclick="carregaMenu('listarContato')">
                    <i class="fas fa-tty"></i>
                    CONTATO
                </div> <div class="mt-3 mb-2 value fontegrande pointerCursor hoverzinho" onclick="carregaMenu('listarAdm')">
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Administrador</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="redireciona('dashboard.php')" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="frmAddAdm" id="frmAddAdm" action="#">
                    <div class="mb-3">
                        <label for="nome_adm" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome_adm" name="nome_adm"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="senha_adm" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha_adm" name="senha_adm">
                    </div>
                    <div class="mb-3">
                        <label for="email_adm" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email_adm" name="email_adm">
                    </div>
                    <div class="mb-3">
                        <label for="cpf_adm" class="form-label">CPF:</label>
                        <input type="text" onkeydown="fMasc( this, mCPF );" class="form-control cpf_adm" id="cpf_adm" name="cpf_adm" maxlength="14">
                    </div>
                    <button type="submit" onclick="alert('Dados Adicionados com Sucesso!');" class="btn btn-primary">Adicionar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- MODAL FIM ADICIONAR ADM -->

<!-- MODAL EDITAR ADM -->
<div class="modal fade" id="ModalEditAdm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Administrador</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="redireciona('dashboard.php')" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="frmEditAdm" id="frmEditAdm" action="#">
                    <div class="mb-3">
                        <label for="nome_adm" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome_adm" name="nome_adm"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="senha_adm" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha_adm" name="senha_adm">
                    </div>
                    <div class="mb-3">
                        <label for="email_adm" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email_adm" name="email_adm">
                    </div>
                    <div class="mb-3">
                        <label for="cpf_adm" class="form-label">CPF:</label>
                        <input type="text" onkeydown="fMasc( this, mCPF );" class="form-control" id="cpf_adm" name="cpf_adm" maxlength="14">
                    </div>
                    <button type="submit" onclick="alert('Dados Adicionados com Sucesso!');" class="btn btn-primary">Editar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- MODAL FIM EDITAR ADM -->
<script src="./func/func.js"></script>
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
