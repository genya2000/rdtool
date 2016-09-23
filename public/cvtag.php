<?php
//include_once("./config.php");
//include_once("./func.php");

/* fuelphp の書式
$cvmid = Cookie::get('cvmid');
$cvpid = Cookie::get('cvpid');
 * 
 */

$cvmid = $_COOKIE["cvmid"];
$cvpid = $_COOKIE["cvpid"];

$key = 'RDTOOLのメディア名を保存する鍵';
$cvmid_decrypt = openssl_decrypt($cvmid, 'AES-128-ECB', $key);
$cvpid_decrypt = openssl_decrypt($cvpid, 'AES-128-ECB', $key);


$mid = isset($_GET['mid']) ? htmlspecialchars($_GET['mid']) : null;
$pid = isset($_GET['pid']) ? htmlspecialchars($_GET['pid']) : null;


//var_dump($cvmid_decrypt,$cvpid_decrypt);


$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);


//MySQL用(Vagrant)
$dsn = 'mysql:host=localhost;dbname=RDTOOL_DB';
//$db_username = 'root';
//$db_password = 'gen039';
$db_username = 'infolabdb';
$db_password = 'koiwatky2014';

$status = 1;

$db = new PDO($dsn, $db_username, $db_password, $options);

//SQLインジェクション対策
$sql  = $db->prepare("INSERT INTO tr_cvcount(medianame, parameterid, status) " .
                       "VALUES (:medianame, :parameterid, :status)");

//$sql  = $db->prepare("INSERT INTO tr_clickcounter(mediaid, parameter) " .
//                       "VALUES (:mediaid, :parameter)");
                $arg  = array(':medianame'    => $cvmid_decrypt,
                              ':parameterid'  => $cvpid_decrypt,
                              ':status'       => $status
                               );
                //$sql->execute($arg);
                if (! $sql->execute($arg)) {
              //                      echo "Failed";
                                    //$message = "redirect_sqlite_inert_error";
                                    // 1 行が 70 文字を超える場合のため、wordwrap() を用いる
                                    //$message = wordwrap($message, 70);
                                    // 送信する
                                    mail( $to , 'alert_redirecttool', $message_write);
                                    }
//帰ってきた値を遷移先としてセット
//header("Location:".$linkurl);
//exit();
$db = null;

//$imgdata = imagecreatetruecolor(1, 1) ; // 1x1 の画像を作成
//imagecolorallocatealpha ($imgdata, 0, 0, 0, 127) ; // 透過画像で描画

//header('content-type: image/gif') ; // ヘッダ出力
//imagegif($imgdata) ; // データ出力

header("Content-type: image/gif");
echo base64_decode('R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
//readfile('cvtag.gif');

?>