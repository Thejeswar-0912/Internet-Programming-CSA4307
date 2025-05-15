<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.html');
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "toll_db");
$email = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT * FROM tolls WHERE user_email='$email' ORDER BY date DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Toll History - FASTag</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f9ff;
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
      max-width: 900px;
      margin: 40px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #003e7e;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #003e7e;
      color: white;
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
  <h1>Your Toll Payment History</h1>
</header>

<nav>
  <a href="dashboard.php">Dashboard</a>
  <a href="record_toll.php">Record Toll</a>
  <a href="toll_history.php">Toll History</a>
  <a href="logout.php">Logout</a>
</nav>

<main>
  <h2>Previous Toll Records</h2>
  <table>
    <tr>
      <th>Date</th>
      <th>Location</th>
      <th>Amount (₹)</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['amount']; ?></td>
    </tr>
    <?php } ?>
  </table>
</main>

<footer>
  Ministry of Road Transport & Highways, Government of India © 2025
</footer>

</body>
</html>