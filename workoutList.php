<?php
include "config.php";
include "header.php";
include "slider.php";
$query = "SELECT * FROM workout"; // Adjust if your table or columns are named differently
$result = mysqli_query($conn, $query);
?>


<div class="member-content-right">
    <div class="member-content-right-list">
        <h1>Workout List</h1>
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Assumed</th>
            </tr>
            <?php
            $no = 1; // Initialize a counter for the No. column
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>"; // Increment the counter for each row
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['workoutDescription']) . "</td>";
                echo "<td>" . htmlspecialchars($row['duration']) . "</td>";
                echo "<td>" . htmlspecialchars($row['caloriesBurned']) . "</td>"; // Assumed to be caloriesBurned or adjust as needed
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
