<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi_logint</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylelogin.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <script src="https://kit.fontawesome.com/61c86f5225.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h2>LOGIN</h2>

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>

        <?php endif ?>

        <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </h3>
            </div>

        <?php endif ?>

        <div class="box">

            <form action="login_db.php" method="post" class="form-horizontal my-5">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-12">
                        <input type="text" name="txt_email" class="form-control" required placeholder="enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-12">
                        <input type="text" name="txt_password" class="form-control" required placeholder="enter password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="type" class="col-sm-5 control-label">Select Type</label>
                    <div class="col-sm-12">
                        <select name="txt_role" class="form-control">
                            <option value="" selected="selected">- Select Role -</option>
                            <option value="admin">Admin</option>

                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 mt-5">
                        <input type="submit" name="btn_login" class="btn" style="width:100%" value="Login">
                    </div>
                </div>
                <div class="form-group text-center">
                    <div class="col-sm-12 mt-3">
                        You dont't have a account register here? <p><a href="register.php">Regiser Account</a></p>
                    </div>
                </div>
                <div class="form-group text-center">
                    <p>back to home page</p>
                    <a href="../home.php" class="text-decoration-none minimalsite">MINIMALSITE</i></a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>