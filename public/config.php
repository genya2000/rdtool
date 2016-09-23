<?php


//MySQL用(Vagrant)
$dsn = 'mysql:host=localhost;dbname=RDTOOL_DB';
$db_username = 'root';
$db_password = 'gen039';

//MySQL用(本番)
//$dsn = 'mysql:host=localhost;dbname=RDTOOL_DB';
//$db_username = 'infolabdb';
//$db_password = 'koiwatky2014';

//$hostname = "http://info-lab.tokyo";

//vagrant 環境
$hostname = "http://192.168.33.10:8050";

// rd.php 設置ディレクトリ
//$rd_dir = "/lab/rdtool";

//vagrant環境
$rd_dir = "/rdtool";



//アラートメールの送信先情報

$to = "alert@info-lab.jp";
//複数アドレスの場合：$to = "alert@info-lab.jp,info@info-lab.jp";

$message_read = "redirect_sqlite_read_error";
$message_write = "redirect_sqlite_inert_error";