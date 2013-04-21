<?php
session_start();

include_once '../common/mysql_class.php';
include_once '../configs/config.php';
include_once 'common/admin_action_class.php';

$db = new Action($mydbhost,$mydbuser,$mydbpass,$mydbname,$mydbcharset);