<?php $link_address1 = 'home.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://kit.fontawesome.com/61c86f5225.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>service</title>
    <style>
        <?php include 'style2.css'; ?>
    </style>
</head>

<body>
    <!------------ Header ------------------>
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand" href="#">minimalsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <div class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link  " aria-current="page " href="../home.php">HOME</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../about.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">

                                    <button class="btn  dropdown-toggle" onclick="location.href='1.shop.php'" data-animations="fadeInDown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>SHOP</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="2.tables.php">TABLE</a>
                                        </li>
                                        <li><a class="dropdown-item" href="3.seating.php">SEATING</a></li>
                                        <li>
                                            <a class="dropdown-item" href="4.wall.php">WALL</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="5.storage.php">STORAGE</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="6.object.php">OBJECT</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="7.lighting.php">LIGHT</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../product.php">ALL</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../contact.php">CONTACUS</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../login.php">LOGIN</a>
                            </li>
                        </div>
                    </div>
                    <div class="social_box">

                        <a href="">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--  all item  -->
    <section class="shop_section">
        <div class="container">
            <div class="heading_container">
                <h1>shop</h1>
            </div>
            <div class="row">
                <div class="col col-md-6 col-lg-4 col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="2.tables.php"><img src="furniture/tables/1.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>Table</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-lg-4 col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="3.seating.php"><img src="furniture/chare/1.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>seating</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-lg-4 col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="4.wall.php"><img src="furniture/wall/1.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>wall</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-lg-4 col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="5.storage.php"><img src="furniture/tables/3.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>stoarage</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-lg-4 col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="6.object.php"><img src="furniture/tables/6.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>object</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6 col-lg-4 col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="7.lighting.php"><img src="furniture/tables/5.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>lighting</h3>
                        </div>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="box">
                        <div class="image-box">
                            <a href="../product.php"><img src="furniture/chare/4.jpg" alt=""></a>
                        </div>
                        <div class="detail-box">
                            <h3>ALL</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>

</html>