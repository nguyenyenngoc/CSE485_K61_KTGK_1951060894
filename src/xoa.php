<?php
    require('./config.php');
    if(isset($_GET['reci_id'])) {
        $id = $_GET['reci_id'];
        $sql = "DELETE from blood_recipient where reci_id = '$id'";
        $result = mysqli_query($conn, $sql);
        header('location: index.php');
    }

