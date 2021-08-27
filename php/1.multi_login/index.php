<?php 

    session_start();

    if(isset($_SESSION['admin_login'])) {
        header("location: admin/admin_home.php");
    }
    if(isset($_SESSION['employee_login'])) {
        header("location: employee/employee_home.php");
    }
    if(isset($_SESSION['user_login'])) {
        header("location: user/user_home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi_logint</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <hr>

        <?php if(isset($_SESSION['success'])) :?>
            <div class="alert alert-success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div> 

        <?php endif ?>
        
        <?php if(isset($_SESSION['error'])) :?>
            <div class="alert alert-danger">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </h3>
            </div> 

        <?php endif ?>


        <form action="login_db.php" method="post" class="form-horizontal my-5">

            <label for="email" class="col-sm-3 control-label">E-mail</label>
            <div class="col-sm-12">
                <input type="text" name="txt_email" class="form-control" required placeholder="enter email">
            </div>
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-12">
                <input type="text" name="txt_password" class="form-control" required placeholder="enter password">
            </div>

            <div class="form-group">
                <label for="type" class="col-sm-5 control-label">Select Type</label>
                <div class="col-sm-12">
                    <select name="txt_role" class="form-control">
                        <option value="" selected="selected">- Select Role -</option>
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 mt-5">
                    <input type="submit" name="btn_login" class="btn btn-success" style="width:100%" value="Login">
                </div>
            </div>
            <div class="form-group text-center">
                <div class="col-sm-12 mt-3">
                    You dont't have a account register here? <p><a href="register.php">Regiser Account</a></p>
                </div>
            </div>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>