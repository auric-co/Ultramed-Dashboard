<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 10/11/2019
 * Time: 11:29 AM
 */

require_once dirname(__FILE__) . '/../system/System.php';
$ultra = new System();

if ($ultra->checkLoginState() != true){
    header('location:'.$ultra->domain().'/login?error=login-required');
    exit();
}

$action = $_GET['action'];
switch ($action){
    case "suspend":
        $link = $ultra->domain()."/base/suspend.php?member=".$_GET['member'];
        break;
    case "remove":
        $link = $ultra->domain()."/base/remove.php?member=".$_GET['member'];
        break;
    case "blacklist":
        $link = $ultra->domain()."/base/blacklist.php?member=".$_GET['member'];
        break;
    default:

        header("location:".$ultra->domain());
        exit();
}