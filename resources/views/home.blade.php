<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GuideGo - Tourist Guide App</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins',sans-serif;
  scroll-behavior:smooth;
}

body{
  overflow-x:hidden;
  background:#f5f9ff;
}

/* ===== NAVBAR ===== */

nav{
  position:fixed;
  width:100%;
  top:0;
  left:0;
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:20px 8%;
  z-index:1000;
  transition:0.4s;
}

nav.scrolled{
  background:white;
  box-shadow:0 5px 20px rgba(0,0,0,0.08);
}

.logo{
  font-size:32px;
  font-weight:800;
  color:white;
  transition:0.4s;
  cursor:pointer;
}

nav.scrolled .logo{color:#023047;}

.nav-links{
  display:flex;
  gap:35px;
}

.nav-links a{
  text-decoration:none;
  color:white;
  font-weight:500;
  transition:0.3s;
}

nav.scrolled .nav-links a{color:#023047;}
.nav-links a:hover{color:#ffb703;}

/* ===== PAGES ===== */

.page{
  display:none;
  animation:fadeUp 0.6s ease;
}

.page.active{display:block;}

/* ===== HERO ===== */

.hero{
  width:100%;
  height:100vh;
  background:
    linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)),
    url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=1600&auto=format&fit=crop');
  background-size:cover;
  background-position:center;
  display:flex;
  align-items:center;
  padding:0 8%;
  position:relative;
}

.hero-content{
  max-width:650px;
  color:white;
  animation:fadeUp 1.5s ease;
}

.hero-content .badge{
  background:rgba(255,255,255,0.15);
  padding:10px 20px;
  border-radius:50px;
  backdrop-filter:blur(8px);
  display:inline-block;
  margin-bottom:25px;
}

.hero-content h1{
  font-size:75px;
  line-height:1.1;
  margin-bottom:25px;
}

.hero-content h1 span{color:#ffb703;}

.hero-content p{
  font-size:18px;
  line-height:1.8;
  margin-bottom:35px;
  color:#f1f1f1;
}

.buttons{
  display:flex;
  gap:20px;
  flex-wrap:wrap;
}

.btn{
  padding:15px 35px;
  border-radius:50px;
  text-decoration:none;
  font-weight:600;
  transition:0.4s;
  cursor:pointer;
  border:none;
  font-size:16px;
}

.btn-primary{background:#ffb703;color:#000;}
.btn-primary:hover{transform:translateY(-5px);box-shadow:0 8px 20px rgba(255,183,3,0.4);}
.btn-secondary{border:2px solid white;color:white;background:transparent;}
.btn-secondary:hover{background:white;color:black;}

/* ===== FLOATING MOBILE ===== */

.mobile-ui{
  position:absolute;
  right:7%;
  bottom:40px;
  animation:float 4s ease-in-out infinite;
}

.mobile-ui img{
  width:320px;
  filter:drop-shadow(0 15px 35px rgba(0,0,0,0.4));
}

/* ===== FEATURES ===== */

.features{
  padding:100px 8%;
  background:white;
}

.section-title{
  text-align:center;
  margin-bottom:60px;
}

.section-title h2{
  font-size:48px;
  color:#023047;
  margin-bottom:15px;
}

.section-title p{color:#666;font-size:16px;}

.feature-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
}

.feature-card{
  background:#f8fbff;
  padding:35px;
  border-radius:25px;
  transition:0.4s;
  box-shadow:0 10px 20px rgba(0,0,0,0.05);
}

.feature-card:hover{transform:translateY(-10px);}
.feature-card .icon{font-size:36px;margin-bottom:15px;}
.feature-card h3{margin-bottom:15px;color:#023047;}
.feature-card p{color:#555;line-height:1.7;}

/* ===== DESTINATIONS ===== */

.destinations{
  padding:100px 8%;
  background:#edf6ff;
}

.destination-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
  gap:30px;
  margin-bottom:30px;
}

.destination-card{
  background:rgb(243,240,240);
  border-radius:25px;
  overflow:hidden;
  transition:0.4s;
  box-shadow:0 10px 20px rgba(0,0,0,0.08);
  cursor:pointer;
}

.destination-card:hover{transform:translateY(-10px);}

.destination-card img{
  width:100%;
  height:250px;
  object-fit:cover;
}

.destination-content{padding:25px;}
.destination-content h3{margin-bottom:10px;color:#023047;}
.destination-content p{color:#666;line-height:1.7;}

/* ===== CTA ===== */

.cta{
  padding:120px 8%;
  text-align:center;
  background:linear-gradient(135deg,#023047,#219ebc);
  color:white;
}

.cta h2{font-size:55px;margin-bottom:20px;}
.cta p{margin-bottom:35px;font-size:18px;}

/* ===== REVIEWS ===== */

.reviews{
  padding:100px 8%;
  background:white;
}

.review-grid{
  display:flex;
  gap:30px;
  justify-content:center;
  flex-wrap:wrap;
}

.review-card{
  background:#f8fbff;
  padding:30px;
  border-radius:20px;
  max-width:320px;
  box-shadow:0 5px 20px rgba(0,0,0,0.06);
}

.review-card h3{color:#023047;margin-bottom:10px;}
.review-card p{color:#555;line-height:1.7;}

/* ===== FOOTER ===== */

footer{
  background:#01161e;
  color:white;
  text-align:center;
  padding:30px;
}

/* ===== SEARCH PAGE ===== */

.search-page{
  min-height:100vh;
  background:#f5f9ff;
  padding-top:100px;
}

.search-hero{
  background:linear-gradient(135deg,#023047,#219ebc);
  padding:60px 8% 80px;
  text-align:center;
  color:white;
  position:relative;
  overflow:hidden;
}

.search-hero::before{
  content:'';
  position:absolute;
  width:400px;height:400px;
  background:rgba(255,255,255,0.05);
  border-radius:50%;
  top:-100px;right:-100px;
}

.search-hero::after{
  content:'';
  position:absolute;
  width:300px;height:300px;
  background:rgba(255,255,255,0.05);
  border-radius:50%;
  bottom:-80px;left:-80px;
}

.search-hero h1{
  font-size:52px;
  margin-bottom:15px;
  position:relative;z-index:1;
}

.search-hero h1 span{color:#ffb703;}

.search-hero p{
  font-size:18px;
  color:rgba(255,255,255,0.85);
  margin-bottom:35px;
  position:relative;z-index:1;
}

.search-wrapper{
  position:relative;
  max-width:700px;
  margin:0 auto;
  z-index:1;
}

.search-wrapper input{
  width:100%;
  padding:22px 70px 22px 30px;
  border:none;
  border-radius:60px;
  font-size:18px;
  font-family:'Poppins',sans-serif;
  box-shadow:0 10px 40px rgba(0,0,0,0.2);
  outline:none;
  transition:0.3s;
}

.search-wrapper input:focus{
  box-shadow:0 10px 50px rgba(0,0,0,0.3);
}

.search-wrapper button{
  position:absolute;
  right:8px;top:50%;
  transform:translateY(-50%);
  background:#ffb703;
  border:none;
  border-radius:50px;
  padding:12px 25px;
  font-weight:700;
  font-size:16px;
  cursor:pointer;
  transition:0.3s;
  font-family:'Poppins',sans-serif;
}

.search-wrapper button:hover{background:#e0a200;}

.search-tags{
  display:flex;
  gap:12px;
  justify-content:center;
  flex-wrap:wrap;
  margin-top:20px;
  position:relative;z-index:1;
}

.search-tag{
  background:rgba(255,255,255,0.15);
  backdrop-filter:blur(8px);
  color:white;
  padding:8px 20px;
  border-radius:50px;
  font-size:14px;
  cursor:pointer;
  transition:0.3s;
  border:1px solid rgba(255,255,255,0.25);
}

.search-tag:hover{background:rgba(255,255,255,0.3);}

/* ===== FILTER BAR ===== */

.filter-bar{
  padding:30px 8%;
  display:flex;
  gap:15px;
  flex-wrap:wrap;
  align-items:center;
  background:white;
  box-shadow:0 2px 15px rgba(0,0,0,0.06);
}

.filter-bar span{
  font-weight:600;
  color:#023047;
  margin-right:5px;
}

.filter-btn{
  padding:10px 22px;
  border-radius:50px;
  border:2px solid #e0e0e0;
  background:white;
  font-family:'Poppins',sans-serif;
  font-size:14px;
  font-weight:500;
  cursor:pointer;
  transition:0.3s;
  color:#444;
}

.filter-btn:hover,.filter-btn.active{
  border-color:#219ebc;
  background:#219ebc;
  color:white;
}

/* ===== RESULTS SECTION ===== */

.results-section{
  padding:50px 8%;
}

.results-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:30px;
  flex-wrap:wrap;
  gap:15px;
}

.results-header h2{
  font-size:28px;
  color:#023047;
}

.results-header p{color:#666;}

.results-grid{
  display:grid;
  grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
  gap:30px;
}

.result-card{
  background:white;
  border-radius:22px;
  overflow:hidden;
  box-shadow:0 8px 25px rgba(0,0,0,0.08);
  transition:0.4s;
  cursor:pointer;
}

.result-card:hover{transform:translateY(-8px);box-shadow:0 15px 35px rgba(0,0,0,0.14);}

.result-card .img-wrap{
  position:relative;
  overflow:hidden;
}

.result-card img{
  width:100%;
  height:220px;
  object-fit:cover;
  transition:0.5s;
}

.result-card:hover img{transform:scale(1.05);}

.result-badge{
  position:absolute;
  top:15px;left:15px;
  background:#ffb703;
  color:#000;
  font-size:12px;
  font-weight:700;
  padding:5px 12px;
  border-radius:50px;
}

.result-fav{
  position:absolute;
  top:15px;right:15px;
  background:white;
  width:36px;height:36px;
  border-radius:50%;
  display:flex;align-items:center;justify-content:center;
  font-size:18px;
  cursor:pointer;
  transition:0.3s;
  box-shadow:0 2px 10px rgba(0,0,0,0.15);
}

.result-fav:hover{transform:scale(1.15);}

.result-info{padding:22px;}

.result-info h3{
  font-size:20px;
  color:#023047;
  margin-bottom:8px;
}

.result-info .meta{
  display:flex;
  align-items:center;
  gap:15px;
  color:#888;
  font-size:14px;
  margin-bottom:12px;
}

.result-info p{
  color:#666;
  font-size:14px;
  line-height:1.7;
  margin-bottom:18px;
}

.result-info .tags{
  display:flex;
  gap:8px;
  flex-wrap:wrap;
}

.result-info .tag{
  background:#edf6ff;
  color:#219ebc;
  font-size:12px;
  padding:5px 12px;
  border-radius:50px;
  font-weight:500;
}

/* ===== BACK BUTTON ===== */

.back-btn{
  display:inline-flex;
  align-items:center;
  gap:8px;
  background:white;
  color:#023047;
  border:none;
  padding:10px 22px;
  border-radius:50px;
  font-family:'Poppins',sans-serif;
  font-weight:600;
  font-size:15px;
  cursor:pointer;
  box-shadow:0 3px 15px rgba(0,0,0,0.1);
  transition:0.3s;
  margin-bottom:25px;
}

.back-btn:hover{transform:translateX(-4px);}

/* ===== POPUP ===== */

.popup-container{
  position:fixed;
  inset:0;
  background:rgba(0,0,0,0.55);
  display:flex;
  justify-content:center;
  align-items:center;
  z-index:9999;
  opacity:0;
  visibility:hidden;
  transition:0.5s;
}

.popup-container.show{opacity:1;visibility:visible;}

.popup-box{
  width:380px;
  background:white;
  padding:35px;
  border-radius:25px;
  position:relative;
  animation:popupAnim 0.6s ease;
}

.close-btn{
  position:absolute;
  top:15px;right:20px;
  font-size:28px;
  cursor:pointer;
  color:#666;
}

.close-btn:hover{color:#023047;}

.form-toggle{
  display:flex;
  background:#f1f1f1;
  border-radius:50px;
  overflow:hidden;
  margin-bottom:25px;
}

.form-toggle button{
  flex:1;border:none;
  padding:12px;
  background:none;
  cursor:pointer;
  font-weight:600;
  font-family:'Poppins',sans-serif;
  transition:0.3s;
}

.form-toggle .active{background:#219ebc;color:white;}

.form{display:none;flex-direction:column;}
.active-form{display:flex;}

.form h2{text-align:center;margin-bottom:20px;color:#023047;}

.form input{
  width:100%;padding:15px;
  margin-bottom:18px;
  border:none;
  background:#f5f5f5;
  border-radius:12px;
  font-family:'Poppins',sans-serif;
  font-size:14px;
  outline:none;
  transition:0.3s;
}

.form input:focus{background:#edf6ff;}

.submit-btn{
  padding:15px;border:none;
  border-radius:12px;
  background:#ffb703;
  font-weight:600;
  cursor:pointer;
  font-family:'Poppins',sans-serif;
  font-size:15px;
  transition:0.3s;
}

.submit-btn:hover{background:#e0a200;}

/* ===== ANIMATIONS ===== */

@keyframes fadeUp{
  from{transform:translateY(40px);opacity:0;}
  to{transform:translateY(0);opacity:1;}
}

@keyframes float{
  0%{transform:translateY(0px);}
  50%{transform:translateY(-20px);}
  100%{transform:translateY(0px);}
}

@keyframes popupAnim{
  from{transform:translateY(-50px);opacity:0;}
  to{transform:translateY(0);opacity:1;}
}

/* ===== RESPONSIVE ===== */

@media(max-width:1000px){
  .mobile-ui{display:none;}
  .hero-content h1{font-size:55px;}
}

@media(max-width:768px){
  nav{padding:20px 5%;}
  .nav-links{display:none;}
  .hero-content h1{font-size:42px;}
  .cta h2{font-size:38px;}
  .popup-box{width:90%;}
  .search-hero h1{font-size:36px;}
}

</style>
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar">
  <div class="logo" onclick="goHome()">GuideGo</div>
<div class="nav-links">

  <a href="#" onclick="goHome()">Home</a>
  <a href="/destinations">Destinations</a>
  <a href="#">Features</a>
  <a href="#">Reviews</a>
  <a href="#">Contact</a>
  @auth
<a href="/profile">Profile</a>
@endauth

  @auth
      <span style="color:white;font-weight:600;">
          {{ Auth::user()->name }}
          <form action="{{ route('logout') }}" method="POST">
    @csrf

    <button
        type="submit"
        style="
        background:#ffb703;
        border:none;
        padding:8px 15px;
        border-radius:20px;
        cursor:pointer;">
        Logout
    </button>
</form>
      </span>
  @endauth

</div>

</nav>

<!-- ======= PAGE 1: LANDING ======= -->
<div class="page active" id="landing-page">

  <!-- HERO -->
  <section class="hero">
    <div class="hero-content">
      <span class="badge">✨ Your Smart Travel Companion</span>
      <h1>Explore The <span>Maharashtra</span> Like Never Before</h1>
      <p>Discover beautiful destinations, local experiences, hotels, food, and unforgettable adventures with GuideGo.</p>
      <div class="buttons">
        <button class="btn btn-primary" onclick="goSearch()"
        >Get Started</button>
        <a href="#features" class="btn btn-secondary">Explore More</a>
      </div>
    </div>

  </section>

  <!-- FEATURES -->
  <section class="features" id="features">
    <div class="section-title">
      <h2>Why Choose Us</h2>
      <p>Everything you need for the perfect Maharashtra trip</p>
    </div>
    <div class="feature-grid">
      <div class="feature-card">
        <div class="icon">🗺️</div>
        <h3>Smart Navigation</h3>
        <p>Find routes and nearby attractions easily with real-time directions and offline maps.</p>
      </div>
      <div class="feature-card">
        <div class="icon">🏨</div>
        <h3>Hotel Booking</h3>
        <p>Book hotels and luxury stays quickly with best price guarantees.</p>
      </div>
      <div class="feature-card">
        <div class="icon">📋</div>
        <h3>Trip Planning</h3>
        <p>Manage budget and travel plans smarter with AI-powered itinerary builder.</p>
      </div>
      <div class="feature-card">
        <div class="icon">🍜</div>
        <h3>Local Food</h3>
        <p>Discover famous restaurants and local cuisines wherever you travel.</p>
      </div>
    </div>
  </section>

  <!-- DESTINATIONS -->
  <section class="destinations" id="destinations">
    <div class="section-title">
      <h2>Popular Destinations</h2>
      <p>Explore the best of Maharashtra</p>
    </div>
    <div class="destination-grid">
    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','nashik') }}'">
            <img src="/images/nashik.png" alt="Nashik">
        <div class="destination-content">
          <h3>Nashik</h3>
          <p>Enjoy the best climate and famous wine trails at Nashik.</p>
        </div>
      </div>
    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','kokan') }}'">
        <img src="/images/kokan.png" alt="Kokan">
        <div class="destination-content">
          <h3>Kokan</h3>
          <p>Relax on wonderful beaches and experience rich coastal culture.</p>
        </div>
      </div>
    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','pune') }}'">
        <img src="/images/pune.png" alt="Pune">
        <div class="destination-content">
          <h3>Pune</h3>
          <p>History, devotion and beauty — All in one Pune journey.</p>
        </div>
      </div>
    </div>
    <div style="height:30px"></div>
    <div class="destination-grid">
      <div class="destination-card"    
    onclick="window.location='{{ route('district.show','mumbai') }}'">
        <img src="/images/mumbai.png" alt="Mumbai">
        <div class="destination-content">
          <h3>Mumbai</h3>
          <p>Enjoy the night life and stunning sea views in the city of dreams.</p>
        </div>
      </div>
    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','kolhapur') }}'">
        <img src="/images/kolhapur.png" alt="Kolhapur">
        <div class="destination-content">
          <h3>Kolhapur</h3>
          <p>Get blessings from Goddess Amba Bai and explore rich traditions.</p>
        </div>
      </div>
      <div class="destination-card"    
    onclick="window.location='{{ route('district.show','raigad') }}'">
        <img src="/images/raigad.png" alt="Raigad">
        <div class="destination-content">
          <h3>Raigad</h3>
          <p>Great Maratha history and beautiful mountain landscapes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <h2>Start Your Journey Today</h2>
    <p>Download GuideGo and explore the world smarter.</p>
    <button class="btn btn-primary" onclick="goSearch()">Download App</button>
  </section>

  <!-- REVIEWS -->
  <section class="reviews" id="reviews">
    <div class="section-title">
      <h2>Top User Reviews</h2>
      <p>What travelers say about GuideGo</p>
    </div>
    <div class="review-grid">
      <div class="review-card">
        <h3>⭐⭐⭐⭐⭐ Rahul Patil</h3>
        <p>"Amazing experience! GuideGo helped me discover hidden places in Pune I never knew existed."</p>
      </div>
      <div class="review-card">
        <h3>⭐⭐⭐⭐⭐ Priya Sharma</h3>
        <p>"Very smooth interface and beautiful design. Loved the travel suggestions and hotel booking."</p>
      </div>
      <div class="review-card">
        <h3>⭐⭐⭐⭐⭐ Aditya More</h3>
        <p>"Perfect travel companion for planning trips around Maharashtra. Highly recommended!"</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>© 2026 GuideGo. All Rights Reserved.</footer>

</div>
<!-- END LANDING PAGE -->






  <!-- LOGIN POPUP -->
   <div class="popup-container" id="popup">

  <div class="popup-box">

    <span class="close-btn" onclick="closePopup()">×</span>

    <div class="form-toggle">
      <button id="loginBtn" class="active">Login</button>
      <button id="signupBtn">Sign Up</button>
    </div>

    <!-- LOGIN -->

   <form id="loginForm"
      class="form active-form"
      method="POST"
      action="{{ route('login') }}">

    @csrf

    <h2>Welcome Back 👋</h2>

    <input
        type="email"
        name="email"
        placeholder="Email Address"
        required>

    <input
        type="password"
        name="password"
        placeholder="Password"
        required>

    <button type="submit" class="submit-btn">
        Login
    </button>

</form>



<form id="signupForm"
      class="form"
      method="POST"
      action="{{ route('register') }}">

    @csrf

    <h2>Create Account ✨</h2>

    <input
        type="text"
        name="name"
        placeholder="Full Name"
        required>

    <input
        type="email"
        name="email"
        placeholder="Email Address"
        required>

    <input
        type="password"
        name="password"
        placeholder="Password"
        required>

    <button type="submit" class="submit-btn">
        Create Account
    </button>

</form>


<script>

/* NAVBAR SCROLL */
window.addEventListener("scroll", () => {
    const navbar = document.getElementById("navbar");

    if(navbar){
        navbar.classList.toggle("scrolled", window.scrollY > 50);
    }
});

/* HOME BUTTON */
function goHome(){
    window.location.href = "/";
}


function closePopup(){
    if(popup){
        popup.classList.remove("show");
    }
}

function openPopup(){
    if(popup){
        popup.classList.add("show");
    }
}

function goSearch(){

    @guest
        if(popup){
            popup.classList.add("show");
        }
        return;
    @endguest

    window.location.href = "/destinations";
}

/* POPUP */
const popup = document.getElementById("popup");

@guest
window.addEventListener("load", () => {

    setTimeout(() => {

        if(popup){
            popup.classList.add("show");
        }

    }, 1500);

});
@endguest

function closePopup(){
    if(popup){
        popup.classList.remove("show");
    }
}

/* FORM TOGGLE */
const loginBtn = document.getElementById("loginBtn");
const signupBtn = document.getElementById("signupBtn");
const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");

if(loginBtn && signupBtn && loginForm && signupForm){

    loginBtn.addEventListener("click", () => {

        loginBtn.classList.add("active");
        signupBtn.classList.remove("active");

        loginForm.classList.add("active-form");
        signupForm.classList.remove("active-form");

    });

    signupBtn.addEventListener("click", () => {

        signupBtn.classList.add("active");
        loginBtn.classList.remove("active");

        signupForm.classList.add("active-form");
        loginForm.classList.remove("active-form");

    });

}

</script>

<!-- ===== ALL DATA ===== -->



</body>
</html>