<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/CPY.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../images/icon.png" type="icon/image">

    <!--************************* -->
    <style>
        /* Styling the body */
        body {
            margin: 0;
            padding: 0;
        }

        /* Styling section, giving background
            image and dimensions */
        section {
            width: 100%;
            height: 800px;
            background: url(../images/bg-1.webp);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Styling the left floating section */
        section .leftBox {
            width: 50%;
            height: 100%;
            float: left;
            padding: 50px;
            box-sizing: border-box;
        }

        /* Styling the background of
            left floating section */
        section .leftBox .content {
            color: #fff;
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            transition: .5s;
        }

        /* Styling the hover effect
            of left floating section */
        section .leftBox .content:hover {
            background: #e91e63;
        }

        /* Styling the header of left
            floating section */
        section .leftBox .content h1 {
            margin: 0;
            padding: 0;
            font-size: 50px;
            text-transform: uppercase;
        }

        /* Styling the paragraph of
            left floating section */
        section .leftBox .content p {
            margin: 10px 0 0;
            padding: 0;
        }

        /* Styling the three events section */
        section .events {
            position: relative;
            width: 50%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            float: right;
            box-sizing: border-box;
        }

        /* Styling the links of
        the events section */
        section .events ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            margin: 0;
            padding: 40px;
            box-sizing: border-box;
            border-radius: 40px;
        }

        /* Styling the lists of the event section */
        section .events ul li {
            list-style: none;
            background: #fff;
            box-sizing: border-box;
            height: 150px;
            margin-top: 25px;
            border-top-left-radius: 50px;
        }

        /* Styling the time class of events section */
        section .events ul li .time {
            position: relative;
            padding: 20px;
            background: #262626;
            box-sizing: border-box;
            border-top-left-radius: 50px;
            width: 30%;
            height: 100%;
            float: left;
            text-align: center;
            transition: .5s;
        }

        /* Styling the hover effect
            of events section */
        section .events ul li:hover .time {
            background: #e91e63;
        }

        /* Styling the header of time
            class of events section */
        section .events ul li .time h2 {
            position: absolute;
            margin: 0;
            padding: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 35px;
            line-height: 30px;
        }

        /* Styling the details
        class of events section */
        section .events ul li .details {
            padding: 20px;
            background: #fff;
            box-sizing: border-box;
            width: 70%;
            height: 100%;
            float: left;
        }

        /* Styling the lists of details
        class of events section */
        section .events ul li .details p {
            position: relative;
            padding: 0;
            font-size: 13px;
        }

        /* Styling the details class's hover effect */
        section .events ul li .details a:hover {
            background: #e91e63;
            color: #fff;
            border-color: #e91e63;
        }

        .special {
            color: white;
            text-align: center;
            font-weight: bolder;
            font-size: 50px;
        }
    </style>
    <!-- ************************* -->
    <title>About</title>
</head>

