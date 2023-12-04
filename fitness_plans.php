
<!-- Iron Body Fitness Plan Page-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Plans</title>

    <style>
        body {
            font-family: 'Copperplate', 'Papyrus', 'fantasy';
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff; /* Set body background color to white */
        }

        #site-title {
           

            text-align: center;
            padding: 10px;
            width: 100%;
        }

        nav {
            background-color: #333;
            overflow: hidden;
            width: 100%;
            display: flex;
            justify-content: space-around;
            padding: 5px 0; /* Adjusted padding to make the background thinner */
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

        .container {
            text-align: center;
            margin: 20px;
        }

        .box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: 300px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .box:hover {
            transform: scale(1.05);
        }

      

        .box p {
            color: #666;
            margin: 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
            color: #FFC0CB;
        }

     
    </style>
</head>

<body>
    <div id="site-title">
        <h1><strong><em>Iron Body</em></strong></h1>
    </div>

    <nav>
        <a href="HomePage.php"><strong><em>Home</em></strong></a>
        <a href="about.php"><strong><em>About</em></strong></a>
        <a href="exercises.php"><strong><em>Exercises</em></strong></a>
        <a href="fitness_plans.php"><strong><em>Fitness Plans</em></strong></a>
        <a href="nutrition.php"><strong><em>Nutrition</em></strong></a>
    </nav>

    <div class="container">
        <h1>Don't know where to start?</h1>

        <div class="box">
            <h2>Lose Weight</h2>
            <p>Weight loss involves shedding overall body weight, including muscle, water, and fat, focusing on fat loss.</p>
    <ul>
        <li>&#9702; <strong>Healthy Eating Habits</strong></li>
        <li>&#9702; <strong>Cardio</strong> </li>
        <li>&#9702; <strong>Caloric Deficit</strong></li>
        <li>&#9702; <strong>Consistency and Patience</strong> </li>
    </ul>
</div>
        <div class="box">
            <h2>Body Recomposition</h2>
            <p>Body recomposition is a way of losing weight that focuses on both losing fat and gaining muscle at the same time.</p>
            <ul>
        <li>&#9702; <strong>High Protein</strong></li>
        <li>&#9702; <strong>Heavy Compound Lifting</strong> </li>
        <li>&#9702; <strong>Cardio</strong></li>
        <li>&#9702; <strong>Calortic Deficit</strong> </li>
    </ul>
        </div>

        <div class="box">
            <h2>Gain Muscle</h2>
            <p>Muscular hypertrophy is an increase and growth of muscle cells driven by several factors with proper training.</p>
            <ul>
        <li>&#9702; <strong>High Protein</strong></li>
        <li>&#9702; <strong>Caloric Surplus</strong> </li>
        <li>&#9702; <strong>Heavy Compound Lifting</strong></li>
        <li>&#9702; <strong> Progressive Overload</strong> </li>
    </ul>
        </div>
    
    </div>
</body>

</html>
