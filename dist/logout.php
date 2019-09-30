<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/26/2019
 * Time: 5:07 PM
 */
include_once dirname(__FILE__) . '/system/System.php';
$ultra = new System();
$ultra->deleteCookie();
header('location:'.$ultra->domain());
exit();