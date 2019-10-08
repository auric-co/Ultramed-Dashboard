<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 10/7/2019
 * Time: 12:33 PM
 */

require_once dirname(__FILE__) . '/../system/System.php';
$ultra = new System();

if ($ultra->checkLoginState() != true){
    header('location:'.$ultra->domain().'/login?error=login-required');
    exit();
}


if (isset($_POST['submit'])){
    $msisdn = $_POST['phn'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id = $_POST['idnum'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $addr = $_POST['address'];
    $twn = $_POST['town'];
    $package = $_POST['package'];

    $ultra->setName($name);
    $ultra->setLastName($surname);
    $ultra->setNationID($id);
    $ultra->setDob($dob);
    $ultra->setMobile($msisdn);
    $ultra->setGender($gender);
    $ultra->setAddress($addr);
    $ultra->setTown($twn);
    $ultra->setPackage($package);
    $ultra->addMember();
}
?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./../">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Create Account - Ultra-Med Health</title>
    <!-- Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
    <link rel="manifest" href="img/icons/site.webmanifest">
    <link href="vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="./img/icons/android-chrome-512x512.png" width="50" alt="Ultra-Med Logo">
        <sup class="text-dark font-weight-bold">Ultra-Med Health</sup>
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        <i class="nav-icon icon-speedometer"></i> Home
                    </a>
                </li>
                <li class="nav-title">Members</li>
                <li class="nav-item active">
                    <a class="nav-link" href="base/register.php">
                        <i class="nav-icon icon-drop"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./base/members.php">
                        <i class="nav-icon icon-pencil"></i> Manage</a>
                </li>
                <li class="nav-title">Claims</li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon icon-pie-chart"></i> Save</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon icon-pie-chart"></i> Manage</a>
                </li>
                <li class="nav-title">Account</li>
                <li class="nav-item">
                    <a class="nav-link" href="./settings">
                        <i class="nav-icon icon-settings"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">
                        <i class="nav-icon icon-power"></i> Logout</a>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Register New Member</li>
            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#">
                        <i class="icon-speech"></i>
                    </a>
                    <a class="btn" href="./">
                        <i class="icon-graph"></i>  Dashboard</a>
                    <a class="btn" href="./../../settings">
                        <i class="icon-settings"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Register Member</strong></div>
                            <div class="card-body">
                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" id="register">
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="select1">Select Medical AID Package</label>
                                        <div class="col-md-9">
                                            <select class="form-control" id="package" name="package">
                                                <option value="0">Please select</option>
                                                <?php
                                                $curl = curl_init();
                                                curl_setopt_array($curl, array(
                                                    CURLOPT_URL => "http://ussd.ultramedhealth.com/api/v1/ussd/subscriptions/packages",
                                                    CURLOPT_RETURNTRANSFER => true,
                                                    CURLOPT_ENCODING => "",
                                                    CURLOPT_MAXREDIRS => 10,
                                                    CURLOPT_TIMEOUT => 30,
                                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                    CURLOPT_CUSTOMREQUEST => "GET",
                                                    CURLOPT_POSTFIELDS => "",
                                                    CURLOPT_HTTPHEADER => array(
                                                        "content-type: application/json",
                                                    ),
                                                ));

                                                $response = curl_exec($curl);
                                                $err = curl_error($curl);
                                                $data = json_decode($response, true);

                                                if ($err) {
                                                    echo '<option value="">No Results Found</option>';
                                                }
                                                else{
                                                    if ($data['success'] == true){
                                                        foreach ($data['packages'] as $key){
                                                            echo '<option value="'.$key['id'].'">'.$key['name'].'</option>';
                                                        }
                                                    }else{
                                                        echo '<option value="">No Packages Found</option>';

                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="name">First Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" required id="name" type="text" name="name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="surname">Surname</label>
                                        <div class="col-md-9">
                                            <input class="form-control" required id="surname" type="text" name="surname" placeholder="Surname">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">Gender</label>
                                        <div class="col-md-9 col-form-label">
                                            <div class="form-check form-check-inline mr-1">
                                                <input class="form-check-input" id="gender1" type="radio" required value="Female" name="gender">
                                                <label class="form-check-label" for="gender1">Female</label>
                                            </div>
                                            <div class="form-check form-check-inline mr-1">
                                                <input class="form-check-input" id="gender" type="radio" value="Male" required name="gender">
                                                <label class="form-check-label" for="gender">Male</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="phn">Phone Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" required id="phn" type="text" name="phn" placeholder="Enter Member Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="idnum">ID Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control" required id="idnum" type="text" name="idnum" placeholder="ID Number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="dob">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input class="form-control" required id="dob" type="date" name="dob" placeholder="Member D.O.B">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="address">Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" id="address" name="address" rows="9" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label" for="town">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input class="form-control" required id="town" type="text" name="town" placeholder="Town">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-primary" type="submit" name="submit" form="register"><i class="fa fa-dot-circle-o"></i> Submit</button>
                                <button class="btn btn-sm btn-danger" type="reset" form="register">
                                    <i class="fa fa-ban"></i> Reset</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>
    </main>
    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                    <i class="icon-list"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                    <i class="icon-speech"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                    <i class="icon-settings"></i>
                </a>
            </li>
        </ul>
    </aside>
</div>
<footer class="app-footer">
    <div>
        &copy; 2019 Ultra-Med Health
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>
<!-- CoreUI and necessary plugins-->

<script src="vendors/jquery/js/jquery.min.js"></script>
<script src="vendors/popper.js/js/popper.min.js"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/pace-progress/js/pace.min.js"></script>
<script src="vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="vendors/@coreui/coreui/js/coreui.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>

    $(document).ready( function () {
        $('#members').DataTable();
    } );
</script>
</body>
</html>

