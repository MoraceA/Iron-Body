<!-- Iron Body Home Page-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iron Body</title>

  <style>
    body {
      font-family: 'Copperplate', 'Papyrus', 'fantasy';
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
/* Navigation bar*/
    nav {
      background-color: #333;
      overflow: hidden;
      width: 100%;
      display: flex;
      justify-content: space-around;
      padding: 10px;
    }

    nav a {
      color: #f2f2f2;
      text-decoration: none;
      padding: 14px 16px;
      display: block;
      transition: background-color 0.3s, color 0.3s;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }

    h1 {
      text-align: center;
      margin-top: 30px;
      font-size: 2.5em;
      color: #333;
    }

    .subheading {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      white-space: nowrap;
      font-weight: bold;
      font-style: italic;
      color: white;
      font-size: 1.5em;
      animation: slideIn 1s ease-in-out forwards;
    }

    @keyframes slideIn {
      from {
        transform: translate(-100%, -50%);
      }

      to {
        transform: translate(-50%, -50%);
      }
    }

    .login-link {
      position: absolute;
      top: 15px;
      right: 15px;
      color: #333;
      text-decoration: none;
      padding: 14px 16px;
      display: block;
      transition: background-color 0.3s, color 0.3s;
    }

    .login-link:hover {
      background-color: #ddd;
      color: black;
    }

    .logo-container {
      width: 100%;
      max-width: 800px;
      height: 400px;
      margin: 20px 0;
      position: relative;
      overflow: hidden;
    }

    .logo-container img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
<h1><strong><em>Iron Body</em></strong></h1>
 
  <div class="subheading">Achieve Your Peak Fitness</div>
  <?php
  // Start a session
  session_start();

  // Check if the user is logged in
  if (isset($_SESSION['username'])) {
    // If logged in, display personalized greeting with the namw
    $username = $_SESSION['username']; // Change 'username' to the actual session variable storing the user's name
    echo '<div class="greeting" style="position: absolute; top: 0; right: 30px;">Hello, ' . $username . '</div>';
    echo '<nav>
            <a href="HomePage.php"><strong><em>Home</em></strong></a>
            <a href="about.php"><strong><em>About</em></strong></a>
            <a href="exercises.php"><strong><em>Exercises</em></strong></a>
            <a href="fitness_plans.php"><strong><em>Fitness Plans</em></strong></a>
            <a href="nutrition.php"><strong><em>Nutrition</em></strong></a>
            <a href="logout.php"><strong><em>Log Out</em></strong></a>
          </nav>';
  } else {
    // If not logged in, display standard navigation
    echo '<nav>
            <a href="HomePage.php"><strong><em>Home</em></strong></a>
            <a href="about.php"><strong><em>About</em></strong></a>
            <a href="exercises.php"><strong><em>Exercises</em></strong></a>
            <a href="fitness_plans.php"><strong><em>Fitness Plans</em></strong></a>
            <a href="nutrition.php"><strong><em>Nutrition</em></strong></a>
          </nav>';
    echo '<a class="login-link" href="login.php"><strong><em>Login</em></strong></a>';
  }
?>


  

  <div class="logo-container">
    <img src="images/logo.jpg" alt="Iron Body Logo">
  </div>

</body>

</html>
