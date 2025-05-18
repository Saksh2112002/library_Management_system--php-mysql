<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
    
form {
  max-width: 500px;
  margin: 30px auto;
  padding: 20px;
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  box-sizing: border-box;
}


form input[type="text"],
form input[type="number"],
form input[type="email"],
form input[type="password"] {
  width: 100%;
  padding: 14px 16px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  box-sizing: border-box;
  transition: border 0.3s ease;
}

form input[type="text"]:focus,
form input[type="number"]:focus,
form input[type="email"]:focus,
form input[type="password"]:focus {
  border-color: #2575fc;
  outline: none;
}


form input[type="submit"] {
  background-color: #2575fc;
  color: #fff;
  padding: 14px;
  border: none;
  border-radius: 8px;
  width: 100%;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s ease;
}

form input[type="submit"]:hover {
  background-color: #1a5ed1;
}


@media (max-width: 600px) {
  form {
    padding: 15px;
  }

  form input[type="submit"] {
    font-size: 15px;
  }
}

</style>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age =$_REQUEST['age'];
$submittedby = $_SESSION["username"];
$update="update new_record set trn_date='".$trn_date."', name='".$name."', age='".$age."', submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>


</div>
</div>
</body>
</html>
