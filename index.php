<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>

<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

 .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #e3e6f3;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.06);
        border: 3px solid #1a1a1a;
        border-top-style: none;
        border-left-style: none;
        border-right-style: none;
      }

      .logo {
        font-size: 0.1rem;
        margin: 0.5rem;
      }

      .navbar-links ul {
        margin: 0;
        padding: 0;
        display: flex;
      }

      .navbar-links li {
        list-style: none;
      }

      .navbar-links li a {
        text-decoration: none;
        color: #1a1a1a;
        font-size: 16px;
        padding: 10px;
        display: block;
        border-radius: 15px;
        font-weight: bold;
      }
      .navbar-links li a:hover
      {
        background: green;
        color: white;
        transition: 2s;
      }
      .toggle-button {
        position: absolute;
        top: 1rem;
        right: 1rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 25px;
      }

      .toggle-button .bar {
        height: 5px;
        width: 100%;
        background-color: #1a1a1a;
        border-radius: 10px;
      }

       @media only screen and (max-width: 540px) {
        .toggle-button {
          display: flex;
        }
        .navbar-links {
          display: none;
          width: 100%;
        }
        .navbar {
          flex-direction: column;
          align-items: flex-start;
        }

        .navbar-links ul {
          flex-direction: column;
          width: 100%;
        }

        .navbar-links li {
          text-align: center;
        }

        .navbar-links.active {
          display: flex;
        }

      }
.hero {
  background: url('./libaray_management_system_background.jpg') center/cover no-repeat;
  color: white;
  text-align: center;
  padding: 100px 20px;
}

.hero-content h1 {
  font-size: 48px;
  margin-bottom: 10px;
}

.hero-content p {
  font-size: 20px;
  margin-bottom: 25px;
}

.hero .btn {
  background-color: #3498db;
  color: white;
  padding: 12px 25px;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  transition: background 0.3s ease;
}

.hero .btn:hover {
  background-color: #2a80b9;
}

.services {
  padding: 60px 20px;
  background-color: #f8f8f8;
  text-align: center;
}

.services h2 {
  font-size: 32px;
  margin-bottom: 30px;
}

.service-cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 30px;
}

.card {
  background-color: white;
  padding: 25px;
  max-width: 300px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  border-radius: 10px;
  text-align: left;
}

.books {
  padding: 60px 20px;
  text-align: center;
  background-color: #fff;
}

.books h2 {
  font-size: 32px;
  margin-bottom: 30px;
}

.book-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
  gap: 25px;
  max-width: 1000px;
  margin: auto;
}

.book-card {
  background-color: #f0f0f0;
  padding: 15px;
  border-radius: 8px;
}

.book-card img {
  width: 100%;
  border-radius: 5px;
}

.book-card p {
  margin-top: 10px;
  font-weight: 600;
}

.footer {
  background: linear-gradient(to right, #6a11cb, #2575fc);
  color: #fff;
  padding: 40px 20px 20px;
  font-family: sans-serif;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  gap: 30px;
  max-width: 1200px;
  margin: auto;
}

.footer-section {
  flex: 1 1 250px;
}

.footer-section h3,
.footer-section h4 {
  margin-bottom: 15px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li {
  margin-bottom: 10px;
}

.footer-section ul li a {
  color: #fff;
  text-decoration: none;
}

.footer-section ul li a:hover {
  text-decoration: underline;
}

.footer-section p {
  margin: 5px 0;
}

.social-icons a {
  margin-right: 10px;
  color: #fff;
  font-size: 20px;
  transition: color 0.3s;
}

.social-icons a:hover {
  color: #e0e0e0;
}

.footer-bottom {
  text-align: center;
  padding-top: 20px;
  border-top: 1px solid rgba(255, 255, 255, 0.2);
  font-size: 14px;
}

@media (max-width: 768px) {
  .footer-container {
    flex-direction: column;
    text-align: center;
  }
  .social-icons a {
    margin: 0 8px;
  }
}
</style>
</head>
<body>

<nav class="navbar">
      <div class="logo">
        <a href="#"><img src="assets/library_logo.png" class="logo" alt="" width="100%" height="66px"/></a>
      </div>

       <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span> 
      </a>

      <div class="navbar-links">
        <ul>
           <li><a  class="active" href="#Home">Home</a></li>
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="#books">Books</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="cart.html"><i class="ri-book-marked-fill"></i></a></li>
        </ul>
      </div>
    </nav>

<section class="hero" id="Home">
  <div class="hero-content">
    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    <p>This is secure area.</p>
    <h1>Welcome to the Library</h1>
    <p>Your portal to knowledge, discovery, and research</p>
    <a href="#" class="btn">Explore Books</a>
  </div>
</section>

<section class="services" id="services">
  <h2>Library Services</h2>
  <div class="service-cards">
    <div class="card">
      <h3>Search Books</h3>
      <p>Find any book in our collection by title, author, or subject.</p>
    </div>
    <div class="card">
      <h3>Borrow & Return</h3>
      <p>Borrow books and return them easily using your account.</p>
    </div>
    <div class="card">
      <h3>My Account</h3>
      <p>Check due dates, history, and manage your library activities.</p>
    </div>
  </div>
</section>

<section class="books" id="books">
  <h2>Featured Books</h2>
  <div class="book-grid">
    <div class="book-card">
      <img src="assets/MaggieRainbow.jpg" alt="Book Cover" height="460px">
      <p>Maggie Rainbow</p>
    </div>
    <div class="book-card">
      <img src="assets/my first treasury of Animal Stories Book.jpg" alt="Book Cover" height="460px">
      <p>My First Treasury Of Animal Stories</p>
    </div>
    <div class="book-card">
      <img src="assets/Emi's Beach Adventure book.jpg" alt="Book Cover">
      <p>Emi's Beach Adventure</p>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="footer-container">
    <div class="footer-section about" id="about">
      <h3>Library Portal</h3>
      <p>Your gateway to knowledge, research, and discovery.</p>
    </div>
    <div class="footer-section links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="#">Search Books</a></li>
        <li><a href="#">My Account</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="footer-section contact" id="contact">
      <h4>Contact</h4>
      <p>Email: support@library.com</p>
      <p>Phone: +1-800-123-4567</p>
      <div class="social-icons">
        <a href="#"><i class="ri-facebook-line"></i></a>
        <a href="#"><i class="ri-twitter-line"></i></a>
        <a href="#"><i class="ri-instagram-line"></i></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2025 Library Management System. All rights reserved.</p>
  </div>
</footer>

<!-- <script>
  document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector(".menu-icon");
    const navLinks = document.getElementById("navLinks");

    menuIcon.addEventListener("click", function () {
      navLinks.classList.toggle("show-menu");
    });
  });
</script> -->
<script>
      const togglebutton = document.getElementsByClassName("toggle-button")[0];
      const navbarlinks = document.getElementsByClassName("navbar-links")[0];

      togglebutton.addEventListener("click", () => {
        navbarlinks.classList.toggle("active");
      });

      
    </script>

</body>
</html>
