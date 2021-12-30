<?php
include_once ('../common.php');

$result = $_REQUEST;
$identify = $_POST['identify'];
$message = $_POST['message'];

	$sql = "

		insert into qna_list
		set
                	identify     	= '$identify',
                  message     	= '$message',
                  create_time  = current_timestamp()
	";

	sql_query( $sql );

	$return = array();

	$return["result"] = "success";
	$return["username"] = $name;
	//$return["sql"] = $sql;

	echo json_encode( $return );

/*
print_r($json);

exit();
*/
	// $email = "mskimm0501@gmail.com";
	// $msg = $_POST["qa_name"]. "/".$_POST["qa_tel"];
	// $subject = "=?UTF-8?B?".base64_encode("contact us 등록 알림")."?=";
	// mail($email,$subject,$msg);

	// goto_url($_SERVER['HTTP_REFERER']);
?>
<script>alert('참여해주셔서 감사합니다.'); window.location.href = '/';</script>
