
<!-- =========================================================
FILE NAME : home.blade.php
TECH : Laravel + Bootstrap 5 + CSS + JS
MARATHI NEWS PORTAL UI
========================================================= -->

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- =====================================================
    REQUIRED META TAGS
    ====================================================== -->

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>शेंदुर्णीचा खबरनामा</title>

    <!-- =====================================================
    BOOTSTRAP 5 CDN
    ====================================================== -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- =====================================================
    BOOTSTRAP ICONS
    ====================================================== -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- =====================================================
    MARATHI FONT
    ====================================================== -->

    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- =====================================================
    INTERNAL CSS
    ====================================================== -->

    <style>

        /* =====================================================
        GLOBAL STYLES
        ====================================================== */

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{

            font-family: 'Mukta', sans-serif;
            background: #f3f3f3;

        }

        a{
            text-decoration: none;
        }

        /* =====================================================
        TOP HEADER
        ====================================================== */

        .top-header{

            background: linear-gradient(to right,#e60000,#9d0000);
            color: white;
            padding: 10px 0;
            font-weight: 600;
            font-size: 17px;

        }

        /* Social Icons */
        .social-icons a{

            color: red;
            background: white;
            width: 28px;
            height: 28px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 4px;
            margin-left: 10px;
            transition: 0.3s;

        }

        .social-icons a:hover{

            transform: translateY(-3px);

        }

        /* =====================================================
        LOGO SECTION
        ====================================================== */

        .logo-section{

            background: white;
            padding: 22px 0;

        }

        .website-logo{

            color: #d4007f;
            font-size: 60px;
            font-weight: 700;

        }

        /* =====================================================
        NAVBAR
        ====================================================== */

        .custom-navbar{

            background: black;

        }

        /* Navbar Links */
        .custom-navbar .nav-link{

            color: white;
            padding: 18px 20px;
            font-size: 18px;
            font-weight: 600;
            border-right: 1px solid #1f1f1f;
            transition: 0.3s;

        }

        /* Hover Effect */
        .custom-navbar .nav-link:hover{

            background: red;

        }

        /* Active Menu */
        .active-menu{

            background: red;

        }

        /* =====================================================
        MAIN SECTION
        ====================================================== */

        .main-section{

            padding: 30px 0;

        }

        /* =====================================================
        SIDE ADS
        ====================================================== */

        .side-ad{

            background: #ededed;
            height: 850px;
            border-radius: 12px;

            display: flex;
            justify-content: center;
            align-items: center;

            color: gray;
            font-size: 20px;

            position: sticky;
            top: 100px;

        }

        /* =====================================================
        BREAKING NEWS
        ====================================================== */

        .breaking-news{

            background: #fff4f4;
            border: 1px solid #f1d8d8;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 30px;

        }

        .breaking-tag{

            background: red;
            color: white;
            padding: 6px 15px;
            border-radius: 4px;
            font-weight: 700;

        }

        /* =====================================================
        SECTION TITLE
        ====================================================== */

        .section-title{

            border-bottom: 2px solid red;
            margin-bottom: 25px;
            padding-bottom: 10px;

        }

        .section-title h2{

            font-size: 42px;
            font-weight: 700;
            position: relative;
            padding-left: 15px;

        }

        /* Red Left Line */
        .section-title h2::before{

            content: "";

            position: absolute;

            left: 0;
            top: 8px;

            width: 5px;
            height: 80%;

            background: red;

        }

        /* =====================================================
        FEATURED NEWS
        ====================================================== */

        .featured-news img{

            width: 100%;
            border-radius: 12px;
            height: 380px;
            object-fit: cover;

        }

        .featured-title{

            font-size: 45px;
            margin-top: 20px;
            line-height: 1.3;
            font-weight: 700;

        }

        /* =====================================================
        SMALL NEWS CARDS
        ====================================================== */

        .small-news-card{

            margin-bottom: 20px;

        }

        .small-news-card img{

            width: 100%;
            border-radius: 10px;
            height: 140px;
            object-fit: cover;

        }

        .small-news-card h4{

            margin-top: 10px;
            font-size: 24px;
            line-height: 1.4;
            font-weight: 700;

        }

        /* =====================================================
        SIDEBAR
        ====================================================== */

        .sidebar-card{

            background: white;
            border-radius: 15px;
            padding: 25px;

            box-shadow: 0 4px 15px rgba(0,0,0,0.08);

        }

        .sidebar-title{

            font-size: 35px;
            font-weight: 700;
            margin-bottom: 20px;

        }

        /* Live News Box */
        .live-news-box{

            background: #fff4f4;
            border: 1px solid #f0d8d8;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 20px;

        }

        .live-news-box p{

            font-size: 22px;
            line-height: 1.5;
            font-weight: 600;

        }

        /* News List */
        .latest-news li{

            margin-bottom: 15px;
            line-height: 1.7;
            font-size: 18px;

        }

        /* =====================================================
        RESPONSIVE DESIGN
        ====================================================== */

        @media(max-width:992px){

            .side-ad{

                display: none;

            }

            .website-logo{

                font-size: 38px;

            }

            .featured-title{

                font-size: 30px;

            }

            .section-title h2{

                font-size: 30px;

            }

            .small-news-card h4{

                font-size: 20px;

            }

        }

    </style>

</head>

<body>

    <!-- =====================================================
    TOP HEADER START
    ====================================================== -->

    <div class="top-header">

        <div class="container-fluid px-4">

            <!-- d-flex = flexbox -->
            <!-- justify-content-between = spacing -->
            <!-- align-items-center = vertical center -->

            <div class="d-flex justify-content-between align-items-center">

                <!-- LEFT SIDE -->
                <div>

                    मराठी

                    <!-- Live Clock -->
                    <span class="ms-4"
                          id="clock"></span>

                    <!-- Date -->
                    <span class="ms-4"
                          id="date"></span>

                </div>

                <!-- RIGHT SIDE -->
                <div class="social-icons">

                    <a href="#">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-youtube"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- =====================================================
    LOGO SECTION
    ====================================================== -->

    <section class="logo-section text-center">

        <h1 class="website-logo">

            शेंदुर्णीचा खबरनामा

        </h1>

    </section>

    <!-- =====================================================
    NAVBAR
    ====================================================== -->

    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar sticky-top">

        <div class="container-fluid px-0">

            <!-- MOBILE MENU BUTTON -->
            <button class="navbar-toggler ms-3"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarMenu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <!-- NAVBAR LINKS -->
            <div class="collapse navbar-collapse"
                 id="navbarMenu">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active-menu"
                           href="#">
                            मुखपृष्ठ
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            देश-विदेश
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            महाराष्ट्र
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            राजकारण
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            शेंदुर्णी शहर
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            शेंदुर्णी ग्रामीण
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            क्राईम
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            शेती
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="#">
                            अर्थकारण
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- =====================================================
    MAIN SECTION
    ====================================================== -->

    <section class="main-section">

        <div class="container-fluid px-5">

            <div class="row">

                <!-- =================================================
                LEFT ADVERTISEMENT
                ================================================== -->

                <div class="col-lg-2">

                    <div class="side-ad">

                        जाहिरात

                    </div>

                </div>

                <!-- =================================================
                CENTER CONTENT
                ================================================== -->

                <div class="col-lg-7">

                    <!-- BREAKING NEWS -->
                    <div class="breaking-news d-flex align-items-center gap-4">

                        <span class="breaking-tag">

                            ब्रेकिंग न्यूज

                        </span>

                        <marquee>

                            मनमाड कृषी उत्पन्न बाजार समितीत कोट्यवधींचा घोटाळा

                        </marquee>

                    </div>

                    <!-- SECTION TITLE -->
                    <div class="section-title">

                        <h2>

                            मुख्य बातम्या

                        </h2>

                    </div>

                    <!-- MAIN ROW -->
                    <div class="row">

                        <!-- BIG NEWS -->
                        <div class="col-lg-7">

                            <div class="featured-news">

                                <img src="https://picsum.photos/900/600"
                                     alt="news">

                                <h2 class="featured-title">

                                    मनमाड कृषी उत्पन्न बाजार समितीत कोट्यवधींचा घोटाळा

                                </h2>

                            </div>

                        </div>

                        <!-- SMALL NEWS -->
                        <div class="col-lg-5">

                            <!-- CARD 1 -->
                            <div class="small-news-card">non

                                </h4>

                            </div>

                            <!-- CARD 2 -->
                            <div class="small-news-card">

                                <img src="https://picsum.photos/500/300?2">

                                <h4>

                                    महावितरणाचा भोंगळ कारभार

                                </h4>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- =================================================
                RIGHT SIDEBAR
                ================================================== -->

                <div class="col-lg-3">

                    <div class="sidebar-card">

                        <h3 class="sidebar-title">

                            🔴 लाईव्ह न्यूज

                        </h3>

                        <!-- Highlight Box -->
                        <div class="live-news-box">

                            <p>

                                दोन गावठी बंदुका जप्त; आरोपी अटकेत

                            </p>

                        </div>

                        <!-- News List -->
                        <ul class="latest-news">

                            <li>
                                मनमाड कृषी उत्पन्न बाजार समितीत घोटाळा
                            </li>

                            <li>
                                गावोगाव कचऱ्याचा प्रश्न गंभीर
                            </li>

                            <li>
                                महावितरणाच्या कारभारावर नागरिक नाराज
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =====================================================
    BOOTSTRAP JS
    ====================================================== -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- =====================================================
    LIVE CLOCK JS
    ====================================================== -->

    <script>

        /* =================================================
        LIVE CLOCK FUNCTION
        ================================================== */

        function updateClock(){

            // Get Current Date & Time
            const now = new Date();

            // Get Time
            const time =
                now.toLocaleTimeString();

            // Get Date
            const date =
                now.toDateString();

            // Add Time Into HTML
            document.getElementById("clock")
            .innerHTML = time;

            // Add Date Into HTML
            document.getElementById("date")
            .innerHTML = date;

        }

        /* Run Function Every Second */
        setInterval(updateClock,1000);

        /* Run Immediately */
        updateClock();

    </script>

</body>
</html>