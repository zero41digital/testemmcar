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

                <?php
            $page_title = "Dashboard";
            $sub_title = "Crypto";
            include 'partials/page-title.php';  ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="align-self-center">
                                    <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalSend" tabindex="-1" aria-labelledby="exampleModalSendLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalDefaultSend">Send Coin</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Crypto Currency</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- Currency --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Currency From</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- My wallet --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class=" mb-2">
                                                        <label for="toaddress">To</label> 
                                                        <div class="input-group">                                                            
                                                            <span class="input-group-text" id="QUcode"><i class="fas fa-qrcode"></i></span>
                                                            <input type="text" class="form-control" placeholder="Can you scan" aria-label="Scancode">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="toaddress">USD</label> 
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="US-dollor"><i class="fas fa-dollar-sign"></i></span>
                                                                    <input type="text" class="form-control" placeholder="USD" aria-label="US-dollor">
                                                                </div>
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-md-6">
                                                            <div class="mb-2">
                                                                <label for="BTC">BTC</label> 
                                                                <div class="input-group">
                                                                    <span class="input-group-text" id="BTC-coin"><i class="fab fa-btc"></i></span>
                                                                    <input type="text" class="form-control" placeholder="BTC" aria-label="BTC-coin">
                                                                </div>
                                                            </div>                                                            
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                    <div class="mb-2">
                                                        <label for="Description">Description</label>              
                                                        <textarea class="form-control" rows="3" aria-label="With textarea"></textarea>
                                                    </div>
                                                    <div class="mt-2 mb-1">
                                                        <label for="NetworkFree">Network Free</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Regular" value="option1">
                                                        <label class="form-check-label" for="Regular">Regular</label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Priority" value="option2">
                                                        <label class="form-check-label" for="Priority">Priority</label>
                                                    </div>
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-de-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                                    <button class="btn btn-de-primary btn-sm" type="button">Continue</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->                                    

                                    <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                                    <div class="modal fade" id="exampleModalRequest" tabindex="-1" aria-labelledby="exampleModalRequestLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title m-0" id="exampleModalRequestLabel">Request Coin</h6>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Crypto Currency</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- Currency --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="cryptocurrency">Receive To</label>              
                                                        <select class="form-select" aria-label="Default select example">
                                                           <option selected>-- My wallet --</option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="ETH">ETH</option>
                                                        </select>
                                                    </div>
                                                    <div class=" mb-2">
                                                        <label for="toaddress">Address</label> 
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"  id="W-Address" value="c12b001a15f9bd46ef1c6551386c">
                                                            <button class="btn btn-outline-light" type="button" id="Copy_link"><i class="fas fa-copy"></i></button>
                                                        </div>
                                                    </div>                                                    
                                                </div><!--end modal-body-->
                                                <div class="modal-footer">
                                                    <button class="btn btn-de-success btn-sm" type="button">Done</button>
                                                </div><!--end modal-footer-->
                                            </div><!--end modal-content-->
                                        </div><!--end modal-dialog-->
                                    </div><!--end modal-->
                                </div><!--end /div-->
                                <div class="media">
                                    <img src="assets/images/logos/btc.png" class="me-2 thumb-sm align-self-center rounded-circle" alt="...">
                                    <div class="media-body align-self-center">     
                                        <p class="mb-1 text-muted">Total Balance</p>                                                       
                                        <h5 class="mt-0 text-dark mb-1">122.00125503 BTC</h5>                                                                                                      
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </div><!--end /div-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"> 
                                    <img src="assets/images/logos/btc.png" class="thumb-lg align-self-center img-thumbnail rounded-circle mb-2" alt="...">
                                    <h3 class="text-dark my-0 font-20 fw-bold">Bitcoin</h3>
                                    <p class="text-muted mb-0 fw-semibold">Bitcoin is up 88% in 2021 despite turbulent markets</p>
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="text-dark my-0 font-22 fw-bold">$50,289.45</h3>
                                            <p class="text-muted mb-0 fw-semibold">Bitcoin 
                                                <span class="text-muted font-12">(BTC)</span>
                                                <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <div class="align-self-center">
                                            <button type="button" class="btn btn-sm btn-success"><i class="ti ti-shopping-cart me-2"></i>Buy</button>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"> 
                                    <img src="assets/images/logos/eth.png" class="thumb-lg align-self-center img-thumbnail rounded-circle mb-2" alt="...">
                                    <h3 class="text-dark my-0 font-20 fw-bold">Ethereum</h3>
                                    <p class="text-muted mb-0 fw-semibold">Ethereum is up 56% in 2021 despite turbulent markets</p>
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="text-dark my-0 font-22 fw-bold">$4,138.45</h3>
                                            <p class="text-muted mb-0 fw-semibold">Ethereum 
                                                <span class="text-muted font-12">(ETH)</span>
                                                <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <div class="align-self-center">
                                            <button type="button" class="btn btn-sm btn-success"><i class="ti ti-shopping-cart me-2"></i>Buy</button>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"> 
                                    <img src="assets/images/logos/lite.png" class="thumb-lg align-self-center img-thumbnail rounded-circle mb-2" alt="...">
                                    <h3 class="text-dark my-0 font-20 fw-bold">Litecoin</h3>
                                    <p class="text-muted mb-0 fw-semibold">Litecoin is up 25% in 2021 despite turbulent markets</p>
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="text-dark my-0 font-22 fw-bold">$197.45</h3>
                                            <p class="text-muted mb-0 fw-semibold">Litecoin 
                                                <span class="text-muted font-12">(LTC)</span>
                                                <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <div class="align-self-center">
                                            <button type="button" class="btn btn-sm btn-success"><i class="ti ti-shopping-cart me-2"></i>Buy</button>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body"> 
                                    <img src="assets/images/logos/dash.png" class="thumb-lg align-self-center img-thumbnail rounded-circle mb-2" alt="...">
                                    <h3 class="text-dark my-0 font-20 fw-bold">Dash</h3>
                                    <p class="text-muted mb-0 fw-semibold">Dash is up 18% in 2021 despite turbulent markets</p>
                                    <hr class="hr-dashed">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h3 class="text-dark my-0 font-22 fw-bold">$186.45</h3>
                                            <p class="text-muted mb-0 fw-semibold">Dash 
                                                <span class="text-muted font-12">(DASH)</span>
                                                <span class="text-success">1.5% <i class="mdi mdi-arrow-up"></i></span>
                                            </p>
                                        </div>
                                        <div class="align-self-center">
                                            <button type="button" class="btn btn-sm btn-success"><i class="ti ti-shopping-cart me-2"></i>Buy</button>
                                        </div>
                                    </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->                                          
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                            <p class="mb-0 px-3 py-1 bg-soft-dark rounded d-inline-block"><b>Last: </b>0.25436584</p>                                           
                                            <p class="mb-0 px-3 py-1 bg-soft-success rounded d-inline-block"><b>24High: </b>0.25436584</p>                                        
                                            <p class="mb-0 px-3 py-1 bg-soft-danger rounded d-inline-block"><b>24Low: </b>0.25436584</p>
                                        </div>  <!--end col--> 
                                        <div class="col-md-6 align-items-end">
                                            <div class="crypto-report-history d-flex justify-content-end">
                                                <ul class="nav nav-tabs mb-3">
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Hour" href="#">Hour</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#Day" href="#">Day</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Week" href="#">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Month" href="#">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Order_Book" href="#">Order Book</a>
                                                    </li>                                        
                                                </ul>
                                            </div>
                                        </div><!--end col--> 
                                    </div><!-- end row -->                                                                             
                                    <div id="crypto_dash_main" class="apex-charts"></div>
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div><!--end col--> 
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Currency Calculator</h4>                  
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 align-self-center">
                                            <img src="assets/images/small/btc.png" alt="" class="img-fluid d-block mx-auto">
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="card-body">
                                                <button type="button" class="btn btn-soft-secondary btn-icon-circle float-end">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                                <span class="badge font-12 fw-bold bg-soft-secondary p-2 ">Balance</span>
                                                <h4 class="mb-0 font-22 fw-bold">122.5692.00 <small class="font-14">BTC</small></h4>                                            
                                                <p class="mb-1 text-muted fw-semibold">
                                                    <span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from yesterday
                                                </p>                                                                                                                    
                                            </div><!--end card-body-->
                                        </div><!--end col-->
                                    </div><!--end row-->
                                                                                
                                    <div class="calculator-block mt-4">                        
                                        <div class="calculator-body">                                                      
                                            <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
                                        </div>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                                        The global crypto market cap is $2.48T, a 2.02% increase over the last day.
                                        <a href="https://coinmarketcap.com/" target="_blank" class="alert-link">Read More</a>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </div>
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!--end col-->  
                    </div> <!-- end row -->

                    <div class="row">                        
                        
                         
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Transaction History</h4>                  
                                        </div><!--end col-->    
                                        <div class="col-auto">                      
                                            <a href="" class="text-primary">View All</a>                 
                                        </div><!--end col-->                                        
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">                                    
                                    <ul class="list-unsyled m-0 ps-0 transaction-history">
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Send BTC</h5>
                                                        <p class="text-muted mb-0">6 June 2019 10:25 AM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-down-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Receive BTC</h5>
                                                        <p class="text-muted mb-0">4 June 2019 7:05 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-success">0.012458632 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Send BTC</h5>
                                                        <p class="text-muted mb-0">1 June 2019 11:30 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Send BTC</h5>
                                                        <p class="text-muted mb-0">28 May 2019 08:45 AM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-down-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Receive BTC</h5>
                                                        <p class="text-muted mb-0">25 May 2019 01:25 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-success">0.012458632 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-down-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Receive BTC</h5>
                                                        <p class="text-muted mb-0">4 June 2019 7:05 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-success">0.012458632 BTC</span>
                                        </li>
                                        <li class="align-items-center d-flex justify-content-between">
                                            <div class="media">
                                                <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                                    <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                                                </div>                                                
                                                <div class="media-body align-self-center ms-3"> 
                                                    <div class="transaction-data">                                                        
                                                        <h5 class="m-0 font-14">Send BTC</h5>
                                                        <p class="text-muted mb-0">1 June 2019 11:30 PM</p>
                                                    </div>                                                                                              
                                                </div><!--end media body-->
                                            </div>
                                            <span class="text-danger">0.000245684 BTC</span>
                                        </li>
                                    </ul>                                    
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Historical Bitcoin Price and Volume</h4>                  
                                        </div><!--end col-->                                     
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body">
                                    <script type="text/javascript" src="https://widgets.cryptocompare.com/serve/v1/coin/histo_week?fsym=BTC&amp;tsym=USD&amp;app=www.cryptocompare.com"></script>
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
        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="assets/pages/crypto-index.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>