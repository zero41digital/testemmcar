<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/tobii/tobii.min.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Gallery";
            $sub_title = "Pages";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    
                    <div class="col-md-6 col-lg-auto filters-group-wrap">
                        <div class="filters-group mb-3">
                            <p class="filter-label mb-0">Filter</p>
                            <div class="btn-group filter-options">
                                <button class="btn btn-primary" data-group="fashion">Fashion</button>
                                <button class="btn btn-primary" data-group="animal">Animal</button>
                                <button class="btn btn-primary" data-group="food">Food</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                  
                <div id="grid" class="row g-0">
                    <div class="col-md-4 col-lg-3 picture-item" data-groups='["fashion"]'>
                        <a href="assets/images/small/img-1.jpg" class="lightbox">
                            <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid" />
                        </a>  
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["food"]'>
                        <a href="assets/images/small/img-2.jpg" class="lightbox">
                            <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item" data-groups='["animal"]'>
                        <a href="assets/images/small/img-3.jpg" class="lightbox">
                            <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                        <a href="assets/images/small/img-4.jpg" class="lightbox">
                            <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item" data-groups='["food", "animal"]'>
                        <a href="assets/images/small/img-5.jpg" class="lightbox">
                            <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item picture-item--overlay" data-groups='["fashion"]'>
                        <a href="assets/images/small/img-6.jpg" class="lightbox">
                            <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["food"]'>
                        <a href="assets/images/small/img-2.jpg" class="lightbox">
                            <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>
                    <div class="col-md-4 col-lg-3 picture-item picture-item--h2" data-groups='["fashion"]'>
                        <a href="assets/images/small/img-1.jpg" class="lightbox">
                            <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid" />
                        </a> 
                    </div>                      
                </div>
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
    <script src="assets/plugins/shuffle/shuffle.min.js"></script>
    <script src="assets/plugins/tobii/tobii.min.js"></script>
    <script src="assets/pages/gallery.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    
</body>

</html>