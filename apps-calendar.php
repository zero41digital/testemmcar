<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
    include 'partials/title-meta.php'; ?>

        <link href="assets/plugins/fullcalendar/main.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Calendar";
            $sub_title = "Apss";
            include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">  
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="assets/images/small/calendar.svg" alt="" class="img-fluid">
                                    <ul class="list-group">
                                        <li class="list-group-item align-items-center d-flex">
                                            <div class="media">
                                                <img src="assets/images/small/project-1.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="mt-0 mb-1 fw-bold">Meeting with UI/UX Designers</h6>
                                                    <p class="text-muted mb-0">Today 07:30 AM</p>                                                                                             
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center ">
                                            <div class="media">
                                                <img src="assets/images/users/user-5.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="mt-0 mb-1 fw-bold">Lunch with my friend</h6>
                                                    <p class="text-muted mb-0">Today 12:30 PM</p>                                                                                            
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center">
                                            <div class="media">
                                                <img src="assets/images/small/project-3.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="mt-0 mb-1 fw-bold">Call for payment Project ID : #254136</h6>
                                                    <p class="text-muted mb-0">Tomorrow 10:30 AM</p>                                                                                           
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center ">
                                            <div class="media">
                                                <img src="assets/images/users/user-4.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="mt-0 mb-1 fw-bold">Picnic with my Family</h6>
                                                    <p class="text-muted mb-0">01 June 2019 - 09:30 AM</p>                                                                                           
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                        <li class="list-group-item align-items-center">
                                            <div class="media">
                                                <img src="assets/images/small/project-4.jpg" class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                                <div class="media-body align-self-center"> 
                                                    <h6 class="mt-0 mb-1">Meeting with Developers</h6>
                                                    <p class="text-muted mb-0">04 June 2019 - 07:30 AM</p>                                                                                            
                                                </div><!--end media body-->
                                            </div>
                                        </li>
                                    </ul> 
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->                      
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!-- End row -->

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

        <script src="assets/plugins/fullcalendar/main.min.js"></script>
        <script src="assets/pages/calendar.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>