<?php
session_start();
$connection = mysqli_connect("localhost","root","","tcs");
$db = mysqli_select_db($connection, 'user');

$_SESSION['id'];
$id= $_SESSION['id'];
$sql="select * from user where id='$id'";

$rs=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($rs);

if(isset($_POST['upload']))
{   
     $fn=$_FILES['file']['name'];
     $tm=$_FILES['file']['tmp_name'];
 
 if(move_uploaded_file($tm, "document/".$fn))
 {
  $sql1="update user set  Docname='$fn'";
  $rs1=mysqli_query($connection,$sql1);

  echo "File sucessfully upload";
        
 }
 else
 {
  
  echo "Error.Please try again";
		
		}
	}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َVerification</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<form class="box" method="post" enctype="multipart/form-data">

  <h1>VERIFICATION - UPLOAD DOCUMENT</h1>
      <input type="file" name="file" required="">
    
     <input type="submit" name="upload" value="upload">
</form>


  </body>
</html>