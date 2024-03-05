<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
    include 'partials/title-meta.php'; ?>

        <link href="assets/plugins/jmap/jsvectormap.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Vector Maps";
            $sub_title = "Maps";
            include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">                    
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">World Map Markers</h4>
                                    <p class="text-muted mb-0">Example of vector maps.</p>  
                                </div><!--end card-header-->
                                <div class="card-body">          
                                    <div id="map_1" style="width: 100%; height: 350px"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">                    
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">World Map With Marker Lines</h4>
                                    <p class="text-muted mb-0">Example of vector maps.</p>  
                                </div><!--end card-header-->
                                <div class="card-body">          
                                    <div id="map_2" style="width: 100%; height: 350px"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row">                    
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Russia Map</h4>
                                    <p class="text-muted mb-0">Example of vector maps.</p>  
                                </div><!--end card-header-->
                                <div class="card-body">          
                                    <div id="map_3" style="width: 100%; height: 350px"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
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
        <script src="assets/plugins/jmap/jsvectormap.min.js"></script>
        <script src="assets/plugins/jmap/world.js"></script>
        <script src="assets/plugins/jmap/russia.js"></script>
        <script src="assets/pages/vectormap.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>