<body>
    <!-- Navigation menu -->
    <div class="div-1">
        <label class="name"><a href="before-home.php" class="NL-a">Heritage</a></label>
        <a href="before-home.php" class="NL-a"><img src="../images//logo.png" alt="Logo-IMAGE" class="logo"></a>
        <label class="slogan">"Slogans"</label>
        <!-- links -->
        <ul class="ul-1">
        <li class="li-1">
            <a href="after-home.php" class="a-1"> Home</a></li>
            <li class="li-1"><a href="events.php" class="a-1">Events</a></li>
            <li class="li-1"><a href="achivements.php" class="a-1">Achivements</a></li>
        </ul>
    </div>
    <div class="div-2">
        <section>
            <div class="leftBox">
                <div class="content">
                    <h1>
                        About Karnataka
                    </h1>
                    <p>
                        Karnataka also known as Karunadu, formerly Mysore State, is a state in the southwestern region
                        of India. It was formed as Mysore State on 1 November 1956, with the passage of the States
                        Reorganisation Act, and renamed Karnataka in 1973. The state was part of the Carnatic region in
                        British terminology. Its capital and largest city is Bengaluru (Bangalore).<br><br>Karnataka is
                        bordered by the Lakshadweep Sea to the west, Goa to the northwest, Maharashtra to the north,
                        Telangana to the northeast, Andhra Pradesh to the east, Tamil Nadu to the southeast, and Kerala
                        to the southwest. It is the only southern state to have land borders with all of the other four
                        southern Indian sister states. The state covers an area of 191,791 km2 (74,051 sq mi), or 5.83
                        percent of the total geographical area of India. It is the sixth-largest Indian state by area.
                        With 61,130,704 inhabitants at the 2011 census, Karnataka is the eighth-largest state by
                        population, comprising 31 districts. Kannada, one of the classical languages of India, is the
                        most widely spoken and official language of the state. Other minority languages spoken include
                        Urdu, Konkani, Marathi, Tulu, Tamil, Telugu, Malayalam, Kodava and Beary. Karnataka also
                        contains some of the only villages in India where Sanskrit is primarily spoken.
                    </p>
                </div>
            </div>
            <div class="events">
                <p class="special">Special in Karnataka</p>
                <ul>
                    <li>
                        <div class="time">
                            <h2>
                                Education in<br>Karnataka
                            </h2>
                        </div>
                        <div class="details">
                            <p>
                                The syllabus taught in the schools is either of KSEEB (SSLC) and Pre-University Couse
                                (PUC) of the State Syllabus, the CBSE of the Central Syllabus, CISCE, IGCSE, IB, NIOS,
                                etc., are all defined by the Department of Public Instruction of the Government of
                                Karnataka. The state has two Sainik Schools – Kodagu Sainik School in Kodagu and Bijapur
                                Sainik School in Bijapur.<br>To maximise attendance in schools, the Karnataka Government
                                has launched a mid-day meal scheme in government and aided schools in which free lunch
                                is provided to the students.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h2>
                                Media <br>in <br>Karnataka
                            </h2>
                        </div>
                        <div class="details">
                            <p>
                                The era of Kannada newspapers started in the year 1843 when Hermann Mogling, a
                                missionary from Basel Mission, published the first Kannada newspaper called <i>Mangaluru
                                    Samachara</i> in Mangalore. The first Kannada periodical, Mysuru Vrittanta Bodhini
                                was started by Bhashyam Bhashyacharya in Mysore. Shortly after Indian independence in
                                1948, K. N. Guruswamy founded The Printers (Mysuru) Private Limited and began publishing
                                two newspapers, Deccan Herald and Prajavani. Presently The Times of India and Vijaya
                                Karnataka are the largest-selling English and Kannada newspapers respectively.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h2>
                                Sports <br> in<br>Karnataka
                            </h2>
                        </div>
                        <div class="details">
                            <p>
                                One of the most popular sports in Karnataka is cricket. The state cricket team has won
                                the Ranji Trophy seven times, second only to Mumbai in terms of success. Chinnaswamy
                                Stadium in Bangalore regularly hosts international Cricket matches and is also the home
                                of the National Cricket Academy, which was opened in 2000 to nurture potential
                                international players. Many cricketers have represented India and in one international
                                match held in the 1990s; players from Karnataka composed the majority of the national
                                team.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="time">
                            <h2>
                                Tourism <br>in <br>Karnataka
                            </h2>
                        </div>
                        <div class="details">
                            <p>
                                The districts of the Western Ghats and the southern districts of the state have popular
                                eco-tourism locations including Kudremukh, Madikeri and Agumbe. Karnataka has 25
                                wildlife sanctuaries and five national parks. Popular among them are Bandipura National
                                Park, Bannerghatta National Park and Nagarhole National Park. The ruins of the
                                Vijayanagara Empire at Hampi and the monuments of Pattadakal are on the list of UNESCO's
                                World Heritage Sites. The cave temples at Badami and the rock-cut temples at Aihole
                                representing the Badami Chalukyan style of architecture are also popular tourist
                                destinations.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

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