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
      display: flex; /* Use flexbox */
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

    /* Adjust styles for smaller screens if needed */
    @media (max-width: 768px) {
      .login-container {
        flex-direction: column; /* Stack elements vertically on smaller screens */
      }

      .left-section,
      .right-section {
        flex: auto; 
      }
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
      <form action="user_dashboard.php" method="post">
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
