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
    <a href="audiobook.php" class="fas fa-list"></a>
    <a href="ebook.php" class="fas fa-tags"></a>
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

    <h1 class="heading"><span>aúdio-Book</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="livros/AUDIOBOOK/coroa.jpg" height="80px" width="80px" alt="">
            <h3>A Coroa</h3>
            <div class="price">R$31,00 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/elite.jpg" height="80px" width="80px" alt="">
            <h3>A Elite</h3>
            <div class="price">R$21,00 <span>27,50</span></div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/felizesParaSempre.jpg" width="80px" alt="">
            <h3>Felizes Para Sempre</h3>
            <div class="price">R34,10 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/oGuarda.jpg"  height="80px" width="80px" width="80px" alt="">
            <h3>O Guarda</h3>
            <div class="price">R$31,40</div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/sereia.jpg" height="80px" width="80px" alt="">
            <h3>A Sereia</h3>
            <div class="price">R$41,20 <span>47,90</span></div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>
        <div class="box">
            <img src="livros/AUDIOBOOK/oPrincipe.jpg" height="80px" width="80px" alt="">
            <h3>O Principe </h3>
            <div class="price">R$34,00 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/DIARIO_ANNE.jpg" height="80px" width="80px" alt="">
            <h3>O Diario de Anne Frank</h3>
            <div class="price">R$31,00 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/selecao.jpg" height="80px" width="80px" alt="">
            <h3>A Seleção</h3>
            <div class="price">R$26,76 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>

        <div class="box">
            <img src="livros/AUDIOBOOK/traicao.jpg" height="80px" width="80px" alt="">
            <h3>Traição</h3>
            <div class="price">R$41,20 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
        </div>
        <div class="box">
            <img src="livros/AUDIOBOOK/herdeira.jpg" height="80px" width="80px" alt="">
            <h3>A Herdeira</h3>
            <div class="price">R$41,20 </div>
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">comprar</a>
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

</body>

</html>