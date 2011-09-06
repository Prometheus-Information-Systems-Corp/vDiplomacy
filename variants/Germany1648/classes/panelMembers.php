<?php

defined('IN_CODE') or die('This script can not be run by itself.');

class Germany1648Variant_panelMembers extends panelMembers {

	// Delete the "neutral" player (UserID=3) from the playerlist
	public function membersList()
	{
		if (isset($this->ByUserID[3])) {
			unset($this->ByStatus[$this->ByUserID[3]->status][$this->ByUserID[3]->id]);
			$ret=parent::membersList();
			$this->ByStatus[$this->ByUserID[3]->status][$this->ByUserID[3]->id]=$this->ByUserID[3];
		} else {
			$ret=parent::membersList();
		}
		return $ret;
	}
	
	// 1 less players needed to start the game
	function occupationBar()
	{
		$a=array_pop($this->Game->Variant->countries);
		$ret=parent::occupationBar();
		array_push($this->Game->Variant->countries,$a);
		return $ret;
	}	
	
}

?>