<?php
//include_once("./config.php");
//include_once("./func.php");
$mid = isset($_GET['mid']) ? htmlspecialchars($_GET['mid']) : null;
$pid = isset($_GET['pid']) ? htmlspecialchars($_GET['pid']) : null;

$key = 'RDTOOLのメディア名を保存する鍵';
/*
$mid_encrypt = openssl_encrypt($mid, 'AES-128-ECB', $key);
Cookie::set('cvmid', $mid_encrypt, time()+2592000, '/');  /* 有効期限は30日間です *  
$pid_encrypt = openssl_encrypt($pid, 'AES-128-ECB', $key);
Cookie::set('cvpid', $pid_encrypt, time()+2592000, '/');  /* 有効期限は30日間です *   
*/
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//MySQL用(Vagrant)
$dsn = 'mysql:host=localhost;dbname=RDTOOL_DB';
$db_username = 'root';
$db_password = 'gen039';

$db = new PDO($dsn, $db_username, $db_password, $options);
$sql_result = $db->prepare('SELECT * FROM mst_campaign WHERE parameterid=:parameterid');
//$sql_result = $db->prepare('SELECT * FROM mst_mst_campaign WHERE parameter=:parameter');
if (!($sql_result)){                           
    //$message = "redirect_sqlite_read_error";
    // 1 行が 70 文字を超える場合のため、wordwrap() を用いる
    //$message = wordwrap($message, 70);
    // 送信する
    mail( $to , 'alert_redirecttool', $message_read);
}

$sql_result->bindParam(':parameterid', $pid , PDO::PARAM_STR);
//$sql_result->bindParam(':parameter', $pid , PDO::PARAM_STR);
$sql_result->execute();
$data = $sql_result->fetch(PDO::FETCH_ASSOC);

//マッチしたデータのURLを変数へ格納
$linkurl = htmlspecialchars_decode($data["linkurl"]);
//$linkurl = htmlspecialchars_decode($data["linkurl"]);

header("Content-Type: application/json; charset=utf-8");
$record = array ($data);
$list = array('count' => count($record), 'data' => $record);
echo json_encode($list);



exit();
$db = null;
?>