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
            $page_title = "FAQ";
            $sub_title = "Pages";
            include 'partials/page-title.php';  ?>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Most Commonly Asked Questions</h4>
                                <p class="text-muted mb-0">Anim pariatur cliche reprehenderit, 
                                    enim eiusmod high life accusamus terry richardson ad squid. 
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled faq-qa">
                                            <li class="mb-5">
                                                <h6 class="">1. What is Unikit?</h6>
                                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit, 
                                                    enim eiusmod high life accusamus terry richardson ad squid.
                                                </p>
                                            </li>
                                            <li class="mb-5">
                                                <h6 class="">3. What cryptocurrency can i use to buy Unikit?</h6>
                                                <p class="font-14 text-muted  ms-3">Anim pariatur cliche reprehenderit, 
                                                    enim eiusmod high life accusamus terry richardson ad squid.
                                                </p>
                                            </li>
                                            <li class="mb-5">
                                                <h6 class="">5. Can i trade Unikit?</h6>
                                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit, 
                                                    enim eiusmod high life accusamus terry richardson ad squid.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled faq-qa">
                                            <li class="mb-5">
                                                <h6 class="">2. How buy Unikit on coin?</h6>
                                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit, 
                                                    enim eiusmod high life accusamus terry richardson ad squid.
                                                </p>
                                            </li>
                                            <li class="mb-5">
                                                <h6 class="">4. Where can i download the wallet?</h6>
                                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit, 
                                                    enim eiusmod high life accusamus terry richardson ad squid.
                                                </p>
                                            </li>
                                            <li class="mb-5">
                                                <h6 class="">6. What is Unikit?</h6>
                                                <p class="font-14 text-muted ms-3">Anim pariatur cliche reprehenderit, 
                                                    enim eiusmod high life accusamus terry richardson ad squid.
                                                </p>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div> <!--end row-->                                           
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->                        
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Most Commonly Asked Questions</h4>
                                <p class="text-muted mb-0">Anim pariatur cliche reprehenderit, 
                                    enim eiusmod high life accusamus terry richardson ad squid. 
                                </p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="accordion" id="accordionExample-faq">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header m-0" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What is Unikit?
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample-faq">
                                            <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header m-0" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How buy Unikit on coin?
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample-faq">
                                            <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header m-0" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What cryptocurrency can i use to buy Unikit?
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample-faq">
                                            <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Have More Questions</h4>
                                <p class="text-muted mb-0">Don't Worry ! Email us your Questions or you can send us twitter.</p>
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="row">                                        
                                    <div class="col-12">
                                        <form>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <input class="form-control mb-2" type="text" id="name" placeholder="Name">                                                       
                                                </div> 
                                                <div class="col-lg-6">
                                                    <input class="form-control mb-2" type="email" id="example-email-input3" placeholder="Email">
                                                </div>                                                   
                                            </div>
                                            
                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input class="form-control mb-2" type="text" id="subject2" placeholder="Subject">                                                       
                                                </div>                                                    
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="4" placeholder="Your message"></textarea>
                                            </div>                                                
                                           
                                            <button type="submit" class="btn btn-primary btn-block px-4">Send Email</button>
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->                                    
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
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>