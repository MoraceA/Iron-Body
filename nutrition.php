<!--    NUTRITION PAGE-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition</title>
    <style>
        body {
            font-family: Copperplate, Papyrus, fantasy;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            margin-bottom: 20px;
        }

        .panel-container {
            display: flex;
            justify-content: space-around;
        }

        .panel {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .panel:hover {
            background-color: #FFB6C1;
        }

    

        .dashboard {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
        }

        .schedule,
        .meals {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        function selectGoal(goal) {
            document.getElementById('selectedGoal').value = goal;
            document.forms[0].submit();
        }
    </script>
</head>

<body>
<a href="homepage.php" style="position: absolute; top: 10px; right: 10px;">Go to Home Page</a>

<?php
$selectedGoal = isset($_POST['goal']) ? $_POST['goal'] : '';


?>

<?php
$selectedGoal = isset($_POST['goal']) ? $_POST['goal'] : '';


function isSelected($goal, $selectedGoal) {
    return $goal === $selectedGoal ? ' style="background-color: #FFB6C1;"' : '';
}

if (isset($_POST['goal'])) {
    $selectedGoal = $_POST['goal'];
  
}
?>

<h1>Choose Your Fitness Goals</h1>

<form method="post" >
    <div class="panel-container">
        <div class="panel"<?php echo isSelected('Lose Weight', $selectedGoal); ?> onclick="selectGoal('Lose Weight')">
            <h2>Lose Weight</h2>
        </div>

        <div class="panel"<?php echo isSelected('Body Recomposition', $selectedGoal); ?> onclick="selectGoal('Body Recomposition')">
            <h2>Body Recomposition</h2>
        </div>

        <div class="panel"<?php echo isSelected('Build Muscle', $selectedGoal); ?> onclick="selectGoal('Build Muscle')">
            <h2>Build Muscle</h2>
        </div>
    </div>

    <input type="hidden" name="goal" id="selectedGoal" value="<?php echo $selectedGoal; ?>">
</form>

<script>
     function selectGoal(goal) {
            document.getElementById('selectedGoal').value = goal;
            document.forms[0].submit();
    }
</script>

<?php

if (!empty($selectedGoal)) {
    echo '<div class="dashboard">';
    echo '<h2>Your personalized information:</h2>';

    switch ($selectedGoal) {
        case 'Lose Weight':

         
//Meal Plan  
echo '<p>Let\'s go over your meal plan.</p>';
            echo '<div class="meals">';
            echo '<h3>Weekly Meal Plan for Building Muscle</h3>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Day</th>';
            echo '<th>Meals</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr><td>Monday</td><td>Breakfast: <a href="https://www.eatingwell.com/recipe/270513/avocado-toast-with-burrata/">Avocado Toast & Boiled Eggs</a><br>Lunch: <a href=" https://www.loveandlemons.com/green-salad-recipe/ "> Simple Green Salad </a><br> Dinner: <a href=" https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster"> Chickpea & Quinoa Bowl with Roasted Red Pepper Sauce </td></tr>';
            echo '<tr><td>Tuesday</td><td>Breakfast:<a href=" https://mattsfitchef.com/high-calorie-oatmeal-for-weight-gain/  "> Protein Oatmeal </a><br> Lunch: <a href="https://www.loveandlemons.com/chopped-salad/ "> Italian Chopped Salad</a> <br> Dinner:<a href="https://www.eatingwell.com/recipe/260716/toaster-oven-tostadas/  ">  Tostadas </td></tr>';
            echo '<tr><td>Wednesday</td><td>Breakfast: <a href=" https://eatthegains.com/protein-pancakes/  "> Protein Pancakes </a> <br> Lunch: <a href="https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Chicken & Rice bowl </a> <br> Dinner: <a href=" https://www.loveandlemons.com/arugula-salad/ "> Arugula Salad </td></tr>';
            echo '<tr><td>Thursday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/266433/whole-wheat-bagel-with-peanut-butter/   "> Whole Wheat Bagel with Peanut Butter </a><br> Lunch: <a href=" https://www.loveandlemons.com/beet-salad-recipe/ "> Beet Salad </a>  <br> Dinner:   <a href="https://www.eatingwell.com/recipe/7916156/white-bean-sun-dried-tomato-gnocchi/ "> White Bean Gnocchhi</td></tr>';
            echo '<tr><td>Friday</td><td>Breakfast:<a href=" https://www.eatingwell.com/recipe/8008414/ham-egg-sprouts-breakfast-sandwich/  ">  Ham, Eggs & Cheese Sandwich </a><br> Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas "> Salmon, Brown Rice, & Broccoli </a>  <br> Dinner:<a href="https://legionathletics.com/bulking-recipes/ "> Steak & Spinach Bibimbap    </td></tr>';
            echo '<tr><td>Saturday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/267647/chocolate-banana-protein-smoothie/    ">  Chocolate & Banana Protein Smoothie</a> <br> Lunch: <a href=" https://www.thekitchn.com/recipe-greek-chicken-grain-bowls-259043 "> Greek Chicken Grain Bowl </a> <br> Dinner: <a href=" https://legionathletics.com/bulking-recipes/ "> Prosciutto Fig Balsamic Bruschetta  </td></tr>';
            echo '<tr><td>Sunday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/252837/nut-berry-parfait/  ">  Yogurt Parfait </a> <br>  Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Pork Taco Bowls </a>  <br> Dinner:<a href="https://www.gymratblog.com/post/best-bulking-recipes  "> Vegan Chili Sin Carne    </td></tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
 break;


        case 'Body Recomposition': 
              echo '<p> Let\'s go over your meal plan.</p>';
        echo '<div class="meals">';
        echo '<h3>Weekly Meal Plan for Body Recomposition</h3>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Day</th>';
        echo '<th>Meals</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>Monday</td><td>Breakfast: <a href="https://www.eatingwell.com/recipe/270513/avocado-toast-with-burrata/">Avocado Toast & Boiled Eggs</a><br>Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas "> Egg Salad Sandwich </a><br> Dinner: <a href=" https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster"> Turkey Meatballs </td></tr>';
        echo '<tr><td>Tuesday</td><td>Breakfast:<a href=" https://mattsfitchef.com/high-calorie-oatmeal-for-weight-gain/  "> Protein Oatmeal </a><br> Lunch: <a href="https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Chicken & Pasta Bowl</a> <br> Dinner:<a href="https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster  ">  Crispy Fish Burgers </td></tr>';
        echo '<tr><td>Wednesday</td><td>Breakfast: <a href=" https://eatthegains.com/protein-pancakes/  "> Protein Pancakes </a> <br> Lunch: <a href="https://www.loveandlemons.com/spring-salad/ "> Spring Salad </a> <br> Dinner: <a href=" https://www.eatingwell.com/recipe/258450/green-goddess-salad-with-chickpeas/ "> Green Goddess with Chickpeas </td></tr>';
        echo '<tr><td>Thursday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/266433/whole-wheat-bagel-with-peanut-butter/   "> Whole Wheat Bagel with Peanut Butter </a><br> Lunch: <a href=" https://www.loveandlemons.com/taco-salad-recipe/ "> Taco Salad</a>  <br> Dinner:   <a href="https://www.eatingwell.com/recipe/261632/vegetable-weight-loss-soup/ "> Vegetable Soup </td></tr>';
        echo '<tr><td>Friday</td><td>Breakfast:<a href=" https://www.eatingwell.com/recipe/8008414/ham-egg-sprouts-breakfast-sandwich/  ">  Ham, Eggs & Cheese Sandwich </a><br> Lunch: <a href=" https://www.loveandlemons.com/kale-salad/"> Kale Salad </a>  <br> Dinner:<a href="https://www.eatingwell.com/recipe/260726/black-bean-quinoa-buddha-bowl/"> Black Bean Quinoa Bowl   </td></tr>';
        echo '<tr><td>Saturday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/267647/chocolate-banana-protein-smoothie/    ">  Chocolate & Banana Protein Smoothie</a> <br> Lunch: <a href=" https://www.thekitchn.com/recipe-greek-chicken-grain-bowls-259043 "> Greek Chicken Grain Bowl </a> <br> Dinner: <a href=" https://legionathletics.com/bulking-recipes/ "> Prosciutto Fig Balsamic Bruschetta  </td></tr>';
        echo '<tr><td>Sunday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/252837/nut-berry-parfait/  ">  Yogurt Parfait </a> <br>  Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Pork Taco Bowls </a>  <br> Dinner:<a href="https://www.gymratblog.com/post/best-bulking-recipes  "> Vegan Chili Sin Carne    </td></tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
break;
         
        case 'Build Muscle':
   

            echo '<p>  Let\'s go over your meal plan.</p>';
            echo '<div class="meals">';
            echo '<h3>Weekly Meal Plan for Building Muscle</h3>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Day</th>';
            echo '<th>Meals</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr><td>Monday</td><td>Breakfast: <a href="https://www.eatingwell.com/recipe/270513/avocado-toast-with-burrata/">Avocado Toast & Boiled Eggs</a><br>Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas "> Egg Salad Sandwich </a><br> Dinner: <a href=" https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster"> Turkey Meatballs </td></tr>';
            echo '<tr><td>Tuesday</td><td>Breakfast:<a href=" https://mattsfitchef.com/high-calorie-oatmeal-for-weight-gain/  "> Protein Oatmeal </a><br> Lunch: <a href="https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Chicken & Pasta Bowl</a> <br> Dinner:<a href="https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster  ">  Crispy Fish Burgers </td></tr>';
            echo '<tr><td>Wednesday</td><td>Breakfast: <a href=" https://eatthegains.com/protein-pancakes/  "> Protein Pancakes </a> <br> Lunch: <a href="https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Chicken & Rice bowl </a> <br> Dinner: <a href=" https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster "> Beef Eggplant Burger </td></tr>';
            echo '<tr><td>Thursday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/266433/whole-wheat-bagel-with-peanut-butter/   "> Whole Wheat Bagel with Peanut Butter </a><br> Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas "> Tuna Wrap </a>  <br> Dinner:   <a href="https://www.foodspring.co.uk/magazine/recipes-for-bulking-up-faster  "> Garlic Ginger Salmon </td></tr>';
            echo '<tr><td>Friday</td><td>Breakfast:<a href=" https://www.eatingwell.com/recipe/8008414/ham-egg-sprouts-breakfast-sandwich/  ">  Ham, Eggs & Cheese Sandwich </a><br> Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas "> Salmon, Brown Rice, & Broccoli </a>  <br> Dinner:<a href="https://legionathletics.com/bulking-recipes/ "> Steak & Spinach Bibimbap    </td></tr>';
            echo '<tr><td>Saturday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/267647/chocolate-banana-protein-smoothie/    ">  Chocolate & Banana Protein Smoothie</a> <br> Lunch: <a href=" https://www.thekitchn.com/recipe-greek-chicken-grain-bowls-259043 "> Greek Chicken Grain Bowl </a> <br> Dinner: <a href=" https://legionathletics.com/bulking-recipes/ "> Prosciutto Fig Balsamic Bruschetta  </td></tr>';
            echo '<tr><td>Sunday</td><td>Breakfast: <a href=" https://www.eatingwell.com/recipe/252837/nut-berry-parfait/  ">  Yogurt Parfait </a> <br>  Lunch: <a href=" https://www.setforset.com/blogs/news/high-protein-lunch-ideas  "> Ground Pork Taco Bowls </a>  <br> Dinner:<a href="https://www.gymratblog.com/post/best-bulking-recipes  "> Vegan Chili Sin Carne    </td></tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            break;
            
        default:
            echo '<p>No fitness goal selected.</p>';
            break;
    }

    echo '</div>';
}
?>

</body>
</html>
