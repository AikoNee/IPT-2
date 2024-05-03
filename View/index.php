<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="container">
        <div class="wrapper">
     <form action="../controller/controller.php" method="post">
     <input type="text" placeholder="Email or phone number" name="username" style="margin-top: 14px;">
        <input type="password" placeholder="Password" name="password" style="margin-top: 14px;">
        <input type="submit" value="Log In" class="login" style="margin: 14px;">
    <p>Forgot password?</p>
    <div class="hr"><hr></div>
    <button style="margin-top: 5px;">Create new account</button>
    </form>
                    <div class="msg">
                <?php  
                    if(isset($_GET['parameter'])){
                           $msg = $_GET['parameter'];
                          echo"<p> ".$msg ."</p>";
                    }
                  
                ?>
                </div>
            </div>  
        </div>
        
    </body>
<html>