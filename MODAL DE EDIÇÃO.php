<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="modal fade" id="ModalEdiProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="NOMEOFRMULARIO" id="NOMEOFRMULARIO" action="#">
                    <div class="mb-3">
                        <label for="NOMEINPUT" class="form-label">NOMEINPUT:</label>
                        <input type="text" class="form-control" id="NOMEINPUT" name="NOMEINPUT"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="NOMEINPUT" class="form-label">NOMEINPUT:</label>
                        <input type="text" onkeyup="atacado(this);" class="form-control" id="NOMEINPUT" name="NOMEINPUT">
                    </div>
                    <button type="submit" onclick="alert('Dados Editados com Sucesso!');" class="btn btn-primary">Editar no Banco
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>