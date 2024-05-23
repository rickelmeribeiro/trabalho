<?php
include_once "body.php";
include_once "./config/constante.php";
include_once "./config/conexao.php";
include_once "./func/func.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Área de Login</title>
    <link rel="stylesheet" href="./css/indexcss.css">
    <link rel="shortcut icon" type="imagex/png" href="./img/icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"&gt;>

</head>
<body>

<div class="login-box rounded-5">
    <h2 class="fontee text-dark">LOGIN <span class="mdi mdi-login"></span></h2>
    <form method="post" name="frmLogin" id="frmLogin">
        <div class="user-box">
            <input type="email" name="email" id="email" autocomplete="off" required="required" class="m-0">
            <label>Email <span class="mdi mdi-email"></span></label>
        </div>
        <br>
        <div class="row">
            <div class="col-11 ">
                <div class="user-box ">
                    <input type="password" name="senha" id="senha" autocomplete="off" required="required" class="m-0" maxlength="8">
                    <label>Senha <span class="mdi mdi-key"></span></label>
                </div>
            </div>
            <div class="col-1 d-flex justify-content-center align-items-center mt-0 p-0">
                <button id="iconeOlho" type="button"
                        style="background: transparent; border: transparent; box-shadow: none"
                        class="mdi mdi-eye  mt-0 p-0" onclick="mostrarsenha();"></button>
            </div>
        </div>
        <br>
        <div class="erroBonito p-1 text-center" role="alert" id="alertlog" style="display: none;">
        </div>
        <button style="background: transparent; border: transparent;" class="hoverrr text-dark" id="btn-entere" onclick="btnEnter();fazerLogin();"
                type="button">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            LOGIN
        </button>
    </form>
    <br>
    <b>
        <div class="text-center text-white">
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            echo date('H:i');
            ?>
        </div>
    </b>
</div>



<script src="./func/indexjs.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>