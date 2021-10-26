<?php
session_start();

if (!isset($_SESSION['admin_login'])) {
    header("location: ../login.php");
}

?>
<?php

include '../../connect.php';
$sql = "SELECT * FROM masterlogin";
$result = mysqli_query($conn, $sql);

$sqlform = "SELECT * FROM contact";
$resultform = mysqli_query($conn, $sqlform)
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
    <title>MINIMALSITE</title>
    <style>
        <?php include '../css/styleadmin.css'; ?>
    </style>
</head>

<body>
    <!------------ Header ------------------>
    <?php include('header_admin.php'); ?>
    <div class="container">
        <h2 class="text-center">ALL USER</h2>
        <table class="table table-dark table-striped">
            <tr>
                <td>User Id</td>
                <td>Username</td>
                <td>Email</td>
                <td>passwod</td>
                <td>rold id</td>
                <td>Action</td>

            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr class="<?php if (isset($classname)) echo $classname; ?>">
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><?php echo $row["role"]; ?></td>
                    <td><a class="" href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    </div>


    </div>
    </div>

    <?php

    // if (mysqli_num_rows($result) > 0) {
    //     // output data of each row
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo "id: " . $row["id"] . " - Name: " . $row["username"] . " " . $row["email"] . "<br>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    // mysqli_close($conn);

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4 " crossorigin="anonymous "></script>

</html>