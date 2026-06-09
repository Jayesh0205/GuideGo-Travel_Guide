<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GuideGo — Jalgaon</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>

:root {
  --bg-dark:    #0b1220;
  --bg-mid:     #131e30;
  --card-glass: rgba(255,255,255,0.07);
  --border:     rgba(255,255,255,0.12);
  --accent:     #38bdf8;
  --accent2:    #2563eb;
  --gold:       #f59e0b;
  --text:       #e2e8f0;
  --muted:      #94a3b8;
}

*, *::before, *::after { margin:0; padding:0; box-sizing:border-box; }

body {
  font-family: 'DM Sans', sans-serif;
  background: var(--bg-dark);
  color: var(--text);
  min-height: 100vh;
  overflow-x: hidden;
}

/* ── HERO ─────────────────────────────────────── */
.hero {
  position: relative;
  height: 480px;
  overflow: hidden;
  display: flex;
  align-items: flex-end;
}

.hero img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  filter: brightness(0.45);
  transform: scale(1.04);
  animation: zoomIn 12s ease-out forwards;
}

@keyframes zoomIn {
  from { transform: scale(1.1); }
  to   { transform: scale(1.0); }
}

.hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, #0b1220 10%, transparent 70%);
}

.hero-content {
  position: relative;
  z-index: 2;
  padding: 40px 60px;
  animation: fadeUp 1s ease both;
}

@keyframes fadeUp {
  from { opacity:0; transform:translateY(30px); }
  to   { opacity:1; transform:translateY(0); }
}

.hero-tag {
  display: inline-block;
  background: var(--gold);
  color: #0b1220;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 4px 14px;
  border-radius: 50px;
  margin-bottom: 14px;
}

.hero-content h1 {
  font-family: 'Playfair Display', serif;
  font-size: clamp(40px, 7vw, 72px);
  line-height: 1.05;
  color: #fff;
}

.hero-content p {
  margin-top: 12px;
  color: var(--muted);
  font-size: 16px;
  max-width: 480px;
  line-height: 1.7;
}

/* ── LAYOUT ───────────────────────────────────── */
.page {
  max-width: 1400px;
  margin: 0 auto;
  padding: 50px 30px 80px;
  display: flex;
  flex-direction: column;
  gap: 60px;
}

/* ── SECTION BLOCK ───────────────────────────── */
.section-block {
  display: grid;
  grid-template-columns: 320px 1fr;
  gap: 36px;
  align-items: start;
  background: var(--card-glass);
  backdrop-filter: blur(18px);
  border: 1px solid var(--border);
  border-radius: 28px;
  padding: 32px;
  box-shadow: 0 20px 50px rgba(0,0,0,0.35);
  animation: fadeUp 0.7s ease both;
}

/* ── SIDE CARD ───────────────────────────────── */
.side-card {
  border-radius: 20px;
  overflow: hidden;
  background: #fff;
  color: #1e293b;
  box-shadow: 0 12px 30px rgba(0,0,0,0.25);
  transition: transform 0.4s;
}

.side-card:hover { transform: translateY(-8px); }

.side-card img {
  width: 100%;
  height: 210px;
  object-fit: cover;
}

.side-card-body { padding: 18px 20px 22px; }

.side-card-body h2 {
  font-family: 'Playfair Display', serif;
  font-size: 22px;
  color: #0f172a;
  margin-bottom: 8px;
}

.side-card-body p {
  color: #64748b;
  font-size: 14px;
  line-height: 1.7;
}

/* ── DETAILS PANEL ───────────────────────────── */
.details-panel { display: flex; flex-direction: column; gap: 28px; }

.about-box {
  background: rgba(255,255,255,0.06);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 20px 24px;
  font-size: 15px;
  line-height: 1.85;
  color: var(--text);
}

/* ── SECTION HEADING ─────────────────────────── */
.sec-heading {
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  color: #fff;
  margin-bottom: 4px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.sec-heading::after {
  content: '';
  flex: 1;
  height: 1px;
  background: var(--border);
}

/* ── SCROLL CONTAINER ────────────────────────── */
.scroll-container {
  display: flex;
  gap: 18px;
  overflow-x: auto;
  overflow-y: hidden;
  padding: 10px 4px 16px;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
}

.scroll-container::-webkit-scrollbar { height: 6px; }
.scroll-container::-webkit-scrollbar-track { background: rgba(255,255,255,0.06); border-radius: 20px; }
.scroll-container::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 20px; }

/* ── ITEM CARD ───────────────────────────────── */
.item-card {
  min-width: 190px;
  flex-shrink: 0;
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  color: #1e293b;
  text-align: center;
  box-shadow: 0 8px 20px rgba(0,0,0,0.18);
  transition: transform 0.35s, box-shadow 0.35s;
  cursor: default;
}

.item-card:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 18px 36px rgba(0,0,0,0.28);
}

