
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
    <div id="headersection">
        <h1>Online Voting System</h1><hr></div>
        <div id="bodysection"> 
        <form action="api/login.php" method="POST">
        <h3>Login</h3>
            <input type ="number" name="mobile" placeholder="enter your mobile number"><br><br>
            <input type ="password" name="password" placeholder="password"><br><br>
            <select  id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button id="loginbtn" type="submit">Login</button><br><br>
            Already user?<a href="routes/register.php">Register Here</a>
        </form>
    </div>
</body>
</html>