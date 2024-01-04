<?php
include "config.php";
include "header.php";
include "slider.php";

session_start(); // Start the session at the beginning of your script

// Assuming you have a form submission to add exercises
if (isset($_POST['submit']) && !empty($_POST['exercise'])) {
    // Initialize the session variable as an array if not set
    if (!isset($_SESSION['exercises'])) {
        $_SESSION['exercises'] = array();
    }
    // Add the new exercise to the session array
    $_SESSION['exercises'][] = $_POST['exercise'];
}
?>

<div class="member-content-right">
    <div class="member-content-right-list">
        <h1><?php echo "Workout Day: " . date("l, F jS, Y"); ?></h1>
        <form action="" method="POST">
            <input type="text" name="exercise" placeholder="Add exercise">
            <button type="submit" name="submit">Add</button>
        </form>

        <!-- Display the list of added exercises -->
        <div class="exercise-list">
            <h2>Today's Exercises:</h2>
            <ul>
                <?php
                if (isset($_SESSION['exercises'])) {
                    foreach ($_SESSION['exercises'] as $exercise) {
                        echo "<li>" . htmlspecialchars($exercise) . "</li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
</div>
        <div class="exercise-list">
            <h2>Today's Exercises:</h2>
            <ul>
                <?php
                if (isset($_SESSION['exercises'])) {
                    foreach ($_SESSION['exercises'] as $exercise) {
                        echo "<li>" . htmlspecialchars($exercise) . "</li>";
                    }
                }
                ?>
            </ul>
        </div>

    </div>

</div>