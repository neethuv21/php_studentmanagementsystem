<html>

<?php
$con=mysqli_connect('localhost','root','','teacher');
$sql="select * from notes";
$query=mysqli_query($con,$sql);

?>
<body style="background-image:url('bimage.jpg');background-size: 100% 800px;">
	<form>
		<h2>View Approved Notes</h2>
		<table border="5" style=" border-collapse: collapse";>
			<tr>
				<th style="padding:20px;font-size:15px;">id</th>
				<th style="padding:20px;font-size:15px;">Class</th>
				<th style="padding:20px;font-size:15px;">Subject</th>
				<th style="padding:20px;font-size:15px;">Note</th>
				

				</tr>
				<?php
				while($row=mysqli_fetch_array($query)){
					if($row['status']==1){
			

					?>                                                                                                                                                              

				<tr>
					<td style="padding:20px;font-size:15px;"><?php echo $row['id']?></td>
					
					<td style="padding:20px;font-size:15px;"><?php echo $row['class']?></td>
					<td style="padding:20px;font-size:15px;"><?php echo $row['subject']?></td>
					<td style="padding:20px;font-size:15px;"><?php echo $row['data']?></td>
					
					
					
				</tr>
				<?php
			     }
			 }

				?>



				
		</table>
	</form>
</body>


</html>