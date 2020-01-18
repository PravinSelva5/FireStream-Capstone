<?php
    define('DB_NAME', 'firestream');
    define('DB_USER','root');
    define('DB_PASSWORD','1234');
    define('DB_HOST', 'localhost');

    $link=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

    mysqli_select_db($link,DB_NAME);

    if(isset($_POST['username'])){
        $uname=$_POST['username'];
        $password=$_POST['password'];

        $sql = "SELECT * FROM loginform where User='".$uname."'AND Pass='".$password."'limit 1";
        
        $result=mysqli_query($link,$sql);

        if(mysqli_num_rows($result)==1){
            echo "You have successfully logged in!";
            exit();
        }
        else{
            echo "You have entered an incorrect password!";
            exit();
        }
    }
    mysqli_close();
?>