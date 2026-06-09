<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- TOP NAVBAR -->

<header class="top-navbar">
    <div class="nav-container">

        <div class="logo">
            GuideGo
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>


<!-- MAHARASHTRA DISTRICT DESTINATIONS -->

<section class="destinations" id="destinations">

  <div class="section-title">
    @auth
<div class="welcome-user">
    Welcome back, {{ Auth::user()->name }} 👋
</div>
@endauth
        <div class="search-hero">
      <h1>Explore <span>Maharashtra</span> 🌏</h1>
      <p>Find destinations, hotels, experiences and local food</p>

      <div class="search-wrapper">
        <input
type="text"
id="search"
placeholder="Search destinations">
        <button onclick="doSearch()">Search</button>
      </div>
      <div id="suggestions" class="suggestions-box"></div>
      <div id="resultCount" class="result-count">
    36 Destinations Found
</div>


    </div>


  </div>

  <div id="noResults" class="no-results">

    <h2>😕 No Destination Found</h2>

    <p>Try searching another district.</p>

</div>

  <div class="destination-grid">

    <!-- AHMEDNAGAR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','ahmednagar') }}'">

      <img src="images/ahmednagar.png">

      <div class="destination-content">
        <h3>Ahmednagar (Ahilyanagar)</h3>

        <p>
          Shirdi Sai Baba Temple,
          Ahmednagar Fort,
          Meherabad and Bhandardara.
        </p>
      </div>
    </div>

    <!-- AKOLA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','akola') }}'">
          <img src="images/akola.png">

      <div class="destination-content">
        <h3>Akola</h3>

        <p>
          Narnala Fort,
          Raj Rajeshwar Temple
          and scenic hills.
        </p>
      </div>
    </div>

    <!-- AMRAVATI -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','amravati') }}'">
      <img src="images/amravati.png">

      <div class="destination-content">
        <h3>Amravati</h3>

        <p>
          Chikhaldara Hill Station,
          Melghat Tiger Reserve
          and ancient temples.
        </p>
      </div>
    </div>

    <!-- BEED -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','beed') }}'">
      <img src="images/beed.png">

      <div class="destination-content">
        <h3>Beed</h3>

        <p>
          Kankaleshwar Temple,
          ancient caves
          and peaceful nature spots.
        </p>
      </div>
    </div>

    <!-- BHANDARA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','bhandara') }}'">
      <img src="images/bhandara.png">

      <div class="destination-content">
        <h3>Bhandara</h3>

        <p>
          Ambagad Fort,
          lakes and greenery
          with cultural heritage.
        </p>
      </div>
    </div>

    <!-- BULDHANA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','buldhana') }}'">
      <img src="images/buldhana.png">

      <div class="destination-content">
        <h3>Buldhana</h3>

        <p>
          Lonar Lake,
          Sindkhed Raja
          and natural beauty.
        </p>
      </div>
    </div>

    <!-- CHANDRAPUR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','chandrapur') }}'">
      <img src="images/chandrapur.png">

      <div class="destination-content">
        <h3>Chandrapur</h3>

        <p>
          Tadoba Tiger Reserve,
          ancient temples
          and wildlife adventures.
        </p>
      </div>
    </div>

    <!-- CHHATRAPATI SAMBHAJINAGAR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','aurangabad') }}'">
      <img src="images/aurangabad.png">

      <div class="destination-content">
        <h3>Chhatrapati Sambhajinagar</h3>

        <p>
          Ajanta Caves,
          Ellora Caves
          and Bibi Ka Maqbara.
        </p>
      </div>
    </div>

    <!-- DHULE -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','dhule') }}'">
      <img src="images/dhule.png">

      <div class="destination-content">
        <h3>Dhule</h3>

        <p>
          Songir Fort,
          historical places
          and natural beauty.
        </p>
      </div>
    </div>

    <!-- GADCHIROLI -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','gadchiroli') }}'">
      <img src="images/gadchiroli.png">

      <div class="destination-content">
        <h3>Gadchiroli</h3>

        <p>
          Dense forests,
          tribal culture
          and wildlife reserves.
        </p>
      </div>
    </div>

    <!-- GONDIA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','gondia') }}'">
      <img src="images/gondia.png">

      <div class="destination-content">
        <h3>Gondia</h3>

        <p>
          Nagzira Wildlife Sanctuary,
          lakes and greenery.
        </p>
      </div>
    </div>

    <!-- HINGOLI -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','hingoli') }}'">
      <img src="images/hingoli.png">

      <div class="destination-content">
        <h3>Hingoli</h3>

        <p>
          Aundha Nagnath Temple,
          spiritual places
          and heritage spots.
        </p>
      </div>
    </div>

    <!-- JALGAON -->
    <div class="destination-card"
    onclick="window.location='{{ route('district.show','jalgaon') }}'">
      <img src="images/jalgaon.png">

      <div class="destination-content">
        <h3>Jalgaon</h3>

        <p>
          Ajanta Caves nearby,
          banana farms
          and historical monuments.
        </p>
      </div>
    </div>

    <!-- JALNA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','jalna') }}'">
      <img src="images/jalna.png">

      <div class="destination-content">
        <h3>Jalna</h3>

        <p>
          Matsyodari Temple,
          forts and spiritual tourism.
        </p>
      </div>
    </div>

    <!-- KOLHAPUR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','kolhapur') }}'">
      <img src="images/kolhapur.png">

      <div class="destination-content">
        <h3>Kolhapur</h3>

        <p>
          Mahalaxmi Temple,
          Rankala Lake
          and Kolhapuri culture.
        </p>
      </div>
    </div>

    <!-- LATUR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','latur') }}'">
      <img src="images/latur.png">

      <div class="destination-content">
        <h3>Latur</h3>

        <p>
          Udgir Fort,
          temples and cultural history.
        </p>
      </div>
    </div>

    <!-- MUMBAI CITY -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','mumbai') }}'">
      <img src="images/mumbai.png">

      <div class="destination-content">
        <h3>Mumbai City</h3>

        <p>
          Gateway of India,
          Marine Drive
          and Bollywood vibes.
        </p>
      </div>
    </div>

    <!-- MUMBAI SUBURBAN -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','mumbai-suburban') }}'">
      <img src="images/mumbai-suburban.png">

      <div class="destination-content">
        <h3>Mumbai Suburban</h3>

        <p>
          Juhu Beach,
          Film City
          and shopping streets.
        </p>
      </div>
    </div>

    <!-- NAGPUR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','nagpur') }}'">
      <img src="images/nagpur.png">

      <div class="destination-content">
        <h3>Nagpur</h3>

        <p>
          Deekshabhoomi,
          tiger reserves
          and beautiful lakes.
        </p>
      </div>
    </div>

    <!-- NANDED -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','nanded') }}'">
      <img src="images/nanded.png">

      <div class="destination-content">
        <h3>Nanded</h3>

        <p>
          Hazur Sahib Gurudwara
          and religious tourism.
        </p>
      </div>
    </div>

    <!-- NANDURBAR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','nandurbar') }}'">
      <img src="images/nandurbar.png">

      <div class="destination-content">
        <h3>Nandurbar</h3>

        <p>
          Toranmal Hill Station,
          waterfalls and forests.
        </p>
      </div>
    </div>

    <!-- NASHIK -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','nashik') }}'">
      <img src="images/nashik.png">

      <div class="destination-content">
        <h3>Nashik</h3>

        <p>
          Trimbakeshwar Temple,
          vineyards and Panchavati.
        </p>
      </div>
      <form action="/favorite" method="POST">
    @csrf

    <input
        type="hidden"
        name="district"
        value="Nashik">

    <button type="submit">
        ❤️ Save
    </button>
