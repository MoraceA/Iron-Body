<!-- Iron Body About Page-->

<!-- HTML & CSS Styling-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us!</title>
    <style>
      
  
        body {
            font-family: 'Copperplate', 'Papyrus', 'fantasy';
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            width: 100%;
            display: flex;
            justify-content: space-around;
            padding: 10px;
            position: fixed;
            top: 0;
            z-index: 1000;
            transition: top 0.3s;
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

        
        #image-section {
            flex: 1;
            background: url('images/gym.jpg') center/cover no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        #text-section {
            flex: 1;
            padding: 20px;
            text-align: justify;
        }

        #centered-paragraph {
            text-align: center;
        }

        h1 {
            font-size: 100px;
     
            margin: 0; 
        }

        h2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        p {
            font-size: 18px; 
            line-height: 1.6;
            margin-bottom: 15px; /
        }
/*box feature*/
        .feature-boxes {
            display: flex;
            justify-content: space-around;
            margin-top: 30px; 
        }

        .feature-box {
            text-align: center;
            width: 200px; 
        }

        .feature-box img {
            width: 100px; 
            height: 100px; 
            border-radius: 50%; 
        }

        .feature-box h3 {
            margin-top: 10px;
            color: #333;
        }

        .feature-box p {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>


    <nav>
        <a href="HomePage.php"><strong><em>Home</em></strong></a>
        <a href="about.php"><strong><em>About</em></strong></a>
        <a href="exercises.php"><strong><em>Exercises</em></strong></a>
        <a href="fitness_plans.php"><strong><em>Fitness Plans</em></strong></a>
        <a href="nutrition.php"><strong><em>Nutrition</em></strong></a>
    </nav>
    <section id="image-section">
       
        <h1>About Us</h1>
    </section>
    <section id="text-section">
        <h2>Our Purpose</h2>
        <div id="centered-paragraph">
            <p>
                Iron Body’s mission is to help you feel better depending on your fitness goals.
            </p>
        </div>
        
        <div class="feature-boxes">
            <div class="feature-box">
                <img src="images/running.jpg" alt="Feature 1">
                <h3>Choose Your Fitness Goal</h3>
                <p>Do you want to lose weight, gain weight, or undergo body recomposition?</p>
            </div>
            <div class="feature-box">
                <img src="images/girl.jpg" alt="Feature 2">
                <h3>Recommended Exercise Routine</h3>
                <p>We provide you exercises based on your fitness goals. Don't know how to exercise? It's okay, we've got your back!</p>
            </div>
            <div class="feature-box">
                <img src="images/meal.jpg" alt="Feature 3">
                <h3>Recommended Meal Plan</h3>
                <p>Don't know what to eat to achieve your goals? We've got your back! We provide meal plans & recommendations</p>
            </div>
        </div>
    </section>
</body>
</html>
