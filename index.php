<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <?php $title = "Unikit";
    include 'partials/title-meta.php'; ?>

    <?php include 'partials/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">

<?php include 'partials/menu.php';  ?>

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">

            <?php
            $page_title = "Analytics";
            $sub_title = "Dashboard";
            include 'partials/page-title.php';  ?>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="pt-3">
                                <h3 class="text-dark text-center font-24 fw-bold line-height-lg">Unikit
                                    <br>Multi Application</h3>
                                <div class="text-center text-muted font-16 fw-bold pt-3 pb-1">We Design and Develop
                                    Clean and High Quality Web Applications
                                </div>

                                <div class="text-center py-3 mb-3">
                                    <a href="#" class="btn btn-primary">Buy Now</a>
                                </div>
                                <img src="assets/images/small/business.png" alt="" class="img-fluid px-3 mb-2">
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <div class="col-lg-9">
                    <div class="row justify-content-center">
                        <div class="col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="col-3">
                                            <i class="ti ti-users font-36 align-self-center text-dark"></i>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <div id="dash_spark_1" class="mb-3"></div>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-dark my-0 font-22 fw-bold">24000</h3>
                                            <p class="text-muted mb-0 fw-semibold">Sessions</p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="col-3">
                                            <i class="ti ti-clock font-36 align-self-center text-dark"></i>
                                        </div><!--end col-->
                                        <div class="col-auto ms-auto align-self-center">
                                            <span class="badge badge-soft-success px-2 py-1 font-11">Active</span>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <div id="dash_spark_2" class="mb-3"></div>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-dark my-0 font-22 fw-bold">00:18</h3>
                                            <p class="text-muted mb-0 fw-semibold">Avg.Sessions</p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="col-3">
                                            <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <div id="dash_spark_3" class="mb-3"></div>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-dark my-0 font-22 fw-bold">$2400</h3>
                                            <p class="text-muted mb-0 fw-semibold">Bounce Rate</p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->

                        <div class="col-lg-3">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="row d-flex">
                                        <div class="col-3">
                                            <i class="ti ti-confetti font-36 align-self-center text-dark"></i>
                                        </div><!--end col-->
                                        <div class="col-auto ms-auto align-self-center">
                                            <span class="badge badge-soft-danger px-2 py-1 font-11">-2%</span>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <div id="dash_spark_4" class="mb-3"></div>
                                        </div><!--end col-->
                                        <div class="col-12 ms-auto align-self-center">
                                            <h3 class="text-dark my-0 font-22 fw-bold">85000</h3>
                                            <p class="text-muted mb-0 fw-semibold">Goal Completions</p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Audience Overview</h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    This Year<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">This Year</a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div>  <!--end row-->
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="">
                                        <div id="ana_dash_1" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Browser Used & Traffic Reports</h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive browser_users">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Browser</th>
                                        <th class="border-top-0">Sessions</th>
                                        <th class="border-top-0">Bounce Rate</th>
                                        <th class="border-top-0">Transactions</th>
                                    </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="assets/images/logos/chrome.png" alt="" height="20" class="me-2">Chrome
                                        </td>
                                        <td>10853<small class="text-muted">(52%)</small></td>
                                        <td> 52.80%</td>
                                        <td>566<small class="text-muted">(92%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="assets/images/logos/micro-edge.png" alt="" height="20"
                                                 class="me-2">Microsoft Edge
                                        </td>
                                        <td>2545<small class="text-muted">(47%)</small></td>
                                        <td> 47.54%</td>
                                        <td>498<small class="text-muted">(81%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="assets/images/logos/in-explorer.png" alt="" height="20"
                                                 class="me-2">Internet-Explorer
                                        </td>
                                        <td>1836<small class="text-muted">(38%)</small></td>
                                        <td> 41.12%</td>
                                        <td>455<small class="text-muted">(74%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="assets/images/logos/opera.png" alt="" height="20" class="me-2">Opera
                                        </td>
                                        <td>1958<small class="text-muted">(31%)</small></td>
                                        <td> 36.82%</td>
                                        <td>361<small class="text-muted">(61%)</small></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><img src="assets/images/logos/chrome.png" alt="" height="20" class="me-2">Chrome
                                        </td>
                                        <td>10853<small class="text-muted">(52%)</small></td>
                                        <td> 52.80%</td>
                                        <td>566<small class="text-muted">(92%)</small></td>
                                    </tr><!--end tr-->
                                    </tbody>
                                </table> <!--end table-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Browser Used & Traffic Reports</h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Channel</th>
                                        <th class="border-top-0">Sessions</th>
                                        <th class="border-top-0">Prev.Period</th>
                                        <th class="border-top-0">% Change</th>
                                    </tr><!--end tr-->
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="" class="text-primary">Organic search</a></td>
                                        <td>10853<small class="text-muted">(52%)</small></td>
                                        <td>566<small class="text-muted">(92%)</small></td>
                                        <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Direct</a></td>
                                        <td>2545<small class="text-muted">(47%)</small></td>
                                        <td>498<small class="text-muted">(81%)</small></td>
                                        <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>

                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Referal</a></td>
                                        <td>1836<small class="text-muted">(38%)</small></td>
                                        <td>455<small class="text-muted">(74%)</small></td>
                                        <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Email</a></td>
                                        <td>1958<small class="text-muted">(31%)</small></td>
                                        <td>361<small class="text-muted">(61%)</small></td>
                                        <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td><a href="" class="text-primary">Social</a></td>
                                        <td>1566<small class="text-muted">(26%)</small></td>
                                        <td>299<small class="text-muted">(49%)</small></td>
                                        <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                                    </tr><!--end tr-->
                                    </tbody>
                                </table> <!--end table-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Sessions Device</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            All<i class="las la-angle-down ms-1"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Purchases</a>
                                            <a class="dropdown-item" href="#">Emails</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="text-center">
                                <div id="ana_device" class="apex-charts"></div>
                                <h6 class="bg-light-alt py-3 px-2 mb-0">
                                    <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                    01 January 2020 to 31 December 2020
                                </h6>
                            </div>
                            <div class="table-responsive mt-2">
                                <table class="table border-dashed mb-0">
                                    <thead>
                                    <tr>
                                        <th>Device</th>
                                        <th class="text-end">Sassions</th>
                                        <th class="text-end">Day</th>
                                        <th class="text-end">Week</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Dasktops</td>
                                        <td class="text-end">1843</td>
                                        <td class="text-end">-3</td>
                                        <td class="text-end">-12</td>
                                    </tr>
                                    <tr>
                                        <td>Tablets</td>
                                        <td class="text-end">2543</td>
                                        <td class="text-end">-5</td>
                                        <td class="text-end">-2</td>
                                    </tr>
                                    <tr>
                                        <td>Mobiles</td>
                                        <td class="text-end">3654</td>
                                        <td class="text-end">-5</td>
                                        <td class="text-end">-6</td>
                                    </tr>

                                    </tbody>
                                </table><!--end /table-->
                            </div><!--end /div-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h3 class="m-0 align-self-center fw-bold font-22">80</h3>
                                <div class="d-block ms-3 align-self-center">
                                    <span class="badge bg-soft-primary px-2 py-1 font-11">Right now</span>
                                    <h5 class="my-2">Traffic Sources</h5>
                                    <p class="mb-2 text-muted">It is a long established fact that a reader will
                                        be of a page when looking at its layout.
                                    </p>
                                    <a href="" class="btn btn-primary">Read More <i class="las la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->

            </div><!--end row-->
        </div><!-- container -->

        <!--Start Rightbar-->
        <?php include 'partials/right-sidebar.php';  ?>
        <!--end Rightbar-->

        <!--Start Footer-->
        <?php include 'partials/footer.php';  ?>
        <!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- Javascript  -->

<script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="assets/pages/analytics-index.init.js"></script>


<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
<!--end body-->
</html>