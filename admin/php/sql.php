<?PHP

include '../../connection.php';

$location = 'http://localhost/ieee/admin/html'; // localhost

//$location = 'http://10.87.3.175/placement/html';//localhostPHONE
//$location = 'http://172.16.61.204/placement2014/html';// MIT
//$con = mysql_connect("localhost","root","muADMIN#123"); // localhost
//$con = mysql_connect("localhost","root","cybhat"); // localhost
//$con = mysql_connect("localhost","root","muADMIN#123");// MIT


$dbc = mysqli_connect($DB_HOSTNAME,$DB_USER,$DB_PASS,$DB_NAME) or die("Could not connect to MySQL server");

?>
