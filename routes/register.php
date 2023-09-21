<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rebeccapurple;
            text-align: center;
        }
        #imagepart{
           padding:7px;
           border:2px solid black ;
           border-radius:6px;
           width:24%;
           text-align:center;
        }
        #headersection{
        padding: auto;
        }
#headersection h1{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
input{
  padding:10px;
  border-radius:10px;
}
#address{
           width:24%;
           text-align:center;
}

#role{
           padding:8px;
           border:2px solid black ;
           border-radius:6px;
           width:24%;
           text-align:center;
}
#role select{
           border:2px solid black ;
           border-radius:6px;
}
#loginbtn{
  padding:10px;
  border-radius:6px;
  background-color: blueviolet;
  color:aquamarine;
}
    </style>
</head>
<body>
       <div id="headersection">
        <h1>Online Voting System</h1><hr></div><hr>
        <div id="bodysection">
        <h2>Registration</h2>
        <form action="../api/registration.php" method="POST">
            <input type ="text" name="name" placeholder="Enter your name">
            <input type ="number" name="mobile" placeholder="Enter your mobile number"><br><br>
            <input type ="password" name="password" placeholder="Password">
            <input type ="password" name="cpasssword" placeholder="Confirm password"><br><br>
            <input id="address"  type ="text" name="address" placeholder="Address"><br><br>
            <center>
            <div id="imagepart">
            Upload image:  <input type="file" name="photo"><br><br></div><br>
            <div id="role">
            Select role:  <select  name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select></div></center>
            <br>
            <input id="loginbtn" type="submit" name="registerbtn"><br><br>
            Already user?<a href="../" style="color:red;">Login Here</a>
        </form>
        </div>
</body>
</html>