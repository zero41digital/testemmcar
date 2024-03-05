<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
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
            $page_title = "Chartjs";
            $sub_title = "Charts";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">            
                                <canvas id="lineChart" width="300" height="300"></canvas>            
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Donut Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">            
                                <canvas id="doughnut" height="300"></canvas>            
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">          
                                <canvas id="bar" height="300"></canvas>            
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Polar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">    
                                <canvas id="polarArea" height="300"> </canvas>            
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->                                
                </div> <!-- end row -->        

                <div class="row">
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pie Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body">         
                                <canvas id="pie" height="300"></canvas>            
                            </div><!--end card-body-->
                        </div> <!-- end card -->  
                    </div> <!-- end col -->
                    
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Radar Chart</h4>
                            </div><!--end card-header-->
                            <div class="card-body"> 
                                <canvas id="radar" height="300"></canvas>            
                            </div><!--end card-body-->
                        </div> <!-- end card -->  
                    </div> <!-- end col -->
                </div> <!-- end row -->

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
    <script src="assets/plugins/chartjs/chart.js"></script>
    <script src="assets/pages/chartjs.init.js"></script>
     <!-- App js -->
     <script src="assets/js/app.js"></script>
</body>

</html>