</form>
    </div>

    <!-- DHARASHIV -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','dharashiv') }}'">
      <img src="images/dharashiv.png">

      <div class="destination-content">
        <h3>Dharashiv (Osmanabad)</h3>

        <p>
          Tuljapur Temple,
          Dharashiv caves
          and forts.
        </p>
      </div>
    </div>

    <!-- PALGHAR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','palghar') }}'">
      <img src="images/palghar.png">

      <div class="destination-content">
        <h3>Palghar</h3>

        <p>
          Kelwa Beach,
          forts and nature spots.
        </p>
      </div>
    </div>

    <!-- PARBHANI -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','parbhani') }}'">
      <img src="images/parbhani.png">

      <div class="destination-content">
        <h3>Parbhani</h3>

        <p>
          Religious temples,
          heritage places
          and culture.
        </p>
      </div>
    </div>

    <!-- PUNE -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','pune') }}'">
      <img src="images/pune.png">

      <div class="destination-content">
        <h3>Pune</h3>

        <p>
          Dagdusheth Ganpati,
          Shaniwar Wada,
          Sinhagad Fort and culture.
        </p>
      </div>
    </div>

    <!-- RAIGAD -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','raigad') }}'">
      <img src="images/raigad.png">

      <div class="destination-content">
        <h3>Raigad</h3>

        <p>
          Raigad Fort,
          beaches and Konkan beauty.
        </p>
      </div>
    </div>

    <!-- RATNAGIRI -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','ratnagiri') }}'">
      <img src="images/ratnagiri.png">

      <div class="destination-content">
        <h3>Ratnagiri</h3>

        <p>
          Ganpatipule Beach,
          Alphonso mangoes
          and coastal beauty.
        </p>
      </div>
    </div>

    <!-- SANGLI -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','sangli') }}'">
          <img src="images/sangli.png">

      <div class="destination-content">
        <h3>Sangli</h3>

        <p>
          Ganapati Temple,
          Krishna river
          and cultural sites.
        </p>
      </div>
    </div>

    <!-- SATARA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','satara') }}'">
          <img src="images/satara.png">

      <div class="destination-content">
        <h3>Satara</h3>

        <p>
          Kaas Plateau,
          Thoseghar waterfalls
          and valleys.
        </p>
      </div>
    </div>

    <!-- SINDHUDURG -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','sindhudurg') }}'">
      <img src="images/sindhudurg.png">

      <div class="destination-content">
        <h3>Sindhudurg</h3>

        <p>
          Tarkarli Beach,
          scuba diving
          and forts.
        </p>
      </div>
    </div>

    <!-- SOLAPUR -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','solapur') }}'">
      <img src="images/solapur.png">

      <div class="destination-content">
        <h3>Solapur</h3>

        <p>
          Siddheshwar Temple,
          forts and historical culture.
        </p>
      </div>
    </div>

    <!-- THANE -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','thane') }}'">
      <img src="images/thane.png">

      <div class="destination-content">
        <h3>Thane</h3>

        <p>
          Yeoor Hills,
          lakes and nature parks.
        </p>
      </div>
    </div>

    <!-- WARDHA -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','wardha') }}'">
      <img src="images/wardha.png">

      <div class="destination-content">
        <h3>Wardha</h3>

        <p>
          Sevagram Ashram,
          Gandhian history
          and culture.
        </p>
      </div>
    </div>

    <!-- WASHIM -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','washim') }}'">
      <img src="images/washim.png">

      <div class="destination-content">
        <h3>Washim</h3>

        <p>
          Ancient temples,
          spiritual tourism
          and peaceful landscapes.
        </p>
      </div>
    </div>

    <!-- YAVATMAL -->

    <div class="destination-card"    
    onclick="window.location='{{ route('district.show','yavatmal') }}'">
      <img src="images/yavatmal.png">

      <div class="destination-content">
        <h3>Yavatmal</h3>

        <p>
          Tipeshwar Wildlife Sanctuary
          and green forests.
        </p>
      </div>
    </div>

  </div>

