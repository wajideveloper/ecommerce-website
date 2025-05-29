<?php
$usernames = $_POST['uname'];
$password_hashed = $_POST['hashed'];



$default_data_name = "";
$default_data = "";
$data_id = 0;

//decrypt the password

//$converter = new Encryption;

$log_time = Date("H:i:s");
$log_date = Date("Y-m-d");
$log_date2 = Date("d/m/Y");


$found = "default";

//require_once("data_connector.php");
include 'db.php';
								

//global $conn;
//$conn=connect();

$SQL = "SELECT admin_name,admin_id,admin_email,admin_password FROM admin_info WHERE admin_email='$usernames' AND admin_password='".$password_hashed."'" ;
$run_query = mysqli_query($con,$SQL);

print(mysqli_num_rows($run_query));
if(mysqli_num_rows($run_query) > 0){




while($row = mysqli_fetch_array($run_query)){
    $found = $row['admin_email'];
    $user_id = $row['admin_id'];
    
    $password = $row['admin_password'];
}
}    



if($user_id!=""){
	ini_set('session.gc_maxlifetime', 7200);
	session_set_cookie_params(7200);
	session_start();
	
	$_SESSION['user_id'] = $user_id;
	
	header("Location: //" . $_SERVER['HTTP_HOST'] . "/home/admin/index.php?user_id=" . $user_id );
}else{
	header("Location: //" . $_SERVER['HTTP_HOST'] . "/home/admin/login/index.php?result=false" );

}

?>