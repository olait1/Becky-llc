<?php
  $conn = new mysqli("localhost","root","","becky");

 if (isset($_POST['gsub'])) {
//   # code...

$Eimg=$_FILES['Gimg'];
$imgtyp=0;
  

 
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
VALUES ('', '', '','$fileName','$imgtyp')";


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
?>