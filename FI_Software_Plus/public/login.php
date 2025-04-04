<?php
    require __DIR__ . "/../configs/connection.php";
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- CSS Interno-->
    <link rel="stylesheet" href="./assets/styles/style.css">
    <!-- Adicionando Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Titulo-->
    <title>Projeto Software 2.0</title>
    <!-- Titulo-->
</head>
<body>
<nav class="navbar sticky-top bg-primary" data-bs-theme="dark" >
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="./images/FI_Logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class=" btn-entrar nav-link" href="./index.php"><i class="bi bi-arrow-left-short"></i>VOLTAR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
            </li>
        </ul>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>
<!-- sign in screen -->
<div class="singin-container">
    <form class="form-signin" action="../src/process.php" method="POST">
        <div class="allign-itens">
            <img class="mb-4" src="./images/FI_Logo.png" alt="" width="72" height="72">
        </div>
        <div class="allign-itens">
            <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
        </div>
        <label for="inputEmail" class="sr-only">Endereço de email:</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Senha:</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
        <?php if (isset($_GET['login']) && $_GET['login'] === "erro") { ?>
            <div class="alert alert-danger">
                E-mail ou senha invalido(s)
            </div>
        <?php } ?>
        <?php if (isset($_GET['auth']) && $_GET['auth'] === "no"){ ?>
            <div class="alert alert-danger">
                Você precisa se autenticar primeiro!
            </div>
        <?php } ?>
        <div class="checkbox mb-3">
            <!-- <label>
              <input type="checkbox" value="remember-me"> Lembrar de mim
            </label> -->
        </div>
        <div class="allign-itens ">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </div>
    </form>
</div>
<!-- sign in screen -->
</body>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© Fabio Isidio - 2024 All rights Reserved</p>
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="./images/FI_Logo.png" class="card-img-top" alt="...">
        </a>
        <!-- <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="../public/login.php" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#home" class="nav-link px-2 text-body-secondary">Features</a></li>
          <li class="nav-item"><a href="#home" class="nav-link px-2 text-body-secondary">Contact</a></li>
        </ul> -->
    </footer>
</div>