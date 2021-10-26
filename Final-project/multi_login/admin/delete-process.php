<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_multiplelogin";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql to delete a record*/
    $sql = "DELETE FROM masterlogin WHERE id='" . $_GET["id"] . "'";
    $sqlform = "DELETE FROM contact WHERE id='" . $_GET["id"] . "'";
    /*use exec() because no results are returned*/
    $conn->exec($sql);
    echo "Record deleted successfully";
    header("location: form.php");

    $conn->exec($sqlform);
    echo "Record deleted successfully";
    header("location: form.php");
    }
    


catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>