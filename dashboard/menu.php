<?php
$conn=mysqli_connect("localhost","root","","becky");


if (isset($_POST['fsub'])) {


  //code...
  if (empty($_POST['fname']) || empty($_POST['fprice']) || empty($_POST['fdesc']) || empty($_POST['fca'])) {
    # code...
    echo "<p style='color:red;'>please fill the space provided</p>";
  }else{
    $name=$_POST['fname'];
    $price=$_POST['fprice'];
    $desc=$_POST['fdesc'];
    $fca=strtoupper($_POST['fca']);
    $categories=["ALL","PASTRIES","MEAL","SIDEMEAL","SWALLOW"];
    if (in_array( $fca,$categories)) {
      # code...
      echo $fca;
      $sql = "INSERT INTO  category
VALUES ('', '{$name}', '{$price}','{$desc}','{$fca}')";

if ($conn->query($sql) === TRUE) {
  echo "<p  style='color:green;'>.successfully upload</p>";
} else {
    echo "<p style='color:red;'>Error: " . $sql . "<br>" . $conn->error."</p>";
}
    }else{
     $foods= implode(",",array_values($categories));
      echo"<script>alert('please add new category of foood to this system. We only register {$foods} in the system');</script>";
    }

  }
}
?>