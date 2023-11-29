
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iron Body</title>

  <style>
    body {
      font-family: Copperplate, Papyrus, fantasy;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    nav {
      background-color: #333;
      overflow: hidden;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 10px;
    }

    nav a {
      color: #f2f2f2;
      text-decoration: none;
      padding: 14px 16px;
      display: block;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }

    h1 {
      text-align: center;
    }

    /* Animation for the subheading */
    .subheading {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      white-space: nowrap;
      font-weight: bold;
      font-style: italic;
      color:white;
      font-size:50px;
      animation: slideIn 5s ease-in-out forwards;
    }

    @keyframes slideIn {
      from {
        transform: translate(-100%, -50%);
      }
      to {
        transform: translate(-50%, -50%);
      }
    }


    .menu-icon {
      cursor: pointer;
      position: absolute;
      top: 15px;
      right: 15px;
      display: none;
      z-index: 2;
    }

    @media only screen and (max-width: 600px) {
      nav a {
        display: none;
        width: 100%;
        text-align: center;
      }

      .menu-icon {
        display: block;
      }
    }

   
    .login-link {
      position: absolute;
      top: 15px;
      right: 15px;
      color: #000000
      text-decoration: none;
      padding: 14px 16px;
      display: block;
    }

    .login-link:hover {
      background-color: #ddd;
      color: black;
    }
  </style>
</head>
<body>

<h1><strong><em>Iron Body</em></strong></h1>

<div class="menu-icon" onclick="toggleMenu()">&#9776;</div>

<?php
echo '<nav>
  <a href="index.php"><strong><em>Home</em></strong></a>
  <a href="about.php"><strong><em>About</em></strong></a>
  <a href="exercises.php"><strong><em>Exercises</em></strong></a>
  <a href="fitness_plans.php"><strong><em>Fitness Plans</em></strong></a>
  <a href="nutrition.php"><strong><em>Nutrition</em></strong></a>
</nav>';
?>


<a class="login-link" href="login.php"><strong><em>Login</em></strong></a>


<div style="width: 800px; height: 400px; margin: 0 auto; position: relative;">
    <img src="images/Logo.jpg" style="display: block; width: 800px; height: 400px;" >
</div>
<script>
  function toggleMenu() {
    var navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(function (link) {
      link.classList.toggle('show');
    });
  }
</script>

</body>
</html>
