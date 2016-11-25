<?php 
	$arr=array("green","red","black");
	function divcolor($arr){
		foreach ($arr as $value) {
			echo "<div style='background-color:".$value.";width:200px;height:200px;'></div>";
		}
	}
	
	divcolor($arr);
?>