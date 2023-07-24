<?php
defined("DBDRIVER")or define('DBDRIVER', 'mysql');
defined("DBHOST")or define('DBHOST', 'host.docker.internal');
defined("DBNAME")or define('DBNAME', 'testsdi');
defined("DBUSER")or define('DBUSER', 'root');
defined("DBPASS")or define('DBPASS', null);
define("ROOTMAIN", $_SERVER['DOCUMENT_ROOT'] . "/");
define("HOSTMAIN", getenv('SDI_HOST_MAIN'));
