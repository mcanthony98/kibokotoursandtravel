<?php

/*define('DB_SERVER', 'sql6.freemysqlhosting.net');
define('DB_USERNAME', 'sql6427269');
define('DB_PASSWORD', 'XFyuqp4uFM');
define('DB_DATABASE', 'sql6427269');
$dbServerPort = "30";*/


define('DB_SERVER', 'srv497.hstgr.io');
define('DB_USERNAME', 'u640333703_kibokotours');
define('DB_PASSWORD', '8kfN8T+KGHw/');
define('DB_DATABASE', 'u640333703_kibokotours');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



/*

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u640333703_writtela');
define('DB_PASSWORD', '36987412Mm.');
define('DB_DATABASE', 'u640333703_writtela');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
*/


/*define('DB_SERVER', 'https://databases.000webhost.com/');
define('DB_USERNAME', 'id17602734_admin');
define('DB_PASSWORD', '36987412Mm.36987412Mm.');
define('DB_DATABASE', 'id17602734_writela');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//verify connection
	 if ($conn->connect_error){
		 die("Connection Failed: <br />" .$conn->connect_error);
	  }

  */




  //Get Heroku ClearDB connection information
/*$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
 */
?>