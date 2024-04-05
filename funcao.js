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

                         carregaMenu("listarUsuario");
                        location.reload()
                        ModalInstacia.hide();
                    } else {
                        location.reload()


                        ModalInstacia.hide();
                         carregaMenu("listarProduto");
                    }
                })
                .catch(error => {
                    ModalInstacia.hide();
                    // carregaMenu("listarUsuario");
                    console.error('Erro na requisição:', error);
                });


        }
        formDados.addEventListener('submit', submitHandler);


    } else {
        ModalInstacia.hide();
    }

}