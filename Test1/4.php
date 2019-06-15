 <?php
//$right=0;
//$left=10;
$general=0;
 if($_SERVER['REQUEST_METHOD']=='GET'){
	 if(isset($_GET)){
		 echo $_GET['nrPhoto'];
	 }
    $_GLOBALS["general"] = $_GET['nrPhoto'];
 }
 if ($_GLOBALS["general"]==-4){
	 $_GLOBALS["left"]=10-$_GLOBALS["general"];
	 //$_GLOBALS["right"]=0;
 }
 else {
	 $_GLOBALS["right"]=0+$_GLOBALS["general"];
	 //$_GLOBALS["left"]=0;
 }
 echo "right".$_GLOBALS["right"];
 echo " / ";
 echo $_GLOBALS["left"];
 ?>