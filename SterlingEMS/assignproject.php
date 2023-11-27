<?php
require_once('process/dbh.php');

$currentDate = date('Y-m-d'); // Get the current date
$tomorrowDate = date('Y-m-d', strtotime('+1 day')); // Get tomorrow's date

$sql = "SELECT * FROM `project` WHERE duedate = '$currentDate' OR duedate = '$tomorrowDate' ORDER BY subdate DESC";

$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>Project Status |  Admin Panel | Sterling Employee Management System</title>
    <link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
    <!-- Header and navigation code remains unchanged -->

    <div class="divider"></div>

    <table>
        <tr>
            <th align="center">Project ID</th>
            <th align="center">Emp. ID</th>
            <th align="center">Project Name</th>
            <th align="center">Due Date</th>
            <th align="center">Submission Date</th>
            <th align="center">Mark</th>
            <th align="center">Status</th>
            <th align="center">Option</th>
        </tr>

        <?php
        while ($employee = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$employee['pid']."</td>";
            echo "<td>".$employee['eid']."</td>";
            echo "<td>".$employee['pname']."</td>";
            echo "<td>".$employee['duedate']."</td>";
            echo "<td>".$employee['subdate']."</td>";
            echo "<td>".$employee['mark']."</td>";
            echo "<td>".$employee['status']."</td>";
            echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>";
        }
        ?>

    </table>
</body>
</html>
