<?php


if($_SERVER['HTTP_HOST']=='www.a1gana.com'){
	header('Location: http://a1gana.com'.$_SERVER['REQUEST_URI'],TRUE,301);
	exit;
}
define('SF_ROOT_DIR',    realpath(dirname(__FILE__).'/sumant'));
define('SF_APP',         'frontend_m');
define('SF_ENVIRONMENT', 'a1gana');
define('SF_DEBUG',       false);

require_once(SF_ROOT_DIR.DIRECTORY_SEPARATOR.'apps'.DIRECTORY_SEPARATOR.SF_APP.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');

sfContext::getInstance()->getController()->dispatch();