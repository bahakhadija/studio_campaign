<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Profile</title>
   <meta name="description" content="Home">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <!-- Favicon -->
   <link rel="apple-touch-icon" href="apple-touch-icon.png">

   <!-- Stylesheet -->
   <link rel="stylesheet" href="css/neat.min.css?v=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
   <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
  </head>
<body>
  <div class="o-page">
    <?php include 'C:\wamp64\www\studio_campaign\resources\views\studio\layouts\header2.php' ?>
    <form>
      <?php foreach ($account as $a) { ?>
        <div class="container">
          <div class="row" style="margin: auto;">
            <div style="width: 100%;">
              <h1>Profile</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>
            </div>
          </div>

          <div class="row" style="background: white;border-radius: 5px;margin-top: 25px;margin-bottom: 25px;padding: 25px;">
              
            <!-- all personal informations -->  
            <div class="col-xl-7">
                <h6 class="c-pipeline__card-title">Personal  Informations</h6>
                <span class="c-divider u-mv-medium"></span>
                
                <div class="d-flex">
                    <!-- profile photo -->
                    <div class="col-xl-3">
                      <div class="c-dropdown dropdown">
                        <div class="c-avatar c-avatar--xlarge dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                          <?php if($a->user_photo==NULL){ ?>
                            <img class="c-avatar__img" src="img/default.jpg" id="user-photo" alt="<?php echo($a->user_full_name); ?>">
                          <?php } else{ ?>
                            <img class="c-avatar__img" src="<?php echo('uploads/photo/'.$a->user_photo); ?>" id="user-photo" alt="<?php echo($a->user_full_name); ?>">
                          <?php } ?>
                        </div>

                        <div class="c-dropdown__menu dropdown-menu has-arrow dropdown-menu-right" aria-labelledby="dropdownMenuAvatar" x-placement="top-end" style="position: absolute; transform: translate3d(-90px, -130px, 0px); top: 0px; left: 0px; will-change: transform;">

                            <a class="c-dropdown__item dropdown-item" id="edit_avatar">
                                <form id="file-upload-form" class="uploader" enctype="multipart/form-data">
                                    <input id="user_photo" type="file" name="fileUpload" accept="image/*" class="hidden" style="display: none" />

                                    <label for="user_photo" id="file-drag" class="p-0 d-flex align-items-center" class="hidden">

                                        <div id="start">

                                            <div id="notimage" class="hidden">Edit</div>
                                        </div>
                                        <div id="response" class="hidden">
                                            <div id="messages"></div>
                                        </div>
                                    </label>
                                </form>
                            </a>
                            <a class="c-dropdown__item dropdown-item" id="delete_avatar">Delete</a>

                        </div>
                      </div>
                    </div>
                  
                    <!-- personal info -->
                    <div class="col-xl-9">                                  
                      <div class="c-field u-mb-medium">                  
                        <input class="c-input" type="text" id="user_full_name" name="user_full_name" placeholder="Full name" value="<?php echo($a->user_full_name); ?>">
                      </div>
                      
                      <div class="c-field u-mb-medium">                  
                        <input class="c-input" type="text" id="user_email" name="user_email" placeholder="email" value="<?php echo($a->user_email); ?>" disabled="true">
                      </div>
                    
                      <div class="c-field u-mb-medium">                  
                        <input class="c-input" type="text" id="user_phone" name="user_phone" placeholder="phone" value="<?php echo($a->user_phone); ?>">
                      </div>
                      <div class="c-field u-mb-medium">                
                        <input class="c-input" type="text" id="user_position" name="user_position" placeholder="position" value="<?php echo($a->user_position); ?>">
                      </div>

                      <div class="c-field u-mb-medium">                 
                        <input class="c-input" type="text" id="user_location" name="user_location" placeholder="location" value="<?php echo($a->user_location); ?>">
                      </div>
                   
                      <div class="c-field">
                        <label class="c-field__label" for="user-pw">PASSWORD</label>
                        <p class="u-mb-small"><a style="float: right;" data-toggle="modal" data-target="#modal-change-password" aria-label="Close">Change Password</a></p>
                        <input class="c-input u-mb-small" type="Password" placeholder="********" required="">
                      </div>
                    </div>
                </div>  
            </div>

            <!-- notificationq -->
            <div class="col-xl-5">
              <h6 class="c-pipeline__card-title">Notification</h6>
              <span class="c-divider u-mv-medium"></span>
              <p>Define how we should keep you in the loop</p>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
              <div class="c-field u-mb-xsmall">
                <label class="c-switch">
                  <input class="c-switch__input" id="user-newsleters" type="checkbox" checked="">
                  <span class="c-switch__label">Subscribe to Our Newsletters</span>
                </label>
              </div>
            </div>

            <!-- buttons submit and reset -->
            <div class="col-xl-8 u-text-center">
              <input type="reset" class="c-btn c-btn--secondary c-btn u-mr-large" value="Cancel">
              <input type="submit" name="update-profile" id="update-profile" value="Save Changes" class="c-btn c-btn--primary c-btn u-mr-large">
            </div>          
          </div>            
        </div>
      
        <!-- modal change password -->
        <div class="c-modal c-modal--large modal fade" id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-change-password" aria-hidden="true">
          <div class="c-modal__dialog modal-dialog" role="document">
            <div class="c-modal__content">
              <div class="c-modal__body u-p-zero">
                <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                  <i class="feather icon-x"></i>
                </span>
                <form>
                  <div class="c-card c-card--center u-mb-zero">
                    <div class="c-avatar--xlarge u-mb-small">
                      <?php if($a->user_photo==NULL){ ?>
                        <img class="c-avatar__img" src="img/default.jpg" alt="<?php echo($a->user_full_name); ?>">
                      <?php } else{ ?>
                        <img class="c-avatar__img" src="<?php echo('uploads/photo/'.$a->user_photo); ?>" alt="<?php echo($a->user_full_name); ?>">
                      <?php } ?>
                      
                    </div>
                    <h4 class="u-mb-medium">Change Password</h4>
                    <p class="u-mb-small">Enter your details below</p>          
                    <div class="c-field">
                      <input class="c-input u-mb-small" type="password" id="current_password" placeholder="Enter your courent password" required="">
                    </div>
                    <span class="c-divider u-mv-medium"></span>
                    <div class="c-field">
                      <input class="c-input u-mb-small" type="password" id="password1" placeholder="Enter your new password" required="">
                      <input class="c-input u-mb-small" type="password" id="password2" placeholder="confirm your new password" required="">
                    </div>  
                    <input type="submit" id="update-password" class="c-btn c-btn--info" value="Change Password">
                    <a href="#" class="c-btn c-btn--danger " data-dismiss="modal" aria-label="Close">Cancel</a>
                  </div>
                </form>  
              </div><!-- // .c-modal__content -->
            </div><!-- // .c-modal__dialog -->
          </div><!-- // .c-modal -->
        </div><!-- end modal change password -->
      <?php } ?>
    </form>
  </div>
  <!-- Scripts -->
  <script src="js/neat.min.js?v=1.0"></script>
  <script src="js/script.js"></script>
  <script src="js/profile.js"></script>
</body></html>