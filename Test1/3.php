<?php
 require_once('1.php');
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['left'];
 }
 if($image==-4){
	 $sql = "select image,tags from images1 order by id asc limit 4";
 }else{
	$sql = "select image,tags from images1 order by id desc limit 4"; 
 }
	
 
 //$sql = "select image,tags from images1 WHERE id BETWEEN " .$Image." AND ".$ImageLimit. " order by id desc";
 $res = mysqli_query($con,$sql);
 $result = array();

 while($row = mysqli_fetch_array($res)){
 array_push($result,array('url'=>$row['image'],'tags'=>$row['tags']));
 }
 
 echo json_encode(array("result"=>$result));
// echo $_GLOBALS["general"];
 mysqli_close($con);
 
 ?>
 