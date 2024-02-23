<?php

// sesstion is started
session_start();
include 'db.php';

// here we check the users is logged in or not

if (!isset($_SESSION['userids'])) {
    header('Location: logout.php');
}

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
    <link rel="stylesheet" href="../css/events.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">

    <!-- **************Sliding scripts********************* -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- *********************************** -->
    <title>Events</title>
</head>

<body>
    <!-- Navigation menu -->
    <div class="div-1">
        <label class="name"><a href="before-home.php" class="NL-a">Heritage</a></label>
        <a href="before-home.php" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
            <li class="li-1"><a href="before-home.php" class="a-1"> Home</a></li>
            <!-- <li class="li-1"><a href="events.php" class="a-1">Events</a></li> -->
            <li class="li-1"><a href="achivements.php" class="a-1">Achivements</a></li>
            <li class="li-1"><a href="dashboard.php" class="a-1">Dashboard</a></li>
            <li class="li-1"><a href="about.php" class="a-1">About</a></li>
            <li class="li-1"><a href="logout.php" class="a-1">Sign out</a></li>
        </ul>
    </div>

    <!-- Single events -->
    <div class="div-2"><br><br><br>
        <p class="sp-se"><u>Single Events</u></p>
        <div class="slider owl-carousel">
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Gomateshwara-Statue-at-Shravanabelagola-1.jpg" />
                    <p class="event-name">Event 1</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 1</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <button class="event-btn" value="1" name="s-events-1">Click here to register</button>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Jogfalls.jpg" />
                    <p class="event-name">Event 2</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 2</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <button class="event-btn" value="1" name="s-events-2">Click here to register</button>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Chennakeshava-swami-temple.jpg" />
                    <p class="event-name">Event 3</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 3</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <button class="event-btn" value="1" name="s-events-3">Click here to register</button>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Netrani-Islands.jpg" />
                    <p class="event-name">Event 4</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 4</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <button class="event-btn" value="1" name="s-events-4">Click here to register</button>
                </div>
            </div>

            <!-- Group events -->
        </div><br><br><br>
        <p class="sp-ge"><u>Group Events</u></p>
        <div class="slider owl-carousel">
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Gomateshwara-Statue-at-Shravanabelagola-1.jpg" />
                    <p class="event-name">Event 1</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 1</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <a href="#"><button class="event-btn">Click here to register</button></a>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Jogfalls.jpg" />
                    <p class="event-name">Event 2</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 2</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <a href="#"><button class="event-btn">Click here to register</button></a>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Chennakeshava-swami-temple.jpg" />
                    <p class="event-name">Event 3</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 3</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <a href="#"><button class="event-btn">Click here to register</button></a>
                </div>
            </div>
            <div class="card">
                <div class="imgbox">
                    <img class="card-img" src="../images/Netrani-Islands.jpg" />
                    <p class="event-name">Event 4</p>
                    <p class="event-name">Hover get register button</p>
                </div>

                <div class="content">
                    <h2>Event 4</h2><br>
                    <p>
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quaerat
                        doloribus vitae fugit enim repudiandaeLorem ipsum dolor sit amet
                    </p><br>
                    <a href="#"><button class="event-btn">Click here to register</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="div-4">
        <!-- footer section start -->
        <h2 class="h2-1">Address</h2>
        <p class="p-btm">N.D.R.K first grade collage Hassan Udayagiri <br> 91+7690853478</p>
        <br>
        <a href="https//:facebook.com" class="fa fa-facebook"></a>
        <a href="instagram.com" class="fa fa-instagram"></a>
        <a href="twitter.com" class="fa fa-twitter"></a>
        <a href="linkedin.com" class="fa fa-linkedin"></a>

        <br><br>&COPY;N.D.R.K FGC
    </div>

    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s; 
            autoplayHoverPause: true,
        }); 

        // Single events

        var x=document.getElementsByClassName("event-btn");
        document.write(x);
    </script>
</body>

</html>
