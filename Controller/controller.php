<?php
 include "dbconn.php";
if(isset($_POST['username']) && isset($_POST['password'])){
     
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username)){   
        header("Location: ../View/index.php?parameter=Please Enter Username");
        exit();

    }else if(empty($password)){
        header("Location: ../View/index.php?parameter=Please Enter Password");
        exit();
    }   
}
$stmt = "SELECT * FROM group1 WHERE `USERNAME`='$username' AND `PASSWORD`='$password'";
$sql = $conn->query($stmt);
if ($sql->num_rows > 0){  
    while ( $row = $sql->fetch_assoc()){     
        header("Location: ../View/index.php?parameter=Logged in successfully "  . $row["usrname"] . ". " );
        }
        exit();
    } else {
        header("Location: ../View/index.php?parameter=User not found");
        exit();
    }
    $conn->close();