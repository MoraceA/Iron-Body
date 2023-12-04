<!--Welcome page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Goals</title>
    <style>
        /*HTML & CSS Styling*/
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
</head>

<body>
<a href="nutrition.php" style="position: absolute; top: 10px; right: 10px;">Next</a>

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

<form method="post">
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

            //Exercise Plan
            echo '<p>Your personalized information for losing weight.</p>';
            echo '<p>First, let\'s go over your workout schedule. You can review how to complete this exercises <a href="exercises.php"> here </a></p>';
            echo '<div class="schedule">';
            echo '<h3>Weekly Schedule for Losing Weight</h3>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Day</th>';
            echo '<th>Workout</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr><td>Monday</td><td>Push Day</td></tr>';
            echo '<tr><td>Tuesday</td><td>Cardio</td></tr>';
            echo '<tr><td>Wednesday</td><td> Leg Day</td></tr>';
            echo '<tr><td>Thursday</td><td>Pull Day</td></tr>';
            echo '<tr><td>Friday</td><td>Cardio</td></tr>';
            echo '<tr><td>Saturday</td><td>Rest day</td></tr>';
            echo '<tr><td>Sunday</td><td>Full body workout + Cardio</td></tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';


            break;
        case 'Body Recomposition':
            echo '<p>Your personalized information for body recomposition.</p>';
            echo '<p>First, let\'s go over your workout schedule. You can review how to complete this exercises <a href="exercises.php"> here </a></p>';
            echo '<div class="schedule">';
            echo '<h3>Weekly Schedule for Losing Weight</h3>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Day</th>';
            echo '<th>Workout</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr><td>Monday</td><td>Push Day</td></tr>';
            echo '<tr><td>Tuesday</td><td>Cardio</td></tr>';
            echo '<tr><td>Wednesday</td><td> Leg Day</td></tr>';
            echo '<tr><td>Thursday</td><td>Pull Day</td></tr>';
            echo '<tr><td>Friday</td><td>Cardio</td></tr>';
            echo '<tr><td>Saturday</td><td>Rest day</td></tr>';
            echo '<tr><td>Sunday</td><td>Full body workout + Cardio</td></tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            break;
        case 'Build Muscle':
            echo '<p>First, let\'s go over your workout schedule. You can review how to complete this exercises <a href="exercises.php"> here </a></p>';
            echo '<div class="schedule">';
            echo '<h3>Weekly Schedule for Building Muscle</h3>';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Day</th>';
            echo '<th>Workout</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr><td>Monday</td><td>Push Day</td></tr>';
            echo '<tr><td>Tuesday</td><td>Rest day</td></tr>';
            echo '<tr><td>Wednesday</td><td> Pull Day</td></tr>';
            echo '<tr><td>Thursday</td><td>Rest day</td></tr>';
            echo '<tr><td>Friday</td><td>Leg day</td></tr>';
            echo '<tr><td>Saturday</td><td>Rest day</td></tr>';
            echo '<tr><td>Sunday</td><td>Full body workout</td></tr>';
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
