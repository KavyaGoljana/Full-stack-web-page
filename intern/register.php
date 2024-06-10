<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $name = $_POST['name'];
     $mail = $_POST['mail'];
     $address = $_POST['address'];
     $number = $_POST['number'];
     $event = $_POST['event'];
     $pwd = $_POST['pwd'];

    $conn = new mysqli('localhost', 'root', 'A.ovrEA.ovrEE6W]--QP--E6W]--QP--', 'application_form');

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
  
    $sql = "INSERT INTO form (name, mail, address, number, event , pwd) VALUES ('$name', '$mail', '$address', $number,'$event','$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
    $conn->close();
}
?>