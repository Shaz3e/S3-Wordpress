<?php
/*======================================================================*\
|| #################################################################### ||
|| # Package - Wordpress Template based on Shaz3e S3 Framework          ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

// SET COOKIE FOR 1 YEAR
if(isset($_REQUEST["SETSTYLE"])){
	if(setcookie("testcookie",true)){
		setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+31622400,"/");
		// setcookie("STYLE",$_REQUEST["SETSTYLE"],time()+3600,"/"); // SET COOKIE FOR 1 HOUR
	} else {
		$_SESSION["STYLE"]=$_REQUEST["SETSTYLE"];
	}
}
// RETURN TO CURRENT PAGE
header("Location: ".$_SERVER["HTTP_REFERER"]);
?>