<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
<?php
$con=mysqli_connect('localhost','root','','teacher');
$id=$_GET['id'];
$sql="select * from register where id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<head>
<title>Edit</title>
</head>
<body style="background-image:url('timage.jpg');background-size: 100% 800px;">
<div id="tedit">
	<center>
		<h1 >Edit Form</h1>
	<form class="row" method="post" action="">
  <div class="col-md-12 mt-2">
    <label for="" class="form-label" >Name</label>
    <input type="text" name="name" value=" <?php echo $row['name'];?>" class="form-control w-50" id="">
  </div>
  <div class="col-md-12">
    <label for="" class="form-label" >Email</label>
    <input type="email" name="email" value=" <?php echo $row['email'];?>" class="form-control w-50" id="">
  </div>
  <div class="col-md-12">
    <label for="" class="form-label" >Password</label>
    <input type="password" name="password" value=" <?php echo $row['password'];?>" class="form-control w-50" id="" placeholder="">
  </div>
  <div class="col-md-12">
    <label for="" class="form-label" >Mobile No.</label>
    <input type="text" name="mobile" value=" <?php echo $row['phone'];?>" class="form-control w-50" id="" placeholder="">
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
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['mobile'];
	$sql="update register set name='$name', email='$email',password='$password',phone='$phone' where id='$id'";
	mysqli_query($con,$sql);
	header('location:tprofile.php');


}
?>
</html>