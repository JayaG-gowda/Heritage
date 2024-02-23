<?php

// sesstion is started
session_start();
include 'db.php';

// here we check the users is logged in or not

if (!isset($_SESSION['userids'])) {
    header('Location: logout.php');
}

// accessing the perticuler user id by $_SESSION['ids'] variable
$id = $_SESSION['ids'];
// getting elements from the DB
$select = "select * from `user` where id = '$id'";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($result);

// here we cick out thr sleeped user after 3min(300s) 
if (isset($_SESSION['userids'])) {
    if ($_SESSION['rrmm'] != 1) {
        if ((time() - $_SESSION['login_time']) > 300) {
            header('Location: logout.php');
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
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">
    <title>Dashboard</title>
</head>

<body>
    <div class="div-1">
        <label class="name"><a href="before-home.php" class="NL-a">Heritage</a></label>
        <a href="before-home.php" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
            <li class="li-1"><a href="after-home.php" class="a-1"> Home</a></li>
            <li class="li-1"><a href="events.php" class="a-1">Events</a></li>
            <li class="li-1"><a href="achivements.php" class="a-1">Achivements</a></li>
            <li class="li-1"><a href="about.php" class="a-1">About</a></li>
            <li class="li-1"><a href="logout.php" class="a-1">Sign out</a></li>
            <!-- <li class="li-1"><a href="dashboard.php" class="a-1">Dashboard</a></li> -->
        </ul>
    </div>
    <div class="div-2">
        <div class="user-id-name">
            <h6 class="user-Name">Name:
                <?php echo $row['name']; ?>
            </h6>

            <h6 class="user-id">Id :
                <?php echo $row['userid']; ?>
            </h6>
            <!-- <h3 class="user-Name">Name</h3> -->
        </div>
    </div>
    <div class="div-4">
        <!-- footer section start -->
        <h2 class="h2-1">Address</h2>
        <p class="p-btm">N.D.R.K first grade collage Hassan Udayagiri <br> 91+7690853478</p>
        <br>
        <a href="facebook.com" class="fa fa-facebook"></a>
        <a href="instagram.com" class="fa fa-instagram"></a>
        <a href="twitter.com" class="fa fa-twitter"></a>
        <a href="linkedin.com" class="fa fa-linkedin"></a>

        <br><br>&COPY;N.D.R.K FGC
    </div>
</body>

</html>