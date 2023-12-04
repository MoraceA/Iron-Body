<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "IronFitness";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = ""; // Variable to store login status message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = mysqli_prepare($conn, "SELECT username, password, firstName, lastName, dob, phone, email FROM Users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Password is correct, set session variables and redirect to the dashboard
            $_SESSION["username"] = $row["username"];
            $_SESSION["firstName"] = $row["firstName"];
            $_SESSION["lastName"] = $row["lastName"];
            $_SESSION["dob"] = $row["dob"];
            $_SESSION["phone"] = $row["phone"];
            $_SESSION["email"] = $row["email"];
            header("Location: user_dashboard.php"); // Update to the correct dashboard
            exit();
            /*Ensures security because hacker would not know if either the  username or password is incorrect, wont know which one*/
        } else {
            $message = "Invalid password/Username";
        }
    } else {
        $message = "User not found";
    }

    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Body</title>
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

        .login-container {
            background-color: #fff;
            display: flex; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .left-section {
            flex: 1;
            padding: 20px;
        }

        .right-section {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        input {
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

        /* Adjust styles for smaller screens */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column; 
            }

            .left-section,
            .right-section {
                flex: auto;
            }
        }

       
        p.message {
            color: pink;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="left-section">
        <img src="images/weight.jpg" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="right-section">
        <h1><strong><em>Iron Body</em></strong></h1>

        <!-- Display the message -->
        <?php if (!empty($message)) : ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="create_account.php">Create one here</a></p>
    </div>
</div>

</body>
</html>
