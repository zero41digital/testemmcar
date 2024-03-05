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
            $page_title = "Editor";
            $sub_title = "Forms";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TinyMCE Editor</h4>
                                <p class="text-muted mb-0">Bootstrap-wysihtml5 is a javascript
                                    plugin that makes it easy to create simple, beautiful wysiwyg editors
                                    with the help of wysihtml5 and Twitter Bootstrap.
                                </p>  
                            </div><!--end card-header-->
                            <div class="card-body">                                                  
                                <form method="post">
                                    <textarea id="basic-conf">Hello, World!</textarea>
                                </form>        
                            </div><!--end card-body-->
                        </div><!--end card-->
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
    <script src="assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="assets/pages/form-editor.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>