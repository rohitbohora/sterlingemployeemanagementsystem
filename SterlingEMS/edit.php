<?php
// Fetch the URL parameters
$id = $_GET['id'] ?? '';
$firstName = $_GET['firstName'] ?? '';
$lastName = $_GET['lastName'] ?? '';
$gender = $_GET['gender'] ?? '';
$dept = $_GET['dept'] ?? '';
$degree = $_GET['degree'] ?? '';
$birthday = $_GET['birthday'] ?? '';
$email = $_GET['email'] ?? '';
$contact = $_GET['contact'] ?? '';
$address = $_GET['address'] ?? '';
?>

<html>
<head>
    <title>View Employee |  Admin Panel | Sterling Employee Management System</title>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <header>
        <nav>
            <h1>Sterling EMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="index.html">HOME</a></li>
                <li><a class="homeblack" href="addemp.php">Add Employee</a></li>
                <li><a class="homered" href="viewemp.php">View Employee</a></li>
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
                    <h2 class="title">Update Employee Info</h2>
                    <form id="registration" action="edit.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstName; ?>" >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastName; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" name="gender" value="<?php echo $gender; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" name="nid" value="<?php echo $nid; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="address" value="<?php echo $address; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $dept; ?>">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="degree" value="<?php echo $degree; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script> -->
</body>
</html>
