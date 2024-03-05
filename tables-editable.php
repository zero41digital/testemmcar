<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/tabulator/bootstrap/tabulator_bootstrap4.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Editable";
            $sub_title = "Tables";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Editable Data </h4>
                                <p class="text-muted mb-0">Using the editable setting on each column, you can make a user editable table.
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="mb-2">
                                        <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-add">Add New Row</button>
                                        <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-delete">Remove Row</button>
                                        <button class="btn btn-outline-primary btn-sm mb-1 mb-xl-0" id="reactivity-update">Update First Row Name</button>
                                    </div>
                                    <div id="editable"></div>
                                </div>
                            </div>
                        </div>
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
    <script src="assets/plugins/tabulator/tabulator.min.js"></script>
    <script src="assets/pages/editable.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>