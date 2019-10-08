<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 10/8/2019
 * Time: 12:12 PM
 */
include "../system/System.php";

$ultra = new System();
header('location: '.$ultra->domain());
exit();