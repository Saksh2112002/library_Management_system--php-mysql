<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`age`,`submittedby`) values ('$trn_date','$name','$age','$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: linear-gradient(to right, #6a11cb, #2575fc);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.form {
  max-width: 500px;
  width: 90%;
  background-color: #ffffff;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  padding: 30px 25px;
  box-sizing: border-box;
}

.form p a {
  text-decoration: none;
  color: #2575fc;
  font-weight: 500;
  margin: 0 10px;
}

.form h1 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #2c3e50;
  text-align: center;
}

.form form p {
  margin-bottom: 15px;
}

.form input[type="text"],
.form input[type="number"] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  box-sizing: border-box;
}

.form input[type="submit"] {
  width: 100%;
  padding: 12px;
  background-color: #2575fc;
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.form input[type="submit"]:hover {
  background-color: #1e60d1;
}

.form p[style*="color:#FF0000"] {
  margin-top: 10px;
  text-align: center;
  font-weight: bold;
}

@media (max-width: 600px) {
  .form {
    padding: 25px 20px;
  }

  .form h1 {
    font-size: 20px;
  }

  .form input[type="submit"] {
    font-size: 15px;
  }
}

</style>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>


</div>
</div>
</body>
</html>
