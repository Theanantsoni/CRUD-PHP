<?php
include "con_sql.php";

	$chkbox = implode(',', $_POST['chklist']);

	if(isset($_POST['btnsubmit']))
	{	
		$fname=$_POST['txtfname'];
		$lname=$_POST['txtlname'];
		$email=$_POST['txtuemail'];
		$contact=$_POST['txtucnct'];
		$year=$_POST['selyear'];
		$pass=$_POST['txtpwd'];
		$gen=$_POST['rdogen'];

		$select="select emp_id from connect_sql where emp_email='$email'";

		$result = mysqli_query($con,$select);
		$count = mysqli_num_rows($result);
		
		if($count > 0)
		{
			echo "ERROR : Email-id Is Already Registered";
		}
		else
		{
			$sql = "INSERT INTO connect_sql VALUES (0,'$fname','$lname','$email','$contact','$year','$pass','$gen','". $chkbox . "')";

		/*if(mysqli_query($con,$sql))
		{
    		echo "Records added successfully";
    	}		
	 	else
	 	{
    		echo "ERROR: Could not able to execute";
		} */


			$data=mysqli_query($con,$sql);
		

			header("Location:display.php");
		}

	}
?>