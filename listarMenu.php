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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/icon.ico">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script type='text/javascript' src='//code.jquery.com/jquery-compat-git.js'></script>
    <script type='text/javascript' src='//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js'></script>
</head>
<body style="background-color: #FBFAF2">


<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg" style="background-color:
#342c2c">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <nav class="navbar navbar-expand-lg">
                        <button class="button_sair fim text-white" type="button" onclick="redireciona('index.php')">
                            Sair
                        </button>
                    </nav>
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <button class="Btn"
                        onclick="abrirModalJsContatoMenu('nao','nao','ModalContatoMenu','A','addContatoMenu','frmContatoMenu','nao','nao','nao','nao')">

                    <div class="sign">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                             viewBox="0 0 24 24">
                            <path d="M7.978 4a2.553 2.553 0 0 0-1.926.877C4.233 6.7 3.699 8.751 4.153 10.814c.44 1.995 1.778 3.893 3.456 5.572 1.68 1.679 3.577 3.018 5.57 3.459 2.062.456 4.115-.073 5.94-1.885a2.556 2.556 0 0 0 .001-3.861l-1.21-1.21a2.689 2.689 0 0 0-3.802 0l-.617.618a.806.806 0 0 1-1.14 0l-1.854-1.855a.807.807 0 0 1 0-1.14l.618-.62a2.692 2.692 0 0 0 0-3.803l-1.21-1.211A2.555 2.555 0 0 0 7.978 4Z"/>
                        </svg>
                    </div>
                    <div class="text ms-2">Contato</div>
                </button>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <?php
        $listarBanner = listarGeral('*', 'banner');
        if ($listarBanner) {
        foreach ($listarBanner

        as $banner) {
        $foto1 = $banner->foto1;
        $foto2 = $banner->foto2;
        $foto3 = $banner->foto3;
        ?>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/<?php echo $foto1 ?>" id="banner1" class="d-block w-100" alt=""
                         title="<?php echo $foto1 ?>">
                </div>
                <div class="carousel-item">
                    <img src="./img/<?php echo $foto2 ?>" class="d-block w-100" alt="BANNER" title="BANNER">
                </div>
                <div class="carousel-item">
                    <img src="./img/<?php echo $foto3 ?>" class="d-block w-100" alt="BANNER" title="BANNER">
                </div>
            </div>

        </div>
    </div>
</div>
<?php
}
} else {
    ?>
    <h1>NÃO POSSUIR BANNER!</h1>
    <?php
}
?>

<div class="container">
    <div class="row mt-2">

        <?php
        $listarProdutos = listarGeral('nome, valor, foto, descricao', 'produto');
        if ($listarProdutos) {
            $cont = 1;
            foreach ($listarProdutos

                     as $produto) {
                $nome = $produto->nome;
                $valor = $produto->valor;
                $foto = $produto->foto;
                $descricao = $produto->descricao;
                ?>
                <div class="col-md-4 d-flex">
                    <div class="cards mt-1 mb-5" style="background-color: #E5E4E2;border: 1px wheat solid;
" data-bs-toggle="modal"
                         onclick="abrirModalJsProdutos('ModalRoupa<?php echo $cont ?>', 'A');">
                        <img src="./img/<?php echo $foto ?>" class="w-100">
                    </div>
                </div>

                <div class="modal fade" id="ModalRoupa<?php echo $cont ?>" tabindex="-1"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content rounded-5">
                            <div class="modal-body corpao rounded-5 pb-0"
                                 style="border-radius: 80px;border: 1px solid wheat">
                                <div class="card corpao mb-3 w-100" style="border: 0px solid black;border-radius: 30px">
                                    <div class="row g-0 rounded-5" style="background-color: #E5E4E2;">
                                        <div class="col-md-4 ">
                                            <img src="./img/<?php echo $foto ?>" class="img-fluid rounded-start"
                                                 alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body text-dark">
                                                <h2 class="card-title fontezinha"><?php echo $nome ?></h2>
                                                <h3><p class="card-text fontezinha">Descrição: <span
                                                                class="fontezinha"><?php echo $descricao ?></span>
                                                    </p>
                                                </h3>
                                                <br>
                                                <h4><p class="card-text fontezinha">Valor: <span
                                                                class="text-success"><?php echo $valor ?></span></p>
                                                </h4>
                                                <button style="margin-left: 380px" class="btn btn-success">Comprar
                                                </button>
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

        <div class="modal fade" id="ModalContatoMenu" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header text-white" style="background-color: #342C2C">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Contato</h1>
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
                                       name="numero_contato_menu" type="tel" maxlength="15" onkeyup="handlePhone(event)"
                                       required placeholder="(00) 00000-0000">
                            </div>
                            <button type="submit" id="btn-cad-contato"   class="btn text-white" style="background-color: #342C2C">Adicionar
                                Contato
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


<footer class="footer text-white sim" style="height: 140px;margin-top: 0%">
    <p>&copy; 2024 - Todos os direitos reservados</p>
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
