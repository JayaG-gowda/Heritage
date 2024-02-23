<?php

// sesstion is started
session_start();
include '../html/db.php';

// here we check the admin is logged in or not

if ($_SESSION['admin_id'] != 1) {
    header('Location: ../html/signup.php');
}

// here we cick out thr sleeped admin after 10min(600s) 
if (isset($_SESSION['userids'])) {
    if ($_SESSION['rrmm'] != 1) {
        if ((time() - $_SESSION['login_time']) > 600) {
            header('Location: ../html/logout.php');
        }
    }
}

$select = 'select * from `user`';
$result = mysqli_query($con, $select);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">
    <title>Admin Panel</title>
</head>

<body>
    <div class="div-1">
        <label class="name"><a href="before-home.html" class="NL-a">Heritage</a></label>
        <a href="before-home.html" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
            <li class="li-1"><a href="../html/signup.php" class="a-1">Switch to User</a></li>
            <li class="li-1"><a href="../html/logout.php" class="a-1">Sign out (Admin)</a></li>
        </ul>
    </div>
    <div class="div-2">
        <h1 class="h1-user-list">Users List</h1>
        <!-- <div class = "p-t"> -->
        <table border 1px white class="tbl">
            <th class="hd">Id</th>
            <th class="hd">Name</th>
            <th class="hd">Gender</th>
            <th class="hd">Date of birth</th>
            <th class="hd">Phone Number</th>
            <th class="hd">Collage Name</th>
            <th class="hd">Course Name</th>
            <th class="hd">E-mail</th>
            <th class="hd">User-Id</th>
            <th class="hd">Events</th>
            <th class="hd">Score</th>
            <th class="hd">Action</th>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {

                echo ' <tr> 
                <td class="td">' . $row['id'] . '</td>
                <td class="td">' . $row['name'] . '</td>
                <td class="td">' . $row['gender'] . '</td>
                <td class="td">' . $row['dob'] . '</td>
                <td class="td">' . $row['phone'] . '</td>
                <td class="td">' . $row['collagename'] . '</td>
                <td class="td">' . $row['course'] . '</td>
                <td class="td">' . $row['email'] . '</td>
                <td class="td">' . $row['userid'] . '</td>
                <td class="td"> $row[events]</td>
                <td class="td">' . $row['score'] . '</td>
                <td class="td">
                <button class="btn-update"><a href="update.php?updateid=' . $row['id'] . '">Update</a></button> 
                <button class="btn-delete"><a href="delete.php?deleteid=' . $row['id'] . '">Delete</a></button> 
                </td>
                </tr>
                
                 ';
            } ?>
        </table>

    </div>
    <div class="div-3">

    </div>
    <div class="div-4">
        <!-- footer section start -->
        <h2 class="h2-1">Address</h2>
        <p class="p-btm">N.D.R.K first grade collage Hassan Udayagiri <br> 91+7690853478</p>
        <br>
        <a href="https://facebook.com" class="fa fa-facebook"></a>
        <a href="https://instagram.com" class="fa fa-instagram"></a>
        <a href="https://twitter.com" class="fa fa-twitter"></a>
        <a href="https://linkedin.com" class="fa fa-linkedin"></a>

        <br><br>&COPY;N.D.R.K fgc
    </div>
</body>

</html>