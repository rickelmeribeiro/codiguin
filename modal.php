data-bs-toggle="modal" data-bs-target="#NOMEMODAL"

<div class="modal fade" id="NOMEMODAL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" name="NOMEFORMULARIO" id="NOMEFORMULARIO" action="#">
                    <div class="mb-3">
                        <label for="NOMEINPUT1" class="form-label">NOMEINPUT1:</label>
                        <input type="text" class="form-control" id="NOMEINPUT1" name="NOMEINPUT1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="NOMEINPUT2" class="form-label">NOMEINPUT2:</label>
                        <input type="text" class="form-control" id="NOMEINPUT2" name="NOMEINPUT2">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>