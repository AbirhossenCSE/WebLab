<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            Logo
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">phone</a></li>
                <li><a href="#">contract</a></li>
            </ul>
            <form action="">
                <input type="text" id="search" name="search" placeholder="Sesrch by name">
                <input type="submit" value="search" class="btn">
            </form>
        </div>
    </div>
    <div class="info">
        <fieldset>
            <form action="main.php" method="post">
                <label for="name">Name :</label>
                <input type="text" id="name" name="name">
                <br><br>
                <label for="phone">Phone :</label>
                <input type="tel" id="phone" name="Phone">
                <br><br>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
                <br><br>
                <label for="note">Note :</label>
                <input type="text" id="note" name="note">
                <br><br>
                <input type="Submit" value="save" class="btn">
            </form>
        </fieldset>
    </div>
    <script src="main.js"></script>
</body>
</html>


<?php

    include 'connection.php';

    $query = "SELECT * FROM lab4";

    $run = mysqli_query($con, $query);

    if(mysqli_num_rows($run) > 0){
        include 'list.php';
    } else{
        echo "no data found";
    }


?>