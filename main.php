<?php
    include 'connection.php';


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $note = $_POST['note'];

    $query = "INSERT INTO lab4(name, phone, email, note) VALUES('$name', '$phone', '$email', '$note')";

    $run = mysqli_query($con, $query);

    if(!$run){
        echo "save faild";
    } else{
        header('location:table.php');
    }



?>