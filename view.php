<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<style>
    
table {
  width: 100%;
  max-width: 1200px; 
  margin: 20px auto;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
}

thead {
  background-color: #2575fc;
  color: #fff;
}

th,
td {
  padding: 16px 20px;
  border: 1px solid #ddd;
  text-align: left;
  font-size: 16px;
}

tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

tbody tr:hover {
  background-color: #f1f1f1;
}


@media (max-width: 768px) {
  table,
  thead,
  tbody,
  th,
  td,
  tr {
    display: block;
    width: 100%;
  }

  thead {
    display: none;
  }

  tbody tr {
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 12px;
    background-color: #fff;
  }

  td {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 18px; 
    border: none;
    border-bottom: 1px solid #eee;
  }

  td::before {
    content: attr(data-label);
    font-weight: bold;
    color: #333;
    flex-basis: 45%;
    flex-shrink: 0;
  }
}

</style>
<body>
<div class="form">
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>


</div>
</body>
</html>
