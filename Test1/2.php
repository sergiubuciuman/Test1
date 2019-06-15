<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $name = $_POST['name'];
 $user = $_POST['user'];
 
 require_once('1.php');
 
 $sql ="SELECT id FROM images1 ORDER BY id ASC";
 
 $res = mysqli_query($con,$sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
 $path = "uploads/$id.png";
 file_put_contents($path,base64_decode($image));
 
 $actualpath = "http://sergio.ddns.net/Test1/$path";
 
 $sql = "INSERT INTO images1 (image,tags,user) VALUES ('$actualpath','$name','$user')";
 
 if(mysqli_query($con,$sql)){
	//file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }
 
 mysqli_close($con);
 }else{
 echo "Error";
 }