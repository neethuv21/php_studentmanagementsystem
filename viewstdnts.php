<html>

<?php
$con=mysqli_connect('localhost','root','','teacher');
$sql="select * from sregister";
$query=mysqli_query($con,$sql);

?>
<body style="background-image:url('aimage.jpg');background-size: 100% 800px;">
	<form>
		<h2>View Students</h2>
		<table border="3" style=" border-collapse: collapse";>
			<tr>
				<th style="padding:20px;font-size:15px;">id</th>
				<th style="padding:20px;font-size:15px;">Name</th>
				<th style="padding:20px;font-size:15px;">Email</th>
				<th style="padding:20px;font-size:15px;">Password</th>
				<th style="padding:20px;font-size:15px;">Phone</th>
				

				</tr>
				<?php
				while($row=mysqli_fetch_array($query)){

					?>                                                                                                                                                              

				<tr>
					<td style="padding:20px;font-size:15px;"><?php echo $row['id']?></td>
					
					<td style="padding:20px;font-size:15px;"><?php echo $row['name']?></td>
					<td style="padding:20px;font-size:15px;"><?php echo $row['email']?></td>
					<td style="padding:20px;font-size:15px;"><?php echo $row['password']?></td>
					<td style="padding:20px;font-size:15px;"><?php echo $row['phone']?></td>
					
					
					<td style="padding:20px;font-size:15px;"><a href="approvstdadmin.php ? id=<?php echo $row['id'];?>">Approve </a></td>
					<td style="padding:20px;font-size:15px;"><a href="cancelstdadmin.php ? id=<?php echo $row['id'];?>">Decline</a></td>
					
				</tr>
				<?php
			     }

				?>



				
		</table>
	</form>
</body>


</html>