.item-card img {
  width: 100%;
  height: 120px;
  object-fit: cover;
}

.item-card h4 {
  padding: 10px 12px 12px;
  font-size: 13px;
  font-weight: 500;
  color: #0f172a;
}

/* ── MAP BUTTON ──────────────────────────────── */
.map-btn {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 14px 34px;
  background: linear-gradient(135deg, var(--accent), var(--accent2));
  color: #fff;
  font-weight: 600;
  font-size: 15px;
  border-radius: 50px;
  text-decoration: none;
  transition: transform 0.35s, box-shadow 0.35s;
  box-shadow: 0 6px 20px rgba(37,99,235,0.35);
  align-self: flex-start;
}

.map-btn:hover {
  transform: translateY(-5px);
  box-shadow: 0 14px 32px rgba(37,99,235,0.5);
}

/* ── RESPONSIVE ──────────────────────────────── */
@media (max-width: 900px) {
  .hero-content { padding: 30px 24px; }

  .section-block {
    grid-template-columns: 1fr;
  }

  .side-card img { height: 240px; }
}

@media (max-width: 500px) {
  .page { padding: 30px 16px 60px; }
  .section-block { padding: 20px; }
}




</style>
</head>

<body>

<!-- ══ HERO ══════════════════════════════════════════════ -->
<div class="hero">
  <img src="/img/jalgaon.png" alt="Jalgaon Hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <span class="hero-tag">🇮🇳 Maharashtra, India</span>
    <h1>Jalgaon</h1>
    <p>The Banana City of India — gateway to the ancient wonders of Ajanta Caves and vibrant Maharashtrian culture.</p>
  </div>
</div>

<!-- ══ PAGE BODY ══════════════════════════════════════════ -->
<div class="page">

  <!-- ── ABOUT + ATTRACTIONS + HOTELS ───────────────────── -->
  <div class="section-block">

    <div class="side-card">
      <img src="/img/jalgaon.png" alt="Jalgaon">
      <div class="side-card-body">
        <h2>Jalgaon</h2>
        <p>Ajanta Caves nearby, banana farms, cultural heritage, historic monuments and beautiful local attractions.</p>
      </div>
    </div>

    <div class="details-panel">

      <div class="about-box">
        Jalgaon is known as the <strong>Banana City of India</strong>. It serves as a gateway to the world-famous Ajanta Caves — a UNESCO World Heritage Site carved into rock centuries ago. The city offers a rich blend of culture, history, street food and warm hospitality that makes every visit memorable.
      </div>

      <!-- Top Attractions -->
      <div>
        <h3 class="sec-heading">Top Attractions</h3>
        <div class="scroll-container">

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da" alt="Ajanta Caves">
            <h4>Ajanta Caves</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2" alt="Mehrun Lake">
            <h4>Mehrun Lake</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b" alt="Gandhi Park">
            <h4>Gandhi Park</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb" alt="Pal Hill">
            <h4>Pal Hill</h4>
          </div>

        </div>
      </div>

      <!-- Hotels -->
      <div>
        <h3 class="sec-heading">Hotels</h3>
        <div class="scroll-container">

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945" alt="Hotel Royal Palace">
            <h4>Hotel Royal Palace</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa" alt="Hotel President">
            <h4>Hotel President</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1445019980597-93fa8acb246c" alt="Hotel Plaza">
            <h4>Hotel Plaza</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267" alt="Hotel Grand">
            <h4>Hotel Grand</h4>
          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- ── FOOD SECTION ────────────────────────────────────── -->
  <div class="section-block">

    <div class="side-card">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" alt="Native Food">
      <div class="side-card-body">
        <h2>Native Food</h2>
        <p>Discover the authentic taste of Jalgaon through its famous Maharashtrian cuisine and traditional dishes.</p>
      </div>
    </div>

    <div class="details-panel">

      <!-- Popular Food Spots -->
      <div>
        <h3 class="sec-heading">Popular Food Spots</h3>
        <div class="scroll-container">

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836" alt="Misal Pav">
            <h4>Misal Pav</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38" alt="Street Snacks">
            <h4>Street Snacks</h4>
          </div>
<!-- 
          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950" alt="Puran Poli">
            <h4>Puran Poli</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1601050690597-df0568f70950" alt="Thali House">
            <h4>Thali House</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19" alt="Sweet Corner">
            <h4>Sweet Corner</h4>
          </div>

          <div class="item-card">
            <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38" alt="Vada Pav">
            <h4>Vada Pav</h4>
          </div> -->

        </div>
      </div>

      <!-- Location -->
      <div>
        <h3 class="sec-heading">Location</h3>
        <a href="https://maps.google.com/?q=Jalgaon,Maharashtra,India" target="_blank" class="map-btn">
          📍 View on Google Maps
        </a>
      </div>

    </div>
  </div>

</div><!-- end .page -->

</body>
</html>