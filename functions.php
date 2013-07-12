<?php
	
   	function checkAuth($basename){
    	if(!isset($_SESSION["username"]) || !isset($_SESSION["role"])){
    		return false;
    	}else{
    		include_once("config.php");
			global $op;
    		$sq1 = $op->prepare("
				SELECT 1 FROM menu AS m
				JOIN role_menu AS r 
				ON r.menuID = m.id
				WHERE r.roleID = ? AND m.target=? 
			");
			$sq1->bind_param('ds',$_SESSION["role"],$basename);
			$sq1->execute();
			echo $sq1->error;
			$re1 = $sq1->get_result();
			$v = $re1->fetch_assoc();
			if($v['1']=='1'){
				return true;
			}else{
				return false;				
			}
    	}
    }
	
?>