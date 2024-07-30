<?php
	include "con_sql.php";

	//echo "hello";

	if(isset($_GET['del']))
	{
		$delete = "DELETE FROM connect_sql WHERE emp_id=$_GET[del]";
		mysqli_query($con, $delete);
		header("location: display.php");
	}
?>