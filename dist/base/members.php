<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 9/23/2019
 * Time: 4:27 PM
 */

require_once dirname(__FILE__) . '/../system/System.php';
$ultra = new System();

if ($ultra->checkLoginState() != true){
    header('location:'.$ultra->domain().'/login?error=login-required');
    exit();
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
    <title>Members - Ultra-Med Health</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="base/register.php">
                        <i class="nav-icon icon-drop"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./base/members.php">
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
            <li class="breadcrumb-item active">Members</li>
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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h4 class="card-title mb-0">Ultra-Med Health Care</h4>
                            </div>
                            <!-- /.col-->
                        </div>
                        <div class="col-md-12">
                            <!-- Creation form here-->
                        </div>
                    </div>



                </div>
                <!-- /.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Members</div>
                            <div class="card-body">

                                <br>
                                <table class="table table-responsive-sm table-hover table-outline mb-0" id="members">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">Membership #</th>
                                        <th>Name</th>
                                        <th class="text-center">Gender</th>
                                        <th>Status</th>
                                        <th>Dependants</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $curl = curl_init();
                                    curl_setopt_array($curl, array(
                                        CURLOPT_URL => "http://ussd.ultramedhealth.com/api/v1/dashboard/admin/members/all",
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

                                    }
                                    else{
                                        if ($data['success'] == true){
                                            foreach ($data['member'] as $key){
                                                ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <div>
                                                            <strong class="text-center text-danger">
                                                                <?php echo $key['membership-number'];?>
                                                            </strong>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div><?php echo $key['name']."  ".$key['surname'];?></div>
                                                        <div class="small text-muted">
                                                            <span class="text-capitalize text-danger"><?php echo $key['package']; ?></span> | Registered: <?php echo  date('d M Y', strtotime($key['registered']))?></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div><?php echo $key['gender'];?></div>
                                                    </td>
                                                    <td>
                                                        <div class="small text-muted">Active</div>
                                                        <div class="small">
                                                            <?php
                                                                if ($key['subscription']['status']){
                                                                    echo '<span class="text-success">Subscribed</span>
                                                                          | Paid on: '.date('d M Y', strtotime($key['subscription']['date']));
                                                                }else{
                                                                    if ($key['subscription']['date'] ==  null){
                                                                        echo '<span class="text-danger">Not Subscribed</span>
                                                                          | Never Subscribed';
                                                                    }else{
                                                                        echo '<span class="text-danger">Not Subscribed</span>
                                                                          | Expired on: '.date('d M Y', strtotime($key['subscription']['date']));
                                                                    }

                                                                }

                                                            ?></div>
                                                    </td>
                                                    <td>
                                                        <div>Total <?php echo sizeof($key['dependants'])?></div>
                                                        <div class="small text-muted">
                                                            <a href="./base/dependants.php?member=<?php echo $key['id'];?>" class="<?php if (sizeof($key['dependants']) == 0){ echo 'btn-link disabled'; } ?>" <?php if (sizeof($key['dependants']) == 0){ echo 'tabindex="-1"'; } ?>>View All</a> <!--| Last Added: Jan 1, 2019 --></div>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <a href="./base/details.php?member=<?php echo $key['id'];?>">Read More <i class="fa fa-arrow-right"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    }


                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>
    </main>
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

