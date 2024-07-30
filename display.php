<?php 
	
	include "con_sql.php";
?>

<?php
	$data=mysqli_query($con,"SELECT * FROM connect_sql"); 
	//echo $data;
?>

<table border="5px" bordercolor="red" width="80%" cellspacing="10" align="center">
	
		<tr>
			<th>emp_id</th>
			<th>emp_fname</th>
			<th>emp_lname</th>
			<th>emp_email</th>
			<th>emp_contact</th>
			<th>emp_year</th>
			<th>emp_password</th>
			<th>emp_gender</th>
			<th>emp_hobby</th>
			<th colspan="2">Action</th>
		</tr>

	<?php 
		
		while($row = mysqli_fetch_array($data))
		{ 
	?>
	<tr>
		<td><?php echo $row['emp_id']; ?></td>
		<td><?php echo $row['emp_fname']; ?></td>
		<td><?php echo $row['emp_lname']; ?></td>
		<td><?php echo $row['emp_email']; ?></td>
		<td><?php echo $row['emp_contact']; ?></td>
		<td><?php echo $row['emp_year']; ?></td>
		<td><?php echo $row['emp_password']; ?></td>
		<td><?php echo $row['emp_gender']; ?></td>
		<td><?php echo $row['emp_hobby']; ?></td>

		<td><a href="edit.php?edit_id=<?php echo $row['emp_id']; ?>" onclick="return confirm('Are You Sure To Update ?')">Update</a></td>

		<td><a href="delete.php?del=<?php echo $row['emp_id']; ?>" onclick="return confirm('Are You Sure To Delete ?')">Delete</a></td>

	</tr>
<?php 
		
	}
?>
<table>


<?php //////Error Showing in emp_contact ..... ?>