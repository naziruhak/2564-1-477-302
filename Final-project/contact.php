<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/61c86f5225.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style4.css">
    <title>contact</title>
</head>

<body>
    <?php include('header.php'); ?>
    <section class="form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2>Send Form</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <dev class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box">
                                <div class="icon d-flex justify-content-center align-item">
                                    <span class="fa fa-facebook" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <p><span>Facebook:</span> minimalsite</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="icon d-flex justify-content-center align-item">
                                    <span class="fa fa-instagram" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <p><span>Instragram:</span>minimalsite</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="icon d-flex justify-content-center align-item">
                                    <span class="fa fa-twitter" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <p><span>Twitter:</span>minimalsite</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="box">
                                <div class="icon d-flex justify-content-center align-item">
                                    <span class="fa fa-youtube-play" aria-hidden="true"></span>
                                </div>
                                <div class="text">
                                    <p><span>Youtube:</span>minimalsite</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </dev>
            </div>
            <div class="row">
                <div class="col col-md-5">
                    <div class="image-contact">
                        <img src="picture/10.scandinavian/1 (11).jpg" alt="">
                    </div>
                </div>
                <div class="col col-md-6 col-12">
                    <form action="contact_db.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="fname" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="text" class="form-control" placeholder="E-mail" name="email" required>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group last">
                                    <label for="">Phon Number</label>
                                    <input type="text" class="form-control" placeholder="+66 000-000-000" name="phone" required>
                                </div>
                            </div>
                            <hr>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Subject</label>
                                    <input type="text" class="form-control" placeholder="" name="subject" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Message</label>
                                    <textarea name="message" id="message " class="form-control" cols="30 " rows="4 " placeholder="message " required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="form-group ">
                                    <button type="submit" name="btn_contact" class="btn " id="submit" value="sendmessage"> Submit</button>
                                </div>
                            </div>
                            <div class="col-md-6 address">
                                <address> <span>MINIMALSITE</span><br>
                                    229/ raod 8 tanyongmas range nratiwat 96130 <br>
                                    <span>TELL</span> +66 61-905-6484 <br>
                                    <span>E-mail</span> Na-zirulhak@hotmail.com
                                </address>
                            </div>
                            <div class="col-md-6 address">
                                <address> <span>MINIMALSITE</span><br>
                                    229/ raod 8 tanyongmas range nratiwat 96130 <br>
                                    <span>TELL</span> +66 61-905-6484 <br>
                                    <span>E-mail</span> Na-zirulhak@hotmail.com
                                </address>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>


    <?php include('footer.php'); ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>

</html>

</html>