<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<center>
	<h1>Signup</h1>
	<hr>

	<form action="insert.php" method="POST">
		
		<table border="5px" bordercolor="red" width="40%">

			<tr>
				<th>
					<label>First Name : </label>
				</th>
				<td>
					<input type="text" size="30" name="txtfname" placeholder="Enter Your First Name">
				</td>
			</tr>

			<tr>
				<th>
					<label>Last Name : </label>
				</th>
				<td>
					<input type="text" size="30" name="txtlname" placeholder="Enter Your Last Name">
				</td>
			</tr>

			<tr>
				<th>
					Contact : 
				</th>
				<td>
					<input type="text" name="txtucnct" placeholder="Enter Email Id" >
				</td>
			</tr>

			<tr>
				<th>
					Email ID
				</th>
				<td>
					<input type="text" name="txtuemail" placeholder="Enter Email Id" >
				</td>
			</tr>

			<tr>
				<th>
					Year :
				</th>
				<td>
					<select name="selyear">
						<option value="2010">2010</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>
					Password :
				</th>
				<td>
					<input type="text" name="txtpwd" placeholder="Enter Your Password">
				</td>
			</tr>

			<tr>
				<th>
					Gender :
				</th>
				<td>
					<input type="radio" name="rdogen" value="Male">Male
					<input type="radio" name="rdogen" value="Female">Female
				</td>
			</tr>

			<tr>
				<th>
					Hobbies :
				</th>
				<td>
					<input type="checkbox" name="chklist[]" value="Cricket">Cricket
					<input type="checkbox" name="chklist[]" value="Reading">Reading
					<input type="checkbox" name="chklist[]" value="Driving">Driving
				</td>
			</tr>

		</center>
	</table>
	
	<br><br>
		<input type="submit" name="btnsubmit" value="Sign Up">
		<input type="reset" name="btnreset" value="Cancal">
	</form>
</body>
</html>
