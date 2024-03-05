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
            $page_title = "Product List";
            $sub_title = "Ecommerce";
            include 'partials/page-title.php';  ?>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Pics</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Avai.Color</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/04.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Apple Watch</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-05 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/01.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-Mediam (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>10</td>
                                                <td>$99</td>
                                                <td><span class="badge badge-soft-pink">Sold</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/05.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Reebok Shoes</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-08 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Footwear</td>
                                                <td>24</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/06.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Cosco Vollyboll</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-04 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>8</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/04.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Royal Purse</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Pure Lether 100%</span> 
                                                    </p>
                                                </td>
                                                <td>Life Style</td>
                                                <td>52</td>
                                                <td>$89</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/03.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">New Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-05 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>6</td>
                                                <td>$20</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/02.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Important Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-05 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
    
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/02.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Nivya Footboll</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-05 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Sports</td>
                                                <td>32</td>
                                                <td>$39</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/01.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Green Morden Chair</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">Size-Mediam (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Interior</td>
                                                <td>10</td>
                                                <td>$99</td>
                                                <td><span class="badge badge-soft-pink">Sold</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/products/01.png" alt="" height="40">
                                                    <p class="d-inline-block align-middle mb-0">
                                                        <a href="" class="d-inline-block align-middle mb-0 product-name fw-semibold">Bata Shoes</a> 
                                                        <br>
                                                        <span class="text-muted font-13 fw-semibold">size-08 (Model 2021)</span> 
                                                    </p>
                                                </td>
                                                <td>Footwear</td>
                                                <td>24</td>
                                                <td>$49</td>
                                                <td><span class="badge badge-soft-purple">Stock</span></td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-danger"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-dark"></i></li>
                                                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                                                    </ul>
                                                </td>
                                                 <td>                                                       
                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table> 
                                    </div> 
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
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>