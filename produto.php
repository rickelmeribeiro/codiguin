<?php
include_once "./config/conexao.php";
include_once "./config/constante.php";
include_once "./func/funcao.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">listarProduto</a></li>
                <li class="breadcrumb-item active" aria-current="page">listarProduto</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header">
        #Produto
        <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal"
                data-bs-target="#NOMEMODAL"
                onclick="abrirModalJsCliente('nao','nao','NOMEMODAL','A','NOMEDOCONTROLE','NOMEFORMULARIO')">
            Cadastrar
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
            $listarVARIAVEL = listarGeral('CAMPOS', 'TABELA');
            if ($listarVARIAVEL) {
                foreach ($listarVARIAVEL as $itemVARIAVEL) {
                    $CAMPO = $itemVARIAVEL->CAMPO;
                    $CAMPO = $itemVARIAVEL->CAMPO;
                    $CAMPO = $itemVARIAVEL->CAMPO;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $CAMPO ?></th>
                        <td><?php echo $CAMPO ?></td>
                        <td><?php echo $CAMPO ?></td>
                        <td>
                            <form>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <input type="hidden" id="IDDOINPUT" name="IDDOINPUT"
                                           value="<?php echo $id ?>">
                                    <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal"
                                            data-bs-target="#modalprodutoEditar"
                                            onclick="abrirModalJsCliente('<?php echo $id ?>','IDDOINPUT','NOME','A','NOMEDOCNTROLE','NOMEFORMULARIO')">
                                        Alterar
                                    </button>
                            </form>
                            <form action="PAGINADEEXCLUSAO" method="post">
                                <input type="hidden" name="IDDOINPUT" id="IDDOINPUT" value="<?php echo $id ?>">
                                <button type="submit"
                                        onclick="abrirModalJsCliente('<?php echo $id ?>','IDDOINPUT','nao','NOMEDOCONTROLE', 'nao')"
                                        class="btn btn-danger rounded-0">Excluir <span
                                            class="mdi mdi-database-remove"></span></button>
                            </form>
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
<script src="./js/funcao.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
//////////////////////////////////////////////////////////////////////////////////////////////
<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">listarProduto</a></li>
                <li class="breadcrumb-item active" aria-current="page">listarProduto</li>
            </ol>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header">
        #Produto
        <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal"
                data-bs-target="#modalprodutoAdd"
                onclick="abrirModalJsCliente('nao','nao','modalprodutoAdd','A','produtoAdd','frmprodutoAdd')">
            Cadastrar
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
            $listarProduto = listarGeral('idproduto, nome, valor', 'produto');
            if ($listarProduto) {
                foreach ($listarProduto

                         as $itemProduto) {
                    $idproduto = $itemProduto->idproduto;
                    $nome = $itemProduto->nome;
                    $valor = $itemProduto->valor;
                    ?>
                    <tr>
                        <th scope="row"><?php echo $idproduto ?></th>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $valor ?></td>
                        <td>
                            <form>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <input type="hidden" id="idproduto" name="idproduto"
                                           value="<?php echo $idproduto ?>">
                                    <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal"
                                            data-bs-target="#modalprodutoEditar"
                                            onclick="abrirModalJsCliente('<?php echo $idproduto ?>','idproduto','modalprodutoEditar','A','produtoEditar','frmprodutoEditar')">
                                        Alterar
                                    </button>
                            </form>
                            <form action="produtoExc.php" method="post">
                                <input type="hidden" name="idproduto" id="idproduto" value="<?php echo $idproduto ?>">
                                <button type="submit"
                                        onclick="abrirModalJsCliente('<?php echo $idproduto ?>','idproduto','nao','produtoExc', 'nao')"
                                        class="btn btn-danger rounded-0">Excluir <span
                                            class="mdi mdi-database-remove"></span></button>
                            </form>
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
<script src="./js/funcao.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>