<?php
require 'config.php';
require 'header.php';


$email=$password='';
$email_err=$password_err='';

//process data
if(isset($_POST['btn_login_landlord'])){
//    grab data from form
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

//check if user has the right email and password
    $sql="SELECT `id`, `firstname`, `lastname`, `email`, `password` FROM `lanlords` WHERE email='$email','$password'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
//    user found
//    loop through user data from table
        while($row=mysqli_fetch_assoc($result)){
//        required id,email
            session_start();
            $_SESSION['kipande']=$row['id'];
            $_SESSION['email']=$row['email'];
            $_SESSION['loggedin']=true;
            header('location:index.php');
            exit();
        }
    }else{
//    password or email is wrong
        header("location:index.php");
    }
}
?>

<!--start signing up form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="auth-form">
                <form action=""<?php echo htmlspecialchars(@$_SERVER['PHP_SELF'])?> method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="btn_login_landlord">login</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
</div>