</section>



<!-- CSS -->

<style>

/* =========================
   TOP NAVBAR
========================= */

.top-navbar{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    z-index:1000;

    background:rgba(0,0,0,0.25);
    backdrop-filter:blur(8px);

    padding:35px 8%;
}

.nav-container{
    display:flex;
    /* justify-content:flex-start; */
    align-items:center;
    gap:1100px;
}

.logo{
    color:white;
    justify-content:flex-start;
    font-size:32px;
    font-weight:700;
}

.nav-links{
    display:flex;
    justify-content:flex-center;
    gap:25px;
    list-style:none;
    margin:0;
    padding:0;
}

.nav-links a{
    color:white;
    gap:25px;
    text-decoration: solid;
    padding-left: 0px;
    font-weight:600;
    transition:.3s;
}

.nav-links a:hover{
    color:#ffb703;
}



.background img {
  filter: brightness(0.7);
}

.destinations{
  padding:140px 8% 100px;
  background:#f8fbff;
}

.section-title{
  text-align:center;
  margin-bottom:60px;
}

.section-title h2{
  font-size:45px;
  color:#023047;
  margin-bottom:10px;
}

.section-title p{
  color:#555;
  font-size:18px;
}

.welcome-user{
    background:white;
    display:inline-block;
    padding:12px 25px;
    border-radius:50px;
    margin-bottom:25px;
    font-weight:600;
    color:#023047;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.destination-grid{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
    gap:30px;
}

