<?php
require_once('../config.php');
extract($_POST);
		$qry = $conn->query("DELETE FROM images where id = $id");
		// if($qry){
		// 	$resp['status']='success';
		// 	$resp['sus_msg']= "Images successfully deleted";

		// 	return json_encode($resp);
		// }else{
		// 	$resp['status']='Failed';
		// 	$resp['error']= $conn->error;
		// 	$resp['err_msg'] = "Deleting Data failed";

		// 	return json_encode($resp);
		// }
?>