<?php
    namespace Projetos\php;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Home - {nomeSite}</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <header>
        <!-- Barra de tarefas -->
        <nav class="navbar navbar-expand-lg">
            <!-- Logo -->
            <figure class="logo">
                <img src="../imagens/icon.png" width="45" height="auto"/>
            </figure>

            <div class="container-fluid">
                <a class="navbar-brand" href="#">{nomeSite}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Filmes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Saiba Mais
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../cadastro.php">Cadastre-se</a></li>
                                <li><a class="dropdown-item" href="../login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                        <button class="btn btn-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <div class="inicio">
            <h1>Bem vindo(a) ao {{$nomeSite}}</h1><br>
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../imagens/superman.png" class="d-block w-100" alt="Banner filme Superman 2025">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/f1.png" class="d-block w-100" alt="Banner filme F1 2025">
                    </div>
                    <div class="carousel-item">
                        <img src="../imagens/amores.png" class="d-block w-100" alt="Banner filme Amores Materialistas">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="descricaoBanner">
                        <h2>Acompanhe os maiores blockbusters do mundo do cinema.</h2>
                        <a type="button" class="btn btn-success" href="#">Avalie agora</a>
                    </div>
                </div>
            </div>
            <p>A rede social dos amantes de filmes.</P>
        </div>

        <!-- Apresentação -->
        <section class="apresentacaoTexto">
            <h2>{nomeSite}: Seu Diário Pessoal do Cinema Blockbuster</h2>
            <p>Seja bem-vindo(a)! Se você é como nós – alguém que ama a adrenalina das grandes produções de Hollywood e adora registrar cada experiência cinematográfica –, você encontrou o seu lugar.<br>
            Este não é apenas mais um site de crítica; é o seu espaço pessoal para documentar sua jornada pelos maiores filmes da temporada. Inspirado pelo formato de diário e avaliação que você adora, aqui focamos exclusivamente nos blockbusters mais comentados que enchem os cinemas.<br>
            Da performance inesquecível de um ator àquele efeito visual que te deixou de boca aberta, sua opinião é a estrela. Compartilhe suas notas, escreva o que sentiu e veja como suas impressões se comparam às da comunidade, tudo em um ambiente acessível e divertido.<br><br>
            Pronto(a) para registrar sua próxima aventura nas telonas? Comece a avaliar e a construir o seu histórico cinematográfico de grandes sucessos!</p>
        </section>

        <section class="apresentacaoFotos">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                    <img src="../imagens/parasita.png" alt="Poster do filme Parasita" width="150px" height="auto" class="rounded" href="../parasita.php">
                    </div>
                    <div class="col">
                    <img src="../imagens/moonlight.png" alt="Poster do filme Moonlight" width="150px" height="auto" class="rounded" href="../moonlight.php">
                    </div>
                    <div class="col">
                    <img src="../imagens/chihiro.png" alt="Poster do filme A viagem de Chihiro" width="150px" height="auto" class="rounded" href="../chihiro.php">
                    </div>
                    <div class="col">
                    <img src="../imagens/sunshine.png" alt="Poster do filme Brilho eterno de uma mente sem lembranças" width="150px" height="auto" class="rounded" href="../sunshine.php">
                    </div>
                    <div class="col">
                    <img src="../imagens/brokeback.png" alt="Poster do filme O segredo de Brokeback" width="150px" height="auto" class="rounded" href="../brokeback.php">
                    </div>
                    <div class="col">
                    <img src="../imagens/bastardos.png" alt="Poster do filme Bastardos Inglórios" width="150px" height="auto" class="rounded" href="../bastardos.php">
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section class="comentarios">
            <p>{nomeSite} permite que você...</p>
            <div class="container text-center">
                <div class="row">
                    <div class="col1">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="auto" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16"><path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/></svg>
                        </div>
                    <p>Acompanhe seus filmes favoritos e procure aqueles que fazem parte da sua história.</p>
                    </div>
                    <div class="col2">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="auto" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/></svg>
                        </div>
                    <p>Mostre sua paixão por filmes através das suas avaliações e likes em seus amigos.</p>
                    </div>
                    <div class="col3">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="auto" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/></svg>
                        </div>
                    <p>Avalie cada filme em uma escala de 5 estrelas para gravar sua experiência.</p>
                    </div>
                    <div class="col4">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="auto" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16"><path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/><path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/><path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/></svg>
                        </div>
                    <p>Escreva sua revisão dos filmes e siga outros amigos para ler suas avaliações.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="textoFinal">
            <h1>Escreva e compartilhe suas avaliações.<br>Crie seu próprio mundo. Compatilhe sua vida em filmes.</h1>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="textoFooter">
            <a href="../index.php">Home</a> <a href="../avaliacao.php">Minhas avaliações</a> <a href="../contato.php">Contato</a><br><br>
            <p>© {nomeSite}. Feito por André, Bryan e Thabata, alunos do Senac SBC. Todos os direitos reservados.</p>
        </div>

        <div class="redes">
            <a href="http://instagram.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg></a> <a href="http://x.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16"><path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg></a> <a href="http://tiktok.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16"><path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/></svg></a> <a href="http://youtube.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16"><path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/></svg></a>
        </div>
    </footer>
  </body>
</html>