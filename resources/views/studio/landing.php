<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Landing</title>
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
   <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
  </head>
<body>
  <div class="o-page">
    <header class="c-navbar u-mb-medium">
      <div class="p-header">          
        <a class="c-navbar__brand" href="#">
          <img src="img/studio.jpg" alt="logo" id="logo">
        </a>
        
        <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
          <a class="c-tabs__link" href="#">Features</a>
          <a class="c-tabs__link" href="#">How It Works</a>
          <a class="c-tabs__link" href="#">Get Started</a>
        </div>
        
        <a href="login"><i class="far fa-user u-mr-xsmall"></i>LOG IN</a>

      </div>
    </header>
    <div class="container u-text-center">
      <a href="#" class="c-btn" data-target="#modal1" data-toggle="modal" id="new-studio">Get Your Free Trial<i class="fa fa-chevron-right u-ml-small"></i></a>
      <br>
    </div>
  </div>
  
  <!-- Modal 1 -->
  <div class="c-modal modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body" id="div1" style="display: block;">
                <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                    <i class="feather icon-x"></i>
                </span>

                <h3 class="u-mb-xsmall u-mt-large">Try Studio Free For 30 Days</h3>
                <p class="u-mb-large">We need some basic information to help set up your account</p>

                <form id="form1">
                  <div class="d-flex">
                    <div class="c-field col-xl-6 input-container p-col u-mb-medium">
                      <div class="d-flex p-input2 p-width u-border-rounded" id="form_studio_name">
                        <input class="border-none c-input" type="text" id="studio_name" name="studio_name" placeholder="Company Name">
                        <i class="fas fa-briefcase  u-m-auto u-ml-xsmall u-mr-xsmall"></i>
                      </div>
                    </div>
                    <div class="c-field col-xl-6 input-container p-col u-mb-medium">
                      <div class="d-flex p-input2 p-width u-border-rounded" id="form_studio_website">
                        <input class="border-none c-input" type="text" id="studio_website" name="studio_website" placeholder="WebSite">
                        <i class="fas fa-globe  u-m-auto u-ml-xsmall u-mr-xsmall"></i>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="c-field col-xl-6 input-container p-col u-mb-medium">
                      <div class="d-flex p-input2 p-width u-border-rounded" id="form_user_full_name">
                        <input class="border-none c-input" type="text" id="user_full_name" name="user_full_name" placeholder="Full Name">
                        <i class="fa-user far u-m-auto u-ml-xsmall u-mr-xsmall" aria-hidden="true"></i>
                      </div>
                    </div>

                    <div class="c-field col-xl-6 input-container p-col u-mb-medium">
                      <div class="d-flex p-input2 p-width u-border-rounded" id="form_user_position">
                        <input class="border-none c-input" type="text" id="user_position" name="user_position" placeholder="Job Title">
                        <i class="fas fa-briefcase  u-m-auto u-ml-xsmall u-mr-xsmall"></i>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">
                    <div class="c-field u-mb-medium input-container col-xl-4 p-col">
                      <div class="d-flex p-input2 p-width u-border-rounded" id="form_user_email">
                        <input class="c-input p-width p-input2 border-none" type="text" id="user_email" name="user_email" placeholder="email@example.com">
                         <i class="fas fa-at u-m-auto u-ml-xsmall u-mr-xsmall" aria-hidden="true"></i>
                      </div>
                    </div>

                    <div class="c-field u-mb-medium input-container col-xl-4 p-col">
                      <div class="d-flex p-input2 p-width u-border-rounded" id="form_user_phone">
                        <input class="c-input p-width p-input2 border-none" type="text" id="user_phone" name="user_phone" placeholder="+212">
                        <i class="fas fa-phone-volume u-m-auto u-ml-xsmall u-mr-xsmall" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="c-field u-mb-medium col-xl-4 p-col">
                      <div class="c-select p-width" id="form_user_location">
                        <select class="c-select__input p-input2" id="user_location" name="user_location">
                          <option>Select Country</option>
                          <option>Europe/London</option>
                          <option>Africa/Casablanca</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <p>By clicking the ‘GET STARTED’ button below, you agree to the Terms & Conditions and Privacy Policy.</p>

                  <div class="u-mb-small u-mt-medium">
                    <input type="submit" class="c-btn c-btn--info" value="Get Started" id="add-studio">
                  </div>
                </form>
                  <p>BUY NOW & SAVE 10%</p>
              </div>
              <div class="c-modal__body" id="div2" style="display: none;">
                <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                    <i class="feather icon-x"></i>
                </span>

                <i class="far fa-check-circle" style="font-size: -webkit-xxx-large;"></i>
                <h1>Thank You!</h1>
                <h3>you have been successfully subscribed</h3>
                <p>Lorem ipsum dolor set amet consecteteur adipicing elit.
                    Aenean euismod bibendum laoreet proin gravida dolor</p>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->
  <!-- Scripts -->
  <!-- Main JavaScript -->
  <script src="js/neat.min.js?v=1.0"></script>
  <script src="js/script.js"></script>
  <script src="js/landing.js"></script>
  <!-- script de font awesome -->
  <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>
  <!-- datepicker -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js">
  </script>
</body>
</html>