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
                    $page_title = "Reports";
                    $sub_title = "Analytics";
                    include 'partials/page-title.php';  ?>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="media">
                                        <img src="assets/images/flags/us_flag.jpg" class="me-3 thumb-md align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <div class="coin-bal">                                                        
                                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                                <p class="text-muted mb-0 fw-semibold">USA . Last Month
                                                    <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>                                                                                              
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->     
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="media">
                                        <img src="assets/images/flags/germany_flag.jpg" class="me-3 thumb-md align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <div class="coin-bal">                                                        
                                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                                <p class="text-muted mb-0 fw-semibold">Germany . Last Month
                                                    <span class="text-success">1.2% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>                                                                                              
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->       
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body"> 
                                    <div class="media">
                                        <img src="assets/images/flags/spain_flag.jpg" class="me-3 thumb-md align-self-center rounded" alt="...">
                                        <div class="media-body align-self-center"> 
                                            <div class="coin-bal">                                                        
                                                <h4 class="mt-0 mb-1 font-22 fw-bold">50,289</h4>
                                                <p class="text-muted mb-0 fw-semibold">Spain . Last Month
                                                    <span class="text-success">0.5% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>                                                                                              
                                        </div><!--end media body-->
                                    </div><!--end media-->
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
                                            <h4 class="card-title">Visitors By country</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body position-reletive">
                                   <img src="assets/images/small/svg-map.svg" alt="" class="img-fluid">
                                   <div class="country-reports country-ind">
                                        <span class="shadow-sm bg-card p-1 country-data">India / 2201</span>
                                   </div>
                                   <div class="country-reports country-usa">
                                        <span class="shadow-sm bg-card p-1 country-data">USA / 3201</span>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->   
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Live Visits Our New Site / Traffic Sources</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                    
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div id="circlechart" class="apex-charts"></div>
                                        </div><!--end col-->
                                        <div class="col-lg-6 col-md-6 align-self-center">                                          
                                            <h4 class="font-22 fw-bold">80</h4>
                                            <h6 class="text-muted">Right Now</h6>
                                            <div class="progress mb-3 rounded">                                                    
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">28%</div>
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">17%</div>
                                            </div>                
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-item mb-2">
                                                    <i class="mdi mdi-circle-medium text-primary"></i>
                                                    <span class="fw-semibold">Organic</span>                                                                                                      
                                                </li>
                                                <li class="list-item mb-2">
                                                    <i class="mdi mdi-circle-medium text-secondary"></i> 
                                                    <span class="fw-semibold">Direct</span>                                              
                                                </li>
                                                <li class="list-item">
                                                    <i class="mdi mdi-circle-medium text-warning"></i>
                                                    <span class="fw-semibold">Campaign</span>                                                 
                                                </li>                                                
                                            </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                    <div class="text-center mt-4">
                                        <h6 class="text-primary bg-soft-primary p-3 mb-0 font-14 rounded">
                                            <i class="ti ti-calendar align-self-center mr-1"></i>
                                            01 Jan 2022 to 31 Jun 2022
                                        </h6>
                                    </div>                                     
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
                                            <h4 class="card-title">Social Report</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                    
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Network</th>
                                                <th>Sessions</th>
                                                <th>Con.Rate</th>                                                    
                                                <th>Avg.Time</th>
                                                <th>Bounce Rate</th>
                                                <th>%Change</th>
                                            </tr><!--end tr-->
                                            </thead>
        
                                            <tbody>
                                            <tr>
                                                <td><i class="mdi mdi-google text-danger me-1 font-22"></i>Google</td>
                                                <td>4541</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>57.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-yahoo text-blue me-1 font-22"></i>Yahoo</td>
                                                <td>1522</td>
                                                <td>4.2%</td>
                                                <td>4:20</td>
                                                <td>62.8%</td>
                                                <td>-12.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-web text-pink me-1 font-22"></i>UC Browser</td>
                                                <td>1292</td>
                                                <td>3.2%</td>
                                                <td>5:20</td>
                                                <td>33.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-facebook text-primary me-1 font-22"></i>Facebook</td>
                                                <td>2241</td>
                                                <td>4.9%</td>
                                                <td>2:20</td>
                                                <td>48.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-twitter text-info me-1 font-22"></i>Twitter</td>
                                                <td>6806</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>57.8%</td>
                                                <td>-11.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-linkedin text-info me-1 font-22"></i>LinkedIn</td>
                                                <td>4541</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>52.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-pinterest text-pink me-1 font-22"></i>Pinterest</td>
                                                <td>3542</td>
                                                <td>8.2%</td>
                                                <td>6:20</td>
                                                <td>61.8%</td>
                                                <td>23.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-google-plus text-danger me-1 font-22"></i>Google+</td>
                                                <td>1124</td>
                                                <td>9.2%</td>
                                                <td>4:10</td>
                                                <td>20.8%</td>
                                                <td>-9.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-instagram text-success me-1 font-22"></i>Instagram</td>
                                                <td>3521</td>
                                                <td>1.2%</td>
                                                <td>6:45</td>
                                                <td>66.2%</td>
                                                <td>34.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-whatsapp text-success me-1 font-22"></i>WhatsApp</td>
                                                <td>96547</td>
                                                <td>9.2%</td>
                                                <td>1:20</td>
                                                <td>57.8%</td>
                                                <td>48.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-google-play text-warning me-1 font-22"></i>Other</td>
                                                <td>3214</td>
                                                <td>6.2%</td>
                                                <td>4:40</td>
                                                <td>36.8%</td>
                                                <td>11.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                                                                            
                                            </tbody>
                                        </table>                    
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
        <script src="assets/pages/analytics-report.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>