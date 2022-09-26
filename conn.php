<?php
    $conn = mysqli_connect('localhost', 'root', '', 'loginwith_email');
    if (!$conn) {
        echo 'connection Failed';
    }
?>