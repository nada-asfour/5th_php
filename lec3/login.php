<?php
SESSION_start();
$emailErr="";
$passErr="";
$email="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
     }if(empty($email)){
    $emailErr= "Enter an Email";
    }else if(empty($pass)){
    $passErr= "Enter Password";
}else{
    $_SESSION['email']=$email;
    $_SESSION['pass']=$pass;
    header("Location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto mt-5 p-5">
            <form method="post" class="mt-5 p-5">
                <?php 
                if(isset($_SESSION['message'])){
                    echo "<h3 class='text-center alert alert-danger'>".$_SESSION['message']."</h3>";
                    unset($_SESSION['message']);
                }
                ?>
                <h4><?php echo $emailErr?></h4>
                <input type="email" class="form-control mb-4" placeholder="Eamil" name="email" value="<?php echo $email?>">
                <h4><?php echo $passErr?></h4>
                <input type="password" class="form-control mb-4" placeholder="Password" name="pass">
                <input type="submit" class="btn btn-success btn-block" value="Login">
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>