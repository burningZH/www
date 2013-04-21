<?php
include_once './configs/config.php';
include_once './common/smarty/Smarty.class.php';


//******smarty**********
$smarty = new Smarty();
$smarty->template_dir      =    $smarty_template_dir;
$smarty->compile_dir       =    $smarty_compile_dir;
$smarty->config_dir        =    $smarty_config_dir;
$smarty->cache_dir         =    $smarty_cache_dir;
$smarty->caching           =    $smarty_caching;
$smarty->left_delimiter    =    $smarty_left_delimiter;
$smarty->right_delimiter   =    $smarty_right_delimiter;