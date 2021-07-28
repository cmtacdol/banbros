<?php 

$host_name  = "127.0.0.1";
$host_user  = "root";
$host_pass  = "";
$db_name  = "banbros_db";
$charset = 'utf8mb4';
$port = "3306";

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];

$db_conn = new mysqli($host_name,$host_user,$host_pass,$db_name);

if(!$db_conn){
	die("Error: Could not connect to database server.");	
	// mysqli_error();
}

mysqli_select_db($db_conn,$db_name);

if ($db_conn->connect_error) {
	die("Connection failed: " . $db_conn->connect_error);
 } 
//////////////////////PDO///////////////////////////////
// DB credentials.
// define('DB_HOST',$host_name); // Host name
// define('DB_USER',$host_user); // db user name
// define('DB_PASS',$host_pass); // db user password name
// define('DB_NAME',$db_name); // db name
// Establish database connection.
try
{
	$dsn = "mysql:host=$host_name;dbname=$db_name;charset=$charset;port=$port";
	$dbh = new \PDO($dsn, $host_user, $host_pass, $options);
	$pdo = $dbh;
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}


?>