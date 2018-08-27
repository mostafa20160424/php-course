<?php
//header("Content-type: text/javascript");
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$first=(int) $_POST['first'];
	$second = intval($_POST['second']);

	$json=array();

	$json['result']=$first+$second;
	$result['success']="Yes";


}

echo json_encode($json);//must echo to use data in ajax