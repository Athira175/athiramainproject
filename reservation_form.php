
<!--<?php
session_start();
include('./db.php');
include('auth_session.php');
if(isset($_POST['apply_job']))
{
	$job_id=$_POST['job_id'];
	$_SESSION['jobid']=$job_id;
	
}
if(isset($_POST['next']))
{
    foreach($_POST as $key => $value)
	{
        $_SESSION['info'][$key] = $value;
    }
	$keys=array_keys($_SESSION['info']);
	if(in_array('next',$keys))
	{
		unset($_SESSION['info']['next']);
	}
	//redirecting to next page
	header("Location:paymentgateway.php ");
}
if (isset($_POST['apply-btn']))
{

	header("Location:./step reg/form1.php");
}
?>-->
<!--<?php

$result1 = mysqli_query($con,"select reserve.psize,product.price from reserve JOIN product ON reserve.id = product.id");
$row = mysqli_fetch_array($result1);
        $item_price = 0;
        $item_quantity = 0;
		$sum=$row["price"]* $row["quantity"];
        $item_price = $item_price + $sum;
		//$item_quantity = $item_quantity + $row["quantity"];
		echo($item_price);
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Reservation</title>

	
	<link rel="stylesheet" href="./assetss/css/step-reg.css">

	<!--<link rel="stylesheet" href="./css/step-reg.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>
	.subtotal {
	text-align: right;
	padding: 40px 0;
}
.subtotal .price {
	font-size: 18px;
	color: #999999;
}
.subtotal .text {
	padding-right: 40px;
	font-size: 18px;
}
	</style>
</head>
<body>
	<?php
    require('db.php');
    $productid=0;
    if(isset($_GET['productid'])){
$productid=$_GET['productid'];
    }else{
header('location:home.php');
    }
     
    if (isset($_POST['next'])) {
      //  $product_id=$_POST['product_id'];
        $psize    = $_POST['psize'];
        

        $FName   = $_REQUEST['FName'];


        $Email    =  $_SESSION['email'];
        $totalAmount=$_POST['totalAmount'];
        $_SESSION['tp']=$_POST['totalAmount'];


        $Adrs    = $_POST['Adrs'];
        
        $dist =$_POST['dist'];
        
        $cin    = $_POST['cin'];
       
	//	$cout  =$_POST['cout'];
		$sql="select * from product where id='$productid'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($res);
    $p_id=$row['id'];
    $productRate=$row['psize'];
        //$query    = "INSERT into users(fna,lna,email,phone,u_password,cpassword)
       // VALUES ('$fna','$lna','$email','$phone','" . md5($u_password) . "','" . md5($cpassword) ."' )";
       $query    = "INSERT into reserve(product_id,psize,amount,FName,Email,Adrs,dist,cin,status)VALUES ('$p_id','$psize','$totalAmount','$FName','$Email','$Adrs','$dist','$cin',1)";
        $result   = mysqli_query($con, $query);

        
       //if ($result) {
          // echo "<div class='newform'>
               //   <h3>You are registered successfully.</h3><br/>
                 // <p class='link'> Click here to <a href='.php'>Login</a></p>
                  //</div>";
      //  } else {
            //echo "<div class='form'>
                //  <h3>Required fields are missing.</h3><br/>
                 // <p class='link'>Click here to <a href='newregister.php'>registration</a> again.</p>
                  //</div>";
       // }
    } //else {
?>
<form name="form1" action="" method="POST" class="form">
		<h1 class="text-center">Reservation<h1>
		<div class="form-step form-step-active">
			<div class="input-group">
				<?php
				//$nsql="SELECT * FROM user_login";
				//$nresult = $con->query($nsql);
				//$nrow=$result->fetch_assoc();
				//echo '<input type="hidden" value="'.$nrow['user_id']'" name="user_id">';
				?>
				
			
       <input name="psize" type="text"  class="form-control" required placeholder="Party Size" oninput="psizecheck();" onChange="calculatePrice(this.value)">
				<span style="color:red; font-size:12px;" id="out_size"></span>
			</div>
			<div class="input-group">
			<input name="FName" type="text" class="form-textbox validate[required,Email]" oninput="fnamecheck();" required placeholder="Full Name">
				<span style="color:red; font-size:12px;" id="out_lname"></span>
			</div>
			<div class="input-group">
			<input name="Adrs" type="text" class="form-control" oninput="adrscheck();" required placeholder="Address"> 
				<span style="color:red; font-size:12px;" id="out_adrs"></span>
			</div>
			<div class="input-group">
            <input name="dist" type="text" class="form-control" oninput="distcheck();" required placeholder="district" >
				<span style="color:red; font-size:12px;" id="out_dist"></span>
			</div>		
            <div class="input-group">
			<input name= "cin" type ="date" class="form-control" id="checkin" placeholder="start date (dd/mm/yy)"> 
				<span style="color:red; font-size:12px;" id="out_pan"></span>
			</div>
      <?php
      	$sql="select * from product where id='$productid'";
        $newResult=mysqli_query($con,$sql);
        while($newRow=mysqli_fetch_array($newResult)){
          ?>
<input type='hidden' id='productRate' value="<?php echo $newRow['price'];?>" > 
          
          <?php
        }
        ?>
      <div class="input-group">
			<input id='viewrate' name= "totalAmount" type ="number" class="form-control" placeholder="Total amount" readonly> 
			</div>
			
			<input type="submit" name="next"  class="btn btn-next " style = "margin-left:10px"></input>
<br>
	
		</div>
		</div>
</form>
<!--<?php
 // }
?>-->
<script src="step reg_validation.js" defer></script>
<script>
        $(document).ready(function(){
          $("#name").change(function()
          {
            var elname =$("#name").val();
                $(".data").hide();
               $("."+elname).show().fadeIn(700);
                
          }) 
        });
</script>
<!----script for dependent county select--->
<script type="text/javascript">
  function calculatePrice(val){
    document.getElementById('viewrate').value =document.getElementById('productRate').value*val;
  }
  $(document).ready(function(){
    // Country dependent ajax
    $("#country").on("change",function(){
      var countryId = $(this).val();
      $.ajax({
        url :"action.php",
        type:"POST",
        cache:false,
        data:{countryId:countryId},
        success:function(data){
          $("#state").html(data);
          $('#city').html('<option value="">Select city</option>');
        }
      });
    });
 
    // state dependent ajax
    $("#state").on("change", function(){
      var stateId = $(this).val();
      $.ajax({
        url :"action.php",
        type:"POST",
        cache:false,
        data:{stateId:stateId},
        success:function(data){
          $("#city").html(data);
        }
      });
    });
  });
</script>
<script src="./assets/js/step-registation.js" defer></script>
</body>
<script src="reservation_validation.js" type="text/javascript"></script>
<script>
        $(document).ready(function (){
            minDate = new Date();
            $("#checkin").datepicker({
               showAnim: 'drop' ,
               minDate : minDate,
               numberOfMonth: 1,
               dateFormat: 'yy/mm/dd',

            });
        });
    </script>
</html>