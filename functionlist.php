<?php 

function getsoftname($wt){
	$wt_china;
	switch ($wt) {
		case (1) :
			$wt_china = "超算CAD";
			break;
		case (2) :
			$wt_china = "超算CAE";
			break;
		case (3) :
			$wt_china = "其他软件";
			break;
		default :
			$wt_china = "其他";
	}
	return $wt_china;
}

function getapplytype($wt){
	$wt_china;
	switch ($wt) {
		case (1) :
			$wt_china = "在线试用";
			break;
		case (2) :
			$wt_china = "包月";
			break;
		case (3) :
			$wt_china = "包年";
			break;
		default :
			$wt_china = "";
	}
	return $wt_china;
}

function getapplytime($wt){
	$wt_china;
	switch ($wt) {
		case (1) :
			$wt_china = "1天";
			break;
		case (2) :
			$wt_china = "2天";
			break;
		case (3) :
			$wt_china = "3天";
			break;
		case (4) :
			$wt_china = "4天";
			break;
		default :
			$wt_china = "";
	}
	return $wt_china;
}


?>