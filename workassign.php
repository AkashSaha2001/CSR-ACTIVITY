<?php
session_start();
$connection = mysqli_connect("localhost","root","","tcs");
$db = mysqli_select_db($connection, 'user');

if(isset($_POST['submit']) && ($_POST['submit']=="ASSIGN"))
{
	$Name=$_POST['Name'];
	$Work=$_POST['Work'];

$sql1="select * from user where Name='$Name'";
$rs1=mysqli_query($connection,$sql1);

if(mysqli_num_rows($rs1)>0)
{
echo "WORK ALREADY ASSIGN";
}
else
{
$sql="insert into user(Name,Work) values ('$Name','$Work')";
$rs=mysqli_query($connection,$sql);
header('location:verification.php');
$_SESSION['id']=$row['id'];

}
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َwork assign</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


<form class="box" method="post">

  <h1>ASSIGN WORK</h1>
     <select name="Name" placeholder="" required="">
            <option value=""class="name"> Assign People</option>
            <option value="AKASH" class="name">AKASH</option>
            <option value="SOMNATH" class="name">SOMNATH</option>
            <option value="NARENDRA" class="name">NARENDRA</option>
            <option value="SAYAN" class="name">SAYAN</option>
            <option value="AVIK" class="name">AVIK</option>
            <option value="VIKAS" class="name">VIKAS</option>
            <option value="ADTIYA" class="name">ADTIYA</option>
            <option value="TUSHAR" class="name">TUSHAR</option>
            <option value="BISWADEEP" class="name">BISWADEEP</option>
            <option value="CHANDAN"class="name">CHANDAN</option>
     </select>

      <select name="Work" placeholder="" required="">
            <option value=""class="name"> Assign Work</option>
            <option value="WEB DEVELOPMENT" class="name">WEB DEVELOPMENT</option>
            <option value="WEB DESIGN" class="name">WEB DESIGN</option>
            <option value="DATA ENTRY" class="name">DATA ENTRY</option>
            <option value="DATA ANALYSIS" class="name">DATA ANALYSIS</option>
            <option value="CONTENT WRITING" class="name">CONTENT WRITING</option>
            <option value="GAME DELOPMENT" class="name">GAME DELOPMENT</option>
            <option value="APP DELOPMENT" class="name">APP DELOPMENT</option>
    
     </select>

     <input type="submit" name="submit" href="verification.php" value="ASSIGN">
</form>


  </body>
</html>