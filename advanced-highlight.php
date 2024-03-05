<?php include 'partials/session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'partials/title-meta.php'; ?>

    <link href="assets/plugins/prettify/prettify.css" rel="stylesheet" type="text/css" />

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
            $page_title = "Highlight";
            $sub_title = "Advanced UI";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">HTML Highlight</h4>
                                <p class="text-muted mb-0">It will automatically be pretty-printed.</p>
                            </div><!--end card-header-->
                            <div class="card-body">        
                                <pre class="prettyprint lang-html escape">
<div class="card-header">
    <h4 class="card-title">Clipboard Examples of Textarea</h4>
    <p class="text-muted mb-0">Textarea example of clipboard</p>
</div>                                        
                                </pre>                                    
                            </div><!---end card-body-->
                        </div><!--end card-->

                                                 
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Css Highlight</h4>
                                <p class="text-muted mb-0">It will automatically be pretty-printed.</p>
                            </div><!--end card-header-->
                            <div class="card-body">        
                                <pre class="prettyprint lang-css escape">
.example {
    font-family: Georgia, Times, serif;
    color: #555;
    text-align: center;
}
                                </pre>                               
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
    <script src="assets/plugins/prettify/run_prettify.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>


    <script>
       var entityMap = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;',
            '/': '&#x2F;',
            '`': '&#x60;',
            '=': '&#x3D;'
          };
          function escapeHtml (string) {
            return String(string).replace(/[&<>"'`=\/]/g, function (s) {
              return entityMap[s];
            });
          }
          
            for (e of document.getElementsByClassName('escape')) {
                e.innerHTML = escapeHtml(e.innerHTML).trim();
            }
    </script>

</body>

</html>