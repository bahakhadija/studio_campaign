<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Manage users</title>
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
   <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
  </head>
<body>
    <div class="o-page">
      <?php include 'C:\wamp64\www\studio_campaign\resources\views\studio\layouts\header2.php' ?>
      <div class="container">

        <div class="row u-m-auto u-mb-medium">
          <div class="d-flex u-width-100">
            <h1>Team</h1>
            <button class="c-btn u-ml-auto" id="new-user" data-toggle="modal" data-target="#modal1">New User</button>
          </div>
        </div>

        <div class="row u-m-auto" id="users-list">
          <?php foreach ($users as $u) { ?> 
            <div class="c-pipeline__card u-width-100">
              <div class="o-media">
                <div class="o-media__img u-m-auto u-pr-small">
                  <div class="c-avatar c-avatar--large">
                    <?php if($u->user_photo==NULL){ ?>
                      <img class="c-avatar__img" src="img/default.jpg" alt="photo">
                    <?php } else{ ?>
                      <img class="c-avatar__img" src="<?php echo('uploads/photo/'.$u->user_photo); ?>" alt="photo">
                    <?php } ?>
                  </div>
                </div>
                <div class="o-media__body u-m-auto">
                  <h4><?php echo($u->user_full_name); ?></h4>
                  <p class="c-pipeline__card-subtitle"><?php echo($u->role_name); ?></p>
                  <p class="c-pipeline__card-subtitle"><?php echo($u->user_date_added); ?></p>
                </div>
                <div class="o-media__body u-m-auto">
                  <div>Assigned Campaign :</div>
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="img/m1.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/m2.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/m3.jpg" alt="photo">
                  </div>
                </div>
                
                <div class="o-media__body u-m-auto">
                    <div class="dropdown fc-rtl u-pr-xsmall"> 
                      <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                      </span>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                        
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item user-settings" data-toggle="modal" data-target="#modal2" userid="<?php echo($u->user_id); ?>" action="edit">Edit</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item user-settings" data-toggle="modal" data-target="#modal3" userid="<?php echo($u->user_id); ?>" action="delete">Delete</a>

                      </div>
                    </div>
                </div>
              </div>             
            </div>
          <?php } ?>             
        </div>
      </div>     
    </div>
     <!-- Modal 1 add user-->
  <div class="c-modal c-modal--large modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal2" style="display: none;" aria-hidden="true">
    <div class="c-modal__dialog modal-dialog" role="document">
      <div class="c-modal__content">
        <div class="c-modal__body u-p-zero">
          <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
              <i class="feather icon-x"></i>
          </span>
          <i class="fa-users fas u-mb-small u-mt-large" aria-hidden="true" style="font-size: xx-large;"></i>
          <h3 class="u-mb-small">ADD COLLABORATORS</h3>                  
          <p class="u-mb-medium u-pl-large u-pr-large">Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>
          <form class="u-mb-zero">
            <div class="d-flex u-p-small">
              <div class="c-dropdown dropdown col-xl-3 p-col">
                 <div class="c-avatar c-avatar--huge dropdown-toggle u-m-xsmall" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                   <img class="c-avatar__img u-m-auto" style="border: 0.1px solid;" src="img/default.jpg" id="user-photo" name="user-photo" alt="photo">
                 </div>
                 <div class="c-dropdown__menu dropdown-menu has-arrow dropdown-menu-right" aria-labelledby="dropdownMenuAvatar" x-placement="bottom-end" style="position: absolute; transform: translate3d(-20px, 110px, 0px); top: 0px; left: 0px; will-change: transform;">
                   <a class="c-dropdown__item dropdown-item" id="edit_avatar">                     
                     <input id="user_photo" type="file" name="fileUpload" accept="image/*" class="hidden" style="display: none">
                     <label for="user_photo" id="file-drag" class="p-0 d-flex align-items-center">
                          <div id="start">
                               <div id="notimage" class="hidden">Edit</div>
                          </div>
                          <div id="response" class="hidden">
                               <div id="messages"></div>
                          </div>
                     </label>                                  
                   </a>
                   <a class="c-dropdown__item dropdown-item" href="#">Delete</a>
                 </div>
              </div>
              <div class="col-xl-9 u-p-zero u-pb-small">
                <div class="d-flex">                                      
                  <div class="c-field u-mb-small" id="form_user_full_name">                  
                    <input class="c-input p-input2 p-width u-text-large" type="text" id="user_full_name" name="user_full_name" placeholder="Full name">
                  </div>
                  
                  <div class="c-field u-mb-small" id="form_user_email">                  
                    <input class="c-input p-input2 p-width u-text-large" type="text" id="user_email" name="user_email" placeholder="email">
                  </div>
                </div>
                <div class="d-flex">
                  <div class="c-field u-mb-small" id="form_user_phone">                  
                    <input class="c-input p-input2 p-width u-text-large" type="text" id="user_phone" name="user_phone" placeholder="phone">
                  </div>
                  <div class="c-field u-mb-small" id="form_user_position">                
                    <input class="c-input p-input2 p-width u-text-large" type="text" id="user_position" name="user_position" placeholder="position">
                  </div>
                </div>
                <div class="d-flex">
                  <div class="c-field u-mb-small" id="form_user_location">                 
                    <input class="c-input p-input2 p-width u-text-large" type="text" id="user_location" name="user_location" placeholder="location">
                  </div>
                  <div class="c-field u-mb-small" id="form_user_role">
                    <div class="c-select p-width">
                      <select class="p-input2 c-select__input u-text-large" id="user_role" name="user_role">
                        <?php foreach ($roles as $r) { ?>
                          <option value="<?php echo $r->role_id; ?>"><?php echo $r->role_name; ?></option>
                        <?php } ?>
                        <option onclick="javascript:window.location='roles';">Add Role</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="c-field u-mt-small">
                  <label class="c-switch u-mr-medium">
                    <input class="c-switch__input" id="switch2" type="checkbox">
                    <span class="c-switch__label u-text-large">Assign to upcoming campaigns</span>
                  </label>
                 </div>
              </div>
            </div>
            <div class="o-line">
              <!--input type="reset" class="c-btn col-xl-5 border-radius-0 u-bg-secondary" value="Cancel">
              <input type="submit" class="c-btn col-xl-7 border-radius-0" id="add-user" value="Add User"-->
              <a href="#" class="c-btn col-xl-5 border-radius-0 u-bg-secondary" data-dismiss="modal" aria-label="Close">Cancel</a>
              <a href="#" class="c-btn col-xl-7 border-radius-0" id="add-user">Add User<i class="fa fa-chevron-right u-ml-small" aria-hidden="true"></i></a>
            </div>
          </form>      
        </div>
      </div><!-- // .c-modal__content -->
    </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

  <!-- Modal 2 update user-->
  <div class="c-modal c-modal--large modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
            <div class="c-modal__body u-p-zero">
              <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                  <i class="feather icon-x"></i>
              </span>
              <i class="fa-users fas u-mb-small u-mt-large" aria-hidden="true" style="font-size: xx-large;"></i>
              <h3 class="u-mb-small">UPDATE USER</h3>                  
              <p class="u-mb-medium u-pl-large u-pr-large">Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>
              <form class="u-mb-zero">
                <div class="d-flex u-p-small">
                  <div class="c-dropdown dropdown col-xl-3 p-col">
                     <div class="c-avatar c-avatar--huge dropdown-toggle u-m-xsmall" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                       <img class="c-avatar__img u-m-auto" style="border: 0.1px solid;" src="img/default.jpg" id="user-photo2" name="user-photo" alt="photo">
                     </div>
                     <div class="c-dropdown__menu dropdown-menu has-arrow dropdown-menu-right" aria-labelledby="dropdownMenuAvatar" x-placement="bottom-end" style="position: absolute; transform: translate3d(-20px, 110px, 0px); top: 0px; left: 0px; will-change: transform;">
                       <a class="c-dropdown__item dropdown-item" id="edit_avatar">                     
                         <input id="user_photo2" type="file" name="fileUpload" accept="image/*" class="hidden" style="display: none">
                         <label for="user_photo2" id="file-drag" class="p-0 d-flex align-items-center">
                              <div id="start">
                                   <div id="notimage" class="hidden">Edit</div>
                              </div>
                              <div id="response" class="hidden">
                                   <div id="messages"></div>
                              </div>
                         </label>                                  
                       </a>
                       <a class="c-dropdown__item dropdown-item" href="#">Delete</a>
                     </div>
                  </div>
                  <div class="col-xl-9 u-p-zero u-pb-small">
                    <div class="d-flex">                                      
                      <div class="c-field u-mb-small" id="form2_user_full_name">                  
                        <input class="c-input p-input2 p-width u-text-large" type="text" id="user_full_name2" name="user_full_name" placeholder="Full name">
                      </div>
                      
                      <div class="c-field u-mb-small" id="form2_user_email">                  
                        <input class="c-input p-input2 p-width u-text-large" type="text" id="user_email2" name="user_email" placeholder="email" disabled="true">
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="c-field u-mb-small" id="form2_user_phone">                  
                        <input class="c-input p-input2 p-width u-text-large" type="text" id="user_phone2" name="user_phone" placeholder="phone">
                      </div>
                      <div class="c-field u-mb-small" id="form2_user_position">                
                        <input class="c-input p-input2 p-width u-text-large" type="text" id="user_position2" name="user_position" placeholder="position">
                      </div>
                    </div>
                    <div class="d-flex">
                      <div class="c-field u-mb-small" id="form2_user_location">                 
                        <input class="c-input p-input2 p-width u-text-large" type="text" id="user_location2" name="user_location" placeholder="location">
                      </div>
                      <div class="c-field u-mb-small" id="form2_user_role">
                        <div class="c-select p-width">
                          <select class="p-input2 c-select__input u-text-large" id="user_role2" name="user_role">
                            <?php foreach ($roles as $r) { ?>
                              <option value="<?php echo $r->role_id; ?>"><?php echo $r->role_name; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="c-field u-mb-large u-mt-small">
                      <label class="c-switch u-mr-medium">
                        <input class="c-switch__input" id="switch2" type="checkbox">
                        <span class="c-switch__label u-text-large">Assign to upcoming campaigns</span>
                      </label>
                     </div>
                  </div>
                </div>
                <div class="o-line">
                  <a href="#" class="c-btn col-xl-5 border-radius-0 u-bg-secondary"  data-dismiss="modal" aria-label="Close">Cancel</a>
                  <a href="#" class="c-btn col-xl-7 border-radius-0" id="update-user" userid="">Update User<i class="fa fa-chevron-right u-ml-small" aria-hidden="true"></i></a>
                </div>
              </form>      
            </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

  <!-- Modal 3 delete user -->
  <div class="c-modal modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                <form id="form-delete">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">DELETE USER</h3>
                  
                  <p class="u-mb-medium">Do you realy want to delete this member <b class="full_name"></b>?</p>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline" id="delete-user" userid="">Yes</a>
                    <a href="#" class="c-btn c-btn--info" data-dismiss="modal" aria-label="Close">Cancel</a>
                  </div>
                </form>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

  <!-- Scripts -->
  <script src="js/neat.min.js?v=1.0"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="js/users.js"></script>
  <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>
</body></html>