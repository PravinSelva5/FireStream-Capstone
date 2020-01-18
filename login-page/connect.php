<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)){
    define('DB_NAME', 'firestream');
    define('DB_USER','root');
    define('DB_PASSWORD','1234');
    define('DB_HOST', 'localhost');

    $link=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die ("Could not connect!");

    $db=mysqli_select_db($link,DB_NAME) or die ("Could not connect to database!");
    

    $sql = "SELECT * FROM loginform where User='".$username."'AND Pass='".$password."'limit 1";

    $query = mysqli_query($link,$sql);
    $numrows = mysqli_num_rows($query);

    if($numrows === 1){
        $_SESSION['username'] = $username;
        header("Location: member.php");
        exit();
    }
    else{
        $_SESSION['errorMssg'] = "Invalid username or password";
    }
    header("Location: index.php");
    exit();
}
else{
    die("Please enter username and/or password!");
}
?>