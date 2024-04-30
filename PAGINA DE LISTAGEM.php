<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";
include_once "./CRIAR PAGINA PARA MODAL DE EDIÇÃO.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro -  </title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
          &gt;>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">listar ????</a></li>
                    <li class="breadcrumb-item active" aria-current="page">listar ????</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            #?????
            <button type="button" class="btn btn-success rounded-1 float-end" data-bs-toggle="modal"
                    data-bs-target="#NOMEMODALADD"

                    onclick="abrirModalJsCliente('nao','nao','NOMEMODALADD','A','NOMEDOCONTROLE','NOMEDOFORMULARIO')">
                <span class="mdi mdi-database-plus">
            </button>
        </div>
        <div class="card-body">
            <table class="table table-hover table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col" width="5%">Cod <span class="mdi mdi-card-account-details"></span></th>
                    <th scope="col" width="35%">Nome <span class="mdi mdi-rename-box"></span></th>
                    <th scope="col" width="15%">Valor <span class="mdi mdi-format-list-numbered-rtl"></span></th>
                    <th scope="col" width="5%">Ações <span class="mdi mdi-database"></span></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listar VARIAVEL = listarGeral('CAMPOS', 'TABELA');
                if ($listar VARIAVEL) {
                foreach ($listar VARIAVEL

                as $item VARIAVEL) {
                $ CAMPOS = $item VARIAVEL->CAMPOS;
                $ CAMPOS = $item VARIAVEL->CAMPOS;
                $ CAMPOS = $item VARIAVEL->CAMPOS;
                ?>
                <tr>
                    <th scope="row"><?php echo CAMPOS ?></th>
                    <td><?php echo CAMPOS ?></td>
                    <td><?php echo CAMPOS ?></td>
                    <td>
                        <form>
                            <div class="btn-group btn-sm" role="group" aria-label="Basic example">
                                <input type="hidden" id="IDDOINPUT" name="IDDOINPUT"
                                       value="<?php echo $id ?>">
                                <button type="button" class="btn btn-primary rounded-1" data-bs-toggle="modal"
                                        data-bs-target="#NOMEMODAL"
                                        onclick="abrirModalJsCliente('<?php echo $id ?>','IDDOINPUT','NOMEMODAL','A','NOMECONTROLE','NOMEFORMULARIO')">
                                    <span class="mdi mdi-database-edit"></span>
                                </button>
                        </form>
                        <form action="PAGINADEEXCLUSAO" method="post">
                            <input type="hidden" name="IDDOINPUT" id="IDDOINPUT"
                                   value="<?php echo $id ?>">
                            <button type="submit"
                                    onclick="abrirModalJsCliente('<?php echo $id ?>','IDDOINPUT','nao','NOMECONTROLE', 'nao')"
                                    class="btn btn-danger rounded-1"><span
                                    class="mdi mdi-database-remove"></span></button>
                        </form>
        </div>
        </td>
        </tr>
        <?php
        }
        } else {

            ?>
            <tr>
                <th scope="row" colspan="6" class="text-center">Dados Não Econtrados!</th>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</div>
</div>

<!-- MODAL DE ADIÇÃO -->
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
                        <label for="NOMEINPUT" class="form-label">NOMEINPUT:</label>
                        <input type="text" class="form-control" id="NOMEINPUT" name="NOMEINPUT"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="NOMEINPUT" class="form-label">NOMEINPUT:</label>
                        <input type="text" onkeyup="atacado(this);" class="form-control" id="NOMEINPUT" name="NOMEINPUT">
                    </div>
                    <button type="submit" onclick="alert('Dados Adicionados com Sucesso!');" class="btn btn-primary">
                        Adicionar no Banco
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="./js/func.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>