.destination-card{
    width:320px;
    background:white;
    border-radius:25px;
    overflow:hidden;
    transition:0.4s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.destination-card:hover{
    transform:translateY(-10px);
}

.destination-card img{
  width:100%;
  height:240px;
  object-fit:cover;
}

.destination-content{
  padding:25px;
}

.destination-content h3{
  margin-bottom:12px;
  color:#023047;
  font-size:24px;
}

.destination-content p{
  color:#666;
  line-height:1.8;
  font-size:16px;
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

.suggestions-box{
    position:sticky;
    top:75px;
    left:50;
    width:40%;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,.15);
    z-index:999;

    display:none;      /* ADD THIS */
    max-height:250px;  /* ADD THIS */
    overflow-y:auto;   /* ADD THIS */
}

.suggestion-item{
    padding:15px 20px;
    cursor:pointer;
    color:#023047;
    font-weight:500;
    border-bottom:1px solid #eee;
}

.suggestion-item:hover{
    background:#f5f9ff;
}

.suggestion-item:last-child{
    border-bottom:none;
}
.search-tags{
  display:flex;
  gap:12px;
  justify-content:center;
  flex-wrap:wrap;
  margin-top:20px;
  position:relative;z-index:1;
}

#suggestions{
    max-width:700px;
    margin:10px auto 0;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 20px rgba(0,0,0,.1);
}

.suggestion-item{
    padding:12px 20px;
    cursor:pointer;
}

.suggestion-item:hover{
    background:#f4f4f4;
}

.result-count{
    margin-top:20px;
    color:white;
    font-weight:600;
    font-size:18px;
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

.no-results{
    display:none;
    text-align:center;
    padding:50px;
}

.no-results h2{
    color:#023047;
}

.no-results p{
    color:#666;
}

@media(max-width:768px){

  .section-title h2{
    font-size:35px;
  }

}

</style>

<script>

const searchInput = document.getElementById("search");
const cards = document.querySelectorAll(".destination-card");
const noResults = document.getElementById("noResults");
const resultCount = document.getElementById("resultCount");
const suggestions = document.getElementById("suggestions");

function doSearch() {

    const filter = searchInput.value.trim().toLowerCase();
    let visibleCount = 0;

    suggestions.innerHTML = "";

    cards.forEach(card => {

        const district =
            card.querySelector("h3").innerText.toLowerCase();

        const description =
            card.querySelector("p").innerText.toLowerCase();

        if (
            district.includes(filter) ||
            description.includes(filter)
        ) {

            card.style.display = "";
            visibleCount++;

            if (filter !== "") {

                const item = document.createElement("div");
                item.className = "suggestion-item";
                item.innerText =
                    card.querySelector("h3").innerText;

                item.onclick = () => {
                    searchInput.value = item.innerText;
                    suggestions.style.display = "none";
                    doSearch();
                };

                suggestions.appendChild(item);
            }

        } else {
            card.style.display = "none";
        }

    });

    resultCount.innerText =
        visibleCount + " Destination(s) Found";

    noResults.style.display =
        visibleCount === 0 ? "block" : "none";

    if (filter !== "" && suggestions.children.length > 0) {
        suggestions.style.display = "block";
    } else {
        suggestions.style.display = "none";
    }
}

searchInput.addEventListener("keyup", doSearch);

document.addEventListener("click", function(e){

    if(
        !searchInput.contains(e.target) &&
        !suggestions.contains(e.target)
    ){
        suggestions.style.display = "none";
    }

});

</script>

</body>
</html>