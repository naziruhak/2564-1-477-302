<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://kit.fontawesome.com/61c86f5225.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>About</title>
    <style>
        <?php include 'css/style3.css'; ?>
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <div class="container">
        <main>
            <header class="row tm-welcome-section">
                <h2 class="col-12 text-center tm-section-title">About minimalsite</h2>
                <p class="col-12 text-center">This is about page of simple house template. You can modify and use this HTML template for your website. Total 3 HTML pages included in this template. Header image has a parallax effect.</p>
            </header>
            <div class="tm-container-inner tm-featured-image">
                <div class="row">
                    <div class="col-12">
                        <div class="placeholder-2">
                            <div class="parallax-window-2" data-parallax="scroll"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-container-inner tm-persons">
                <div class="row">
                    <article class="col-lg-3">
                        <figure class="tm-person">
                            <div class="img-person"><img src="picture/It me/nifateemah.JPG" alt="Image" class="img-fluid tm-person-img" /></div>
                            <div class="figcaption">
                                <figcaption class="tm-person-description">
                                    <h4 class="tm-person-name">NIFATEEMAH NITAYARAK</h4>
                                    <p class="tm-person-title">6210513037</p>
                                    <p class="tm-person-about">I like to paint because there is no frame and can tell our feelings through coloring.</p>
                                    <div class="social-box">
                                        <a href="https://www.facebook.com/nifatimah.nitayarak.3" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                                        <a href="https://www.instagram.com/why.ninii/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                    </article>
                    <article class="col-lg-3">
                        <figure class="tm-person">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="img-person flip-card-front"><img src="picture/It me/nazirulhak.jpg" alt="Image" class="img-fluid tm-person-img" /></div>
                                    <div class="img-person flip-card-back"><img src="picture/It me/nazirulhak2.jpg" alt="Image" class="img-fluid tm-person-img" /></div>
                                </div>
                            </div>
                            <div class="figcaption-n">
                                <figcaption class="tm-person-description">
                                    <h4 class="tm-person-name">NAZIRULHAK JEHBU</h4>
                                    <p class="tm-person-title">6210513036</p>
                                    <p class="tm-person-about">I like coding and learning about investing cuz make me feel good and have freedom in future
                                    </p>
                                    <div class="social-box">
                                        <a href="https://www.facebook.com/profile.php?id=100008686336094" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                                        <a href="https://www.instagram.com/_.rizann._/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                    </article>
                    <article class="col-lg-3">
                        <figure class="tm-person">
                            <div class="img-person"><img src="picture/It me/rusana.jpg" alt="Image" class="img-fluid tm-person-img" /></div>
                            <div class="figcaption">
                                <figcaption class="tm-person-description">
                                    <h4 class="tm-person-name">RUSANA LEAHEEM</h4>
                                    <p class="tm-person-title">6210513052</p>
                                    <p class="tm-person-about">I love to edit videos, shoot vlogs and like to study stocks. I like to invest because it makes life challenging and not boring.</p>
                                    <div class="social-box">
                                        <a href="https://www.facebook.com/nana.rusana.96" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                                        <a href="https://www.instagram.com/minnii_tiger___/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                                    </div>
                                </figcaption>
                            </div>
                        </figure>
                    </article>

                </div>
            </div>
            <div class="tm-container-inner tm-featured-image">
                <div class="row">
                    <div class="col-12">
                        <div class="placeholder-2">
                            <div class="parallax-window-2" data-parallax="scroll" data-image-src="picture/1.bohimiean/1.13.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include('footer.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>
<script src="js/parallax.min.js"></script>

</html>