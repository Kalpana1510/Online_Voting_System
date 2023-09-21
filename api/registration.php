<?php
 include("connected.php");

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$address=$_POST['address'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$role=$_POST['role'];
//echo $password." ".$cpassword;
if($password==$cpassword)
{
   move_uploaded_file($tmp_name,"../uploads/$image");
   $insert=mysqli_query($connected,"INSERT INTO user2(name,mobile,password,cpassword,address,photo,role,status,votes) VALUES ('$name','$mobile','$password','$address','$image','$role',0,0)");
   if($insert)
   {
    echo '
    <script>
    alert("registratin successfully");
    window.location="../";
  </script>
    ';
   }
   else{
    echo '
    <script>
      alert("some error occured");
      window.location="../routes/register.php";
    </script>
   ';
   }
}

else
{
    echo '
     <script>
       alert("password and confirm password do not match");
       window.location="../routes/register.php";
     </script>
    ';
}


?>