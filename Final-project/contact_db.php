

<?php include 'connect.php'; ?>

<?php

$fname = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact (fname, email, phone, subject, message)
        VALUES ('$fname', '$email', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo include ("contact.php") ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


