<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/leaflet/leaflet.css" rel="stylesheet">

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
            $page_title = "Leaflet";
            $sub_title = "Maps";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Leaflet Quick Start Guide</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">   
                                <div id="Leaf_default" class="" style="height: 400px"></div>        
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bounds Extend</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">              
                                <div id="Bounds_Extend" class="" style="height: 400px"></div>        
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vector Bounds</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">              
                                <div id="Vector_bounds" class="" style="height: 400px"></div>        
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Moov Canvas</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">              
                                <div id="Moov_Canvas" class="" style="height: 400px"></div>        
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Array Map</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">       
                                <div id="Array_Map" class="" style="height: 400px"></div>        
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Simple Vector Map</h4>
                                <p class="text-muted mb-0">Example of Leaflet map.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">            
                                <div id="V_Simple" class="" style="height: 400px"></div>        
                            </div><!--end card-body-->
                        </div> <!--end card-->
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
    <script src="assets/plugins/leaflet/leaflet.js"></script> 
    <script src="assets/pages/leaflet-map.init.js"></script> 
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>