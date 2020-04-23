<?php


if($_SERVER['HTTP_HOST']=='www.hifidj.in'){
	header('Location: https://hifidj.in'.$_SERVER['REQUEST_URI'],TRUE,301);
	exit;
}
define('SF_ROOT_DIR',    realpath(dirname(__FILE__).'/vishal_baghel'));
define('SF_APP',         'frontend_m');
define('SF_ENVIRONMENT', 'hifidj_env');
define('SF_DEBUG',       false);

require_once(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.SF_APP.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

sfContext::getInstance()->getController()->dispatch();
