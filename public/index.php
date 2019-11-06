<?php
/**
 * Created by PhpStorm.
 * User: wangxiafei
 * Date: 2019/11/5
 * Time: 2:26 PM
 */

require '../vendor/autoload.php';
define("APPLICATION_PATH",  dirname(dirname(__FILE__)));
$runMode = ini_get('yaf.environ');
!defined('RUN_MODE') && define('RUN_MODE', false !== $runMode ? $runMode : 'product');

$app  = new Yaf_Application(APPLICATION_PATH . "/conf/".RUN_MODE."/application.ini");
$app->bootstrap()->run();