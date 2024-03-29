<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
    include 'partials/title-meta.php'; ?>

        <link href="assets/plugins/select/selectr.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Form Advanced";
            $sub_title = "Forms";
            include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Selectr Components</h4>
                                    <p class="text-muted mb-0">Select is a jQuery based replacement for select boxes. 
                                        It supports searching, remote data sets, and infinite scrolling of results. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="mb-3">Default Select</label>
                                            <select id="default">
                                                <option value="value-1">Value 1</option>
                                                <option value="value-2">Value 2</option>
                                                <option value="value-3">Value 3</option>
                                            </select>                                    
                                        </div><!-- end col -->                                     
                                        <div class="col-md-4">
                                            <label class="mb-3">Multi Select</label>
                                            <select id="multiSelect">
                                                <option value="value-1">Value 1</option>
                                                <option value="value-2">Value 2</option>
                                                <option value="value-3">Value 3</option>
                                            </select>         
                                        </div> <!-- end col -->  
                                        <div class="col-md-4">
                                            <label class="mb-3">Taggable Select</label>
                                            <select id="taggableSelect">
                                                <option value="value-1">Value 1</option>
                                                <option value="value-2">Value 2</option>
                                                <option value="value-3">Value 3</option>
                                            </select>         
                                        </div> <!-- end col -->                                               
                                    </div><!-- end row --> 
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->                    
                    </div> <!-- end row -->
    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Huebee Color</h4>
                                    <p class="text-muted mb-0">Huebee is a JavaScript library for creating user-centric color pickers. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">                                        
                                            <input class="form-control color-input" value="#228" />  
                                        </div><!-- end col -->                                     
                                        <div class="col-md-4">
                                            <input class="form-control " value="#024" data-huebee />
                                        </div> <!-- end col -->  
                                        <div class="col-md-4">
                                            <input class="form-control " value="#f7f8f9" data-huebee='{ "setBGColor": true, "saturations": 2 }' />                                        
                                        </div> <!-- end col -->                                               
                                    </div><!-- end row --> 
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->  
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom Touch Spin</h4>
                                    <p class="text-muted mb-0">Custom Touch Spin only HTML & JavaScript.</p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="input-group qty-icons w-25">
                                        <button class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-</button>
                                        <input type="number" class="form-control" min="0" name="quantity" value="0" style="pointer-events: none;">
                                        <button class="btn btn-primary"  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+</button>
                                    </div>
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <div class="row"> 
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vanilla JS Datepicker</h4>
                                    <p class="text-muted mb-0">A vanilla JavaScript remake of bootstrap-datepicker for Bulma and other CSS frameworks. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="mb-3">Default Datepicker</label>
                                            <input class="form-control mb-3" type="text" name="foo">
                                            <label class="mb-3">Date Range Picker</label>
                                            <div class="input-group" id="DateRange">
                                                <input type="text" class="form-control" placeholder="Start" aria-label="StartDate">
                                                <span class="input-group-text">to</span>
                                                <input type="text" class="form-control" placeholder="End" aria-label="EndDate">
                                            </div> 
                                        </div><!-- end col -->                                     
                                        <div class="col-md-6">
                                            <label class="mb-3">Inline Datepicker</label>
                                            <div id="inline_calendar"></div>                                        
                                        </div> <!-- end col -->                                             
                                    </div><!-- end row --> 
                                </div><!-- end card-body --> 
                            </div> <!-- end card -->                               
                        </div> <!-- end col -->   
                        
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vanilla JS Datepicker</h4>
                                    <p class="text-muted mb-0">A vanilla JavaScript remake of bootstrap-datepicker for Bulma and other CSS frameworks. 
                                    </p>
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="mb-2">
                                        <label class="mb-2">RegExp (Russian postal code) <span class="desc ms-2 font-11 text-muted">/^[1-6]\d{0,5}$/</span></label>
                                        <input id="regexp-mask" type="text" value="" class="form-control">
                                    </div>
                                    <div class="mb-2">
                                        <label class="mb-2">Type here against mask <span class="desc ms-2 font-11 text-muted">+{7}(000)000-00-00</span></label>
                                        <input id="start-phone-mask" type="text" value="" class="form-control">
                                        <div class="desc font-11 text-muted">unmasked: <span id="start-phone-unmasked"></span><span id="start-phone-complete" class="example__complete"></span></div>
                                    </div>
                                    <div class="mb-2">
                                        <label class="mb-2">Mask in overwrite and autofix modes</label>
                                        <input id="date-overwrite-mask" type="text" value="" class="form-control">
                                    </div>
                                    <div class="mb-2">
                                        <label class="mb-2">Type to uppercase</label>
                                        <input id="uppercase-mask" type="text" value="" class="form-control">
                                    </div>
    
                                    <div>
                                        <label class="mb-2">Date and time</label>
                                        <input id="moment-mask" type="text" value="" class="form-control">
                                        <div class="desc font-11 text-muted">date: <span id="moment-value"></span></div>
                                    </div>
                                </div><!-- end card-body --> 
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
        <script src="assets/plugins/select/selectr.min.js"></script>
        <script src="assets/plugins/huebee/huebee.pkgd.min.js"></script>
        <script src="assets/plugins/datepicker/datepicker-full.min.js"></script>
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/imask/imask.js"></script>

        <script src="assets/pages/forms-advanced.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>