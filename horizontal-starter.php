
<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php 
    include 'partials/title-meta.php'; ?>

        <?php include 'partials/head-css.php'; ?>
    </head>

    <body data-layout="horizontal" class="">
        <!-- leftbar-tab-menu -->
        <?php include 'partials/horizontal-nav.php';  ?>
        <!-- end leftbar-tab-menu-->        

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content-tab">
                <div class="container-fluid">
                    <!-- Page-Title -->
                    <?php
            $page_title = "Starter";
            $sub_title = "Pages";
            include 'partials/page-title-horizontal.php';  ?>
                    <!-- end page title end breadcrumb -->
                    
                    
                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>

         <!--Start Rightbar-->
         <?php include 'partials/right-sidebar.php';  ?>
         <!--end Rightbar-->
         
        <!--Start Footer-->
        <?php include 'partials/footer.php';  ?>               
        <!--end footer-->

        <!-- Javascript  -->   
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>

</html>