<?php
	//Http request error, such as no account
	if(!isset($_GET['account'])){
		$return = array('result' => -1);
		echo json_encode($return);
		return;
	}
	
	//mysql server error, such as error password
	$account = $_GET['account'];
	$conn = mysqli_connect('127.0.0.1', 'root', 'root', 'double', 3306);
	if(mysqli_connect_error()){
		$return = array('result' => -2);
		echo json_encode($return);
		return;
	}
	
	//Account repeat=>1 else =>0
	$sql = "select * from member where account = '{$account}'";
	$rs = mysqli_query($conn, $sql);
	if(mysqli_num_rows($rs)>0){
	//Repeat
		$return = array('result' => 1);
		echo json_encode($return);
		return;
	}else{
	//No Repeat
		$return = array('result' => 0);
		echo json_encode($return);
		return;
	}
	
?>