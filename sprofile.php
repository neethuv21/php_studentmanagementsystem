<html>
<?php
$con=mysqli_connect('localhost','root','','teacher');
$sql="select * from sregister";
$query=mysqli_query($con,$sql);

?>
<body>
	<form>
		<table border="5">
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
				<th>Phone</th>
				</tr>
				<?php
				while($row=mysqli_fetch_array($query)){

					?>

				<tr>
					<td><?php echo $row['id']?></td>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['password']?></td>
					<td><?php echo $row['phone']?></td>
					<td><a href="stdedit.php ? id=<?php echo $row['id'];?>">Edit Profile</a></td>
					</tr>
				<?php
			     }

				?>



				
		</table>
	</form>
</body>


</html>