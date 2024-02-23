<?php
session_start();
include "db.php";

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $collagename = $_POST['collagename'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userid = uniqid('CJNM');
    $score = "You need to contest first!!";
    $events = "No events found";
    $sevents="";
    $gevents="";

    $pn = "select phone from `user` where phone = '$phone'";
    $pnresult = mysqli_query($con, $pn);

    $el = "select email from `user` where email = '$email'";
    $elresult = mysqli_query($con, $el);

    $errors = array();
    if (empty($name) && empty($gender) && empty($phone) && empty($dob) && empty($collagename) && empty($course) && empty($email) && empty($password)) {
        $errors['ae'] = "All fields are Required!";
    } elseif (empty($name)) {
        $errors['n'] = "Name is Required!";
    } elseif (empty($gender)) {
        $errors['g'] = "Gender is Required!";
    } elseif (empty($dob)) {
        $errors['db'] = "Date of birth is Required!";
    } elseif (empty($phone)) {
        $errors['phn'] = "Phone Number is Required!";
    } elseif (empty($collagename)) {
        $errors['cn'] = "Collage Name is Required!";
    } elseif (empty($course)) {
        $errors['c'] = "Course is Required!";
    } elseif (mysqli_num_rows($pnresult) > 0) {
        $errors['phn'] = "Phone Number is Already exist!";
    } elseif (empty($email)) {
        $errors['e'] = "E-mail is Required!";
    } elseif (mysqli_num_rows($elresult) > 0) {
        $errors['e'] = "E-mail is Already exist!";
    } elseif (empty($password)) {
        $errors['p'] = "Password is Required!";
    } else {
        // insert query : inert into `table_name`(column_names) valuse (values);
        $run = "insert into `user` (name, gender, dob, phone, collagename, course, email, password, userid ,score, events, sevents, gevents) values ('$name', '$gender', '$dob', '$phone', '$collagename', '$course', '$email', '$password', '$userid', '$score', '$events', '$sevents', '$gevents')";
        $result = mysqli_query($con, $run);

        if ($result) {

            $count = 1;

            $_SESSION['c'] = $count;

        } else {
            die("Error occured");
        }
    }
}

