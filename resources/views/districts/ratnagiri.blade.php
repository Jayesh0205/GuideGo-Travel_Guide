<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ratanagiri — The Queen of Konkan</title>

  {{-- Bootstrap 5 --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  {{-- Google Fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;1,500&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet"/>
  {{-- Bootstrap Icons --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet"/>

  <style>
    /* ══════════════════════════════════════════════
       DESIGN TOKENS
    ══════════════════════════════════════════════ */
    :root {
      --gold:        #C9A84C;
      --gold-light:  #F0D080;
      --gold-pale:   #FDF6E3;
      --ink:         #1A1209;
      --ink-mid:     #3D2F10;
      --ink-soft:    #6B5530;
      --cream:       #FAF5EB;
      --cream-dark:  #F0E8D5;
      --border:      rgba(201,168,76,.22);
      --glass:       rgba(255,249,235,.70);
      --shadow-sm:   0 2px 12px rgba(60,40,5,.07);
      --shadow-md:   0 8px 32px rgba(60,40,5,.12);
      --shadow-lg:   0 20px 60px rgba(60,40,5,.18);
      --r-sm:        10px;
      --r-md:        18px;
      --r-lg:        28px;
      --ff-display:  'Playfair Display', Georgia, serif;
      --ff-body:     'DM Sans', sans-serif;
    }

    /* ══════════════════════════════════════════════
       BASE
    ══════════════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: var(--ff-body);
      background: var(--cream);
      color: var(--ink);
      overflow-x: hidden;
      min-height: 100vh;
    }
    /* Subtle grain overlay */
    body::after {
      content: '';
      position: fixed; inset: 0; z-index: 0; pointer-events: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23n)' opacity='.035'/%3E%3C/svg%3E");
      opacity: .5;
    }

    /* ══════════════════════════════════════════════
       NAVBAR
    ══════════════════════════════════════════════ */
    .jg-nav {
      position: sticky; top: 0; z-index: 200;
      background: rgba(250,245,235,.88);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
      padding: .75rem 2rem;
      display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: .5rem;
    }
    .jg-brand {
      font-family: var(--ff-display); font-size: 1.5rem; font-weight: 700;
      color: var(--ink); text-decoration: none; letter-spacing: -.5px;
    }
    .jg-brand em { color: var(--gold); font-style: normal; }
    .jg-nav-links { display: flex; gap: .25rem; flex-wrap: wrap; }
    .jg-nav-links a {
      padding: .3rem .85rem; border-radius: 50px;
      font-size: .8rem; font-weight: 500; letter-spacing: .2px;
      color: var(--ink-soft); text-decoration: none;
      transition: background .2s, color .2s;
    }
    .jg-nav-links a:hover { background: var(--gold-pale); color: var(--gold); }

    /* ══════════════════════════════════════════════
       HERO
    ══════════════════════════════════════════════ */
    .jg-hero {
      position: relative; height: 440px; overflow: hidden;
      background: var(--ink);
    }
    .jg-hero__img {
      width: 100%; height: 100%; object-fit: cover;
      opacity: .52; transform: scale(1.05);
      transition: transform 9s ease, opacity .4s;
    }
    .jg-hero:hover .jg-hero__img { transform: scale(1); opacity: .6; }
    .jg-hero__overlay {
      position: absolute; inset: 0;
      background: linear-gradient(155deg, rgba(26,18,9,.05) 0%, rgba(26,18,9,.72) 100%);
    }
    .jg-hero__content {
      position: absolute; bottom: 3rem; left: 3rem; right: 3rem; color: #fff;
    }
    .jg-hero__badge {
      display: inline-flex; align-items: center; gap: .35rem;
      background: var(--gold); color: var(--ink);
      font-size: .68rem; font-weight: 700; letter-spacing: 1.8px; text-transform: uppercase;
      padding: .28rem .85rem; border-radius: 50px; margin-bottom: .9rem;
    }
    .jg-hero__title {
      font-family: var(--ff-display);
      font-size: clamp(2.5rem, 5.5vw, 4.2rem);
      font-weight: 700; line-height: 1.08;
      text-shadow: 0 4px 28px rgba(0,0,0,.45);
    }
    .jg-hero__sub {
      font-size: .95rem; font-weight: 300; opacity: .78;
      margin-top: .55rem; letter-spacing: .25px;
    }

    /* ══════════════════════════════════════════════
       PAGE WRAPPER
    ══════════════════════════════════════════════ */
    .jg-page {
      max-width: 1300px; margin: 0 auto;
      padding: 2.5rem 1.25rem 3rem;
      display: flex; flex-direction: column; gap: 2rem;
      position: relative; z-index: 1;
    }

    /* ══════════════════════════════════════════════
       BLOCK CARD  (outer glass panel)
    ══════════════════════════════════════════════ */
    .jg-block {
      background: var(--glass);
      border: 1.5px solid var(--border);
      border-radius: var(--r-lg);
      box-shadow: var(--shadow-md);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      padding: 1.75rem;
      display: flex; gap: 1.5rem;
      opacity: 0; transform: translateY(28px);
      transition: opacity .55s ease, transform .55s ease, box-shadow .3s;
    }
    .jg-block.visible { opacity: 1; transform: translateY(0); }
    .jg-block:hover { box-shadow: var(--shadow-lg); }

    /* staggered reveal delays */
    .jg-block:nth-child(1) { transition-delay: .05s; }
    .jg-block:nth-child(2) { transition-delay: .15s; }
    .jg-block:nth-child(3) { transition-delay: .25s; }

    /* ══════════════════════════════════════════════
       CITY PREVIEW CARD  (left column, all 3 blocks)
    ══════════════════════════════════════════════ */
    .jg-city-card {
      flex: 0 0 215px; width: 215px;
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: var(--r-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      display: flex; flex-direction: column;
    }
    .jg-city-card__img {
      width: 100%; height: 150px; object-fit: cover; display: block;
    }
    .jg-city-card__img-ph {
      width: 100%; height: 150px;
      background: var(--cream-dark);
      display: flex; align-items: center; justify-content: center;
      font-size: 2.8rem;
    }
    .jg-city-card__body { padding: .9rem 1rem; flex: 1; }
    .jg-city-card__name {
      font-family: var(--ff-display); font-size: 1.08rem; font-weight: 700;
      color: var(--ink); margin-bottom: .3rem;
    }
    .jg-city-card__desc {
      font-size: .76rem; color: var(--ink-soft); line-height: 1.6;
    }
    .jg-city-card__footer {
      border-top: 1px solid var(--cream-dark);
      padding: .55rem 1rem;
      display: flex; align-items: center; gap: .4rem;
    }
    .jg-city-card__dot {
      width: 7px; height: 7px; border-radius: 50%; background: var(--gold); flex-shrink: 0;
    }
    .jg-city-card__loc { font-size: .7rem; color: var(--ink-soft); }

    /* ══════════════════════════════════════════════
       RIGHT CONTENT PANEL
    ══════════════════════════════════════════════ */
    .jg-content { flex: 1; min-width: 0; display: flex; flex-direction: column; gap: 1.4rem; }

    .jg-heading {
      font-family: var(--ff-display); font-size: 1.4rem; font-weight: 700;
      color: var(--ink); letter-spacing: -.25px; display: inline-block;
    }
    .jg-heading::after {
      content: ''; display: block; width: 38px; height: 3px;
      background: linear-gradient(90deg, var(--gold), var(--gold-light));
      border-radius: 2px; margin-top: 5px;
    }
    .jg-heading--sm { font-size: 1.1rem; }

    /* About text box */
    .jg-about-box {
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: var(--r-md);
      padding: 1.15rem 1.35rem;
      font-size: .875rem; line-height: 1.78;
      color: var(--ink-soft);
      box-shadow: var(--shadow-sm);
      flex: 1;
    }

    /* ══════════════════════════════════════════════
       HORIZONTAL SCROLL STRIP + CUSTOM SCROLLBAR
    ══════════════════════════════════════════════ */
    .jg-scroll-wrap { position: relative; }

    .jg-hstrip {
      display: flex; gap: .9rem;
      overflow-x: auto;
      scroll-snap-type: x mandatory;
      -webkit-overflow-scrolling: touch;
      padding-bottom: .4rem;
      scrollbar-width: none;
    }
    .jg-hstrip::-webkit-scrollbar { display: none; }

    .jg-scrollbar {
      height: 4px; background: var(--cream-dark);
      border-radius: 2px; margin-top: .6rem; overflow: hidden; position: relative;
    }
    .jg-scrollbar__thumb {
      position: absolute; top: 0; left: 0; height: 100%;
      background: linear-gradient(90deg, var(--gold), var(--gold-light));
      border-radius: 2px; transition: left .08s linear;
    }

    /* ══════════════════════════════════════════════
       ATTRACTION CARDS  (Block 1)
    ══════════════════════════════════════════════ */
    .jg-attract {
      flex: 0 0 150px; scroll-snap-align: start;
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: var(--r-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      cursor: pointer;
      transition: transform .25s, box-shadow .25s;
    }
    .jg-attract:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
    .jg-attract__img { width: 100%; height: 108px; object-fit: cover; display: block; }
    .jg-attract__img-ph {
      width: 100%; height: 108px; background: var(--cream-dark);
      display: flex; align-items: center; justify-content: center; font-size: 2rem;
    }
    .jg-attract__body { padding: .55rem .7rem; }
    .jg-attract__tag {
      display: inline-block; font-size: .6rem; font-weight: 700;
      letter-spacing: 1px; text-transform: uppercase;
      color: var(--gold); background: var(--gold-pale);
      border-radius: 50px; padding: .12rem .5rem; margin-bottom: .3rem;
    }
    .jg-attract__name { font-size: .8rem; font-weight: 600; color: var(--ink); line-height: 1.3; }

    /* ══════════════════════════════════════════════
       HOTEL GRID  (Block 2)
    ══════════════════════════════════════════════ */
    .jg-hotel-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: .85rem;
    }
    .jg-hotel {
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: var(--r-sm);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      cursor: pointer;
      transition: transform .25s, box-shadow .25s;
    }
    .jg-hotel:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
    .jg-hotel__img { width: 100%; height: 78px; object-fit: cover; display: block; }
    .jg-hotel__img-ph {
      width: 100%; height: 78px; background: var(--cream-dark);
      display: flex; align-items: center; justify-content: center; font-size: 1.7rem;
    }
    .jg-hotel__body { padding: .48rem .6rem; }
    .jg-hotel__name {
      font-size: .74rem; font-weight: 600; color: var(--ink);
      white-space: nowrap; overflow: hidden; text-overflow: ellipsis;
    }
    .jg-hotel__meta { display: flex; align-items: center; justify-content: space-between; margin-top: .2rem; }
    .jg-hotel__stars { color: var(--gold); font-size: .58rem; letter-spacing: -1px; }
    .jg-hotel__price { font-size: .67rem; font-weight: 700; color: var(--gold); }

    /* ══════════════════════════════════════════════
       FOOD CARDS  (Block 3)
    ══════════════════════════════════════════════ */
    .jg-food {
      flex: 0 0 142px; scroll-snap-align: start;
      background: #fff;
      border: 1.5px solid var(--border);
      border-radius: var(--r-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      cursor: pointer;
      transition: transform .25s, box-shadow .25s;
    }
    .jg-food:hover { transform: translateY(-5px); box-shadow: var(--shadow-md); }
    .jg-food__img { width: 100%; height: 95px; object-fit: cover; display: block; }
    .jg-food__img-ph {
      width: 100%; height: 95px; background: var(--cream-dark);
      display: flex; align-items: center; justify-content: center; font-size: 2rem;
    }
    .jg-food__body { padding: .55rem .7rem; }
    .jg-food__name { font-size: .8rem; font-weight: 600; color: var(--ink); }
    .jg-food__desc { font-size: .68rem; color: var(--ink-soft); margin-top: .2rem; line-height: 1.4; }

    /* ══════════════════════════════════════════════
       MAP SECTION
    ══════════════════════════════════════════════ */
    .jg-map-frame {
      border-radius: var(--r-md); overflow: hidden;
      border: 1.5px solid var(--border);
      box-shadow: var(--shadow-sm);
    }
    .jg-map-frame iframe { width: 100%; height: 195px; display: block; border: 0; }

    .jg-map-btn {
      display: flex; align-items: center; justify-content: center; gap: .5rem;
      width: 100%; padding: .88rem 1rem; margin-top: .75rem;
      background: linear-gradient(135deg, var(--gold) 0%, #A87C28 100%);
      color: var(--ink); font-family: var(--ff-body); font-weight: 600; font-size: .88rem;
      letter-spacing: .3px; text-decoration: none;
      border: none; border-radius: var(--r-md); cursor: pointer;
      box-shadow: 0 4px 22px rgba(201,168,76,.35);
      transition: transform .22s, box-shadow .22s;
    }
    .jg-map-btn:hover {
      transform: translateY(-2px); color: var(--ink);
      box-shadow: 0 8px 30px rgba(201,168,76,.5);
    }

    /* ══════════════════════════════════════════════
       FOOTER
    ══════════════════════════════════════════════ */
    .jg-footer {
      text-align: center; padding: 2rem 1rem;
      border-top: 1px solid var(--border);
      font-size: .78rem; color: var(--ink-soft);
      position: relative; z-index: 1;
    }
    .jg-footer strong { color: var(--gold); }

    /* ══════════════════════════════════════════════
       RESPONSIVE
    ══════════════════════════════════════════════ */
    @media (max-width: 920px) {
      .jg-block { flex-direction: column; }
      .jg-city-card { flex: none; width: 100%; }
      .jg-city-card__img, .jg-city-card__img-ph { height: 200px; }
      .jg-hotel-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 576px) {
      .jg-hero__content { left: 1.25rem; bottom: 1.5rem; right: 1.25rem; }
      .jg-hero { height: 320px; }
      .jg-page { padding: 1.25rem .75rem 2rem; gap: 1.25rem; }
      .jg-block { padding: 1.1rem; }
      .jg-hotel-grid { grid-template-columns: repeat(2, 1fr); gap: .6rem; }
      .jg-nav { padding: .65rem 1rem; }
    }
  </style>
</head>
<body>

{{-- ══════════ NAVBAR ══════════ --}}
<nav class="jg-nav">
  <a href="#" class="jg-brand">Ratanagiri<em>.</em></a>
  <div class="jg-nav-links">
    <a href="#about"><i class="bi bi-info-circle me-1"></i>About</a>
    <a href="#hotels"><i class="bi bi-building me-1"></i>Hotels</a>
    <a href="#food"><i class="bi bi-egg-fried me-1"></i>Food</a>
    <a href="#map"><i class="bi bi-map me-1"></i>Map</a>
  </div>
</nav>

{{-- ══════════ HERO ══════════ --}}
<div class="jg-hero">
  {{-- Replace with your actual asset path, e.g. asset('images/jalgaon-hero.jpg') --}}
  <img src="{{ asset('ratanagiri/image.png') }}"
       alt="Jalgaon aerial night view"
       class="jg-hero__img"
       onerror="this.style.display='none'"/>
  <div class="jg-hero__overlay"></div>
  <div class="jg-hero__content">
    <span class="jg-hero__badge"><i class="bi bi-geo-alt-fill"></i> Maharashtra, India</span>
    <h1 class="jg-hero__title">Ratanagiri</h1>
    <p class="jg-hero__sub">The Queen of Konkan</p>
  </div>
</div>

{{-- ══════════ PAGE CONTENT ══════════ --}}
<main class="jg-page">

  {{-- ─────────────────────────────────────────
       BLOCK 1 · About + Top Attractions
  ───────────────────────────────────────── --}}
  <section class="jg-block" id="about">

    {{-- Left: City Preview Card --}}
    <div class="jg-city-card">
      <img src="{{ asset('ratanagiri/image.png') }}"
           alt="Ratanagiri"
           class="jg-city-card__img"
           onerror="this.outerHTML='<div class=\'jg-city-card__img-ph\'>🏙️</div>'"/>
      <div class="jg-city-card__body">
        <div class="jg-city-card__name">Ratanagiri</div>
        <div class="jg-city-card__desc">Ganpatipule beach, Ratandurg fort and thibaw palace. </div>
      </div>
      <div class="jg-city-card__footer">
        <div class="jg-city-card__dot"></div>
        <span class="jg-city-card__loc">Maharashtra · India</span>
      </div>
    </div>

    {{-- Right: Content --}}
    <div class="jg-content">
      <h2 class="jg-heading">About Ratanagiri</h2>

      <div class="jg-about-box">
        Ratnagiri is a <strong>scenic coastal district </strong>in Maharashtra known for its beautiful beaches,
         historic forts, Alphonso mangoes, and rich Konkan culture. Located along the Arabian Sea,
         it attracts tourists with its natural beauty, seafood cuisine, and cultural heritage.
      </div>

      {{-- Top Attractions --}}
      <div>
        <h3 class="jg-heading jg-heading--sm">Top Attractions</h3>
        <div class="jg-scroll-wrap mt-2">
          <div class="jg-hstrip" id="strip-attract">

            <div class="jg-attract">
              <img src="{{ asset('ratanagiri/ratandurg fort.png') }}" alt="Ratandurg Fort" class="jg-attract__img"
                   onerror="this.outerHTML='<div class=\'jg-attract__img-ph\'>🏛️</div>'"/>
              <div class="jg-attract__body">
                <span class="jg-attract__tag">Historical</span>
                <div class="jg-attract__name">Ratandurg Fort</div>
              </div>
            </div>

            <div class="jg-attract">
              <img src="{{ asset('ratanagiri/ganpatipulebeach.png') }}" alt="Ganpatipule beach" class="jg-attract__img"
                   onerror="this.outerHTML='<div class=\'jg-attract__img-ph\'>🌊</div>'"/>
              <div class="jg-attract__body">
                <span class="jg-attract__tag">Beach</span>
                <div class="jg-attract__name">Ganpatipule beach</div>
              </div>
            </div>

            <div class="jg-attract">
              <img src="{{ asset('ratanagiri/thiba palace.png') }}" alt="Thibaw palace" class="jg-attract__img"
                   onerror="this.outerHTML='<div class=\'jg-attract__img-ph\'>🛕</div>'"/>
              <div class="jg-attract__body">
                <span class="jg-attract__tag">Heritage</span>
                <div class="jg-attract__name">Thibaw Palace</div>
              </div>
            </div>

            <div class="jg-attract">
              <img src="{{ asset('ratanagiri/Jaigadh_fort.png') }}" alt="Jaigadh fort" class="jg-attract__img"
                   onerror="this.outerHTML='<div class=\'jg-attract__img-ph\'>🏞️</div>'"/>
              <div class="jg-attract__body">
                <span class="jg-attract__tag">Fort</span>
                <div class="jg-attract__name">Jaigadh Fort</div>
              </div>
            </div>

            <div class="jg-attract">
              <img src="{{ asset('ratanagiri/ganpati pule.png') }}" alt="Gapatipule Temple" class="jg-attract__img"
                   onerror="this.outerHTML='<div class=\'jg-attract__img-ph\'>🍌</div>'"/>
              <div class="jg-attract__body">
                <span class="jg-attract__tag">Devotional</span>
                <div class="jg-attract__name">Ganpatipule Temple</div>
              </div>
            </div>

          </div>
          <div class="jg-scrollbar">
            <div class="jg-scrollbar__thumb" id="thumb-attract" style="width:42%"></div>
          </div>
        </div>
      </div>
    </div>

  </section>

  {{-- ─────────────────────────────────────────
       BLOCK 2 · Hotels
  ───────────────────────────────────────── --}}
  <section class="jg-block" id="hotels">

    {{-- Left: City Preview Card --}}
    <div class="jg-city-card">
      <img src="{{ asset('ratanagiri/image.png') }}"
           alt="Jalgaon"
           class="jg-city-card__img"
           onerror="this.outerHTML='<div class=\'jg-city-card__img-ph\'>🏙️</div>'"/>
      <div class="jg-city-card__body">
        <div class="jg-city-card__name">Ratanagiri</div>
        <div class="jg-city-card__desc">Ganpatipule beach, Ratandurg fort and thibaw palace.</div>
      </div>
      <div class="jg-city-card__footer">
        <div class="jg-city-card__dot"></div>
        <span class="jg-city-card__loc">Maharashtra · India</span>
      </div>
    </div>

    {{-- Right: Hotels --}}
    <div class="jg-content">
      <h2 class="jg-heading">Hotels</h2>

      <div class="jg-scroll-wrap">
        <div class="jg-hotel-grid">

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel1.png') }}" alt="kokanwadi resort" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">kokanwadi resort</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★★★</span>
                <span class="jg-hotel__price">₹3,200/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel2.png') }}" alt="Kohinoor Samudra Beach Resort" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">Kohinoor Samudra Beach Resort</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★★</span>
                <span class="jg-hotel__price">₹,910/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel3.png') }}" alt="Mango Valley Resort" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">Mango Valley Resort</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★★</span>
                <span class="jg-hotel__price">₹1,800/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel4.png') }}" alt="Golden Stay" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">Gayatri home Stay</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★</span>
                <span class="jg-hotel__price">₹1,200/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel5.png') }}" alt="Nakshatra Beach Resort" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">Nakshatra Beach Resort</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★</span>
                <span class="jg-hotel__price">₹900/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel6.png') }}" alt="hotel sangam regency" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">hotel sangam regency</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★★</span>
                <span class="jg-hotel__price">₹2,559/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel7.png') }}" alt="Hotel Vivek" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">Hotel Vivek</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★</span>
                <span class="jg-hotel__price">₹2,100/night</span>
              </div>
            </div>
          </div>

          <div class="jg-hotel">
            <img src="{{ asset('ratanagiri/hotel8.png') }}" alt="Hotel Sun Star" class="jg-hotel__img"
                 onerror="this.outerHTML='<div class=\'jg-hotel__img-ph\'>🏨</div>'"/>
            <div class="jg-hotel__body">
              <div class="jg-hotel__name">Hotel Sun Star</div>
              <div class="jg-hotel__meta">
                <span class="jg-hotel__stars">★★★★★</span>
                <span class="jg-hotel__price">₹3,800/night</span>
              </div>
            </div>
          </div>

        </div>
        {{-- Custom scrollbar for hotels --}}
        <div class="jg-scrollbar mt-2">
          <div class="jg-scrollbar__thumb" style="width:55%"></div>
        </div>
      </div>
    </div>

  </section>

  {{-- ─────────────────────────────────────────
       BLOCK 3 · Native Food + Map
  ───────────────────────────────────────── --}}
  <section class="jg-block" id="food">

    {{-- Left: City Preview Card --}}
    <div class="jg-city-card">
      <img src="{{ asset('ratanagiri/image.png') }}"
           alt="Jalgaon"
           class="jg-city-card__img"
           onerror="this.outerHTML='<div class=\'jg-city-card__img-ph\'>🏙️</div>'"/>
      <div class="jg-city-card__body">
        <div class="jg-city-card__name">Ratanagiri</div>
        <div class="jg-city-card__desc">Ganpatipule beach, Ratandurg fort and thibaw palace.</div>
      </div>
      <div class="jg-city-card__footer">
        <div class="jg-city-card__dot"></div>
        <span class="jg-city-card__loc">Maharashtra · India</span>
      </div>
    </div>

    {{-- Right: Food + Map --}}
    <div class="jg-content">

      {{-- Native Food --}}
      <h2 class="jg-heading">Native Food</h2>
      <div class="jg-scroll-wrap">
        <div class="jg-hstrip" id="strip-food">

          <div class="jg-food">
            <img src="{{ asset('ratanagiri/aamras.png') }}" alt="Aamras" class="jg-food__img"
                 onerror="this.outerHTML='<div class=\'jg-food__img-ph\'>🫓</div>'"/>
            <div class="jg-food__body">
              <div class="jg-food__name">Aamras</div>
              <div class="jg-food__desc">alphnsa mango pulp</div>
            </div>
          </div>

          <div class="jg-food">
            <img src="{{ asset('ratanagiri/fishthali.png') }}" alt="Fish Thali" class="jg-food__img"
                 onerror="this.outerHTML='<div class=\'jg-food__img-ph\'>🍆</div>'"/>
            <div class="jg-food__body">
              <div class="jg-food__name">Fish Thali</div>
                <div class="jg-food__desc">Traditional Konkan seafood meal with fresh fish curry.</div>
            </div>
          </div>

          <div class="jg-food">
            <img src="{{ asset('ratanagiri/solkadi.png') }}" alt="sol kadi" class="jg-food__img"
                 onerror="this.outerHTML='<div class=\'jg-food__img-ph\'>🥣</div>'"/>
            <div class="jg-food__body">
              <div class="jg-food__name">Sol Kadhi</div>
                <div class="jg-food__desc">Refreshing drink made from kokum and coconut milk.</div>
            </div>
          </div>

          <div class="jg-food">
            <img src="{{ asset('ratanagiri/komabdi vade.png') }}" alt="kombadi vade" class="jg-food__img"
                 onerror="this.outerHTML='<div class=\'jg-food__img-ph\'>🍌</div>'"/>
            <div class="jg-food__body">
              <div class="jg-food__name">Kombdi Vade</div>
             <div class="jg-food__desc">Spicy chicken curry served with crispy fried vade.</div>
            </div>
          </div>

          <div class="jg-food">
            <img src="{{ asset('ratanagiri/modak.png') }}" alt="Modak" class="jg-food__img"
                 onerror="this.outerHTML='<div class=\'jg-food__img-ph\'>🌶️</div>'"/>
            <div class="jg-food__body">
             <div class="jg-food__name">Modak</div>
            <div class="jg-food__desc">Sweet dumplings filled with coconut and jaggery.</div>
            </div>
          </div>

          <div class="jg-food">
            <img src="{{ asset('ratanagiri/ghavane.png') }}" alt="Gavane" class="jg-food__img"
                 onerror="this.outerHTML='<div class=\'jg-food__img-ph\'>🍜</div>'"/>
            <div class="jg-food__body">
             <div class="jg-food__name">Ghavne</div>
            <div class="jg-food__desc">Soft rice pancakes, a popular Konkan breakfast dish.</div>
            </div>
          </div>

        </div>
        <div class="jg-scrollbar">
          <div class="jg-scrollbar__thumb" id="thumb-food" style="width:40%"></div>
        </div>
      </div>

      {{-- Map --}}
      <div id="map">
        <h3 class="jg-heading jg-heading--sm mb-2">Map</h3>
        <div class="jg-map-frame">
          <iframe
            src="https://maps.google.com/maps?q=Ratnagiri,Maharashtra,India&output=embed"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Ratanagiri on Google Maps">
          </iframe>
        </div>
        <a href="https://maps.google.com/maps?q=Ratnagiri,Maharashtra,India&output=embed"
           target="_blank"
           rel="noopener noreferrer"
           class="jg-map-btn">
          <i class="bi bi-geo-alt-fill"></i>
          View On Google Maps
        </a>
      </div>

    </div>
  </section>

</main>

{{-- ══════════ FOOTER ══════════ --}}
<footer class="jg-footer">
  Crafted with care for <strong>Ratanagiri</strong> — The Queen of Konkan.
</footer>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  /* ── Scroll-to-thumb sync ── */
  function bindScrollbar(stripId, thumbId) {
    const strip = document.getElementById(stripId);
    const thumb = document.getElementById(thumbId);
    if (!strip || !thumb) return;
    strip.addEventListener('scroll', () => {
      const ratio  = strip.scrollLeft / (strip.scrollWidth - strip.clientWidth);
      const w      = parseFloat(thumb.style.width) || 40;
      thumb.style.left = (ratio * (100 - w)).toFixed(2) + '%';
    });
  }
  bindScrollbar('strip-attract', 'thumb-attract');
  bindScrollbar('strip-food',    'thumb-food');

  /* ── Intersection Observer → fade-up blocks ── */
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
  }, { threshold: 0.07 });
  document.querySelectorAll('.jg-block').forEach(el => io.observe(el));
</script>
</body>
</html>