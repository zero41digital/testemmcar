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
            $page_title = "Dashboard";
            $sub_title = "Projects";
            include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 fw-semibold">Projects</p>
                                            <h4 class="font-22 fw-bold">77</h4>
                                            <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>26 Project Complete</p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                <i data-feather="layers" class="align-self-center text-muted icon-sm"></i>  
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">                                                
                                        <div class="col">
                                            <p class="text-dark mb-1 fw-semibold">Tasks</p>
                                            <h4 class="font-22 fw-bold">41</h4>
                                            <p class="mb-0 text-truncate text-muted"><span class="badge badge-soft-success">Active</span> Week Avg.Sessions</p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                <i data-feather="check-square" class="align-self-center text-muted icon-sm"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                            <div class="card report-card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">                                                
                                        <div class="col">
                                            <p class="text-dark mb-1 fw-semibold">Budget</p>
                                            <h4 class="font-22 fw-bold">$24100</h4>   
                                            <p class="mb-0 text-truncate text-muted"><span class="text-dark">$14k</span> Total used budgets</p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                <i data-feather="dollar-sign" class="align-self-center text-muted icon-sm"></i>  
                                            </div>
                                        </div> 
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div> <!--end col--> 
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Overview</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal text-muted"></i> 
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Purchases</a>
                                                    <a class="dropdown-item" href="#">Emails</a>
                                                </div>
                                            </div>       
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <div class="chart-container" >
                                            <canvas id="bar" height="290"></canvas> 
                                        </div>
                                    </div>                                     
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Tasks Performance</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal text-muted"></i> 
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Purchases</a>
                                                    <a class="dropdown-item" href="#">Emails</a>
                                                </div>
                                            </div>       
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <div id="task_status" class="apex-charts"></div>
                                        <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                            <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                            01 January 2021 to 31 June 2021
                                        </h6>
                                    </div>                                     
                                </div><!--end card-body--> 
                            </div><!--end card-->                             
                        </div> <!--end col-->                  
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-task-content">
                                <div class="project-task-content-col">
                                    <div class="project-task-content-inner">                                        
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Backlog</h5>
                                                <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                            </div><!--End Col-->
                                            <div class="col-auto">
                                                <div class="project-task-add-btn mt-2 me-2">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                                        <i class="ti ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div><!--End Col-->
                                        </div><!--End Row-->
                                        <div class="progress mt-2 me-1 border-radius-tl-bl bg-pink" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="project-task-box" data-simplebar="">
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card--> 
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card-->                     
                                        </div><!--End project-task-box-->                                                
                                    </div><!--End project-task-content-inner-->
                                </div><!--End project-task-content-Col-->
                                <div class="project-task-content-col">
                                    <div class="project-task-content-inner">                                        
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Todo</h5>
                                                <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                            </div><!--End Col-->
                                            <div class="col-auto">
                                                <div class="project-task-add-btn mt-2 me-2">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                                        <i class="ti ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div><!--End Col-->
                                        </div><!--End Row-->
                                        <div class="progress me-1 mt-2 bg-warning" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="project-task-box" data-simplebar="">
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card--> 
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card--> 
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card-->                           
                                        </div><!--End project-task-box-->                                                
                                    </div><!--End project-task-content-inner-->
                                </div><!--End project-task-content-Col-->
                                <div class="project-task-content-col">
                                    <div class="project-task-content-inner">
                                        
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-uppercase font-15 font-weight-semibold mb-1">In Progress</h5>
                                                <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                            </div><!--End Col-->
                                            <div class="col-auto">
                                                <div class="project-task-add-btn mt-2 me-2">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                                        <i class="ti ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div><!--End Col-->
                                        </div><!--End Row-->
                                        <div class="progress me-1 mt-2 bg-success" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="project-task-box" data-simplebar="">
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card-->                           
                                        </div><!--End project-task-box-->                                                
                                    </div><!--End project-task-content-inner-->
                                </div><!--End project-task-content-Col-->
                                <div class="project-task-content-col">
                                    <div class="project-task-content-inner">
                                        
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Testing</h5>
                                                <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                            </div><!--End Col-->
                                            <div class="col-auto">
                                                <div class="project-task-add-btn mt-2 me-2">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                                        <i class="ti ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div><!--End Col-->
                                        </div><!--End Row-->
                                        <div class="progress me-1 mt-2 bg-primary" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="project-task-box" data-simplebar="">
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card--> 
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card-->                           
                                        </div><!--End project-task-box-->                                                
                                    </div><!--End project-task-content-inner-->
                                </div><!--End project-task-content-Col-->
                                <div class="project-task-content-col">
                                    <div class="project-task-content-inner">
                                        
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="text-uppercase font-15 font-weight-semibold mb-1">Done</h5>
                                                <h6 class="m-0">3 Issues - <span class="text-muted">20 Points</span></h6>
                                            </div><!--End Col-->
                                            <div class="col-auto">
                                                <div class="project-task-add-btn mt-2 me-2">
                                                    <button type="button" class="btn btn-soft-primary btn-icon-square-sm">
                                                        <i class="ti ti-plus"></i>
                                                    </button>
                                                </div>
                                            </div><!--End Col-->
                                        </div><!--End Row-->
                                        <div class="progress me-1 mt-2  border-radius-tr-br bg-danger" style="height: 2px;">
                                            <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="project-task-box" data-simplebar="">
                                            <div class="project-task-card mb-3">
                                                <div class="card-body">
                                                    <div class="dropdown d-inline-block float-end">
                                                        <a class="dropdown-toggle mr-n2 mt-n2" id="drop2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                            <i class="las la-ellipsis-v font-14 text-muted"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div><!--end dropdown-->
                                                    <i class="mdi mdi-circle-outline mt-n2 font-14 text-warning"></i>
                                                    <span class="badge badge-soft-primary mb-2">Mobile App</span>
                                                    <h5 class="my-1 font-15">Mobile Account Setting</h5>                                                    
                                                    <p class="mb-2 text-muted fw-semibold font-13 text-break">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                    <hr class="hr-dashed">
                                                    <div class="row justify-content-center">
                                                        <div class="col-6 align-self-center">
                                                            <ul class="list-inline mb-0">                                                                    
                                                                <li class="list-item d-inline-block mr-2">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-format-list-bulleted text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">0/5</span>
                                                                    </a>
                                                                </li>
                                                                <li class="list-item d-inline-block">
                                                                    <a class="" href="#">
                                                                        <i class="mdi mdi-comment-outline text-muted"></i>
                                                                        <span class="text-muted font-weight-bold">3</span>
                                                                    </a>                                                                               
                                                                </li>
                                                            </ul>
                                                        </div><!--end col-->
                                                        <div class="col-6 align-self-center">
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-1.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                            <a class="float-end" href="#">
                                                                <img src="assets/images/users/user-9.jpg" alt="user" class="thumb-xs rounded-circle">
                                                            </a>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body-->
                                            </div><!--End project-task-card-->                           
                                        </div><!--End project-task-box-->                                                
                                    </div><!--End project-task-content-inner-->
                                </div><!--End project-task-content-Col-->
                            </div><!--End project-task-content-->
                        </div><!--End Col-->
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
        <script src="assets/plugins/chartjs/chart.js"></script>
        <script src="assets/plugins/lightpicker/litepicker.js"></script>
        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>       
        <script src="assets/pages/projects-index.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>