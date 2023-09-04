<?php

    include 'connection.php';

    echo '<table><tr><td>Name</td><td>Phone</td><td>Email</td><td>Note</td></tr>';
    while($row = mysqli_fetch_assoc($run)){
        echo '<tr><td>'.$row['name'].'</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['note'].'</td></tr>';
    }

    echo '</table>';




?>