<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
<style>
  *{
    padding:0;
    margin:0;
    box-sizing:border-box;
  }
  
body {
  
  font-family: "Lato", sans-serif;
  background-image:url("chefs-bg.jpg");
  opacity:1;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#gallery{
    width:850px;
     height:600px; 
     background-color:rgba(0,0,0,.1);
     margin:20px auto;
   border-radius: 10px;
     padding:20px;
     color:#000;
     position: relative;
}
.row{
  width: 100%;
}
.col-md-6{
  position: absolute;
  width: 50%;
}
h2{
    text-shadow:2px 2px 2px #000;
    color:#fff;
    text-align:center; 
    font-weight:bold;
     font-size:2em;
     margin:10px;
}
p label{
    color:#fff;
    text-shadow:2px 2px 2px #000;
    font-weight:bold;
    font-size:1.5em;
    text-align:right;
}
input[type=text]{
    width:80%;
    padding:5px 15px;
    box-shadow:inset 2px 7px 5px #ccc;
    height:45px;
    border-color:red;
    border-radius:5px;
    color:#f00;
    font-size:16px;

}
::placeholder{
    color:#000;
}
input[type=submit]{
    background:green;
    color:#fff;
    outline:none;
    padding:5px;
    
    border:none;
    margin:20px;
    font-size:16px;
    cursor:pointer;
    border-radius:5px;
}
input[type=file]{
    width:100%;
  color:#000;
  size:2em;

}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <h2 style="color:#ccc;">Dashboard</h2>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../index.php">Home</a>
   <a href="../index.php?#menu">Menu</a>
  <a href="../index.php#about">Services</a>
  <a href="../index.php#gallery">Gallery</a>
  <a href="../index.php#events">Event</a>
  <a href="../index.php#menu">Contact</a>

</div>

<span style="font-size:30px; color:#222;cursor:pointer" onclick="openNav()">&#9776; open</span>


<!-- gallery -->
<div class="" id="gallery" style="">
  <div class="row">
    <div class="col-md-6">
<h2 >Event</h2>

<form action="" method="post" enctype="multipart/form-data">
 
    <p><label for="occasion">Party Type</label></p>
<input type="text" name="ptype" id="" placeholder="e.g. Birthday Party">
<p><label for="occasion">Price</label></p>
<input type="text" name="price" id="" placeholder="">
<p><label for="image">Image</label></p>
    <input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" name="Esub" class="btn"  value="Submit">
</form>
</div>
   <div class="col-md-6" style="float:right;margin-left:50%;">
<h2  style="margin-top:50px;">Menu</h2>



<form action="" method="post">

<p><label for="fname">Food Name</label></p>
<input type="text" name="fname" id="" placeholder="">


<p><label for="fprice">Food Price</label></p>
<input type="text" name="fprice" id="" placeholder="">

<p><label for="fdesc">Food Description</label></p>
<input type="text" name="fdesc" id="" placeholder="">
<p><label for="fdesc">Category</label></p>
<input type="text" name="fca" id="" placeholder="">
<br>
<input type="submit" name="fsub" class="btn" value="Upload">
</form>
</div>


</div>
<div class="row" style="width: 100%; display: block; margin-top: 400px;">

<h2  style="margin-top:65px;">Gallery</h2>
<form action="" method="post" enctype="multipart/form-data">

<p><label for="image">Image</label></p>
<input type="file" name="Gimg" id="" placeholder="">

<input type="submit" name="gsub" class="btn" value="Upload">
</form>
</div>
<?php
include_once("eventp.php");

include_once("galleryp.php");

include_once("menu.php");

?>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
