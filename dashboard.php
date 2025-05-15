<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - Toll Management</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f2f6fc;
      margin: 0;
    }

    header {
      background-color: #003e7e;
      color: white;
      padding: 20px;
      text-align: center;
    }

    header img {
      width: 60px;
      vertical-align: middle;
    }

    nav {
      background-color: #0053a0;
      padding: 15px;
      text-align: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      text-decoration: underline;
    }

    main {
      max-width: 800px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }

    main img {
      width: 100%;
      max-width: 400px;
      margin-bottom: 20px;
      border-radius: 10px;
    }

    footer {
      text-align: center;
      padding: 15px;
      background: #003e7e;
      color: white;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

<header>
  <img src="images/emblem.png" alt="Gov Logo"> 
  <h1>Online Toll Management Dashboard</h1>
</header>

<nav>
  <a href="dashboard.php">Dashboard</a>
  <a href="record_toll.php">Record Toll</a>
  <a href="toll_history.php">Toll History</a>
  <a href="logout.php">Logout</a>
</nav>

<main>
  <img src="images/gps.png" alt="GPS Tracker">
  <h2>Welcome, <?php echo $_SESSION['name']; ?> 👋</h2>
  <p>This portal allows you to manage GPS-based FASTag toll payments in real-time.</p>
</main>

<footer>
  Ministry of Road Transport & Highways, Government of India © 2025
</footer>

</body>
</html>