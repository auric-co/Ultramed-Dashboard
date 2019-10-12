<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 10/10/2019
 * Time: 4:26 PM
 */
$member = $_GET['member'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://ussd.ultramedhealth.com/api/v1/dashboard/admin/member/update/suspend/".$member,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "",
    CURLOPT_HTTPHEADER => array(
        "content-type: application/json",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$data = json_decode($response, true);
if ($err) {

}else{

}