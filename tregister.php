<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
	<?php
	$con=mysqli_connect('localhost','root','','teacher');
	?>
</head>
<body style="background-image:url('timage.jpg');background-size: 100% 800px;">
	
<div style="margin-top:50px;">
	<center>
		<h1 >Registration Form</h1>
	<form class="row" method="post" action="">
  <div class="col-md-12 mt-2">
    <label for="" class="form-label" >Name</label>
    <input type="text" name="name" class="form-control w-50" id="name">
    <label  id="v_name"></label>
  </div>
  <div class="col-md-12">
    <label for="" class="form-label" >Email</label>
    <input type="email" name="email" class="form-control w-50" id="email">
    <label  id="v_email"></label>
  </div>
  <div class="col-md-12">
    <label for="" class="form-label" >Password</label>
    <input type="password" name="password" class="form-control w-50" id="password" placeholder="">
    <label  id="v_password"></label>
  </div>
  <div class="col-md-12">
    <label for="" class="form-label" >Mobile No.</label>
    <input type="text" name="mobile" class="form-control w-50" id="mobile" placeholder="">
    <label  id="v_mobile"></label>
  </div>
    
  <div class="col-md-12">
    <button type="submit" name="submit" id="register" class="btn btn-primary mt-4">Sign in</button>
  </div>
</form>
</center>
</div>
</body>
<script type="text/javascript">
    document.getElementById("register").onclick=function()
    {
        var flag=true;
        var name=document.getElementById("name");
        if(name.value=="")
        {
            document.getElementById("v_name").innerHTML="please enter your name";
            var flag=false;
        }
        else if(name.value.length<3)
        {
            document.getElementById("v_name").innerHTML="name too short";
            var flag=false;
        }
        else
        {
            document.getElementById("v_name").innerHTML="";
        }
        var email=document.getElementById("email");
			var atpos=email.value.indexOf("@");
			var dotpos=email.value.lastIndexOf(".");
			if(email.value=="")
			{
				document.getElementById("v_email").innerHTML="please enter your mail id";
				var flag=false;				
			}
			else if((atpos<1)||(dotpos-atpos<2)||(dotpos+2>=email.value.length))
			{
				document.getElementById("v_email").innerHTML="invalid mail id";
				var flag=false;
			}
			else
			{
				document.getElementById("v_email").innerHTML="";
			}
			var pwd=document.getElementById("password");
			if(pwd.value=="")
			{
				document.getElementById("v_password").innerHTML="password requeird";
				var flag=false;			
			}
			else if(pwd.value.length<5)
			{
				document.getElementById("v_password").innerHTML="too short";
				var flag=false;
			}
			else
			{
				document.getElementById("v_password").innerHTML="";
			}
			  var phone=document.getElementById("mobile");
        if(name.value=="")
        {
            document.getElementById("v_mobile").innerHTML="please enter your phone no.";
            var flag=false;
        }
       
        else
        {
            document.getElementById("v_mobile").innerHTML="";
        }
        	};
      </script>


<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['mobile'];
	$sql="insert into register (name,email,password,phone) values('$name','$email','$password','$mobile')";
	   mysqli_query($con,$sql);
	   header('location:tlogin.php');

}
?>
</html>