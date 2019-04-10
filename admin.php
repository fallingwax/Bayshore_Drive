<?php

$spotify_id = '9c35d2349c2d461097e4f706500ca63d';
$spotify_secret = '99bcf1bdea4446d4a4b418edd36b6a54';



?>
<!doctype html>
<html>
<head>
<title>Admin Page</title>
    
</head>
<body>
    <h1>Admin Page</h1>
<div class="login">
    <p>Login</p>
    <form method="post" action="login.php">
        <label for="username">User Name</label>
        <input type="text" id="username">
        <label for="password">Password</label>
        <input type="password" id="password">
        <button type="submit" id="login-button">Login</button>
    </form>
</div>

    
</body>
</html>
