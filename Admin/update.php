<?php
// sesstion is started
session_start();
include '../html/db.php';

// here we check the admin is logged in or not
if ($_SESSION['admin_id'] != 1) {
    header('Location: ../html/logout.php');
}

// here we cick out thr sleeped admin after 10min(600s) 
if (isset($_SESSION['userids'])) {
    if ($_SESSION['rrmm'] != 1) {
        if ((time() - $_SESSION['login_time']) > 300) {
            header('Location: ../html/logout.php');
        }
    }
}

// accessing a updateId
if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    // getting elements from the DB
    $select = "select * from `user` where id = $id";
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($result);
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $collagename = $_POST['collagename'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $score = $_POST['score'];
    $userid = uniqid('CJNM');

    $errors = array();
    if (empty($name) && empty($gender) && empty($score) && empty($dob) && empty($phone) && empty($collagename) && empty($course) && empty($email) && empty($password)) {
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
    } elseif (empty($email)) {
        $errors['e'] = "E-mail is Required!";
    } elseif (empty($password)) {
        $errors['p'] = "Password is Required!";
    } elseif (empty($score)) {
        $errors['sc'] = "Score is Required! (Upadte as 0, if they don't win any event)";
    } else {
        $run = "update `user` set id = $id, name = '$name', gender = '$gender', dob = '$dob', phone = '$phone', collagename = '$collagename', course = '$course', email = '$email', password = '$password', score = '$score' where id = $id";
        $result = mysqli_query($con, $run);

        if ($result) {
            header("Location: admin.php");
        } else {
            die("Error occured");
        }
    }
}
?>
<!-- html code -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/update.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">
    <title>Update Form</title>
</head>

<body>
    <div class="div-1">
        <label class="name"><a href="before-home.php" class="NL-a">Heritage</a></label>
        <a href="before-home.php" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
            <li class="li-1"><a href="before-home.php" class="a-1"> Home</a></li>
            <li class="li-1"><a href="signup.php" class="a-1" target="_blank">Sign Up</a></li>
            <li class="li-1"><a href="events.php" class="a-1" target="_blank">Sign in</a></li>
        </ul>
    </div>
    <div class="div-2">
        <h1 class="sinup-name">Update Form</h1>
        <div class="signup">
            <form method="post" autocomplete="off">
                <p class="p-require">
                    <?php if (isset($errors['ae']))
                        echo $errors['ae']; ?>
                </p><br>

                <input type="text" name="name" class="inp" maxlength="20" placeholder="Enter your name"
                    value="<?php echo $row['name']; ?>"><br>
                <p class="p-require">
                    <?php if (isset($errors['n']))
                        echo $errors['n']; ?>
                </p><br>


                <select name="gender" class="inp" value="<?php echo $row['gender']; ?>">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                </select><br>
                <p class="p-require">
                    <?php if (isset($errors['g']))
                        echo $errors['g']; ?>
                </p><br>

                <input type="date" name="dob" class="inp" value="<?php echo $row['dob']; ?>">
                <p class="p-require">
                    <?php if (isset($errors['db']))
                        echo $errors['db']; ?>
                </p><br>

                <input type="tel" name="phone" class="inp" value="<?php echo $row['phone']; ?>"
                    placeholder="Enter your phone number" pattern="[0-9]{10}"><br>
                <p class="p-require">
                    <?php if (isset($errors['phn']))
                        echo $errors['phn']; ?>
                </p><br>

                <select name="collagename" class="inp" value="<?php echo $row['collagename']; ?>">
                    <option value="NDRK">NDRK</option>
                    <option value="NDRKfgc">NDRKfgc</option>
                    <option value="NDRKpri">NDRKpri</option>
                </select><br>
                <p class="p-require">
                    <?php if (isset($errors['cn']))
                        echo $errors['cn']; ?>
                </p><br>

                <select name="course" class="inp" value="<?php echo $row['course']; ?>">
                    <option value="bca">BCA</option>
                    <option value="bsc">Bsc</option>
                    <option value="bcom">BCOM</option>
                </select><br>
                <p class="p-require">
                    <?php if (isset($errors['c']))
                        echo $errors['c']; ?>
                </p><br>

                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="inp"
                    placeholder="Enter the email"><br>
                <p class="p-require">
                    <?php if (isset($errors['e']))
                        echo $errors['e']; ?>
                </p><br>
                <input type="password" name="password" class="inp" value="<?php echo $row['password']; ?>"
                    placeholder="Enter the password"
                    pattern="^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$"
                    title="Must contain at least one number, one uppercase, lowercase letter and one special charecter, and at least 8 or more characters">
                <br>
                <p class="p-require">
                    <?php if (isset($errors['p']))
                        echo $errors['p']; ?>
                </p><br>

                <input type="text" name="score" value="<?php echo $row['score']; ?>" class="inp"
                    placeholder="Enter a score"><br>
                <p class="p-require">
                    <?php if (isset($errors['sc']))
                        echo $errors['sc']; ?>
                </p><br>

                <input type="submit" name="submit" value="Update" class="inp"><br>

                <h4>If you have already an account, <a href="login.php">Login Here!!</a></h4>

            </form>
        </div>
    </div>
    <div class="div-3">

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

        <br><br>&COPY;N.D.R.K fgc
    </div>
</body>

</html>