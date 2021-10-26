<?php
session_start();

if (!isset($_SESSION['admin_login'])) {
    header("location: ../login.php");
}

?>

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
    <title>File upload</title>
    <style>
        <?php include '../css/styleadmin.css'; ?>
    </style>
</head>

<body>
    <!------------ Header ------------------>
    <?php include('header_admin.php'); ?>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <!-- <div class="col col-md-6">
                    <img src="../../picture/11.rustic/1 (3).jpg" alt="">
                </div> -->
                <div class="col col-12">
                    <div class="col">
                        <h2 class="head-product">Upload Product</h2>
                        <img src="../../picture/2.coastal/1 (13).jpg" alt="" class="picbar">
                    </div>
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control" placeholder="Product Name" name="pdname" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Code</label>
                                    <input type="text" class="form-control" placeholder="Code" name="code" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control" placeholder="Price" name="price" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="file" class="form-control" placeholder="Price" name="image" required>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group ">
                                    <button type="submit" name="btn_contact" class="btn-pd " id="submit" value="sendmessage"> Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>

</html>