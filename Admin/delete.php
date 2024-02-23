<?php
// sesstion is started
session_start();
include 'db.php';

// here we check the admin is logged in or not

if ($_SESSION['admin_id'] != 1) {
    header('Location: ../html/logout.php');
}

// here we cick out thr sleeped admin after 6min(600s) 
if ($_SESSION['remember_me'] == 0) {
    if (isset($_SESSION['userids'])) {
        if ((time() - $_SESSION['login_time']) > 600) {
            header('Location: ../html/logout.php');

        }
    }
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $delete = "delete from `user` where id = $id";
    $result = mysqli_query($con, $delete);
    if ($result) {
        header("Location: admin.php");
    } else {
        echo " Something went wrong!!";
    }
}

?>