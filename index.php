<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navegação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom navbar-dark">
        <div class="navbar-brand">
            <img src="img/logo.png" class="logo" alt="Logo">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Nexxus Inc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Assinar Planos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Diferenciais</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Área do Cliente</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="carousel-custom">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="width: 80%; margin: auto;">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner-cash.png" alt="Primeira imagem">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner-fret.png" alt="Segunda imagem">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </div>

    <!-- Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
