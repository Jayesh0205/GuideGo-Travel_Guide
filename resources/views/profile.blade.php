<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Profile | GuideGo</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f5f7fb;
}

/* Hero Section */

.profile-hero{
    height:320px;
    background:
    linear-gradient(rgba(0,0,0,.45),rgba(0,0,0,.45)),
    url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee');
    background-size:cover;
    background-position:center;
    display:flex;
    justify-content:center;
    align-items:center;
}

.hero-content{
    text-align:center;
    color:white;
}

.avatar{
    width:130px;
    height:130px;
    border-radius:50%;
    background:#f4b400;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:45px;
    font-weight:700;
    margin:auto;
    border:5px solid white;
}

.hero-content h2{
    margin-top:15px;
    font-size:32px;
}

.hero-content p{
    opacity:.9;
}

/* Main Container */

.profile-container{
    max-width:1100px;
    margin:-70px auto 40px;
    padding:20px;
}

/* Glass Card */

.profile-card{
    background:white;
    border-radius:25px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

/* Stats */

.stats{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-bottom:30px;
}

.stat-box{
    background:#fafafa;
    padding:25px;
    border-radius:18px;
    text-align:center;
}

.stat-box h3{
    color:#1fa3c9;
    font-size:28px;
}

.stat-box p{
    color:#777;
}

/* Info Section */

.info-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.info-box{
    background:#fafafa;
    padding:20px;
    border-radius:18px;
}

.info-box label{
    display:block;
    color:#888;
    font-size:14px;
}

.info-box span{
    font-size:17px;
    font-weight:500;
}

/* Buttons */

.action-buttons{
    margin-top:30px;
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn{
    padding:12px 24px;
    border:none;
    border-radius:50px;
    cursor:pointer;
    text-decoration:none;
    font-weight:600;
}

.btn-primary{
    background:#1fa3c9;
    color:white;
}

.btn-warning{
    background:#f4b400;
    color:black;
}

.btn-danger{
    background:#dc3545;
    color:white;
}

@media(max-width:768px){

.stats{
    grid-template-columns:1fr;
}

.info-grid{
    grid-template-columns:1fr;
}

}

</style>
</head>
<body>

<div class="profile-hero">

    <div class="hero-content">

        <div class="avatar">
            {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        </div>

        <h2>{{ Auth::user()->name }}</h2>

        <p>GuideGo Explorer</p>

    </div>

</div>

<div class="profile-container">

    <div class="profile-card">

        <div class="stats">

            <div class="stat-box">
                <h3>12</h3>
                <p>Places Visited</p>
            </div>

            <div class="stat-box">
                <h3>8</h3>
                <p>Favorites</p>
            </div>

            <div class="stat-box">
                <h3>5</h3>
                <p>Reviews</p>
            </div>

        </div>

        <div class="info-grid">

            <div class="info-box">
                <label>Full Name</label>
                <span>{{ Auth::user()->name }}</span>
            </div>

            <div class="info-box">
                <label>Email Address</label>
                <span>{{ Auth::user()->email }}</span>
            </div>

            <div class="info-box">
                <label>Member Since</label>
                <span>{{ Auth::user()->created_at->format('d M Y') }}</span>
            </div>

            <div class="info-box">
                <label>Account Status</label>
                <span>Active</span>
            </div>

        </div>

        <div class="action-buttons">

            <a href="/" class="btn btn-primary">
                Home
            </a>

            <a href="/destinations" class="btn btn-warning">
                Explore Places
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger">
                    Logout
                </button>
            </form>

        </div>

    </div>

</div>

</body>
</html>