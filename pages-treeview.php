<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/tree/listree.min.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Treeview";
            $sub_title = "Pages";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listree Example</h4>
                                <p class="text-muted mb-0">An extremely lightweight JavaScript library to create a minimal, clean, 
                                    collapsible tree structure from nested HTML lists.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">

                                <ul class="listree">
                                    <li>
                                        <div class="listree-submenu-heading">Metrics</div>
                                        <ul class="listree-submenu-items">
                                        <li>
                                            <div class="listree-submenu-heading">Daily Metrics</div>
                                            <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Daily Order Metrics</div>
                                                <ul class="listree-submenu-items">
                                                <li>
                                                    <div class="listree-submenu-heading">Categorywise Daily order metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Categorywise daily order count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Categorywise daily bookings</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="listree-submenu-heading">Storewise Daily order metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Storewise daily order count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Storewise daily bookings</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Daily Invoice Metrics</div>
                                                <ul class="listree-submenu-items">
                                                <li>
                                                    <div class="listree-submenu-heading">Categorywise Daily invoice metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Categorywise daily invoice count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Categorywise daily revenue</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="listree-submenu-heading">Storewise Daily invoice metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Storewise daily invoice count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Storewise daily revenue</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="listree-submenu-heading">Monthly Metrics</div>
                                            <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Monthly Order Metrics</div>
                                                <ul class="listree-submenu-items">
                                                <li>
                                                    <div class="listree-submenu-heading">Categorywise Monthly order metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Categorywise monthly order count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Categorywise monthly bookings</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="listree-submenu-heading">Storewise Monthly order metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Storewise monthly order count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Storewise monthly bookings</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Monthly Invoice Metrics</div>
                                                <ul class="listree-submenu-items">
                                                <li>
                                                    <div class="listree-submenu-heading">Categorywise Monthly invoice metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Categorywise monthly invoice count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Categorywise monthly revenue</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="listree-submenu-heading">Storewise Monthly invoice metrics</div>
                                                    <ul class="listree-submenu-items">
                                                    <li>
                                                        <a href="">Storewise monthly invoice count</a>
                                                    </li>
                                                    <li>
                                                        <a href="">Storewise monthly revenue</a>
                                                    </li>
                                                    </ul>
                                                </li>
                                                </ul>
                                            </li>
                                            </ul>
                                        </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="listree-submenu-heading">Settings</div>
                                        <ul class="listree-submenu-items">
                                        <li>
                                            <div class="listree-submenu-heading">Personal Settings</div>
                                            <ul class="listree-submenu-items">
                                            <li><a href="">Password Settings</a></li>
                                            <li><a href="">Viewing Preferences</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="listree-submenu-heading">Org Settings</div>
                                            <ul class="listree-submenu-items">
                                            <li><a href="">Teams</a></li>
                                            <li><a href="">Billing</a></li>
                                            </ul>
                                        </li>
                                        </ul>
                                    </li>
                                </ul>

                               
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listree Custom Folder Icon</h4>
                                <p class="text-muted mb-0">An extremely lightweight JavaScript library to create a minimal, clean, 
                                    collapsible tree structure from nested HTML lists.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">

                                <ul class="listree folder-icon">
                                    <li>
                                        <div class="listree-submenu-heading">Metrics</div>
                                        <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Daily Metrics</div>
                                                <ul class="listree-submenu-items">
                                                    <li>
                                                        <div class="listree-submenu-heading">Daily Order Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Daily order metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                <li>
                                                                    <a href="">Categorywise daily order count</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Categorywise daily bookings</a>
                                                                </li>
                                                                </ul>
                                                            </li>
                                                        <li>
                                                            <div class="listree-submenu-heading">Storewise Daily order metrics</div>
                                                            <ul class="listree-submenu-items">
                                                            <li>
                                                                <a href="">Storewise daily order count</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Storewise daily bookings</a>
                                                            </li>
                                                            </ul>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="listree-submenu-heading">Daily Invoice Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                        <li>
                                                            <div class="listree-submenu-heading">Categorywise Daily invoice metrics</div>
                                                            <ul class="listree-submenu-items">
                                                            <li>
                                                                <a href="">Categorywise daily invoice count</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Categorywise daily revenue</a>
                                                            </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="listree-submenu-heading">Storewise Daily invoice metrics</div>
                                                            <ul class="listree-submenu-items">
                                                            <li>
                                                                <a href="">Storewise daily invoice count</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Storewise daily revenue</a>
                                                            </li>
                                                            </ul>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Monthly Metrics</div>
                                                <ul class="listree-submenu-items">
                                                    <li>
                                                        <div class="listree-submenu-heading">Monthly Order Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                        <li>
                                                            <div class="listree-submenu-heading">Categorywise Monthly order metrics</div>
                                                            <ul class="listree-submenu-items">
                                                            <li>
                                                                <a href="">Categorywise monthly order count</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Categorywise monthly bookings</a>
                                                            </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <div class="listree-submenu-heading">Storewise Monthly order metrics</div>
                                                            <ul class="listree-submenu-items">
                                                            <li>
                                                                <a href="">Storewise monthly order count</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Storewise monthly bookings</a>
                                                            </li>
                                                            </ul>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="listree-submenu-heading">Monthly Invoice Metrics</div>
                                                        <ul class="listree-submenu-items">
                                                            <li>
                                                                <div class="listree-submenu-heading">Categorywise Monthly invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                <li>
                                                                    <a href="">Categorywise monthly invoice count</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Categorywise monthly revenue</a>
                                                                </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="listree-submenu-heading">Storewise Monthly invoice metrics</div>
                                                                <ul class="listree-submenu-items">
                                                                <li>
                                                                    <a href="">Storewise monthly invoice count</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Storewise monthly revenue</a>
                                                                </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="listree-submenu-heading">Settings</div>
                                        <ul class="listree-submenu-items">
                                            <li>
                                                <div class="listree-submenu-heading">Personal Settings</div>
                                                <ul class="listree-submenu-items">
                                                <li><a href="">Password Settings</a></li>
                                                <li><a href="">Viewing Preferences</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="listree-submenu-heading">Org Settings</div>
                                                <ul class="listree-submenu-items">
                                                <li><a href="">Teams</a></li>
                                                <li><a href="">Billing</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
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
    <script src="assets/plugins/tree/listree.umd.min.js"></script>
    <script src="assets/pages/tree.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    
</body>

</html>