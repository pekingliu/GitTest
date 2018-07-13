<?php 
/*
$host='localhost';
$user_name='root';
$password='1234';

$conn=mysql_connect($host,$user_name,$password);
if (!$conn)
{
	die('数据库连接失败'.mysql_error());
}
echo '数据库连接成功';

if (mysql_close($conn))
{
	echo '<br/>...<br/>';
	echo '数据库链接关闭';
}
*/
/*-------
*mysqlconnetc
*---适用于php5.6以前版本
 */

# ------------------------------------------------------------------------------------
$machinename="127.0.0.1";
//$machinename="60.208.139.41";
//$machinename="192.168.126.5";
$user_db="root";
$password="1234";
$dbname="qiwen";

$connectstr = "mysql:host=".$machinename.";dbname=".$dbname;
//echo "connectstr::".$connectstr;
//echo "<br>";
# ------------------------------------------------------------------------------------

/* $db=mysql_connect($machinename,$user_db,$password);
if (!$db)
{
	die('数据库连接失败'.mysql_error());
}
echo '数据库连接成功';
//echo 'db='.$db;
mysql_select_db("qiwen"); */


/*
 * 第一个参数是mysql:host,第二是dbname,第三个账户名，第四个密码
 * $pdo = new PDO("mysql:host=localhost;dbname=student", "root", "");  
 */
try {
	$pdo = new PDO($connectstr,$user_db,$password);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
} 
$pdo->exec('set names utf8');
//echo '数据库连接成功';


/*
 * mysqli
 * 数据库地址，登陆账号，密码，数据库名称
 */
/*
$mysqli = new mysqli("localhost", "root", "", "student");
$sql = "SELECT * FROM tb_user";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc(); // 从结果集中取得一行作为关联数组
echo $row["password"];*/
/* free result set */
//$result->free();

/* close connection */
//$mysqli->close();



/*
$sql=" SELECT code,name FROM city  where name like '%��%' limit 0,20";
mysql_query("set names 'gbk'");
//$result = mysql_query("SELECT * FROM city");
//$result = mysql_query("select city_code,rain,temp,wind,vane,air_pressure, humility,visibility from wdata where city_code=40101750 and start_time=2012052408 and user='bcwh' order by time_flag");
$result = mysql_query($sql);

echo "<table border=1><tr><td>Host</td><td>Status</td></tr>\n";


while ($myrow = mysql_fetch_row($result)) {
	printf("<tr><td> %s</td><td>%s</td></tr>\n", $myrow[0], $myrow[1]);
}

echo "</table>\n";*/

//取出一条数据
function sRow($sqlstr,$mypdo){
	$mypdo->query('set names utf8;');
	$sth = $mypdo->query($sqlstr);
	$ret = $sth->fetchAll(PDO::FETCH_ASSOC);
	return $ret[0];
}
//取出所有数据
function sRows($sqlstr,$mypdo){
	$mypdo->query('set names utf8;');
	$sth = $mypdo->query($sqlstr);
	return $sth->fetchAll(PDO::FETCH_ASSOC);
}
//insert update deletes
function dbIUD($sqlstr,$mypdo){
	$mypdo->query('set names utf8;');
	$sth = $mypdo;
	$count = $sth->exec($sqlstr);
	if($count){
		return true;
	}else {
		return false;
	}
}
?>