|<?php include 'pdconnect.php'; ?>



<?php

if(move_uploaded_file($_FILES["image"]["tmp_name"],"../../imgs/".$_FILES["image"]["name"]))
{
echo "Copy/Upload Complete<br>";
 
$pdname = $_POST['pdname'];
$code = $_POST['code'];
$price = $_POST['price'];


$sql = "INSERT INTO tblproduct (name, code, image, price)
        VALUES ('$pdname', '$code','" . $_FILES["image"]["name"] . "', '$price')";

if ($conn->query($sql) === TRUE) {
    echo include ("addproduct.php") ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
