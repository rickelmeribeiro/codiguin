<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./script.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
          &gt;>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <form class="d-flex float-end" role="search">
                    <input class="form-control me-2 input_editado1 outline"
                           style="border: 1px solid black; background-color: #B9BBBC" type="search"
                           placeholder="Barra de Pesquisa"
                           aria-label="Search">
                    <button class="btn btn-outline-success btn_sim text-white" type="submit"><span
                            class="mdi mdi-card-search"></span></button>
                </form>
            </div>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-2 bg-dark vh-100">
        <div class="container-fluid">
            <div class="card" style="width: 18rem;">

                <div class="card-header">
                    MENU
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action"><a href="#"
                                                                          onclick="carregaMenu('listar pagina')">NOMEPAGINA
                            <span class="mdi mdi-face-recognition"></span></a>
                    <li class="list-group-item list-group-item-action"><a href="#"
                                                                          onclick="carregaMenu('listar pagina')">NOMEPAGINA
                            <span class="mdi mdi-semantic-web"></span></a>
                </ul>

            </div>
        </div>
    </div>
    <div class="col-10" id="carregaConteudo"></div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
        integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./js/func.js"></script>

</body>
</html>
