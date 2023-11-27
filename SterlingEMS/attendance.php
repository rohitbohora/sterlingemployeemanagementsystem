<?php
require_once('process/dbh.php');

$id = (isset($_GET['id']) ? $_GET['id'] : '');

// Fetch employee information
$sql = "SELECT * from `employee` WHERE id=$id";
$sql2 = "SELECT total from `salary` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$salary = mysqli_fetch_array($result2);
$empS = ($salary['total']);

if ($result) {
    while ($res = mysqli_fetch_assoc($result)) {
        $firstname = $res['firstName'];
        $lastname = $res['lastName'];
        $email = $res['email'];
        $contact = $res['contact'];
        $address = $res['address'];
        $gender = $res['gender'];
        $birthday = $res['birthday'];
        $nid = $res['nid'];
        $dept = $res['dept'];
        $degree = $res['degree'];
        $pic = $res['pic'];
    }
}

// Fetch attendance information
$sql_attendance = "SELECT * FROM `attendance` WHERE employee_id = $id";
$result_attendance = mysqli_query($conn, $sql_attendance);

// Fetch timesheets information
$sql_timesheets = "SELECT * FROM `timesheets` WHERE employee_id = $id";
$result_timesheets = mysqli_query($conn, $sql_timesheets);
?>

<html>
<head>
    <title>My Profile | Sterling Employee Management System</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <header>
        <nav>
            <h1>Sterling EMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="eloginwel.php?id=<?php echo $id ?>">HOME</a></li>
                <li><a class="homered" href="myprofile.php?id=<?php echo $id ?>">My Profile</a></li>
                <li><a class="homeblack" href="attendance.php?id=<?php echo $id ?>">Clock In/Clock Out</a></li>
                <li><a class="homeblack" href="applyleave.php?id=<?php echo $id ?>">Apply Leave</a></li>
                <li><a class="homeblack" href="elogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
  
    <div class="divider"></div>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">My Info</h2>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id ?>" enctype="multipart/form-data">
                        <div class="input-group">
                            <img src="process/<?php echo $pic; ?>" height="150px" width="150px">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <p>First Name</p>
                                    <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <p>Last Name</p>
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname; ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <!-- Add attendance section -->
                        <div class="input-group">
                            <h2>Attendance</h2>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>CLock in/CLock Out</th>
                                </tr>
                                <?php
                                while ($attendance = mysqli_fetch_assoc($result_attendance)) {
                                    echo "<tr>";
                                    echo "<td>" . $attendance['date'] . "</td>";
                                    echo "<td>" . $attendance['status'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>

                        <!-- Add timesheets section -->
                        <div class="input-group">
                            <h2>Timesheets</h2>
                            <table>
                                <tr>
                                    <th>Date</th>
                                    <th>Hours Worked</th>
                                    <th>Project ID</th>
                                    <th>Description</th>
                                </tr>
                                <?php
                                while ($timesheet = mysqli_fetch_assoc($result_timesheets)) {
                                    echo "<tr>";
                                    echo "<td>" . $timesheet['date'] . "</td>";
                                    echo "<td>" . $timesheet['hours_worked'] . "</td>";
                                    echo "<td>" . $timesheet['project_id'] . "</td>";
                                    echo "<td>" . $timesheet['description'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>

                        <!-- Rest of the form for other details -->
                        <!-- ... -->

                        <input type="hidden" name="id" value="<?php echo $id; ?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" name="send">Update Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
