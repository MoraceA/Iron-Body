<?php
// Establish a connection to the database
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "IronFitness";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $firstName = mysqli_real_escape_string($conn, $_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn, $_POST["lastName"]);
    $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $weight = mysqli_real_escape_string($conn, $_POST["weight"]);

    // Hash the password for security
    $password = password_hash(mysqli_real_escape_string($conn, $_POST["password"]), PASSWORD_DEFAULT);

    // Upload profile picture 
    $target_directory = "uploads/";
    $target_file = $target_directory . basename($_FILES["profilePicture"]["name"]);
    move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $target_file);

    // Insert data into the Users table using prepared statements
    $sql = "INSERT INTO Users (username, firstName, lastName, dob, profilePicture, phone, email, weight, password)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssssss", $username, $firstName, $lastName, $dob, $target_file, $phone, $email, $weight, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo "Account created successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>