// select query to display the perticular userid
$_SESSION['count'] = 0;
if (isset($_POST['login'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $errors = array();
    if (empty($userid)) {
        $errors['lu'] = "UserId is Required!";
    } elseif (empty($password)) {
        $errors['lp'] = "Password is Required!";
    } else {
        $select = "select * from `user` where userid = '$userid' and password = '$password'";
        $result = mysqli_query($con, $select);
        $idrow = mysqli_fetch_assoc($result);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $_SESSION['count'] = $count;
        // check the login member is Admin or not, if yes redirect to admin.php
        if ($userid == 'Admin@123' && $password = 'Admin@gmail.com') {
            $_SESSION['admin_id'] = 1;
            header('Location:../Admin/admin.php');

        } elseif ($count == 1) {
            // start the session to check the users are login or not
            $_SESSION['userids'] = $userid;
            $_SESSION['ids'] = $idrow['id'];
            $_SESSION['login_time'] = time();
            header("Location: dashboard.php");

            $rm = $_POST['rm'];
            $runrm = "update `user` set rm ='$rm' where userid = '$userid'";
            $result = mysqli_query($con, $runrm);

            // add remember button and the $_SESSTION['rrmm'] defalut value is 0 & if user click on rememer me it will be increment to 1

            $select = "select * from `user` where userid = '$userid' and password = '$password'";
            $result = mysqli_query($con, $select);
            $rmrow = mysqli_fetch_assoc($result);

            $_SESSION['rrmm'] = $rmrow['rm'];

        } else {
            $select = "select * from `user` where userid = '$userid'";
            $result = mysqli_query($con, $select);
            $idrow = mysqli_fetch_assoc($result);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $errors['lup'] = "User not exist!!";
            } else {
                $errors['lup'] = "Incorrect UserName or Password!!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">
    <title>Registertion</title>
</head>

<body>
    <!-- Navigation menu -->
    <div class="div-1">
        <label class="name"><a href="a-home.php" class="NL-a">Heritage</a></label>
        <a href="a-home.php" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
        <li class="li-1">
            <a href="after-home.php" class="a-1"> Home</a></li>
            <li class="li-1"><a href="dashboard.php" class="a-1">Dashboard</a></li>
            <li class="li-1"><a href="events.php" class="a-1">Events</a></li>
            <li class="li-1"><a href="achivements.php" class="a-1">Achivements</a></li>
            <li class="li-1"><a href="about.php" class="a-1">About</a></li>
        </ul>
    </div>
    <div class="div-2">
        <div class="signup">
            <div class="form-box" id="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="togle-btn" onclick="login()">Login</button>
                    <button type="button" class="togle-btn" onclick="register()">Register</button>
                </div>

                <!-- Signup form -->
                <form method="post" autocomplete="off" id="login" class="input-group">

                    <p class="p-require">
                        <?php if (isset($errors['lup']))
                            echo $errors['lup']; ?>
                    </p><br>
                    <input class="input-field" type="text" name="userid" placeholder="Enter your User-Id"><br>
                    <p class="p-require">
                        <?php if (isset($errors['lu']))
                            echo $errors['lu']; ?>
                    </p><br>

                    <input class="input-field" type="password" name="password" placeholder="Enter your password"><br>
                    <p class="p-require">
                        <?php if (isset($errors['lp']))
                            echo $errors['lp']; ?>
                    </p><br>

                    <input type="checkbox" id="remember" class="check-box" name="rm" value="1"><span>Remember
                        me</span>
                    <input type="submit" class="submit-btn" name="login" value="Login">
                </form>

                <!-- Registeration form -->
                <form id="register" class="input-group" method="post">

                    <p class="p-require">
                        <?php if (isset($errors['ae']))
                            echo $errors['ae']; ?>
                    </p><br>

                    <input type="text" name="name" class="input-field" maxlength="20" placeholder="Enter your name"><br>
                    <p class="p-require">
                        <?php if (isset($errors['n']))
                            echo $errors['n']; ?>
                    </p><br>


                    <select name="gender" class="input-field">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select><br>

                    <p class="p-require">
                        <?php if (isset($errors['g']))
                            echo $errors['g']; ?>
                    </p><br>

                    <input type="date" name="dob" class="input-field">
                    <p class="p-require">
                        <?php if (isset($errors['db']))
                            echo $errors['db']; ?>
                    </p><br>

                    <input type="tel" name="phone" class="input-field" placeholder="Enter your phone number"
                        pattern="[0-9]{10}"><br>
                    <p class="p-require">
                        <?php if (isset($errors['phn']))
                            echo $errors['phn']; ?>
                    </p><br>

                    <select name="collagename" class="input-field">
                        <option value="NDRK">NDRK</option>
                        <option value="NDRKfgc">NDRKfgc</option>
                        <option value="NDRKpri">NDRKpri</option>
                    </select><br>
                    <p class="p-require">
                        <?php if (isset($errors['cn']))
                            echo $errors['cn']; ?>
                    </p><br>

                    <select name="course" class="input-field">
                        <option value="bca">BCA</option>
                        <option value="bsc">Bsc</option>
                        <option value="bcom">BCOM</option>
                    </select><br>
                    <p class="p-require">
                        <?php if (isset($errors['c']))
                            echo $errors['c']; ?>
                    </p><br>

                    <input type="email" name="email" class="input-field" placeholder="Enter the email"><br>
                    <p class="p-require">
                        <?php if (isset($errors['e']))
                            echo $errors['e']; ?>
                    </p><br>

                    <input type="password" name="password" class="input-field" placeholder="Enter the password"
                        pattern="^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$"
                        title="Must contain at least one number, one uppercase, lowercase letter and one special charecter, and at least 8 or more characters">
                    <br>
                    <p class="p-require">
                        <?php if (isset($errors['p']))
                            echo $errors['p']; ?>
                    </p><br>

                    <input type="checkbox" class="check-box" required><span>I agree to the terms and condtion</span>
                    <button type="submit" name="signup" class="submit-btn">Register</button>
                </form>


            </div>
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");
            var a = document.getElementById("form-box");

            function register() {
                // z.style.color = "black"
                x.style.left = "-400px"
                y.style.left = "50px"
                y.style.top = "120px"
                z.style.left = "110px"
                // z.style.right = "0px"
                a.style.height = "670px"
            }

            function login() {
                x.style.left = "50px"
                x.style.top = "150px"
                y.style.left = "450px"
                z.style.left = "0px"
                // z.style.right = "110px"
                a.style.height = "400px"
            }

        </script>
    </div>
    </div>
    <div class="div-4">
        <!-- footer section start -->
        <h2 class="h2-1">Address</h2>
        <p class="p-btm">N.D.R.K first grade collage Hassan Udayagiri <br> 91+7690853478</p>
        <br>
        <a href="facebook.com" class="fa fa-facebook"></a>
        <a href="instigram.com" class="fa fa-instagram"></a>
        <a href="twitter.com" class="fa fa-twitter"></a>
        <a href="linkedin.com" class="fa fa-linkedin"></a>

        <br><br>&COPY;N.D.R.K FGC
    </div>
</body>

</html>