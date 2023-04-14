<?php
  $conn = new mysqli("localhost","root","","becky");

 if (isset($_POST['Esub'])) {
//   # code...

  $etype=$_POST['ptype'];
$price=$_POST['price'];
$Eimg=$_FILES['fileToUpload'];
$imgtyp=1;
    if (empty($etype) || empty($price) || empty($Eimg)) {
    # code...
   $err="<p style='color:red;'>Please fill the space provided </p>";
   echo $err;
  }

  else{
 
    $fileName=$Eimg['name'];
    $filetype=$Eimg['type'];
    $file_tmp=$Eimg['tmp_name'];

    $ex=explode(".", $fileName);
  $fileEx=strtolower(end($ex));
  $pEx=["jpg",'jpeg',"png"];
   
if( in_array( $fileEx,$pEx)){
  $eimage="upload/".basename($fileName);
echo $fileName;
  if(move_uploaded_file($file_tmp,$eimage )){
$sql = "INSERT INTO becky 
VALUES ('', '$etype', '$price','$fileName','$imgtyp')";

if ($conn->query($sql) === TRUE) {
  echo "<p  style='color:green;'>.successfully upload</p>";
} else {
    echo "<p style='color:red;'>Error: " . $sql . "<br>" . $conn->error."</p>";
}
  }else{
    echo "<p style='color:red;'>not upload</p>";
  }
  }else{
    echo "<p style='color:red;'>Wrong file uploaded</p>";
  }
}
}
