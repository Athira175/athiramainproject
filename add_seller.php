<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="img.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="foott.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>main page</title>
  <style>
.regbox
 {
	width:450px;
    height: 900px;
    background: rgba(128, 64, 11, 0.445);
    color: #fff;
    top: 80%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

}

.regbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    text-align: left;
}
.regbox input{
    width: 100%;
    margin-bottom: 20px;
    
}
.regbox input[type="text"]
{
    border: none;
    border-bottom: 1px solid rgb(22, 20, 20);
    background: transparent;
    outline: none;
    height: 40px;
    color : rgb(17, 16, 16);
    font-size: 16px;
}

.regbox input[type="password"]
{
    border: none;
    border-bottom: 1px solid rgb(226, 18, 18);
    background: transparent;
    outline: none;
    -webkit-text-security: disc;
    height: 40px;
    color : rgb(255, 255, 255);
    font-size: 16px;  
}
.regbox input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color:#fff;
    font-size: 18px;
    border-radius: 20px;

}
.regbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.regbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgray;
}
.regbox a:hover
{
    color: #ffc107;
}
.newform
    {
        background-color: rgba(240, 255, 255, 0.322);
        margin: 140px auto;
        padding-bottom: 30px;
        width: 300px;
        padding: 30px 25px;
        border-radius: 25px;
        background: white;
            
    }
    .form {
    margin-top: 50px;
    transition: all 4s ease-in-out;
     margin: 140px auto;
    width: 300px;
    height: 500px;
    padding: 30px 25px;
    background: black;
    padding-bottom: 30px;
}




</style>
</head>
<body class="bg">




<?php
    require('db.php');
     
    if (isset($_POST['register-btn'])) {
        $fna    = stripslashes($_REQUEST['fna']);
        $fna   = mysqli_real_escape_string($con, $fna);

        $lna   = stripslashes($_REQUEST['lna']);
        $lna   = mysqli_real_escape_string($con, $lna);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $phone    = stripslashes($_REQUEST['phone']);
        $phone   = mysqli_real_escape_string($con, $phone);
        
        $u_password = stripslashes($_REQUEST['u_password']);
        $u_password = mysqli_real_escape_string($con, $u_password);
        $cpassword    = stripslashes($_REQUEST['cpassword']);
        $cpassword    = mysqli_real_escape_string($con, $cpassword);
        $usertype="seller";
        //$query    = "INSERT into users(fna,lna,email,phone,u_password,cpassword)
       // VALUES ('$fna','$lna','$email','$phone','" . md5($u_password) . "','" . md5($cpassword) ."' )";
       $query    = "INSERT into user(fna,lna,email,phone,u_password,cpassword,u_status)
        VALUES ('$fna','$lna','$email','$phone','$u_password','$cpassword','$usertype')";
        $result   = mysqli_query($con, $query);

        
        if ($result) {
           echo "<div class='newform'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'> Click here to <a href='login1.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='newregister.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="regbox">
                
                <h1>Add Seller</h1>

    <form  method="post" name="login">
        <div class="form_input">
    <p>First Name</p>
    <span style="color:red;" id="out_fname"></span>
        <input type="text"  oninput="fnamecheck();" class="login-input" name="fna" placeholder="First Name" required />
        
    </div>
        <p>Last Name</p>
        <span style="color:red;" id="out_lname"></span>
        <input type="text" oninput="lnamecheck();"  class="login-input" name="lna" placeholder="Last Name" Required>
        
        <p>Email</p>
        <span style="color:red;" id="out_email"></span>
        <input type="text"  oninput="mailcheck();" class="login-input" name="email" placeholder="Email" Required>
       
        <p>Phone</p>
        <span style="color:red;" id="out_mobile"></span>
        <input type="text" oninput="mobilecheck();" class="login-input" name="phone" placeholder="Phone" Required>
        
        <p>Password</p>
        <span style="color:red;" id="out_pass1"></span>
        <input type="password" oninput="pass1check();" class="login-input" name="u_password" placeholder="Password" Required>
        
        <p>Confirm Password</p>
        <span style="color:red;" id="out_pass2"></span>
        <input type="password" oninput="pass2check();" class="login-input" name="cpassword" placeholder="Confirm Password" Required>
        
        <input type="Submit" name="register-btn" value="Register">
        <p>Already Have an Account? <a href="seller.php">Back</a></p>
  </form>
    </div>
<?php
    }
?>



</body>
<script src="register_validation.js" type="text/javascript"></script>
</html>
