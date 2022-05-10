<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style type="text/css">
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 500px;
  background-color: blueviolet;
}

li a {
  display: block;
  color: #000;
  padding: 55px 26px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: purple;
  color: white;
}
  </style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image:url('aimage.jpg');background-size: 100% 800px;">
		
<div style="width:100%;height:80px;background-color: blueviolet;">
  <div style="width:50%;height:80px;float: left;">
    <h2 style="margin-top:20px">Admin Dashboard</h2>
    
  </div>
  <div style="width:50%;height:80px;margin-left: 510px;">
    
    <button class="btn btn-outline-warning" style="margin-left:400px;margin-top: 25px;"><a style="text-decoration:none;color: white;" href="adminlogout.php">Logout</a></button>
  </div>
  
</div>
<div style="width:100%;height:600px;border: solid;:">
  <div style="width:50%;height:600px;border:solid;float: left;">
   <ul>
  <li><a href="viewteacher.php">View Teachers</a></li>
  <li><a href="viewnotesadmin.php">View Notes</a></li>
  <li><a href="viewslbsadmin.php">View Syllabus</a></li>
  <li><a href="viewtmetbleadmin.php">View Timetable</a></li>
  <li><a  href="viewstdnts.php">View Students</a></li>
</ul> 
  </div>
  <div style="width:50%;height:600px;border:solid;border-color: black;margin-left: 500px;">
    <img src="avimage.jpg" width="" height="670px">
    
  </div>
  
</div>
  
</body>
</html>