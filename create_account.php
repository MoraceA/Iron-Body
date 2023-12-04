<?php
//Create Account Page//
session_start();
//variables
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'IronFitness';

$mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
);

if ($mysqli->connect_error) {
    echo 'Errno: ' . $mysqli->connect_errno;
    echo '<br>';
    echo 'Error: ' . $mysqli->connect_error;
    exit();
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = mysqli_real_escape_string($mysqli, $_POST["username"]);
    $firstName = mysqli_real_escape_string($mysqli, $_POST["firstName"]);
    $lastName = mysqli_real_escape_string($mysqli, $_POST["lastName"]);
    $dob = mysqli_real_escape_string($mysqli, $_POST["dob"]);
    $phone = mysqli_real_escape_string($mysqli, $_POST["phone"]);
    $email = mysqli_real_escape_string($mysqli, $_POST["email"]);
        // Hash the password for security


    $password = password_hash(mysqli_real_escape_string($mysqli, $_POST["password"]), PASSWORD_DEFAULT);
    $weight = mysqli_real_escape_string($mysqli, $_POST["weight"]);




    // Insert data into the Users table 
    $sql = "INSERT INTO Users (username, firstName, lastName, dob, phone, email, password, weight)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($mysqli, $sql);
mysqli_stmt_bind_param($stmt, "ssssssss", $username, $firstName, $lastName, $dob, $phone, $email, $password, $weight);

if (mysqli_stmt_execute($stmt)) {
// Data inserted successfully
$_SESSION['account_created'] = true;

// Redirect to welcome.php
header("Location: welcome.php");
exit();
} else {
// Handle error
echo "Error: " . mysqli_error($mysqli);
}

mysqli_stmt_close($stmt);
}

$mysqli->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Iron Body</title>
    <style>
        
        body {
            font-family: Copperplate, Papyrus, fantasy;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #000000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #FFB6C1;
        }
    </style>
</head>
<body>

<div class="signup-container">
    <h1><strong><em>Create Account - Iron Body</em></strong></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username" required>
        <br>
        <input type="text" name="firstName" placeholder="First Name" required>
        <br>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <br>
        <input type="date" name="dob" required>
        <br>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <input type="number" name="weight" placeholder="Weight" required>
      
    
    <br>
    <button type="submit">Create Account</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
</div>

<!-- Popup for successful account creation -->
<div id="popup" style="display: none;">
    <p>Account created successfully!</p>
</div>

<script>
    // JavaScript for popup
    document.addEventListener("DOMContentLoaded", function () {

        <?php
        // Check if the session variable is set and true
        if (isset($_SESSION['account_created']) && $_SESSION['account_created']) {
            // Echo JavaScript to show the popup
            echo 'document.getElementById("popup").style.display = "block";';
            // Reset the session variable
            echo 'setTimeout(function() { document.getElementById("popup").style.display = "none"; }, 3000);'; // Hide popup after 3 seconds
            unset($_SESSION['account_created']);
        }
        ?>

        
    });
</script>

</body>
</html>
