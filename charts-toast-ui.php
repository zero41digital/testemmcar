<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/toast-ui/tui-chart.min.css" rel="stylesheet" type="text/css" />

    <?php include 'partials/head-css.php'; ?>
</head>

<body id="body" class="dark-sidebar">
    <?php include 'partials/menu.php';  ?>

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            <div class="container-fluid">
                <!-- Page-Title -->
                <?php
            $page_title = "Toast";
            $sub_title = "Charts";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bar charts</h4>

                                <div id="bar-charts" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Column charts</h4>

                                <div id="column-charts" dir="ltr"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Line charts</h4>

                                <div id="line-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Area charts</h4>

                                <div id="area-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bubble charts</h4>

                                <div id="bubble-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Scatter charts</h4>

                                <div id="scatter-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Pie charts</h4>

                                <div id="pie-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Donut pie charts</h4>

                                <div id="donut-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Heatmap charts</h4>

                                <div id="heatmap-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Treemap charts</h4>

                                <div id="treemap-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Map charts</h4>

                                <div id="map-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Boxplot charts</h4>

                                <div id="boxplot-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bullet charts</h4>

                                <div id="bullet-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Radial charts</h4>

                                <div id="radial-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
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
    <script src="assets/plugins/toast-ui/tui-chart-all.min.js"></script>
    <script src="assets/plugins/toast-ui/usa.min.js"></script>
    <script src="assets/pages/toast-ui.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>