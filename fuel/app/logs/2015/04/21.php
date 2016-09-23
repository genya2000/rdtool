<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

ERROR - 2015-04-21 09:17:25 --> Fatal Error - Username, password or email address is not given, or email address is invalid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/packages/auth/classes/auth/login/simpleauth.php on line 232
ERROR - 2015-04-21 09:19:15 --> Fatal Error - Username, password or email address is not given, or email address is invalid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/packages/auth/classes/auth/login/simpleauth.php on line 232
ERROR - 2015-04-21 09:24:47 --> Parsing Error - syntax error, unexpected 'public' (T_PUBLIC) in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/admin.php on line 170
ERROR - 2015-04-21 09:25:32 --> Fatal Error - Username, password or email address is not given, or email address is invalid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/packages/auth/classes/auth/login/simpleauth.php on line 232
ERROR - 2015-04-21 09:29:00 --> Fatal Error - Username, password or email address is not given, or email address is invalid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/packages/auth/classes/auth/login/simpleauth.php on line 232
ERROR - 2015-04-21 09:29:49 --> Fatal Error - Username, password or email address is not given, or email address is invalid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/packages/auth/classes/auth/login/simpleauth.php on line 232
ERROR - 2015-04-21 09:30:15 --> Fatal Error - Username, password or email address is not given, or email address is invalid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/packages/auth/classes/auth/login/simpleauth.php on line 232
ERROR - 2015-04-21 09:41:21 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'RDTOOL_DB.counter' doesn't exist with query: "SELECT * FROM `counter` WHERE `parameterid` = '' AND `created_at` LIKE '____-__-__%'" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 09:41:54 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'RDTOOL_DB.counter' doesn't exist with query: "SELECT * FROM `counter` WHERE `parameterid` = 'pK3e9Q2xANOZ64' AND `created_at` LIKE '____-__-01%'" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 09:45:31 --> 1146 - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'RDTOOL_DB.counter' doesn't exist with query: "SELECT * FROM `counter` WHERE `parameterid` = 'pK3e9Q2xANOZ64' AND `created_at` LIKE '2015-__-__%'" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 09:45:59 --> Notice - Undefined variable: sql_result_pback in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 86
ERROR - 2015-04-21 09:58:04 --> Fatal Error - Call to undefined function where_close() in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 85
ERROR - 2015-04-21 10:27:48 --> Fatal Error - Call to undefined method Fuel\Core\Database_Expression::from() in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 87
ERROR - 2015-04-21 10:28:33 --> Notice - Use of undefined constant pback - assumed 'pback' in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 87
ERROR - 2015-04-21 10:29:35 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'count(*) as count' in 'field list' with query: "SELECT (SELECT `count(*) as count` FROM `at_pointback` WHERE `pback_add` = 'A37WgkdptR3Zzg' AND `pback_created_at` LIKE '--%') FROM `at_pointback` WHERE `pback_status` = '1' OR `pback_status` = 'NULL'" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 10:32:24 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'count(*) as count' in 'field list' with query: "SELECT (SELECT `count(*) as count` FROM `at_pointback` WHERE `pback_add` = 'A37WgkdptR3Zzg' AND `pback_created_at` LIKE '--%') FROM `at_pointback` WHERE `pback_status` = '1' OR `pback_status` = 'NULL'" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 10:46:12 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created_at' in 'where clause' with query: "SELECT * FROM `at_pointback` WHERE (`pback_add` = 'A37WgkdptR3Zzg' AND `created_at` LIKE '--%') AND (`pback_status` = 'NULL')" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 10:47:15 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created_at' in 'where clause' with query: "SELECT * FROM `at_pointback` WHERE (`pback_add` = 'A37WgkdptR3Zzg' AND `created_at` LIKE '--%') AND (`pback_status` = '1' OR `pback_status` = 'NULL')" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 10:47:59 --> 1054 - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created_at' in 'where clause' with query: "SELECT * FROM `at_pointback` WHERE (`pback_add` = 'dzTRKfpt3M0JUf' AND `created_at` LIKE '--%') AND (`pback_status` = '1' OR `pback_status` = 'NULL')" in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/pdo/connection.php on line 270
ERROR - 2015-04-21 11:26:48 --> Notice - Undefined variable: mid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 53
ERROR - 2015-04-21 11:27:11 --> Notice - Undefined variable: pid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:30:48 --> Notice - Undefined variable: mid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 53
ERROR - 2015-04-21 11:31:35 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:32:34 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:34:51 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:35:27 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:36:05 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:36:22 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:37:45 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 11:39:06 --> Notice - Undefined variable: pid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:41:25 --> Notice - Undefined variable: pid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:41:34 --> Notice - Undefined variable: pid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:43:05 --> Notice - Undefined variable: sql_result_alllist in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 106
ERROR - 2015-04-21 11:44:25 --> Notice - Undefined variable: row_cpurl in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:49:14 --> Notice - Array to string conversion in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:50:27 --> Notice - Array to string conversion in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:50:43 --> Notice - Array to string conversion in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:51:39 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 11:58:55 --> Notice - Undefined variable: mid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 55
ERROR - 2015-04-21 11:59:27 --> Notice - Undefined variable: mid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 54
ERROR - 2015-04-21 12:08:43 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 102
ERROR - 2015-04-21 12:09:42 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 102
ERROR - 2015-04-21 12:11:00 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 103
ERROR - 2015-04-21 12:12:44 --> Notice - Undefined index: id in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 103
ERROR - 2015-04-21 12:14:51 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 103
ERROR - 2015-04-21 12:15:15 --> Notice - Undefined variable: camp in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 12:16:20 --> Notice - Undefined variable: pid in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 12:25:31 --> Notice - Undefined variable: sql_result_cpurl in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 119
ERROR - 2015-04-21 12:26:01 --> Notice - Undefined variable: camp in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 12:26:33 --> Notice - Undefined variable: camp in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 116
ERROR - 2015-04-21 12:27:14 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 106
ERROR - 2015-04-21 12:32:27 --> Parsing Error - syntax error, unexpected '}' in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 110
ERROR - 2015-04-21 12:33:58 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 104
ERROR - 2015-04-21 12:34:28 --> Notice - Undefined offset: 3 in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/media.php on line 104
ERROR - 2015-04-21 12:35:51 --> Notice - Undefined index: campname in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 12:36:23 --> Notice - Array to string conversion in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 13:09:19 --> Error - Database results are read-only in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/core/classes/database/result.php on line 272
ERROR - 2015-04-21 13:11:32 --> Notice - Array to string conversion in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 13:11:55 --> Notice - Array to string conversion in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 69
ERROR - 2015-04-21 14:10:36 --> Notice - Undefined index: usergroup in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/auth.php on line 39
ERROR - 2015-04-21 14:12:05 --> Notice - Undefined index: usergroup in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/auth.php on line 46
ERROR - 2015-04-21 14:12:22 --> Notice - Use of undefined constant media - assumed 'media' in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/classes/controller/auth.php on line 49
ERROR - 2015-04-21 14:42:00 --> Notice - Undefined variable: cam in /vagrant/www/8050/fuelphp-1-7-2-rdtool/fuel/app/views/media/index.php on line 68
