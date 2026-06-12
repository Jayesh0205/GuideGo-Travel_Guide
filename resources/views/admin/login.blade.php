<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>
        body{
            font-family:Arial;
            background:#f5f5f5;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            background:white;
            padding:30px;
            width:350px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.1);
        }

        input{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
            width:100%;
            padding:10px;
            background:#0d6efd;
            color:white;
            border:none;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="login-box">

    <h2>GuideGo Admin Login</h2>

    <form method="POST" action="/admin/login">
        @csrf

        <input type="email" name="email" placeholder="Email">

        <input type="password" name="password" placeholder="Password">

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>