<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['login-btn'])) 
    {
        $email = stripslashes($_REQUEST['email']);   
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $query    = "SELECT * FROM `user` WHERE email='$email'
                     AND u_password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $user_type=mysqli_fetch_array($result);
        
        if ($user_type['u_status'] == "user") 
        {
            $_SESSION['email'] = $email;
            header('Location: home.php');
        } 
        else if($user_type['u_status']=="admin")
        {
            $_SESSION['email'] = $email;
            header('Location:admin/categories.php');
        }
        else if($user_type['u_status']=="seller")
        {
            $_SESSION['email'] = $email;
            header('Location:admin/sellerpage.php');
        }

        else  {
            $_SESSION['status']='Email or Password is Incorrect';
            header('Location:hjhjhjjhj.php');
        }
    }
        ?>