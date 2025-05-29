<?php

$user_id=1;

if($user_id!=""){
	ini_set('session.gc_maxlifetime', 7200);
	session_set_cookie_params(7200);
	session_start();
	$_SESSION['user_id'] = $user_id;
	//header("Location: //" . $_SERVER['HTTP_HOST'] . "/iod/calc.html" );
	header("Location: //" . $_SERVER['HTTP_HOST'] . "/home/admin/index.php?user_id=" . $user_id );

	//header("Location: //" . $_SERVER['HTTP_HOST'] . "/iod/home/?user_id=" . $user_id );
}else{
	header("Location: //" . $_SERVER['HTTP_HOST'] . "/iod/index.php?result=false" );

}


?>