function carregaMenu(page) {
    fetch('controle.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'controle=' + encodeURIComponent(page),
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('carregaConteudo').innerHTML = data;
        })
        .catch(error => console.error('Error na requisição:', error));

}


function abrirModalJsCliente(id, inID, nomeModal, abrirModal = 'A', addEditDel, formulario) {
    const formDados = document.getElementById(`${formulario}`)

    const ModalInstacia = new bootstrap.Modal(document.getElementById(`${nomeModal}`))
    if (abrirModal === 'A') {
        ModalInstacia.show();
        const inputid = document.getElementById(`${inID}`);
        if (inID !== 'nao') {
            inputid.value = id;
        }

        const submitHandler = function (event) {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);

            formData.append('controle', `${addEditDel}`)
            if (inID !== 'nao') {
                formData.append('id', `${id}`)
            }
            fetch('controle.php', {
                method: 'POST', body: formData,
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    if (data.success) {
                        ModalInstacia.hide();
                        // location.reload()
                        // carregaMe    nu("listarPessoa");
                        // location.reload()
                        ModalInstacia.hide();
                    } else {
                        ModalInstacia.hide();
                        // location.reload()
                        // location.reload()
                        ModalInstacia.hide();
                        ModalInstacia.hide();
                        // carregaMenu("listarPessoa");
                    }
                })
                .catch(error => {
                    ModalInstacia.hide();
                    // location.reload()
                    ModalInstacia.hide();
                    // carregaMenu("listarPessoa");
                    console.error('Erro na requisição:', error);
                });


        }
        formDados.addEventListener('submit', submitHandler);


    } else {
        // location.reload()
        ModalInstacia.hide();
    }

}

function ValidaCPF(){
    var RegraValida=document.getElementById("RegraValida").value;
    var cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;
    if (cpfValido.test(RegraValida) === true)	{
        console.log("CPF Válido");
    } else	{
        console.log("CPF Inválido");
    }
}
function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
}

function fMascEx() {
    obj.value=masc(obj.value)
}

function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
}

if (document.getElementById("cpf")) {
    document.getElementById("cpf").focus();
}

// function fazerLogin() {
//     var cpf = document.getElementById("cpf").value;
//     var senha = document.getElementById("senha").value;
//     var alertlog = document.getElementById("alertlog");
//
//     if (cpf === "") {
//         alertlog.style.display = "block";
//         alertlog.innerHTML =
//             "CPF não digitado.";
//         return;
//     } else if (senha === "") {
//         alertlog.style.display = "block";
//         alertlog.innerHTML =
//             "Senha não digitada.";
//         return;
//     } else if (senha.length < 8) {
//         alertlog.style.display = "block";
//         alertlog.innerHTML = "Mínimo de 8 digitos.";
//         return;
//     } else {
//         alertlog.style.display = "none";
//     }
//     mostrarProcessando();
//     fetch("login.php", {
//         method: "POST",
//         headers: {
//             "Content-Type": "application/x-www-form-urlencoded",
//         },
//         body:
//             "cpf=" +
//             encodeURIComponent(cpf) +
//             "&senha=" +
//             encodeURIComponent(senha),
//     })
//         .then((response) => response.json())
//         .then((data) => {
//             if (data.success) {
//                 setTimeout(function () {
//                     window.location.href = "dashboard.php";
//                 }, 2000);
//                 //alert(data.message);
//                 alertlog.classList.remove("erroBonito");
//                 alertlog.classList.add("acertoBonito");
//                 alertlog.innerHTML = data.message;
//                 alertlog.style.display = "block";
//             } else {
//                 alertlog.style.display = "block";
//                 alertlog.innerHTML = data.message;
//             }
//             esconderProcessando();
//         })
//         .catch((error) => {
//             console.error("Erro na requisição", error);
//         });
// }
// // FUNCAO DE LOADING
// function mostrarProcessando() {
//     var divProcessando = document.createElement("div");
//     divProcessando.id = "processandoDiv";
//     divProcessando.style.position = "fixed";
//     divProcessando.style.top = "10%";
//     divProcessando.style.left = "50%";
//     divProcessando.style.transform = "translate(-50%, -50%)";
//     divProcessando.innerHTML =
//         '<img src="./img/loading.gif" width="70px" alt="Processando..." title="Processando...">';
//     document.body.appendChild(divProcessando);
// }
// // FUNCAO DE ESCONDER O LOADING
// function esconderProcessando() {
//     var divProcessando = document.getElementById("processandoDiv");
//     if (divProcessando) {
//         document.body.removeChild(divProcessando);
//     }
// }



function mostrarsenha() {
    var inputPass = document.getElementById('senha');
    var btnShowPass = document.getElementById('btn-senha');

    if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text');
        btnShowPass.classList.replace('bi-eye-slash', 'bi-eye');
    }
    else {
        inputPass.setAttribute('type', 'password');
        btnShowPass.classList.replace('bi-eye', 'bi-eye-slash');
    }
}

function mostrarsenhaalterar() {
    var inputPass = document.getElementById('senha-alterar');
    var btnShowPass = document.getElementById('btn-senha-alterar');

    if (inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text');
        btnShowPass.classList.replace('bi-eye-slash', 'bi-eye');
    }
    else {
        inputPass.setAttribute('type', 'password');
        btnShowPass.classList.replace('bi-eye', 'bi-eye-slash');
    }
}

function Cadastrar(){
    alert("Dados Cadastrados com Sucesso!");
}

function Editar(){
    alert("Dados Editados com Sucesso!");
}
function Excluir(){
    alert("Dados Excluídos com Sucesso!");
}

function atacado(i) {
//ADD dados para a másrcara
    var decimais = 2;
    var separador_milhar = '.';
    var separador_decimal = ',';

    var decimais_ele = Math.pow(10, decimais);
    var thousand_separator = '$1'+separador_milhar;
    var v = i.value.replace(/\D/g,'');
    v = (v/decimais_ele).toFixed(decimais) + '';
    var splits = v.split(".");
    var p_parte = splits[0].toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, thousand_separator);
    (typeof splits[1] === "undefined") ? i.value = p_parte : i.value = p_parte+separador_decimal+splits[1];

}

var ALERT_TITLE = "Atualização Feita...";
var ALERT_BUTTON_TEXT = "Fechar";

if(document.getElementById) {
    window.alert = function(txt) {
        createCustomAlert(txt);
    }
}

function createCustomAlert(txt) {
    d = document;

    if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode(ALERT_TITLE));

    msg = alertObj.appendChild(d.createElement("p"));
    //msg.appendChild(d.createTextNode(txt));
    msg.innerHTML = txt;

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }


    alertObj.style.display = "block";

}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
    location.reload()
}
function ful(){
    alert('Alert this pages');
}
