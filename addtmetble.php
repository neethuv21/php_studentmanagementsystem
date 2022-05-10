<!DOCTYPE html>
<html>
<?php
$con=mysqli_connect('localhost','root','','teacher')
?>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-image:url('timage.jpg');background-size: 100% 800px;">
<div style="margin-top: 50px;">
	<center>
		<h2>Timetable</h2>
	<form method="post" enctype="multipart/form-data" >
	<label for="">Choose a Class:</label>

<select name="class" id="">
  <option value="I">I</option>
  <option value="II">II</option>
  <option value="IV">IV</option>
</select>


<input type="file" name="tmetble" style="margin-left:30px;margin-top: 40px;"><br>
<input type="submit"  name="submit" value="submit" style="margin-top:50px; width: 250px;">
</center>
</form>
</div>
</body>
<?php
if(isset($_POST['submit'])){
	$class=$_POST['class'];
	
	$tmetble=$_POST['tmetble'];
	$tmetble=basename($_FILES["tmetble"]["name"]);
	$path="file/".$tmetble;
	move_uploaded_file($_FILES["tmetble"]["tmp_name"],$path);
	
	$sql="insert into tmetble (class,tmetble) values('$class','$tmetble')";
	mysqli_query($con,$sql);
		header('location:tprofile.php');


}
?>
</html>