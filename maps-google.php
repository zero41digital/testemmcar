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
                <!-- Page-Title -->
                <?php
            $page_title = "Google Maps";
            $sub_title = "Maps";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Map</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">               
                                <div id="gmaps-basic" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Map With Marker</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">         
                                <div id="gmaps-marker" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Overlays Map</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">          
                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Map Types</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">          
                                <div id="gmaps-types" class="gmaps"></div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Layer Map</h4>
                                <p class="text-muted mb-0">Example of google maps.</p>  
                            </div><!--end card-header-->
                            <div class="card-body">          
                                <div id="gmaps-layers" class="gmaps"></div>
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
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?"></script>
    <!-- Gmaps file -->
    <script src="assets/plugins/gmaps/gmaps.js"></script>
    <!-- demo codes -->
    <script src="assets/pages/gmaps.init.js"></script> 

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>