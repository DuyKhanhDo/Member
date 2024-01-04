<?php
include "config.php";  // Contains your database connection
include "header.php";  // The header of your HTML page
include "slider.php";  // A slider component if you have it

// Fetch all records from the workout table
$query = "SELECT * FROM workout";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="member-content-right">
        <div class="member-content-right-list">
            <h1>Workout List</h1>
            <table>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Calories Burned</th>
                </tr>
                <?php
                $no = 1; // Initialize a counter for the row numbers
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";  // Increment the counter for each row
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['workoutDescription']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['duration']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['caloriesBurned']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
