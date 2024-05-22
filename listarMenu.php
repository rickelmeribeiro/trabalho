<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/func.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Site</title>
    <link rel="stylesheet" href="./css/style.css">
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

    <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
</head>
<body style="background-color: #482A50">


<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg" style="background-color: #290f30">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <nav class="navbar navbar-expand-lg">
                        <button class="button_sair fim text-white" type="button" onclick="redireciona('index.php')">
                            Sair
                        </button>
                    </nav>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    </ul>
                    <button class="button"
                            onclick="abrirModalJsContato('nao','nao','ModalContatoMenu','A','addContatoMenu','frmContatoMenu','nao','nao','nao','nao')">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M18 9V6M18 6V3M18 6H15M18 6H21M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21Z"
                                      stroke="#000000" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/banner1.png" class="d-block w-100" alt="BANNER" title="BANNER">
                </div>
                <div class="carousel-item">
                    <img src="./img/banner2.png" class="d-block w-100" alt="BANNER" title="BANNER">
                </div>
                <div class="carousel-item">
                    <img src="./img/banner3.png" class="d-block w-100" alt="BANNER" title="BANNER">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>


<div class="container">
    <div class="row mt-2">

        <?php
        $listarProdutos = listarGeral('nome, valor, foto', 'produto');
        if ($listarProdutos) {
            $cont = 1;
            foreach ($listarProdutos

                     as $produto) {
                $nome = $produto->nome;
                $valor = $produto->valor;
                $foto = $produto->foto;
                ?>
                <div class="col-md-4 d-flex">
                    <div class="cards mt-1 mb-5" data-bs-toggle="modal"
                         onclick="abrirModalJsProdutos('ModalRoupa<?php echo $cont ?>', 'A');">
                        <img src="./img/<?php echo $foto ?>" class="w-100">
                    </div>
                </div>

                <div class="modal fade" id="ModalRoupa<?php echo $cont ?>" tabindex="-1"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header text-white cabessote">
                                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $nome ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        onclick="redireciona('listarMenu.php')"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body corpao">
                                <div class="card corpao linhaa mb-3 w-100">
                                    <div class="row g-0">
                                        <div class="col-md-4" style="border-right: 1px solid white">
                                            <img src="./img/<?php echo $foto ?>" class="img-fluid rounded-start"
                                                 alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-white">
                                                <h3 class="card-title"><?php echo $nome ?></h3>
                                                <h4><p class="card-text">Valor: <span class="text-success"><?php echo $valor ?></span></p></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $cont = $cont + 1;
            }
        } else {
            ?>
            <h1 class="text-center bg-danger text-white">NÃO POSSUI PRODUTOS!</h1>
            <?php
        }
        ?>
    </div>
</div>


<div class="modal fade" id="ModalContatoMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Contato</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        onclick="redireciona('listarMenu.php')"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="frmContatoMenu" id="frmContatoMenu" action="#">
                    <div class="mb-3">

                        <label for="nome_contato_menu" class="form-label">Nome:</label>
                        <input autocomplete="off" type="text" class="form-control" id="nome_contato_menu"
                               name="nome_contato_menu"
                               aria-describedby="emailHelp" required placeholder="Digite Seu Nome">
                    </div>
                    <div class="mb-3">
                        <label for="numero_contato_menu" class="form-label">Número:</label>
                        <input autocomplete="off" class="form-control" id="numero_contato_menu"
                               name="numero_contato_menu" type="tel" maxlength="15" onkeyup="handlePhone(event)" required placeholder="(00) 00000-0000">
                    </div>
                    <button type="submit" class="btn bg-dark text-white">Adicionar Contato
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>


<footer class="footer text-white sim" style="height: 140px;">
    <p>&copy; 2023 - Todos os direitos reservados</p>
    <nav>
        <ul class="ul">
            <li class="li"><a class="a text-white" href="#">Termos de uso</a></li>
            <li class="li"><a class="a text-white" href="#">Política de privacidade</a></li>
            <li class="li"><a class="a text-white" href="#">Sobre nós</a></li>
            <li class="li"><a class="a text-white" href="#">Contato</a></li>
        </ul>
    </nav>
</footer>
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
<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
        integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
