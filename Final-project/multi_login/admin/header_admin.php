<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/styleadmin.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://kit.fontawesome.com/61c86f5225.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>MINIMALSITE</title>
    <style>
        <?php include '../css/styleadmin.css'; ?>
    </style>
</head>

<body>
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">minimalsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <div class="navbar-nav">
                            <li class="nav-item ">
                                <a class="nav-link  active" aria-current="page " href="admin_page.php">HOME</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="order.php">ORDER</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="member.php">MEMBER</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="form.php">FORM</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="addproduct.php">Product</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="../logout.php">LOGOUT</a>
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