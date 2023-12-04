<?php
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: user_dashboard.php"); // Redirect to the login page
    exit();
}

// Retrieve user information from the session
$username = $_SESSION["username"];
$firstName = $_SESSION["firstName"];
$lastName = $_SESSION["lastName"];
$dob = $_SESSION["dob"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Copperplate, Papyrus, fantasy;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Ensure full viewport height */
        }

        .dashboard-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            margin: 10px 0;
            text-align: center;
        }

        a {
            color: #0000FF;
            text-decoration: none;
            display: block; 
            text-align: center;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h1>Welcome, <?php echo $firstName . ' ' . $lastName; ?>!</h1>
    <p>Username: <?php echo $username; ?></p>
    <p>Date of Birth: <?php echo $dob; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
    <p>Email: <?php echo $email; ?></p>

    <!-- Add the link to welcome.php -->
    <p><a href="welcome.php">Let's Begin!</a></p>
    <p><a href="homepage.php">Home</a></p>

    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>
