<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <body>

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
                            <a class="nav-link font-weight-bold" href="index.php">Nexxus Inc</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">Diferenciais</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="#">Área do Cliente</a>
                        </li>
                    </ul>
                </div>
            </nav>




            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                                        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha:</label>
                                        <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nexxt";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $sql = "INSERT INTO tabela_usuarios (email, senha) VALUES ('$email', '$senha')";

                if ($conn->query($sql) === TRUE) {
                    echo "Registro inserido com sucesso.";
                } else {
                    echo "Erro: " . $sql . "<br>" . $conn->error;
                }
            }

            $conn->close();
            ?>

        </body>

</html>