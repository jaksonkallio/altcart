<?
// Database Connection
$db_info = array(
	"server_url" => "localhost",
	"username" => "",
	"password" => "",
	"db_name" => ""
);

$con = mysqli_connect($db_info['server_url'], $db_info['username'], $db_info['password']);

if(!$con){
	die("Database connection error.");
}

if(!mysqli_select_db($con, $db_info['db_name'])){
	die("Database could not be selected.");
}

$db_info = false;
?>
