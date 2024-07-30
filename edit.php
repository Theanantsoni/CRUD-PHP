<?php
  include "con_sql.php";

  if(isset($_GET['edit_id']))
  {
    $sql = "SELECT * FROM connect_sql WHERE emp_id=" .$_GET['edit_id'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
  
  }
 
  if(isset($_POST['btn-update']))
  {
    $efname = $_POST['txtfname'];
    $elname = $_POST['txtlname'];
    $eemail = $_POST['txtuemail'];
    $econtact = $_POST['txtucnct'];
    $eyear = $_POST['selyear'];
    $epass = $_POST['txtpwd'];
    $egen = $_POST['rdogen'];
    $chkbox = implode(',', $_POST['chklist']);

    $update = "UPDATE connect_sql SET emp_fname='$efname', emp_lname='$elname', emp_email='$eemail', emp_contact='$econtact', emp_year='$eyear', emp_password='$epass', emp_gender='$egen', emp_hobby='$chkbox' WHERE emp_id= ".$_GET['edit_id'];

    $edit = mysqli_query($con, $update);

    if(isset($sql))
    {
      header("location: display.php");
    }
    else
    {
      echo "ERROR";
    }
  
   } 
?>


<html>
<head>
  <title>Registration Form</title>
</head>
<body>
  <center>
  <h1>Signup</h1>
  <hr>

  <form action="edit.php?edit_id=<?php echo $row['emp_id']; ?>" method="POST">
    
    <table border="5px" bordercolor="red" width="40%">

      <tr>
        <th>
          <label>First Name : </label>
        </th>
        <td>
          <input type="text" size="30" name="txtfname" placeholder="Enter Your First Name" value="<?php echo $row['emp_fname']; ?>">
        </td>
      </tr>

      <tr>
        <th>
          <label>Last Name : </label>
        </th>
        <td>
          <input type="text" size="30" name="txtlname" placeholder="Enter Your Last Name" value="<?php echo $row['emp_lname']; ?>" >
        </td>
      </tr>

      <tr>
        <th>
          Contact : 
        </th>
        <td>
          <input type="text" name="txtucnct" placeholder="Enter Email Id" value="<?php echo $row['emp_contact']; ?>">
        </td>
      </tr>

      <tr>
        <th>
          Email ID
        </th>
        <td>
          <input type="text" name="txtuemail" placeholder="Enter Email Id" value="<?php echo $row['emp_email']; ?>">
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
          <input type="text" name="txtpwd" placeholder="Enter Your Password" value="<?php echo $row['emp_password']; ?>">
        </td>
      </tr>

      <tr>
        <th>
          Gender :
        </th>
        <td>

          <input type="radio" name="rdogen" value="Male" <?php echo ($row['emp_gender'] == "Male")?"checked":"" ?>>Male

          <input type="radio" name="rdogen" value="Female" <?php echo ($row['emp_gender'] == "Female")?"checked":"" ?>>Female  
        </td>
      </tr>

      <tr>
        <th>
          Hobbies :
        </th>
        <td>
          <input type="checkbox" name="chklist[]" value="Cricket" <?php echo in_array("Cricket", explode(",", $row["emp_hobby"])) ? "checked" : ""; ?>>Cricket
          <input type="checkbox" name="chklist[]" value="Reading" <?php echo in_array("Reading", explode(",", $row["emp_hobby"])) ? "checked" : ""; ?>>Reading
          <input type="checkbox" name="chklist[]" value="Driving" <?php echo in_array("Driving", explode(",", $row["emp_hobby"])) ? "checked" : ""; ?>>Driving
        </td>
      </tr>

    </center>
  </table>
  
  <br><br>
    <button type="submit" name="btn-update" onclick="update()">Update</button>
    <button type="reset" name="btn-reset">Reset</button>
    <a href="display.php"><button type="button" value="Cancel">Cancel</button></a>
  </form>

  <script>
    function update()
    {
      var x;
      if(confirm("Updated data Sucessfully") == true)
      {
        x= "update";
      }
    }
  </script>

</body>
</html>



<?php /*$query = "select * from connect_sql where emp_id='".$emp_id."'"; */ ?>