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
                    $page_title = "Juastgage";
                    $sub_title = "Charts";
                    include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Defaults</h4>                      
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">            
                                    <p class="text-muted mb-3"></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="gg1" class="gauge"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="gg2" class="gauge" data-value="25"></div>
                                        </div>
                                    </div>                                                                                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Counter</h4>                      
                                        </div><!--end col-->  
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-light btn-sm" id="Counter_2_refresh">Random Refresh</button>   
                                        </div> <!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">            
                                    <div id="Counter_2" class="gauge mt-2"></div>                                                                         
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Animation Events</h4>                      
                                        </div><!--end col-->  
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-light btn-sm" id="Animation_Events_refresh">Random Refresh</button>   
                                        </div> <!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body"> 
                                    <div id="Animation_Events" class="gauge mt-3"></div>   
                                    <p class="text-muted">After every animation end, function will log it below.</p>
                                    <p id="log"></p>                                                                                          
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Custom Counter</h4>                      
                                        </div><!--end col-->  
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-light btn-sm" id="Counter_refresh">Random Refresh</button>   
                                        </div> <!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">   
                                    <div id="Counter" class="gauge mt-3"></div>                                                                                                                                             
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                            
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Animation Events</h4>                      
                                        </div><!--end col-->  
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-light btn-sm" id="Custom_wether_refresh">Random Refresh</button>   
                                        </div> <!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                     
                                    <div id="Custom_wether" class="gauge mt-3"></div>                                                                                        
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Font Option</h4>                      
                                        </div><!--end col-->  
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-outline-light btn-sm" id="font_option_refresh">Random Refresh</button>   
                                        </div> <!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">   
                                    <div id="font_option" class="gauge mt-3"></div>                                                                                                                                            
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                            
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Justgage Half Size</h4>                      
                                        </div><!--end col-->                                     
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">           
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="size-3">
                                                <div id="jg1" class="gauge"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-2">
                                                <div id="jg2" class="gauge"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-1">
                                                <div id="jg3" class="gauge"></div>
                                            </div>
                                        </div>
                                    </div>                                                                                     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Justgage Full Size</h4>                      
                                        </div><!--end col-->                                     
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">           
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="size-1">
                                                <div id="jg4" class="gauge"></div>
                                            </div>                                               
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-2">
                                                <div id="jg5" class="gauge"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="size-3">
                                                <div id="jg6" class="gauge"></div>
                                            </div>
                                        </div>
                                    </div>                                                                                     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
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
        <script src="assets/plugins/justgage/raphael.min.js"></script>
        <script src="assets/plugins/justgage/justgage.js"></script>        
        <script src="assets/pages/justgage.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>