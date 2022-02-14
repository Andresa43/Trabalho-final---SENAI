<!-- Informando ao navegador a versao html -->
<!DOCTYPE html>
<!-- Linguagem -->
<html lang="pt-br">

<!-- Cabeçalho - informações do site -->

<head>
    <!-- Tag meta para setar caracteres especiais -->
    <meta charset="UTF-8">

    <!-- Tag meta para permitir que o site preencha todo o espaço disponível na tela. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tag meta com informação de autor -->
    <meta name="author" content="Andresa Fernandes Borges">

    <!-- Tag meta com informação da descrição do site -->
    <meta name="description" content="Site feito para a estética negra">

    <!-- Tag meta com as palavras-chaves -->
    <meta name="keywords" content="site, estética, black, negra, cabelo, maquiagem,curso">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Anexando página de estilos -->
    <link rel="stylesheet" href="css/style.css">

    <!-- linkando fontes -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- Definindo o título da Página Web -->
    <title>Beleza Black</title>

    <!-- anexando página de interação -->
    <script type="text/javascript" src="arquivo.js"></script>
</head>

<!-- Corpo da página - conteúdo -->

<body>
    <header>
        <!-- Logo -->
        <a href="http://localhost/TCC/?pesquisa-estetica=" id="topo"><img id="logo" src="img/logo.png" alt="logo-beleza_black"></a>
        <!-- Campo de busca -->
        <form action="" method="post">
            <input type="search" name="pesquisa-estetica" placeholder="  Faça sua pesquisa aqui..." id="pesquisa">
            <button type="submit"><img id="btn" src="img/loupe.svg" alt="lupa"></button>
        </form>
        <!-- Botão de matrícula-->
        <div class="btn-matricula">
            <button type="submit" onclick="Teste()">Matricule-se</button>
        </div>
        <!-- ícone cadastro/login -->
        <div class="login">
            <!-- usuario -->
            <a href="">
                <img src="img/user.svg" alt="usuario" class="usuario">
                <b class="texto">Login</b>
                <img src="img/seta-baixo.svg" alt="seta-baixo" class="seta-baixo">
            </a>
        </div>
    </header>
    <!-- menu -->
    <nav>
        <!-- referências -->
        <ul class="menu">
            <a href="">
                <li class="menu-item">Início</li>
            </a>
            <a href="">
                <li class="menu-item">Galeria</li>
            </a>
            <a href="">
                <li class="menu-item">Contato</li>
            </a>
            <a href="">
                <li class="menu-item">Cursos</li>
            </a>
        </ul>
        <!-- <a href="" id="inicio">Início</a>
        <a href="" id="galeria">Galeria</a>
        <a href="" id="contato">Contato</a>
        <a href="" id="cursos">Cursos</a> -->
    </nav>
    <!-- imagem de fundo-->
    <div class="imagem"><img src="img/imagem1.png" alt="imagem"></div>
    <!-- Legenda da Galeria -->
    <fieldset id="galeria">
        <img src="img/linha1.png" alt="linha1" id="linha1">
        <legend id="glf">Galeria de Fotos</legend>
        <img src="img/linha2.png" alt="linha2" id="linha2">
    </fieldset>

    <!-- seção de fotos redondas -->
    <section id="secao1">
        <img src="img/seta-esquerda.svg" alt="seta-esquerda" id="seta-esquerda" onclick="Carrossel()">
        <img src="img/seta-direita.svg" alt="seta-direita" id="seta-direita" onclick="Carrossel()">
        <div id="carrossel">
              <!-- <img src="img/1.png.png" alt="img1">
            <img src="img/2.png.png" alt="img2"> -->
        </div>
    </section>
    <!-- Legenda contatos -->
    <fieldset>
        <img src="img/linha3.png" alt="linha3" id="linha3">
        <legend id="cnt">Contato</legend>
        <img src="img/linha4.png" alt="linha4" id="linha4">
    </fieldset>
    <!-- ícones de contato -->
    <section id="secao2">
        <a href="https://www.instagram.com/?hl=pt-br" target="_blank"><img src="img/instagram.svg" alt="instagram" id="instagram"></a>
        <a href="https://web.whatsapp.com/" target="_blank"><img src="img/whatsapp.svg" alt="whatsapp" id="whatsapp"></a>
        <a href="https://pt-br.facebook.com/" target="_blank"><img src="img/facebook.svg" alt="facebook" id="facebook"></a>
    </section>
    <!-- Rodapé -->
    <footer id="secao3">
        <a href="#topo">
            <button id="btn-seta"> <img src="img/seta-cima.svg" alt="seta-cima" id="seta-cima">PARA O TOPO</button>
        </a>
        <p id="rodape">© COPYRIGHT 2021 - BELEZA BLACK</p>
    </footer>
</body>

</html>