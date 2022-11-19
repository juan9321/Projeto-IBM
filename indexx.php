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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <a href="catalogo.php" class="fas fa-list"></a>
        <a href="ebook.php" class="fas fa-tags"></a>
    </nav>


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="banners/bannerDois.png" height="380px" width="200px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="banners/bannerCinco.png" class="d-block w-100" height="380px" width="200px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="banners/bannerUm.png" class="d-block w-100" height="380px" width="200px" alt="...">
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
                        <button  type="button" class="btn btn-secondary"><a href="login.php">Entrar</a></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <section class="menu" id="menu">

        <h1 class="heading"><span>Mais Vendidos
            </span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/romance/1milhaoDeFinais.jpg" height="80px" width="80px" alt="">
                <h3>Um Milhão de Finais Felizes</h3>
                <div class="price">R$30,00 <span>R$45,00</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>
            <div class="box">
                <img src="img/terror_fantasia/1984.jpg" height="80px" width="80px" alt="">
                <h3>1984</h3>
                <div class="price">R$15,00 <span>R$27,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

            <div class="box">
                <img src="img/romance/amorGelato.jpg" height="80px" width="80px" alt="">
                <h3>Amor e Gelato</h3>
                <div class="price">R$23,00 <span>R$33,00</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

        </div>
    </section>

    <section class="menu" id="menu">

        <h1 class="heading"><span>Promoções</span> </h1>

        <div class="box-container">


            <div class="box">
                <img src="img/fantasia/mentirosos.jpg" height="80px" width="80px" alt="">
                <h3>Mentirosos</h3>
                <div class="price">R$51,00 <span>61,70</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>
            <div class="box">
                <img src="img/romance/cartasDeAmorAosMortos.jpg" height="80px" width="80px" alt="">
                <h3>Cartas de Amor aos Mortos</h3>
                <div class="price">R$53,00 <span>66,33</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

            <div class="box">
                <img src="img/collen/collen9nov.jpg" height="80px" width="80px" alt="">
                <h3>9 novembro</h3>
                <div class="price">R$41,00 <span>49,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

        </div>
    </section>
    <img src="banners/bannerQuatro.png" class="img-fluid" alt="Imagem responsiva">
    <section class="menu" id="menu">
        <h1 class="heading"><span>livros didáticos</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/didatico/1000AttParaCrianças.jpg" height="80px" width="80px" alt="">
                <h3>1000 Atividades para Crianças</h3>
                <div class="price">R$24,00 <span>31,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>
            <div class="box">
                <img src="img/didatico/2041 IA.jpg" height="80px" width="80px" alt="">
                <h3>2041</h3>
                <div class="price">R$51,00 <span>59,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

            <div class="box">
                <img src="img/didatico/arteDaGuerra.jpg" height="80px" width="80px" alt="">
                <h3>Arte da Guerra</h3>
                <div class="price">R$41,00 <span>56,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>
        </div>
    </section>
    <section class="menu" id="menu">
        <h1 class="heading"><span>Mangás</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/terror_fantasia/jujutsu.jpg" height="80px" width="80px" alt="">
                <h3>Jujutsu Kaisen: Batalha de Feiticeiros Vol. 1</h3>
                <div class="price">R$24,90 <span>31,30</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>
            <div class="box">
                <img src="img/terror_fantasia/myHero.jpg" height="80px" width="80px" alt="">
                <h3>My Hero Academia: Boku no Hero - Volume 2</h3>
                <div class="price">R$21,20 <span>26,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

            <div class="box">
                <img src="img/terror_fantasia/anime.jpg" height="80px" width="80px" alt="">
                <h3>Demon Slayer - Kimetsu No Yaiba Vol. 3</h3>
                <div class="price">R$26,76 <span>32,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

        </div>
    </section>

    <section class="menu" id="menu">

        <h1 class="heading"><span>Religiosos</span> </h1>

        <div class="box-container">


            <div class="box">
                <img src="img/didatico/biblia.jpg" height="80px" width="80px" alt="">
                <h3>Bíblia Sagrada</h3>
                <div class="price">R$21,70 <span>24,50</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>
            <div class="box">
                <img src="img/didatico/umbanda.jpg" height="80px" width="80px" alt="">
                <h3>O livro essencial de Umbanda</h3>
                <div class="price">R$36,00 <span>38,20</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

            <div class="box">
                <img src="img/didatico/buda.jpg" height="80px" width="80px" alt="">
                <h3>Dhammapada: Os ensinamentos de Buda</h3>
                <div class="price">R$61,60 <span>71,55</span></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Realizar compra
                </button>
            </div>

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

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>