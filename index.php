<!doctype html>
<html lang="en">

<head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/newcss/newcssindex.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<?php
include 'conectar.php'; // Incluindo o arquivo de conexão
?>

<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-3 ">
                    <div class="site-logo">
                        <a href="index.html" class="font-weight-bold">
                            <img src="images/logo.png" alt="Image" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-9 text-right">
                    <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
                    <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav ml-auto ">
                            <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('images/hero_1.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <h1 class="mb-3 text-white">Trips List</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <div class="heading-39101 mb-5">
                        <span class="backdrop text-center">Journey</span>
                        <span class="subtitle-39191">Journey</span>
                        <h3>Your Journey Starts Here</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                // Consulta para buscar os pontos
                $sql = "SELECT * FROM pontos";
                $result = $conn->query($sql);

                // Verifica se há resultados e exibe os pontos
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">';
                        echo '  <div class="listing-item">';
                        echo '    <div class="listing-image">';
                        // Exib indo a imagem do ponto
                        echo '      <img src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '" alt="Image" class="img-fluid">';
                        echo '    </div>';
                        echo '    <div class="listing-content">';
                        echo '      <h2 class="mb-1">' . $row['localizacao'] . '</h2>';
                        echo '      <h2 class="mb-1">' . $row['telefone'] . '</h2>';
                        echo '      <h2 class="mb-1">' . $row['nome'] . '</h2>';
                        echo '    </div>';
                        echo '  </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Nenhum ponto encontrado.</p>';
                }

                // Fecha a conexão
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-3">Instagram</h2>
            <div class="row">
              <div class="col-4 gal_col">
                <a href="#"><img src="images/insta_1.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/insta_2.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/insta_3.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/insta_4.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/insta_5.jpg" alt="Image" class="img-fluid"></a>
              </div>
              <div class="col-4 gal_col">
                <a href="#"><img src="images/insta_6.jpg" alt="Image" class="img-fluid"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt odio iure animi ullam quam, deleniti rem!</p>
              </div>
              
            </div>
          </div>
        </div>
    </footer>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/main.js"></script>
</body>
</html>