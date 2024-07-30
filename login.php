<?php
	include "con_sql.php";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<form action="" method="POST">
		Email :
		<input type="text" name="txtemail" placeholder="Enter Email"> <br>

		password : 
		<input type="text" name="txtpwd" placeholder="Enter Password"><br>

		<br><br>

		<input type="checkbox" name="chkrem" style="position: revert-layer; height: 20px; width: 20px;">&nbsp Remember Me

		<br><br>

		<input type="submit" name="btnsubmit" value="submit">

	</form>
</body>
</html>



<?php
	if(isset($_REQUEST['btnsubmit']))
	{
		echo $useremail=$_REQUEST['txtemail'];
		echo $userpassword=$_REQUEST['txtpwd'];

		$res=mysqli_query($con, "select * from connect_sql where emp_email='$useremail' and emp_password='$userpassword'");
		$result=mysqli_fetch_array($res);

		if($result)
		{
			echo "success";
		}
		else
		{
			echo "Error";
		}
	}
?>

