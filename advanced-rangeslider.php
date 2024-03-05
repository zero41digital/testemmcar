<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/ui-slider/nouislider.css" rel="stylesheet">

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
            $page_title = "UI-slider";
            $sub_title = "Advanced UI";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">UI-slider</h4>
                                <p class="text-muted mb-0">Cool, comfortable, responsive and easily customizable range slider</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Default Slider</h6>
                                            <div id="slider"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Only showing tooltips when sliding handles</h6>
                                            <div id="slider_2"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->  
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Using HTML5 input elements</h6>
                                            <div id="html5" class="mb-3"></div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <select class="form-select" id="input-select"></select>
                                                </div>
                                                <div class="col-3">
                                                    <input type="number" class="form-control" min="-20" max="40" step="1" id="input-number">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Working with dates</h6>
                                            <div id="slider-date" class="mb-2"></div>
                                            <span class="example-val d-block fw-semibold" id="event-start"></span>
			                                <span class="example-val d-block fw-semibold" id="event-end"></span>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row--> 

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Skipping steps</h6>
                                            <div id="skipstep" class="mb-2"></div>
                                            <span class="example-val d-block fw-semibold" id="skip-value-lower"></span>
			                                <span class="example-val d-block fw-semibold" id="skip-value-upper"></span>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Moving the slider by clicking pips</h6>
                                            <div id="slider-pips"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->  


                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Vertical slider</h6>
                                            <div id="range"></div>
                                            <div style="text-align: center; font-size: 12px;">
                                                <span id="range-value-4"></span> -
                                                <span id="range-diff-3" style="color: #227afb"></span> -
                                                <span id="range-value-3"></span> -
                                                <span id="range-diff-2" style="color: #227afb"></span> -
                                                <span id="range-value-2"></span> -
                                                <span id="range-diff-1" style="color: #227afb"></span> -
                                                <span id="range-value-1"></span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6 mb-3">
                                        <div class="p-3">
                                            <h6 class="mb-3 mt-0">Soft limits</h6>
                                            <div id="soft"></div>
                                        </div>
                                    </div><!--end col-->
                                    
                                </div><!--end row-->                                      
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col -->
                </div><!-- end row -->

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
    <script src="assets/plugins/ui-slider/nouislider.min.js"></script>
    <script src="assets/plugins/ui-slider/wNumb.js"></script>
    <script src="assets/pages/ui-slider.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    
</body>

</html>