<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEA BookStore</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swipcsser-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>






    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <header class="header">

        <div class="header-1">

            <a href="indexx.php" class="logo"><img src="img/logo.png" height="60"></i> BEA BookStore </a>

            <div class="icons">

            <div><a href="login.php"><img src="img/person-fill.svg" width="30px" height="30px"></a></div>

            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="indexx.php">home</a>
                <a href="catalogo.php">catálogo</a>
                <a href="audiobook.php">aúdio-Book</a>
                <a href="ebook.php">e-Book</a>



            </nav>
        </div>


    </header>
    <nav class="bottom-navbar">
        <a href="indexx.php" class="fas fa-home"></a>
        <a href="#audio" class="fas fa-list"></a>
        <a href="#ebook" class="fas fa-tags"></a>
    </nav>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Finalização da compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        if(isset($_SESSION['loggedin'])){ ?>
                            Escaneie o QR Code abaixo para finalizar sua compra
                            <br><br>
                            <img src="img/qrcode.jpg">
                    <?php }else{ ?>
                        <h4>Entre com sua conta para comprar um livro</h4>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <?php
                        if(isset($_SESSION['loggedin'])){ ?>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">finalizar e fechar</button>
                    <?php }else{ ?>
                        <button type="button" class="btn btn-secondary"><a href="login.php">Entrar</a></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>




    <section class="menu" id="menu">

        <h1 class="heading"><span>Mais Vendidos</span> </h1>

        <div class="box-container">
            <div class="box">
                <img src="livros/romance/1milhaoDeFinais.jpg" height="80px" width="80px" alt="">
                <h3>Um Milhão de Finais Felizes</h3>
                <div class="price">R$30,00</div>
                <atype="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/assimQueAcaba.jpg" height="80px" width="80px" alt="">
                <h3>É Assim que Acaba</h3>
                <div class="price">R$34,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/brasileiros/dia-nacional-do-livro-13-obras-de-autores-brasileiros-para-voce-garantir-na-sua-estante-1224917.jpg"
                    height="80px" width="80px" alt="">
                <h3>Box Fazendo Meu Filme</h3>
                <div class="price">R$56,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

        </div>
    </section>

    <section class="menu" id="menu">

        <h1 class="heading"><span>Catálogo</span> </h1>
        <br><br><br>
        <h1 id="headingg" class="heading"><span>Editores brasileiros</span> </h1>

        <div class="box-container">


            <div class="box">
                <img src="livros/brasileiros/aMorte.jpg" height="80px" width="80px" alt="">
                <h3>A morte é um dia que vale a pena viver</h3>
                <div class="price">R$25,00></div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/brasileiros/dia-nacional-do-livro-13-obras-de-autores-brasileiros-para-voce-garantir-na-sua-estante-1224917.jpg"
                    height="80px" width="80px" alt="">
                <h3>Fazendo meu filme 1,2,3,4 e 5</h3>
                <div class="price">R$46,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/brasileiros/eu_receberia.jpg" height="80px" width="80px" alt="">
                <h3>Eu receberia as piores noticias dos seus lindos labios</h3>
                <div class="price">R$41,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/brasileiros/milagreManha.jpg" height="80px" width="80px" alt="">
                <h3>O milagre da manhã</h3>
                <div class="price">R$25,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/brasileiros/mulheresQueCorremLobos.jpg" height="80px" width="80px" alt="">
                <h3>Mulheres que correm com os lobos</h3>
                <div class="price">R$40,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/brasileiros/noMeuDoCaminho.jpg" height="80px" width="80px" alt="">
                <h3>No meio do caminho tinha um amor</h3>
                <div class="price">R$41,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/brasileiros/princesaSalva.jpg" height="80px" width="80px" alt="">
                <h3>A princesa salva a si mesma neste livro</h3>
                <div class="price">R$25,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/brasileiros/racionais.jpg" height="80px" width="80px" alt="">
                <h3>Racionais mc`s</h3>
                <div class="price">R$49,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>
        <br><br><br>
        <h1 id="headingg" class="heading"><span>Editora colleen hoover</span> </h1>
        <div class="box-container">

            <div class="box">
                <img src="livros/collen/assimQueAcaba.jpg" height="80px" width="80px" alt="">
                <h3>É assim que acaba</h3>
                <div class="price">R$34,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/collen9nov.jpg" height="80px" width="80px" alt="">
                <h3>Novembro, 9</h3>
                <div class="price">R$27,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/collenLadoFeioAmor.jpg" height="80px" width="80px" alt="">
                <h3>O lado feio do amor</h3>
                <div class="price">R$30,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/collen/collenVerao.jpg" height="80px" width="80px" alt="">
                <h3>Até o verão terminar</h3>
                <div class="price">R$38,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/confesse.jpg" height="80px" width="80px" alt="">
                <h3>Confesse</h3>
                <div class="price">R$15,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/milPartesMeuCoracao.jpg" height="80px" width="80px" alt="">
                <h3>As mil partes do meu coração</h3>
                <div class="price">R$23,00></div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/collen/semEsperanca.jpg" height="80px" width="80px" alt="">
                <h3>Sem esperança</h3>
                <div class="price">R$20,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/suasImperfeicoes.jpg" height="80px" width="80px" alt="">
                <h3>Todas as suas imperfeições</h3>
                <div class="price">R$50,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/talvezUmDia.jpg" height="80px" width="80px" alt="">
                <h3>Talvez um dia</h3>
                <div class="price">R$53,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/collen/tardeDemais.jpg" height="80px" width="80px" alt="">
                <h3>Tarde demais</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/umCasoPerdido.jpg" height="80px" width="80px" alt="">
                <h3>Um caso perdido</h3>
                <div class="price">R$55,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/collen/verity.jpg" height="80px" width="80px" alt="">
                <h3>Verity</h3>
                <div class="price">R$50,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>
        <br><br>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="banners/slider1.png" height="380px" width="200px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="banners/slider2.png" class="d-block w-100" height="380px" width="200px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="banners/slider3.png" class="d-block w-100" height="380px" width="200px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br><br><br>
        <h1 id="headingg" class="heading"><span>Exemplares educacionais/didáticos</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="livros/didatico/1000AttParaCrianças.jpg" height="80px" width="80px" alt="">
                <h3>1000 atividades para crianças</h3>
                <div class="price">R$25,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/2041 IA.jpg" height="80px" width="80px" alt="">
                <h3>2041-Como a inteligência artificial vai mudar sua vida nas próximas décadas</h3>
                <div class="price">R$20,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/didatico/aprendaAstronomia.jpg" height="80px" width="80px" alt="">
                <h3>Astronomia para leigos</h3>
                <div class="price">R$41,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/didatico/aprendaDesenhar.jpg" height="80px" width="80px" alt="">
                <h3>Desenho para leigos</h3>
                <div class="price">R$50,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/aprendaExel.jpg" height="80px" width="80px" alt="">
                <h3>Análise de dados com Excel para leigos</h3>
                <div class="price">R$34,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/didatico/aprendaFrances.jpg" height="80px" width="80px" alt="">
                <h3>Gramática francesa para leigos</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/aprendaJapones.jpg" height="80px" width="80px" alt="">
                <h3>Japonês para leigos</h3>
                <div class="price">R$30,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/aprendaViolino.jpg" height="80px" width="80px" alt="">
                <h3>Violino para leigos</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/economia.jpg" height="80px" width="80px" alt="">
                <h3>O livro da economia</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/ingles.jpg" height="80px" width="80px" alt="">
                <h3>Inglês em 50 aulas</h3>
                <div class="price">R$20,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/didatico/lirvo dos cristais.jpg" height="80px" width="80px" alt="">
                <h3>O livro dos cristais</h3>
                <div class="price">R$25,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/literatura.jpg" height="80px" width="80px" alt="">
                <h3>O livro da literatura</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/procastinacao.jpg" height="80px" width="80px" alt="">
                <h3>Procrastinação</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/didatico/programacao.jpg" height="80px" width="80px" alt="">
                <h3>Use a cabeça! Programação</h3>
                <div class="price">R$20,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/didatico/rapidoDevagar.jpg" height="80px" width="80px" alt="">
                <h3>Rápido e devagar-Duas formas de pensar</h3>
                <div class="price">R$25,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>

        <br><br><br>
        <h1 id="headingg" class="heading"><span>Mangás</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="livros/mangas/avoz.jpg" height="80px" width="80px" alt="">
                <h3>A voz do silêncio</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/berserk.jpg" height="80px" width="80px" alt="">
                <h3>Berserk 1</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/chainsaw.jpg" height="80px" width="80px" alt="">
                <h3>Chainsaw man 1</h3>
                <div class="price">R$30,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/mangas/deathnote.jpg" height="80px" width="80px" alt="">
                <h3>Death note 1</h3>
                <div class="price">R$26,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/mangas/demon.jpg" height="80px" width="80px" alt="">
                <h3>Demon Slayer 2</h3>
                <div class="price">R$35,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/evangelion.jpg" height="80px" width="80px" alt="">
                <h3>Neon Genesis Evangelion 1</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/fairytail.jpg" height="80px" width="80px" alt="">
                <h3>Fairy Tail 34</h3>
                <div class="price">R$36,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/mangas/haikyu.jpg" height="80px" width="80px" alt="">
                <h3>Haikyu! 1</h3>
                <div class="price">R$30,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/mangas/happiness.jpg" height="80px" width="80px" alt="">
                <h3>Happiness 1</h3>
                <div class="price">R$45,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/hunter.jpg" height="80px" width="80px" alt="">
                <h3>Hunter X Hunter 35</h3>
                <div class="price">R$30,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/inuyasha.jpg" height="80px" width="80px" alt="">
                <h3>InuYasha 4</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/jujutsu.jpg" height="80px" width="80px" alt="">
                <h3>Jujutsu Kaisen 4</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/myhero.jpg" height="80px" width="80px" alt="">
                <h3>MY hero academia 1</h3>
                <div class="price">R$30,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/mangas/onepiece.jpg" height="80px" width="80px" alt="">
                <h3>One piece 3 </h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/spy.jpg" height="80px" width="80px" alt="">
                <h3>Spy X Family 1</h3>
                <div class="price">R$20,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/suicide.jpg" height="80px" width="80px" alt="">
                <h3>Suicide club</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/wotakoi.jpg" height="80px" width="80px" alt="">
                <h3>Wotakoi-O amor é dificil para otakus</h3>
                <div class="price">R$34,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>
        <h1 id="headingg" class="heading"><span>Mangás-Sessão LGBT</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="livros/mangas/citrus.jpg" height="80px" width="80px" alt="">
                <h3>Citrus</h3>
                <div class="price">R$20,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/fallenmoon.jpg" height="80px" width="80px" alt="">
                <h3>Fallen Moon</h3>
                <div class="price">R$28,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/given.jpg" height="80px" width="80px" alt="">
                <h3>Given 1</h3>
                <div class="price">R$30,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/loveis.jpg" height="80px" width="80px" alt="">
                <h3>Love is an illusion! 1</h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/mangas/onoroff.jpg" height="80px" width="80px" alt="">
                <h3>On or off</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>

        <br><br>

        <div id="carouselExampleFade1" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="banners/1.png" height="380px" width="200px" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="banners/2.png" class="d-block w-100" height="380px" width="200px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="banners/3.png" class="d-block w-100" height="380px" width="200px" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <br><br><br>
        <h1 id="headingg" class="heading"><span>Terror/Fantasia</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="livros/terror_fantasia/1984.jpg" height="80px" width="80px" alt="">
                <h3>1984</h3>
                <div class="price">R$27,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/terror_fantasia/a-cabana300.jpg" height="80px" width="80px" alt="">
                <h3>A cabana</h3>
                <div class="price">R$30,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/terror_fantasia/bibliotecameianoite.jpg" height="80px" width="80px" alt="">
                <h3>A biblioteca da meia-noite</h3>
                <div class="price">R$45,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/terror_fantasia/carmilla.jpg" height="80px" width="80px" alt="">
                <h3>Carmilla</h3>
                <div class="price">R$30,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/terror_fantasia/deixadaParaTras.jpg" height="80px" width="80px" alt="">
                <h3>Deixada para trás</h3>
                <div class="price">R$45,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/terror_fantasia/dracula.jpg" height="80px" width="80px" alt="">
                <h3>Drácula</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>

        <br><br><br>
        <h1 id="headingg" class="heading"><span>Sessão religiosa</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="livros/religião/ensinamwntosDeBuda.jpg" height="80px" width="80px" alt="">
                <h3>Dhammapada - os mandamentos de Buda</h3>
                <div class="price">R$20,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/religião/bruxaria.jpg" height="80px" width="80px" alt="">
                <h3>O livro completo de bruxaria de Raymond Buckland </h3>
                <div class="price">R$25,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/religião/biblia.jpg" height="80px" width="80px" alt="">
                <h3>Bíblia Sagrada</h3>
                <div class="price">R$20,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
            <div class="box">
                <img src="livros/religião/umbanda.jpg" height="80px" width="80px" alt="">
                <h3>O livro essencial de umbanda</h3>
                <div class="price">R$27,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>
        </div>

        <br><br><br>
        <h1 id="headingg" class="heading"><span>Romance</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="livros/romance/1milhaoDeFinais.jpg" height="80px" width="80px" alt="">
                <h3>Um milhão de finais felizes</h3>
                <div class="price">R$27,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/amorEmManrathan.jpg" height="80px" width="80px" alt="">
                <h3>Amor em Manhattan</h3>
                <div class="price">R$130,00</div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/cartasDeAmorAosMortos.jpg" height="80px" width="80px" alt="">
                <h3>Cartas de amor aos mortos</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/clubeDosHomens.jpg" height="80px" width="80px" alt="">
                <h3>Clube do livro dos homens</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/condeEncantado.jpg" height="80px" width="80px" alt="">
                <h3>O conde encantado</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/eleanor e park.jpg" height="80px" width="80px" alt="">
                <h3>Eleanor & Park</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/emma.jpg" height="80px" width="80px" alt="">
                <h3>Emma</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/encantadorDeLivros.jpg" height="80px" width="80px" alt="">
                <h3>O encantador de livros</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/entreFiosDourados.jpg" height="80px" width="80px" alt="">
                <h3>Entre livros e fios dourados</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/euEsseMeuCoracao.jpg" height="80px" width="80px" alt="">
                <h3>Eu e esse meu coração</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/evelynHugo.jpg" height="80px" width="80px" alt="">
                <h3>Os sete maridos de Evelyn Hugo</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/helena.jpg" height="80px" width="80px" alt="">
                <h3>Helena</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/hipoteseAmor.jpg" height="80px" width="80px" alt="">
                <h3>A hipótese do amor</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/luzesDoNorteorte.jpg" height="80px" width="80px" alt="">
                <h3>Luzes do norte</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/milBeijos.jpg" height="80px" width="80px" alt="">
                <h3>Mil beijos de garoto</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/orgulhoPreconceito.jpg" height="80px" width="80px" alt="">
                <h3>Orgulho e preconceito</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/porLugares.jpg" height="80px" width="80px" alt="">
                <h3>Por lugares incríveis</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/romeuJulieta.jpg" height="80px" width="80px" alt="">
                <h3>Romeu e Julieta</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/todoEsseTempo.jpg" height="80px" width="80px" alt="">
                <h3>Todo esse tempo</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

            <div class="box">
                <img src="livros/romance/vermelhoBranco.jpg" height="80px" width="80px" alt="">
                <h3>Vermelho, branco e sangue azul</h3>
                <div class="price">R$40,00 </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
            </div>

        </div>
    </section>


    </div>
    </section>

    <section class="footer">

        <div class="share">
        <a href="https://www.facebook.com/profile.php?id=100087953352769&mibextid=ZbWKwL" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/BeaBookstore?t=z9ejr5TrFtGumXkFiQhHUA&s=08" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/beabookstore/?igshid=YmMyMTA2M2Y" class="fab fa-instagram"></a>
                <a href="http://www.linkedin.com/in/bea-bookstore-projeto" class="fab fa-linkedin"></a>
        </div>

        <div class="links">
            <a href="indexx.php">home</a>
            <a href="sobrenos.html">sobre nós</a>
            <a href="catalogo.php">Catágolo</a>

        </div>
    </section>

</body>

</html>