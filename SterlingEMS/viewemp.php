<?php
require_once('process/dbh.php');
$sql = "SELECT * FROM `employee`, `rank` WHERE employee.id = rank.eid";

$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <title>View Employee |  Admin Panel | Sterling Employee Management System</title>
    <link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
    <header>
        <nav>
            <h1>Sterling EMS</h1>
            <!-- Your navigation links -->
        </nav>
    </header>
    
    <div class="divider"></div>

    <table>
        <tr>
            <th align="center">Emp. ID</th>
            <th align="center">Name</th>
            <th align="center">Email</th>
            <th align="center">Birthday</th>
            <th align="center">Gender</th>
            <th align="center">Contact</th>
            <th align="center">Address</th>
            <th align="center">Department</th>
            <th align="center">Degree</th>
            <th align="center">Options</th>
        </tr>

        <?php
        while ($employee = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$employee['id']."</td>";
            echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
            echo "<td>".$employee['email']."</td>";
            echo "<td>".$employee['birthday']."</td>";
            echo "<td>".$employee['gender']."</td>";
            echo "<td>".$employee['contact']."</td>";
            echo "<td>".$employee['address']."</td>";
            echo "<td>".$employee['dept']."</td>";
            echo "<td>".$employee['degree']."</td>";

            echo "<td><a href=\"edit.php?id=$employee[id]&firstName=$employee[firstName]&lastName=$employee[lastName]&email=$employee[email]&birthday=$employee[birthday]&gender=$employee[gender]&contact=$employee[contact]&address=$employee[address]&dept=$employee[dept]&degree=$employee[degree]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";


            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
