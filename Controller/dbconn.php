<?php

        $conn = new mysqli('localhost' , 'root' , '' ,"ipt");

        if($conn->connect_error)
            die("Error: " . $conn->error);
?>