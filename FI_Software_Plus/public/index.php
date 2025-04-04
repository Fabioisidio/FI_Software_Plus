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
    <!-- Titulo-->
    <title>Projeto Software 2.0</title>
    <!-- Titulo-->
</head>
<body>
<nav class="navbar sticky-top bg-primary" data-bs-theme="dark" id="home">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="./images/FI_Logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class=" btn-entrar nav-link" href="../public/login.php">ENTRAR<i class="bi bi-door-open-fill"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
            </li>
        </ul>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
</script>
</body>
<nav class="paddin-15 navbar bg-body-tertiary" >
    <div class="container-fluid">
        <ul class="internal-nav nav justify-content-center ">
            <li class="nav-item">
                <a href="../public/index.php" class="btn-black d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2">HOME</a>
            </li>
            <li class="nav-item">
                <a href="#cards" class=" btn-black d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2">FEATURES</a>
            </li>
            <li class="nav-item">
                <a href="#contato" class="btn-black d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2">CONTATO</a>
            </li>
        </ul>
    </div>
</nav>
<!--CAROUSEL -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="./images/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/img1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./images/img1.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--CAROUSEL -->
<!-- Cards -->
<div class="card-group" >
    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="card-img-top bi bi-journal-check" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
        </svg>
        <div class="card-body">
            <h5 class="card-title">Agenda</h5>
            <p class="card-text p-3 bg-info bg-opacity-10 border-info">Com essa ferramenta, você terá controle total e prático dos seus compromissos.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="card-img-top bi bi-bank" viewBox="0 0 16 16">
            <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.5.5 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89zM3.777 3h8.447L8 1zM2 6v7h1V6zm2 0v7h2.5V6zm3.5 0v7h1V6zm2 0v7H12V6zM13 6v7h1V6zm2-1V4H1v1zm-.39 9H1.39l-.25 1h13.72z"/>
        </svg>
        <div class="card-body">
            <h5 class="card-title">Financeiro</h5>
            <p class="card-text p-3 bg-info bg-opacity-10 border-info">Com essa ferramenta, você gerencia suas finanças de forma simples e eficiente.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
    <div class="card">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="card-img-top bi bi-shop" viewBox="0 0 16 16">
            <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
        </svg>
        <div class="card-body">
            <h5 class="card-title">E-commerce</h5>
            <p class="card-text p-3 bg-info bg-opacity-10 border-info">Simples, porém eficiente, no que se refere à automação do processo de compras online. <br><span class=" mb-2 bg-warning-subtle text-warning-emphasis"> <i class="bi bi-tools"></i> Em fase final de desenvolvimento</span></p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
    <div class="card">
        <img src="./images/FI_Logo.png" class="card-img-top" alt="logo">
        <div class="card-body">
            <h5 class="card-title ">Pedidos e Orçamentos</h5>
            <p class=" p-3 mb-2 bg-warning-subtle text-warning-emphasis"><i class="bi bi-tools"></i> Em desenvolvimento</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
    <div class="card">
        <img src="./images/FI_Logo.png" class="card-img-top" alt="logo">
        <div class="card-body">
            <h5 class="card-title">E-mail Marketing</h5>
            <p class="p-3 mb-2 bg-warning-subtle text-warning-emphasis"><i class="bi bi-tools"></i> Em desenvolvimento.</p>
            <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> -->
        </div>
    </div>
</div>
<!-- Cards -->
<section id="sobre" class="about-section">
    <div class="container-2 text-center">
        <h2 class="section-title">SOBRE MIM</h2>
        <div class="row justify-content-center">
<!--            <div class="col-md-4">-->
<!--                <img src="./images/FI_Logo.png" alt="Minha Foto" class="about-img mb-4">-->
<!--            </div>-->
            <div class="col-md-6">
                    <p>Olá! Meu nome é * e sou um desenvolvedor web apaixonado por criar soluções criativas e funcionais. Tenho experiência em diversas tecnologias, como HTML, CSS, PHP, JavaScript e frameworks como Jquery e Bootstrap.</p>
                    <p>Ao longo da minha carreira, trabalhei em projetos para empresas de diferentes setores, sempre buscando entender as necessidades dos clientes e entregar resultados de qualidade.</p>
                    <p>Além do desenvolvimento web, sou apaixonado por design de interfaces e usabilidade, e acredito que a experiência do usuário deve sempre ser uma prioridade em qualquer projeto.</p>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <footer class="py-3 my-4">
        <p class="text-center text-body-secondary">Fábio Isidio - © 2025</p>
    </footer>
</div>