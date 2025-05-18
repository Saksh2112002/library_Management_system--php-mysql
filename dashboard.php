<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f4f6f8;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.dashboard-container {
  width: 100%;
  max-width: 500px;
  padding: 20px;
}

.dashboard {
  background-color: #ffffff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
}

.dashboard h1 {
  font-size: 24px;
  margin-bottom: 30px;
  color: #2c3e50;
}

.dashboard-links {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.dashboard-links a {
  text-decoration: none;
  background-color: #3498db;
  color: white;
  padding: 12px 20px;
  border-radius: 8px;
  transition: background 0.3s ease;
  font-weight: 500;
  font-size: 16px;
}

.dashboard-links a:hover {
  background-color: #2a80b9;
}


@media (max-width: 500px) {
  .dashboard {
    padding: 20px;
  }

  .dashboard h1 {
    font-size: 20px;
  }

  .dashboard-links a {
    font-size: 15px;
    padding: 10px 16px;
  }
}

</style>
<body>


  <div class="dashboard-container">
    <div class="dashboard">
      <h1>Welcome to Dashboard</h1>

      <nav class="dashboard-links">
        <a href="index.php"><i class="ri-home-4-fill"></i> Home</a>
        <a href="insert.php"><i class="ri-add-box-fill"></i> Insert New Record</a>
        <a href="view.php"><i class="ri-file-text-fill"></i> View Records</a>
        <a href="logout.php"><i class="ri-door-closed-fill"></i> Logout</a>
      </nav>
    </div>
  </div>

</body>
</html>
