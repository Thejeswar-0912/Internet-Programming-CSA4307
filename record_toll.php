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
  <title>Record Toll - FASTag</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #eef3f9;
      margin: 0;
    }

    header {
      background-color: #003e7e;
      color: white;
      padding: 20px;
      text-align: center;
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
      max-width: 500px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #003e7e;
    }

    input, button {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    button {
      background-color: #003e7e;
      color: white;
      border: none;
    }

    button:hover {
      background-color: #0053a0;
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
  <img src="images/emblem.png" width="60" alt="Gov Logo"> 
  <h1>FASTag Toll Recording</h1>
</header>

<nav>
  <a href="dashboard.php">Dashboard</a>
  <a href="record_toll.php">Record Toll</a>
  <a href="toll_history.php">Toll History</a>
  <a href="logout.php">Logout</a>
</nav>

<main>
  <h2>Enter Toll Details</h2>
  <form action="save_toll.php" method="post">
    <input type="text" name="location" placeholder="Toll GPS Location" required>
    <input type="number" name="amount" placeholder="Toll Amount (INR)" required>
    <button type="submit">Submit Toll Record</button>
  </form>
</main>

<footer>
  Ministry of Road Transport & Highways, Government of India © 2025
</footer>

</body>
</html>