<!DOCTYPE html>
<html>
<head>
	<?php
	$con=mysqli_connect('localhost','root','','teacher');
	session_start();
	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-image:url('timage.jpg');background-size: 100% 800px;">
<div style="margin-top:50px">
	<center>
		<h1 >Login Form</h1>
	<form class="row" method="post">
  <div class="col-md-12 mt-4">
    <label for="" class="form-label">Email</label>
    <input type="email" name="email" class="form-control w-50" id="">
  </div>
  <div class="col-md-12">
    <label for="" class="form-label">Password</label>
    <input type="password" name="password" class="form-control w-50" id="" placeholder="">
  </div>
    
  <div class="col-md-12">
    <button type="submit" name="submit" class="btn btn-primary mt-4">Sign in</button>
  </div>
</form>
</center>
</div>
</body>

<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="select * from register  where email='$email' AND password='$password'";
		$result=mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
		$row=mysqli_fetch_array($result);
		if($row['status']==1){
					$_SESSION['sessid']=$row['id'];

		header('location:tprofile.php');
	    }
	    else{
	    	echo "admin not approve";
	    }
		}
else{
		echo"invalid email and password";
	    }
        }
	?>

</html>