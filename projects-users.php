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
            $page_title = "Users";
            $sub_title = "Projects";
            include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle thumb-lg">                                        
                                        <div class="media-body ms-3 align-self-center">
                                            <h5 class="m-0">Merri Diamond <span class="badge badge-warning font-10">New</span></h5>
                                            <p class="mb-0 text-muted">@SaraHopkins.com</p>                                              
                                        </div>
                                        <div class="action-btn">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a> 
                                        </div>                                                                              
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="assets/images/users/user-5.jpg" alt="user" class="rounded-circle thumb-lg">                                        
                                        <div class="media-body ms-3 align-self-center">
                                            <h5 class="m-0">Paul Schmidt <span class="badge badge-secondary font-10">New</span></h5>
                                            <p class="mb-0 text-muted">@SaraHopkins.com</p>                                                
                                        </div>
                                        <div class="action-btn">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a> 
                                        </div>                                                                             
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="media p-3  align-items-center">                                                
                                        <img src="assets/images/users/user-8.jpg" alt="user" class="rounded-circle thumb-lg">                                        
                                        <div class="media-body ms-3 align-self-center">
                                            <h5 class="m-0">Harry McCall</h5>
                                            <p class="mb-0 text-muted">@SaraHopkins.com</p> 
                                        </div>
                                        <div class="action-btn">
                                            <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a> 
                                        </div>                                                                            
                                    </div>                                    
                                </div><!--end card-body-->                 
                            </div><!--end card--> 
                        </div><!--end col-->
                    </div><!--end row-->    
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Our Reguler Users</h4>             
                                        </div><!--end col-->                                       
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">    
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead class="thead-light">
                                            <tr>
                                                <th>Users</th>
                                                <th>Rols</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle thumb-sm me-1"> Aaron Poulin</td>
                                                <td>Agent</td>
                                                <td>AaronPoulin@example.com</td>
                                                <td>+21 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-sm me-1"> Richard Ali</td>
                                                <td>Administrator</td>
                                                <td>RichardAli@example.com</td>
                                                <td>+41 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-sm me-1"> Juan Clark</td>
                                                <td>Contributor</td>
                                                <td>JuanClark@example.com</td>
                                                <td>+65 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/users/user-6.jpg" alt="" class="rounded-circle thumb-sm me-1"> Albert Hull</td>
                                                <td>Agent</td>
                                                <td>AlbertHull@example.com</td>
                                                <td>+88 123456789</td>
                                                <td><span class="badge badge-soft-success">Active</span></td>
                                                <td>                                                       
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/users/user-7.jpg" alt="" class="rounded-circle thumb-sm me-1"> Crystal Darling</td>
                                                <td>Contributor</td>
                                                <td>CrystalDarling@example.com</td>
                                                <td>+56 123456789</td>
                                                <td><span class="badge badge-soft-danger">Deactivated</span></td>
                                                <td>                                                       
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><img src="assets/images/users/user-8.jpg" alt="" class="rounded-circle thumb-sm me-1"> Thomas Milligan</td>
                                                <td>Administrator</td>
                                                <td>homasMilligan@example.com</td>
                                                <td>+35 123456789</td>
                                                <td><span class="badge badge-soft-danger">Deactivated</span></td>
                                                <td>                                                       
                                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table><!--end /table-->
                                    </div><!--end /tableresponsive-->
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btn-outline-light btn-sm px-4 ">+ Add New</button>
                                        </div><!--end col-->      
                                        <div class="col-auto">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->       
                                         </div> <!--end col-->                               
                                    </div><!--end row-->     
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!-- end col -->
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>