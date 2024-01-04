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
                    <th>Calories Burned</th>
                </tr>
                <tr>
                <?php
                $no = 1; // Initialize a counter for the row numbers
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <td><?php echo $row ['workoutID'] ?></td>
                </tr>
                <?php 
                    }
            
                ?>


            </table>
        </div>
</div>
