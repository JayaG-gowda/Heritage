<!-- ?php
session_start();
include "db.php";

if ($_SESSION['count'] == 1) {
    $_SESSION['login_time'] = time();
    $loc = "dashboard.php";
} else {
    $loc = "signup.php";
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/before-home.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">
    <title>Home</title>
</head>

<body>
    <!-- Navigation menu  -->
    <div class="div-1">
        <label class="name"><a href="before-home.php" class="NL-a">Heritage</a></label>
        <a href="before-home.php" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
            <li class="li-1"><a href="before-home.php" class="a-1"> Home</a></li>
            <li class="li-1"><a href="about.php" class="a-1">About</a></li>
            <li class="li-1"><a href="signup.php" class="a-1">Log in</a></li>
        </ul>
    </div>
    <div class="div-2">
        <h1 class="bg-name">HERITAGE OF KARNATAKA</h1>
        <img class="underline" src="../images/separator-kt-Kannada-Logo-Color.png" alt="underline">
        <p class="img-name">Hoysaleswara Temple Halebeedu</p>
    </div>

    <!-- All About Tradition, Dance, Religion, Music, Costume and Festivals of Karnataka -->
    <br><br>
    <h1 class="allname">Karnataka Culture - All About Dance, Religion, Music, Costume and Festivals
        of Karnataka</h1><br><br>
    <div class="div-3">
        <!-- Left side content list -->
        <div class="left">
            <p class="p1">Karnataka has a rich cultural heritage, which has been continuously moving forward with the
                contribution of various empires. Karnataka literature, architecture, folklore, music, painting, and
                other art forms have a lot of impact on the people. You can see various ancient buildings and monuments,
                Mauryan Empire special architecture can also be found here.</p><br>
            <p class="p1">The statue of the 10th-century Jain saint <b>Bahubali</b> stone statue can be seen here. The
                influence of Chalukyas and the Pallava Empire can also be seen.</p><br>
            <p class="p1">A varied mixture of ethnicity, culture, and race comprises the people of Karnataka. While the
                maximum number of people residing here are Kannadigas. They live in perfect harmony and mutual contacts
                with their neighbors and intimidates (<i>namely the Marathas, the Andras, the Tamils, and the
                    Malayalis</i>).</p><br>
            <p class="p1">The people of Karnataka are great hosts, their lifestyle is simple they abide by their unique
                customs, enchanting culture, and beliefs.</p><br>

            <h2 class="lang">Language</h2><br>
            <p class="p1">The official language of the state of Karnataka is <b>Kannada</b>. However other languages
                like Urdu, Telugu, Tamil, Malayalam, Marathi, Tulu, Konkan, and Hindi are also spoken. Most educated
                people use English and Hindi languages too.</p><br>

            <h2 class="religion">Religion</h2><br>
            <p class="p1">Karnataka is a mixture of various religions and the most popular religion is <b>Hinduism</b>.
                During the first millennium, the Buddha religion was one of the most famous religions in some parts of
                Karnataka such as Gulbarga and Banvasi. The Tibetian refugee camp is also in Karnataka. <b>Jainism</b>
                is also followed by many communities while <b>Christianity</b> and <b>Islam</b> are also followed in
                Karnataka.</p><br>

            <h2 class="dance">Dance</h2><br>
            <p class="p1">The culture of Karnataka revolves around its dance, music folk art and drama, and literature.
                Karnataka is a treasure house of ritualistic dances. Karnataka is a treasure house to various dance
                forms, the word <b>Kunitha</b> is used for all folk dances or ritual dances.</p><br>
            <p class="p1">One such dance is the Dollu Kunitha in which singing is accompanied by the beating of drums.
                Among the classical dances, the <b>Mysore style</b> of <b>Bharatanatyam</b> is the oldest and most
                popular form of classical dance in India. Other Mainstream Classical dances of Karnataka are
                <b>Kuchipudi</b> and <b>Kathak</b>.
            </p> <br>
            <img src="../images/yakshagana.jpg" alt="Yakshagana" class="yakshagana" title="Yakshagana">
            <p class="yakshagana-name">Yaksha Gana</p><br>

            <p class="p1"><b>Yakshagana</b> is one of the most difficult dance forms. It has no script and its
                performance depends solely on artist ability. Another amazing Karnataka traditional dance form is Damman
                dance of Siddi community.</p><br>
            <h2 class="music">Music</h2><br>
            <p class="p1">Indian classical music has a special place for Karnataka as both Karnatak (Carnatic) and
                Hindustani styles find a place in the state. It is the only state where Hindustani music from the north
                and Carnatic music from the south can be found together.<br> <br> Karnataka has produced great music
                artists like Bhimsen Joshi, Mallikarjuna Mansur, Kumar Gandharva, Basavaraj, and Puttaraj Gowai, some of
                them have been a recipient of Kalidas Samman, Padma Bhushan, and Padma Vibhushan awards.</p> <br>
            <h2 class="festival">Festivals</h2><br>
            <p class="p1">Karnataka is marked by some of the most colorful festivals. <b>Mysore Dasara</b> is organized
                as Nada Habba and this is the main festival of Mysore.</p><br>
            <img src="../images/Mysorepalace_20191209144837.jpg" alt="Mysore-palace" class="my-dasara"
                title="Mysore palace">
            <img src="../images/Mysore-Dasara-356x220.jpg" alt="Mysore-Dasara" class="mysore-dasara"
                title="Mysore dasara">
            <p class="dasara">Mysore dasara</p><br>
            <p class="p1">The second important festival of Karnataka is <b>Ugadi</b> (<i>Kannada New Year</i>), while
                other festivals celebrated are <br><b>Makara Sankranti</b>(<i>the Harvest Festival</i>), <b>Ganesh
                    Chaturthi</b>, <b>Nagapanchami</b>, <b>Basava Jayanti</b>, <b>Deepavali</b>, and <b>Ramzan</b>.
                <br><br><b>Kambala</b> is an epic buffalo race which is an annual two-day festival, kambala season
                generally starts in November and lasts until March.
            </p> <br>
            <h2 class="custom">Costume</h2> <br>
            <p class="p1">The dressing of Karnataka people varies from district to district. The main Kannadiga male
                costume is <b>Panchey</b> or <b>Lungi</b>, <b>Angi</b> and <b>Peta</b>. Panchey or Lungi is tied below
                the waist while Angi is a traditional shirt and Peta is a turban worn in Mysuru style or Dharwad style.
                Shyla is a piece of long cloth used to carry on the shoulder.<br><br>Female costume includes Sari among
                which <b>IIkal saris</b> are woven using a special technique called Tope Teni. <b>Mysore silk saree</b>
                is also famous. <b>Salwar Kameez</b> is widely popular in urban areas.</p><br>
            <img src="../images/Karnataka-Costume.jpg" alt="Karnataka-Costume" title="Karnataka-Costume"
                class="Karnataka-Costume">
            <img src="../images/Mysore-silk.jpg" alt="Mysore-silk" title="Mysore-silk" class="Mysore-silk">
            <img src="../images/langa-davani.jpg" alt="langa-davani" class="langa-davani" title="langa-davani">
            <p class="p1">Young women traditionally wear <b>Langa Davani. Kasuti</b>is a form of embroidery work which
                is very popular sought after art on dress and costumes. Jeans are popular among the youth while new age
                khadi/silk printed with various art are also found.</p>
        </div>
        <!-- Right side images list -->
        <div class="right">
            <img src="../images/Aihole-durga-temple.jpg" alt="Aihole-durga-temple" class="img1"
                title="Aihole-durga-temple">
            <img src="../images/badami-karnataka.jpg" alt="badami-karnataka" class="img2" title="Badami-karnataka"><br>
            <img src="../images/Bengalurur-urban-city.jpg" alt="Bengalurur-urban-city" class="img3"
                title="Bengalurur-urban-city">
            <img src="../images/Chandravalli-cave-1.jpg" alt="Chandravalli-cave" class="img4"
                title="Chandravalli-cave"><br>
            <img src="../images/Chennakeshava-swami-temple.jpg" alt="Chennakeshava-swami-temple" class="img5"
                title="Chennakeshava-swami-temple"><br>
            <img src="../images/Gateway-Bidar-Fort-p.jpg" alt="Gateway-Bidar-Fort" class="img6"
                title="Gateway-Bidar-Fort">
            <img src="../images/Gol-Gumbaz-Top.jpg" alt="Gol-Gumbaz-Top" class="img7" title="Gol-Gumbaz-Top"><br>
            <img src="../images/Gomateshwara-Statue-at-Shravanabelagola-1.jpg"
                alt="Gomateshwara-Statue-at-Shravanabelagola" class="img8"
                title="Gomateshwara-Statue-at-Shravanabelagola">
            <img src="../images/Gopura_at_Murdeshwar.jpg" alt="Gopura_at_Murdeshwar" class="img9"
                title="Gopura_at_Murdeshwar">
            <img src="../images/Hampi11.jpg" alt="Hampi" class="img10" title="Hampi">
            <img src="../images/Harangi_Elephant_Camp_and_Tree_Park_Pic_1.jpg" alt="Harangi_Elephant_Camp_and_Tree_Park"
                class="img11" title="Harangi_Elephant_Camp_and_Tree_Park">
            <img src="../images/Hoysaleshwara-Temple-Halebeedu.jpg" alt="Hoysaleshwara-Temple-Halebeedu" class="img12"
                title="Hoysaleshwara-Temple-Halebeedu">
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