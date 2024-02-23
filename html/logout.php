<?php
session_start();

// session_unset($_SESSION['userids']);
session_destroy(); //sessiton will destroy, means login information will delete from browser!!
header('Location: signup.php');

?>