<html>

<?php
$con=mysqli_connect('localhost','root','','teacher');
$sql="select * from tmetble";
$query=mysqli_query($con,$sql);

?>
<body style="background-image:url('aimage.jpg');background-size: 100% 800px;">
	<form>
		<h2>View Timetable</h2>
		<table border="3" style=" border-collapse: collapse";>
			<tr>
				<th style="padding:20px;font-size:15px;">id</th>
				<th style="padding:20px;font-size:15px;">Class</th>
				<th style="padding:20px;font-size:15px;">Time Table</th>
				<th style="padding:20px;font-size:15px;">Note</th>
				

				</tr>
				<?php
				while($row=mysqli_fetch_array($query)){

					?>                                                                                                                                                              

				<tr>
					<td style="padding:20px;font-size:15px;"><?php echo $row['id']?></td>
					
					<td style="padding:20px;font-size:15px;"><?php echo $row['class']?></td>
					<td style="padding:20px;font-size:15px;"><?php echo $row['tmetble']?></td>
										
					
					<td style="padding:20px;font-size:15px;"><a href="approvetmetble.php ? id=<?php echo $row['id'];?>">Approve </a></td>
					<td style="padding:20px;font-size:15px;"><a href="canceltmetble.php ? id=<?php echo $row['id'];?>">Decline</a></td>
					
				</tr>
				<?php
			     }

				?>



				
		</table>
	</form>
</body>


</html>