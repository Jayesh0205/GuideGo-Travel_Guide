<!DOCTYPE html>
<html>
<head>
    <title>GuideGo Admin Dashboard</title>

    <style>
        body{
            font-family:Arial;
            background:#f5f5f5;
            margin:0;
        }

        .header{
            background:#0d6efd;
            color:white;
            padding:20px;
        }

        .container{
            padding:30px;
        }

        .card{
            background:white;
            padding:20px;
            margin-bottom:20px;
            border-radius:10px;
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        a{
            text-decoration:none;
        }

        button{
            padding:10px 20px;
            background:#0d6efd;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }
    </style>

</head>
<body>

<div class="header">
    <h1>GuideGo Admin Dashboard</h1>

    <a href="/admin/logout">
        <button>Logout</button>
    </a>
</div>

<div class="container">

    <div class="card">
        <h3>Manage Tourist Places</h3>
        <a href="/admin/places">Open</a>
    </div>

    <div class="card">
        <h3>Manage Food Spots</h3>
        <button>Open</button>
    </div>

    <div class="card">
        <h3>Manage Events</h3>
        <button>Open</button>
    </div>

    <div class="card">
        <h3>Manage Users</h3>
        <button>Open</button>
    </div>

</div>

</body>
</html>