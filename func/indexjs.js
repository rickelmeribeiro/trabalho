
function mostrarsenha() {
    var inputPass = document.getElementById('senha');
    var iconeOlho = document.getElementById('iconeOlho');


    if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text');
        iconeOlho.classList.remove('mdi-eye');
        iconeOlho.classList.add('mdi-eye-off');
    } else {
        inputPass.setAttribute('type', 'password');
        iconeOlho.classList.remove('mdi-eye-off');
        iconeOlho.classList.add('mdi-eye');

    }
}

function fazerLogin() {
    var email = document.getElementById("email").value;
    var senha = document.getElementById("senha").value;
    var alertlog = document.getElementById("alertlog");

    if (email === "") {
        alertlog.style.display = "block";
        alertlog.innerHTML =
            "Email não digitado.";
        return;
    } else if (senha === "") {
        alertlog.style.display = "block";
        alertlog.innerHTML =
            "Senha não digitada.";
        return;
    } else if (senha.length < 8) {
        alertlog.style.display = "block";
        alertlog.innerHTML = "A senha precisa ter 8 dígitos";
        return;
    } else {
        alertlog.style.display = "none";
    }
    fetch("login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
            "email=" +
            encodeURIComponent(email) +
            "&senha=" +
            encodeURIComponent(senha),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                setTimeout(function () {
                    window.location.href = "dashboard.php";
                }, 2000);
                // alert(data.message);
                alertlog.classList.remove("erroBonito");
                alertlog.classList.add("acertoBonito");
                alertlog.innerHTML = data.message;
                alertlog.style.display = "block";
            } else {
                alertlog.style.display = "block";
                alertlog.innerHTML = data.message;
            }
            // esconderProcessando();
        })
        .catch((error) => {
            console.error("Erro na requisição", error);
        });
}