<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://kit.fontawesome.com/61c86f5225.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>service</title>
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
                                            <a class="dropdown-item" href="all.php">ALL</a>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-md-4 col-6">
                    <div class="box">
                        <div class="image">
                            <img src="furniture/chare/1.jpg" alt="chare">
                            <hr>
                            <p>Harry bouras textured painting</p>
                            <span>5,000 USD</span>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-6">
                    <div class="box">
                        <div class="image">
                            <img src="furniture/chare/2.jpg" alt="chare">
                            <hr>
                            <p>Harry bouras textured painting</p>
                            <span>5,000 USD</span>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-6">
                    <div class="box">
                        <div class="image">
                            <img src="furniture/chare/3.jpg" alt="chare">
                            <hr>
                            <p>Harry bouras textured painting</p>
                            <span>5,000 USD</span>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-6">
                    <div class="box">
                        <div class="image">
                            <img src="furniture/chare/4.jpg" alt="chare">
                            <hr>
                            <p>Harry bouras textured painting</p>
                            <span>5,000 USD</span>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-6">
                    <div class="box">
                        <div class="image">
                            <img src="furniture/chare/1.jpg" alt="chare">
                            <hr>
                        </div>
                        <div class="caption"></div>
                    </div>
                </div>
                <div class="col col-md-4 col-6">
                    <div class="box">
                        <div class="image">
                            <img src="furniture/chare/1.jpg" alt="chare">
                            <hr>
                        </div>
                        <div class="caption"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  carousel  -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (6).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (8).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (9).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (9).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (6).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (8).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (9).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="picture/2.coastal/1 (9).jpg" alt="">
                                                <div class="img-text">
                                                    <h2>naziurlhak</h2>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider  -->
    </section>
    <section>
        <div class="container">
            <div class="lwsite-multicol">
                <div class="wsite-multicol-table-wrap">
                    <table class="wsite-sulticol-table">
                        <tbody class="wsite-multicol-tbody">
                            <tr class="wsite-multicol-tr">
                                <td class="wsite-multicol-col">
                                    <div>
                                        <div class="wsite-image ">
                                            <a href="# "><img src="furniture/tables/2.jpg " alt=" "></a>
                                            <hr>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="wsite-image ">
                                            <a href="# "><img src="furniture/tables/1.jpg " alt=" "></a>
                                            <hr>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="wsite-image ">
                                            <a href="# "><img src="furniture/tables/3.jpg " alt=" "></a>
                                            <hr>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="wsite-image ">
                                            <a href="# "><img src="furniture/tables/4.jpg " alt=" "></a>
                                            <hr>
                                        </div>
                                    </div>
                                </td>
                                <td class="wsite-multicol-col ">
                                    <div>
                                        <div class="wsite-image">
                                            <a href="#"><img src="furniture/tables/2.jpg" alt=""></a>
                                            <hr>
                                        </div>
                                    </div>
                                </td>
                                <td class="wsite-multicol-col">
                                    <div>
                                        <div class="wsite-image ">
                                            <a href="# "><img src="furniture/tables/2.jpg " alt=" "></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>

</html>