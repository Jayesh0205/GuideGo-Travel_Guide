<!DOCTYPE html>
<html lang="mr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>जामनेर खबरनामा</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f5f5f5;
}

/* TOP BAR */

.topbar{
    background:#c40000;
    color:white;
    padding:12px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    font-size:14px;
}

.social-icons{
    display:flex;
    gap:15px;
}

.social-icons span{
    background:white;
    color:#c40000;
    padding:5px 10px;
    border-radius:5px;
    font-weight:bold;
}

/* LOGO */

.logo{
    background:white;
    text-align:center;
    padding:20px;
    font-size:45px;
    font-weight:700;
    color:#d1005a;
}

/* NAVBAR */

nav{
    background:#000;
    padding:18px 8%;
}

nav ul{
    display:flex;
    gap:40px;
    list-style:none;
    justify-content:center;
    flex-wrap:wrap;
}

nav ul li{
    color:white;
    cursor:pointer;
    transition:0.3s;
}

nav ul li:hover{
    color:#ff3d3d;
}

/* BREAKING */

.breaking{
    margin:30px 8%;
    background:#fff;
    padding:15px;
    border-radius:8px;
    display:flex;
    align-items:center;
    gap:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
}

.breaking-title{
    background:red;
    color:white;
    padding:8px 15px;
    border-radius:5px;
    font-weight:bold;
}

/* MAIN NEWS */

.main-news{
    margin:20px 8%;
}

.section-title{
    font-size:32px;
    font-weight:700;
    margin-bottom:25px;
    border-left:5px solid red;
    padding-left:15px;
}

.hero-news{
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

.hero-news img{
    width:100%;
    height:500px;
    object-fit:cover;
}

.hero-content{
    padding:25px;
}

.hero-content h2{
    font-size:36px;
    margin-bottom:15px;
}

.hero-content p{
    color:#555;
    line-height:1.8;
}

/* NEWS GRID */

.news-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:25px;
    margin-top:40px;
}

.news-card{
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    transition:0.4s;
}

.news-card:hover{
    transform:translateY(-8px);
}

.news-card img{
    width:100%;
    height:320px;
    object-fit:cover;
}

.news-content{
    padding:20px;
}

.news-content h3{
    margin-bottom:12px;
    font-size:22px;
}

.news-content p{
    color:#555;
    line-height:1.7;
}

/* FOOTER */

footer{
    margin-top:70px;
    background:#000;
    color:white;
    text-align:center;
    padding:30px;
}

@media(max-width:768px){

    .logo{
        font-size:32px;
    }

    .hero-news img{
        height:300px;
    }

    .hero-content h2{
        font-size:25px;
    }

}

</style>
</head>

<body>

<!-- TOPBAR -->

<div class="topbar">

<div>
मराठी &nbsp;&nbsp; 01:12:42 &nbsp;&nbsp; WED MAY 27 2026
</div>

<div class="social-icons">
<span>f</span>
<span>ig</span>
<span>yt</span>
</div>

</div>

<!-- LOGO -->

<div class="logo">
जामनेर खबरनामा
</div>

<!-- NAVBAR -->

<nav>

<ul>

<li>मुख्यपृष्ठ</li>
<li>महाराष्ट्र</li>
<li>राजकारण</li>
<li>जळगाव</li>
<li>जामनेर</li>
<li>क्राईम</li>
<li>स्पोर्ट्स</li>

</ul>

</nav>

<!-- BREAKING -->

<div class="breaking">

<div class="breaking-title">
ब्रेकिंग न्यूज
</div>

<marquee>
जामनेर मध्ये तरुणांच्या नव्या स्टाईलची चर्चा • सोशल मीडियावर फोटो व्हायरल • स्थानिक युवकांमध्ये उत्साह
</marquee>

</div>

<!-- MAIN SECTION -->

<section class="main-news">

<h2 class="section-title">
मुख्य बातम्या
</h2>

<!-- HERO NEWS -->

<div class="hero-news">

<img src="1000301155.jpg">

<div class="hero-content">

<h2>
जामनेरच्या युवकाचा स्टायलिश लूक सोशल मीडियावर व्हायरल
</h2>

<p>
जामनेर येथील एका तरुणाचा साधा पण आकर्षक लूक सध्या सोशल मीडियावर चर्चेचा विषय ठरत आहे.
पांढरा शर्ट, क्लासिक चष्मा आणि SUV सोबतचा फोटो युवकांमध्ये मोठ्या प्रमाणावर पसंत केला जात आहे.
स्थानिक तरुणांनी या फोटोला “जामनेरचा मॉडेल बॉय” अशी उपाधी दिली आहे.
</p>

</div>

</div>

<!-- NEWS GRID -->

<div class="news-grid">

<!-- CARD 1 -->

<div class="news-card">

<img src="1000301203.jpg">

<div class="news-content">

<h3>
ब्लॅक अँड व्हाईट फोटोने तरुणाईला वेड लावले
</h3>

<p>
नवीन एडिटिंग स्टाईल आणि क्लासिक पोझमुळे हा फोटो Instagram वर मोठ्या प्रमाणावर शेअर होत आहे.
तरुणांमध्ये नवीन फोटोशूट ट्रेंड सुरू झाल्याची चर्चा आहे.
</p>

</div>

</div>

<!-- CARD 2 -->

<div class="news-card">

<img src="1000298125.jpg">

<div class="news-content">

<h3>
रस्त्यावरचा स्टायलिश फोटो चर्चेत
</h3>

<p>
ब्लू शर्ट आणि सनग्लासेसमधील हा फोटो युवकांमध्ये आकर्षणाचा विषय ठरत आहे.
ग्रामीण भागातील तरुणांचा फॅशन सेन्स आता सोशल मीडियावर चमकत असल्याचे दिसून येत आहे.
</p>

</div>

</div>

<!-- CARD 3 -->

<div class="news-card">

<img src="1000301155.jpg">

<div class="news-content">

<h3>
जामनेर युवकांच्या नव्या स्टाईलची शहरभर चर्चा
</h3>

<p>
साधेपणात स्टाईल दाखवणाऱ्या या तरुणाचे फोटो Facebook आणि WhatsApp वर मोठ्या प्रमाणावर व्हायरल होत आहेत.
स्थानिक मित्रांनी त्याचे कौतुक केले आहे.
</p>

</div>

</div>

</div>

</section>

<!-- FOOTER -->

<footer>

<h2>
जामनेर खबरनामा
</h2>

<p>
Latest Local News • Maharashtra Updates • Jamner Trends
</p>

</footer>

</body>
</html>