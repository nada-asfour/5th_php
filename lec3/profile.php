<?php
SESSION_start();
if(isset($_SESSION['email'])&& isset($_SESSION['pass'])){
    if($_SESSION['email']== "nadaassfour2000@gmail.com" && $_SESSION['pass']==12345){
        echo $_SESSION['email'];
        echo $_SESSION['pass'];
        echo "<a href='logout.php'>logout</a>";
    }else{
        $_SESSION['message']="your acc are not in db";
        header("Location:login.php");
    }
}else{
    $_SESSION['message']="login first";
    header("Location:login.php");
}
?>