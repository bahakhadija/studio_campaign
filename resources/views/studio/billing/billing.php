<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Billing</title>
   <meta name="description" content="Home">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <!-- front awesome -->
   <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>

   <!-- Favicon -->
   <link rel="apple-touch-icon" href="apple-touch-icon.png">

   <!-- Stylesheet -->
   <link rel="stylesheet" href="css/neat.min.css?v=1.0">
   <link rel="stylesheet" href="css/neat.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/billing.css">
   <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
  </head>
<body>
  <div class="o-page">
    <?php include 'C:\wamp64\www\studio_campaign\resources\views\studio\layouts\header2.php' ?>
    <div class="container">
        <!-- billing -->       
      <div class="row" id="row1">
        <div class="p-width-100">
          <h2>Billing</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>
        </div>
      </div>
      <div class="row" id="row2">
          <div class="p-row col-xl-12" id="head-row2">
            <div class="col-xl-6">
              <div class="c-field u-mb-xsmall">
                <h5 class="c-pipeline__card-title">BILLING INFO</h5>
                <span class="c-divider u-mv-medium"></span>                         
              </div>
              <div class="c-field">
                <p class="c-pipeline__card-subtitle">$10 per user/month</p>
              </div>
              <div class="c-field u-mb-xsmall">
                <div class="col-xl-4 p-div-padding">
                  <p class="c-pipeline__card-subtitle">Number of Licenses</p>
                </div>
                <div class="col-xl-6 p-div-padding">
                  <p class="c-pipeline__card-subtitle p-black">10 users</p>
                </div>
              </div>
              
              <div class="c-field u-mb-xsmall">
                <div class="col-xl-4 p-div-padding">
                  <p class="c-pipeline__card-subtitle">Company Name</p>
                </div>
                <div class="col-xl-6 p-div-padding">
                  <p class="c-pipeline__card-subtitle p-black">Company X</p>
                </div>
              </div>
              <div class="c-field u-mb-xsmall">
                <div class="col-xl-4 p-div-padding">
                  <p class="c-pipeline__card-subtitle">Next Billing date</p>
                </div>
                <div class="col-xl-6 p-div-padding">
                  <p class="c-pipeline__card-subtitle p-black">10 June 2019</p>
                </div>                      
              </div>
              <div class="c-field u-mb-xsmall">    
                <div class="col-xl-4 p-div-padding">
                  <p class="c-pipeline__card-subtitle">Billing Country</p>
                </div>
                <div class="col-xl-6 p-div-padding">
                  <p class="c-pipeline__card-subtitle p-black">Los Angeles</p>
                </div>                   
              </div>
              <div class="o-media__body">
                <button class="c-btn" data-toggle="modal" data-target="#modal1" id="btn-update1">Update<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
              </div>
            </div>
            <div class="col-xl-5">
              <div class="o-page o-page--center">
                  <div class="o-page__card">
                    <div class="c-card c-card--center p-card">
                      <div class="o-media">
                        <div class="o-media__img u-mr-small">
                          <div class="c-avatar c-avatar--small">
                            <img class="c-avatar__img" src="img/visa.jpg" alt="photo" id="card-photo">
                          </div>
                        </div>
                        <div class="o-media__body align-left">
                          <h6 class="c-pipeline__card-title">**** **** **** 213</h6>
                          <p>Expires 02/2018</p>
                        </div>
                        <div class="o-media__body p-margin-auto">
                          <a href="#" data-toggle="modal" data-target="#modal2">Update<i class="fa fa-credit-card" aria-hidden="true" id="btn-update2"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="c-field u-mb-xsmall padding-bottom">
                      <p class="c-pipeline__card-subtitle">Have questions about plans and pricing ?<br>Check out our <a href="#">Help center here</a> </p>
                    </div>
                  </div>
              </div>
            </div>        
          </div>
          <div class="p-row col-xl-12">             
            <div class="col-xl-7">
              <h6 class="c-pipeline__card-title">BILLING INFORMATIONS</h6>

              <span class="c-divider u-mv-medium col-xl-10"></span>
            
              <div class="col-xl-10" id="header-row2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>   
                <div class="d-flex">          
                  <div class="c-field u-mb-medium col-xl-6 p-col">               
                    <input class="c-input p-width p-input2" type="text" id="user-name" placeholder="Full name">
                  </div>
              
                  <div class="c-field u-mb-medium col-xl-6 p-col">                    
                    <input class="c-input p-width p-input2" type="text" id="company-name" placeholder="Company Name">
                  </div>
                </div>

                <div class="d-flex">
                  <div class="c-field u-mb-medium col-xl-7 p-col">                
                    <input class="c-input p-width p-input2" type="text" id="address" placeholder="Address">
                  </div>
                  <div class="c-field u-mb-medium col-xl-5 p-col">                
                    <input class="c-input p-width p-input2" type="text" id="city" placeholder="City">
                  </div>
                </div>
                <div class="d-flex">
                  <div class="c-field u-mb-medium col-xl-4 p-col">               
                    <input class="c-input p-width p-input2" type="text" id="state" placeholder="State">
                  </div>
                  <div class="c-field u-mb-medium col-xl-4 p-col">               
                    <input class="c-input p-width p-input2" type="text" id="zip-code" placeholder="Zip Code">
                  </div>

                  <div class="c-field u-mb-medium col-xl-4 p-col">                
                    <input class="c-input p-width p-input2" type="text" id="country" placeholder="Country">
                  </div>
                </div>
                <div class="col-xl-12 u-text-center">
                  <a class="c-btn c-btn--secondary c-btn u-mr-large">Cancel</a>
                  <a class="c-btn c-btn u-mr-large" id="btn-update3">Update Billing<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
              </div>   
            </div>
            <div class="col-xl-5">
              <div class="d-flex">
                <h6 class="c-pipeline__card-title">INVOICES HISTORY</h6>
                <a href="#" data-toggle="modal" data-target="#modal3">Cancel Subscription</a>
              </div>
              <span class="c-divider u-mv-medium"></span>
              <p class="padding-bottom margin-bottom">Find all payments activities in this section</p>
              <div class="o-line u-pb-small">
                <div class="o-media">
                  <div>
                    <h6>Monthly Plan</h6>
                    <p>May 9, 2019</p>
                  </div>
                </div>
                <h6>$ 100</h6>
                <h6><a href="invoice.html">Invoice<i class="fa fa-eye u-ml-xsmall" aria-hidden="true"></i></a></h6>
              </div>
              <div class="o-line u-pb-small">
                <div class="o-media">
                  <div>
                    <h6>Monthly Plan</h6>
                    <p>May 9, 2019</p>
                  </div>
                </div>
                <h6>$ 100</h6>
                <h6><a href="invoice.html">Invoice<i class="fa fa-eye u-ml-xsmall" aria-hidden="true"></i></a></h6>
              </div>
              <div class="o-line u-pb-small">
                <div class="o-media">
                  <div>
                    <h6>Monthly Plan</h6>
                    <p>May 9, 2019</p>
                  </div>
                </div>
                <h6>$ 100</h6>
                <h6><a href="invoice.html">Invoice<i class="fa fa-eye u-ml-xsmall" aria-hidden="true"></i></a></h6>
              </div>
              <div class="o-line u-pb-small">
                <div class="o-media">
                  <div>
                    <h6>Monthly Plan</h6>
                    <p>May 9, 2019</p>
                  </div>
                </div>
                <h6>$ 100</h6>
                <h6><a href="invoice.html">Invoice<i class="fa fa-eye u-ml-xsmall" aria-hidden="true"></i></a></h6>
              </div>   
            </div>
          </div>
      </div>                  
    </div>
  </div>
  <!-- Scripts -->
  <!-- Main JavaScript -->
  <script src="js/neat.min.js?v=1.0"></script>
  <script src="js/script.js"></script>
  <!-- script de font awesome -->
  <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>
  <!-- datepicker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js">
  </script>
  <!-- billing -->
 <!-- Modal 1 -->
  <div class="c-modal modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">BILLING INFO</h3>

                  <div class="c-field u-mb-medium col-xl-12">
                    <label>Number of Licenses :</label>
                    <input class="c-input" type="text" id="" placeholder="Number Of Licenses">
                  </div>

                  <div class="c-field u-mb-medium col-xl-12">
                    <label>Company Name :</label>
                    <input class="c-input" type="text" id="" placeholder="Company Name">
                  </div>

                  <div class="c-field u-mb-medium col-xl-12">
                    <label>Next Billing Date :</label>
                    <input class="c-input" type="text" id="" placeholder="Next Billing Date">
                  </div>

                  <div class="c-field u-mb-medium col-xl-12">
                    <label>Billing Country :</label>
                    <input class="c-input" type="text" id="" placeholder="Billing Country">
                  </div>

                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info">Update</a>
                  </div>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

   <!-- Modal 2 -->
  <div class="c-modal modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">CARD INFO</h3>
                  
                  
                  <div class="c-field u-mb-medium col-xl-12">
                    <label>Card Number :</label>
                    <input class="c-input" type="text" id="" placeholder="Card Number">
                  </div>

                  <div class="c-field u-mb-medium col-xl-12">
                    <label>Expires Date :</label>
                    <input class="c-input" type="text" id="" placeholder="Expires Date">
                  </div>

                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info">Update</a>
                  </div>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

   <!-- Modal 3 -->
  <div class="c-modal modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">CANCEL SUBSCRIPTION</h3>
                  
                  <p class="u-mb-medium">Do you realy want to cancel subscription ?</p>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Yes</a>
                    <a href="#" class="c-btn c-btn--info">No</a>
                  </div>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

 

</body></html>