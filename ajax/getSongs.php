<?php
	include_once("../config.php");
	if(isset($_GET['q'])){
		$query = "%".$_GET['q']."%";
		$sq1 = $op->prepare("SELECT title,composer,arr,loc,id FROM songs WHERE title LIKE ? ORDER BY title");
		$sq1->bind_param("s",$query);
	}else{
		$sq1 = $op->prepare("SELECT title,composer,arr,loc,id FROM songs ORDER BY title");
	}
	
	$sq1->execute();
	echo $sq1->error;
	$sq1->bind_result($v['title'],$v['composer'],$v['arr'],$v['loc'],$v['id']);
	
	$title = array();
	$composer = array();
	$arr = array();
	$loc = array();
	$id = array();
	while($sq1->fetch()){
		array_push($title,$v['title']);
		array_push($composer,$v['composer']);
		array_push($arr,$v['arr']);
		array_push($loc,$v['loc']);
		array_push($id,$v['id']);
	}
	
	$res = array('title'=>$title,'composer'=>$composer,'arr'=>$arr,'loc'=>$loc,'id'=>$id);
	echo json_encode($res);
	    
?>