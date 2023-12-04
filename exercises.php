<!-- Iron Body Exercise  Page-->


<!-- HTML & CSS Styling-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises</title>
    <style>
        body {
            font-family: Copperplate, Papyrus, fantasy;
            background-color: #f2f2f2;
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


        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .exercises-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .push, .pull, .legs, .full {
            float: none;
            margin: 10px auto;
            width: 60%; 
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

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <script>
    window.onscroll = function() {
      scrollFunction();
    };

    function scrollFunction() {
      var navBar = document.querySelector("nav");
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        navBar.style.top = "0";
      } else {
        navBar.style.top = "-50px"; 
      }
    }
  </script>

</head>

<body>
<nav>
    <a href="HomePage.php"><strong><em>Home</em></strong></a>
    <a href="about.php"><strong><em>About</em></strong></a>
    <a href="exercises.php"><strong><em>Exercises</em></strong></a>
    <a href="fitness_plans.php"><strong><em>Fitness Plans</em></strong></a>
    <a href="nutrition.php"><strong><em>Nutrition</em></strong></a>
  </nav>
    <h1 class="exercises-title">Exercises</h1>

    <?php
        echo '<div class="push">';
        echo '<h3>Push Day Routine</h3>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Exercise</th>';
        echo '<th>Example</th>';
        echo '<th>Steps</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>Shoulder Press</td><td><img src="images/ShoulderPress.jpg" alt="Shoulder Press Image"></td><td>Step 1: Sit on a bench at a 90 degree angle. <br> Step 2: Ensure that your feet are firm on the floor hip-width apart.<br> Step 3: Bend your elbows at a 90 degree angle while holding the dumbbells by your shoulders with palms facing forwards.<br> Step 4: Extend your elbows up to extend the weights above your head. <br> Step 5: Slowly return to starting position & repeat until failure.</td></tr>';
        echo '<tr><td>Tricep Cable Pushdown</td><td><img src="images/TricepPushdown.jpg" alt="Tricep Pushdown Image"></td><td>Step 1: Engage your core by bracing your abdominals. <br>Step 2: Tuck your elbows in and position feet hip-width apart. Slightly bend your knees.<br> Step 3: Push down until elbows are fully extended but not in a straight, locked position. Elbows must be kept close to the body.<br> Step 4: Keep your back in a neutral position as straight as possible. Continue using a controlled movement. </td></tr>';
        echo '<tr><td>Incline Dumbbell Bench Press</td><td><img src="images/InclineDumbellPress.jpg" alt="Incline Dumbbell Press Image"></td><td>Step 1: Set the bench to a 30 to 45 degree incline <br>Step 2: While gripping two dumbbells sit on the inclined bench and slowly lie back and extend your arms so that the dumbbells are above you. You may use your legs to help you push the dumbbels up. <br> Step 3: Retract your shoulder blades by pulling your shoulder blades into the bench and pressing through your feet. This will create an arch in your lower back that will protect your shoulder joint. <br> Step 4: Begin the reps by lowering the dumbbells until they slightly touch the mid chest, ensuring elbows are tucked instead of flaring outwards. <br> Step 5: Push through your arms, chest, & feet. Extend the arms until your arms are straight and dumbbells are in line with your chest.  </td></tr>';
        echo '<tr><td>Cable Flye</td><td><img src="images/CableFly.jpg" alt="Cable Flye Image"></td><td>Step 1: Set both pulleys directly at (or slightly above) shoulder height and select the desired weight  <br>Step 2: Grasp both handles with a neutral grip and take a step forward to split the stance. <br> Step 3: Press the handles to lockout while flexing the pecs and extending the elbows. <br> Step 4: Keep a slight bend in the elbows, move entirely at the shoulder joint, and slowly allow the arms to open while the pecs stretch. <br> Step 5: Return to the starting position by flexing your pecs and bringing the handles together at chest height. <br> Step 6: Slowly lower back to the starting position and repeat for the desired number of repetitions.   </td></tr>';
        echo '</tbody>';
        echo '</table>'; 
        echo '</div>';

        echo '<div class="pull">';
        echo '<h3>Pull Day Routine</h3>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Exercise</th>';
        echo '<th>Example</th>';
        echo '<th>Steps</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>Lat Pulldown</td><td><img src="images/LatPulldown.jpg" alt="Lat Pulldown Image"></td><td>Step 1: Place your knees under the provided pads. Position the pads so that your thighs are not able to raise up off the bench. <br>Step 2: Grasp the lat bar with a little wider than shoulder-width grip. This is the starting position. <br> Step 3: Begin exercise by pulling the bar down to your upper chest. Focus on using your lats to pull the bar down and not your arms. <br> Step 4: Slowly reverse movement back to starting position. This completes one rep. </td></tr>';
        echo '<tr><td>Bent Over Rows</td><td><img src="images/BentRows.jpg" alt="Bent Over Rows Image"></td><td>Step 1: Hold onto a barbell with your palms facing down. Bend your knees slightly and bend forward at the waist while keeping your back straight. It should be almost parallel with the floor. The barbell should be directly in front of you; your arms should be perpendicular to the floor. <br>Step 2: While keeping your torso stationary, lift the barbell toward you. Your elbows should be kept close to your body. Use only your forearms to hold the weight. When you get to the top, squeeze your back muscles and hold for a few seconds. <br> Step 3: Slowly lower the barbell back to the starting position. <br> Step 4: Repeat the process for the number of repetitions in your workout routine   </td></tr>';
        echo '<tr><td>Face Pulls</td><td><img src="images/FacePulls.jpg" alt="Face Pulls Image"></td><td>Step 1: Position the cable slightly above the head and grasp the rope with the thumbs pointing toward you. Stand tall with your feet slightly staggered and toes pointing straight ahead. Draw your abs. <br>Step 2: Pull the cable toward your face by bending your elbows out to the side and pinching your shoulder blades together attempting to drive your fists by your ears. <br> Step 3: Reverse the pattern and return to the starting position. <br> Step 4: Repeat. Maintain posture throughout. Avoid jutting the chin forward, arching the lower back, letting the ribs flare, or shrugging the shoulders.  </td></tr>';
        echo '<tr><td>Bicep Curls</td><td><img src="images/BicepCurls.jpg"</td><td>Step 1: Stand straight with a dumbbell in each hand, your feet shoulder-width apart, and hands by your sides. <br>Step 2: Squeeze the biceps and lift the dumbbells. Keep the elbows close to your body and the upper arms stationary, only the forearms should move. <br> Step 3: Once the dumbbells are at shoulder level, slowly lower the arms to the starting position. <br> Step 4: Repeat until failure </td></tr>';
        echo '</tbody>';
        echo '</table>'; 
        echo '</div>';


        echo '<div class="legs">';
        echo '<h3>Leg Day Routine</h3>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Exercise</th>';
        echo '<th>Example</th>';
        echo '<th>Steps</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>Romanian Deadlift (RDL) </td><td><img src="images/RDLS.jpg"></td><td>Step 1: Stand up tall with your feet shoulder-width apart and hold the bar in your hand with your arms tucked in. Keep your neck neutral & aligned with your spine. Embrace your core. <br>Step 2: Push your hips back and lower the dumbbells, while keeping your legs straight or only slightly bent. Maintain your back in a neutral postion. NEVER bend or curve your back. <br> Step 3: Repeat until failure. </td></tr>';
        echo '<tr><td>Hip Thrusts</td><td><img src="images/HipThrust.jpg"></td><td>Step 1: Start seated on the floor, knees bent, feet slightly wider than hip-distance apart. The toes can be turned out just slightly. The upper back (lower scapula) should be resting against the edge of the weight bench in the center of the bench <br>Step 2: Place the weight bar across the hips. Hold onto the bar to keep it in place, but do not use your arms to lift it. <br> Step 3: Squeeze the glutes and press the bar straight up until the hips are in line with the shoulders and knees. The bench should be supporting the mid-scapula area. Keep the core tight and maintain a slight chin tuck with your focus down your body. <br> Step 4: Slowly lower the bar down until the hips are just a few inches off the floor. <br> Step 5: Squeeze glutes & repeat until failure. </td></tr>';
        echo '<tr><td>Bulgarian Split Squats</td><td><img src="images/SplitSquats.jpg" </td><td>Step 1: Stand with feet hip width apart and approximately 2 shoulder widths in length with shoelaces down on a bench. Set spine in neutral, dumbbells at your sides and core braced.  <br>Step 2: Drop the trailing knee down until it is 1-2 inches off the ground maintaining a slight forward torso angle. Strive to achieve a 90˚ knee angle or thigh parallel at the bottom of the movement. <br> Step 3: Reverse the pattern and return to the starting position. Maintain posture throughout. <br> Step 4: Repeat for the desired number of repetitions. Ensure knee tracks in line with toes. Avoid lifting the front heel, allowing the knee to collapse inward while lowering.   </td></tr>';
        echo '<tr><td>Leg Extension</td><td><img src="images/LegExtension.jpg"</td><td>Step 1: Set up the leg extension machine so the pad is at the top of your lower legs at the ankles. Your knees are at 90 degrees. Select a weight that will give you a moderate load for 10 to 12 repetitions. <br>Step 2: Place your hands on the hand bars. <br> Step 3: Lift the weight while exhaling until your legs are almost straight. Do not lock your knees. Keep your back against the backrest and do not arch your back. <br> Step 4: Exhale and lower the weight back to starting position.   </td></tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';


        echo '<div class="full">';
        echo '<h3>Full Body Routine</h3>';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Exercise</th>';
        echo '<th>Example</th>';
        echo '<th>Steps</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr><td>Pulls Ups</td><td><img src="images/PullUps.jpg"></td><td>Step 1: Grab the pullup bar with your palms down (shoulder-width grip) <br> Step 2: Hang to the pullup-bar with straight arms and your legs off the floor. <br> Step 3: Pull yourself up by pulling your elbows down to the floor. <br> Step 4: Go all the way up until your chin passes the be bar <br> Step 5: Lower yourself until your arms are straight. </td></tr>';
        echo '<tr><td>Seated Rows</td><td><img src="images/SeatedRows.jpg"></td><td>Step 1: When setting up, the optimum degree of the seat is whatever will align your shoulders with the handle or cable.<br>Step 2: Grasp the handle of the weight properly with your palms facing each other. <br> Step 3: Pull the weights towards your torso and hold. Make sure that you are using the proper form to avoid back injury. <br> Step 4: Hold and wait for the desired length of time (about one second), and then slowly release the pull while keeping your arms and core engaged. <br> Step 5: Repeat until failure.  </td></tr>';
        echo '<tr><td>Bench Press</td><td><img src="images/SplitSquats.jpg" </td><td>Step 1: Draw your shoulder blades back behind you to keep from pressing with rounded shoulders. <br>Step 2: Grasp the barbell using an overhand grip, placing your thumbs on the outside of your closed fist. Your arms are slightly wider than shoulder-width apart and the angle of your upper arms is about 45 degrees to the body. <br> Step 3: Remove the barbell from the rack, locking your elbows. <br> Step 4: Inhale while lowering the bar to your chest, at the nipple line. <br> Step 5: Inhale while lowering the bar to your chest, at the nipple line. <br> Step 6: Lower the bar so it is just above your chest. This is the starting position for the next bench press. </td></tr>';
        echo '<tr><td>Barbell Squats</td><td><img src="images/Squats.png"</td><td>Step 1: Take the bar out of the rack with it resting on your rear shoulder muscles. Take two big steps back and stand with your feet roughly shoulder-width apart, toes pointing slightly out. <br>Step 2: Keep your spine in alignment by looking at a spot on the floor about two meters in front of you, then “sit” back and down as if you are aiming for a chair. <br> Step 3: Descend until your hip crease is below your knee. Keep your weight on your heels as you drive back up. </td></tr>';
        echo '</tbody>';
        echo '</table>';
        echo '</div>';


    ?>



</body>
</html>
