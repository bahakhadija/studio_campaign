<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Manage roles</title>
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
            <div class="row">
              <div class="d-flex u-width-100 u-mb-small">
                <h1>Role</h1>
                <button class="c-btn u-ml-auto" data-toggle="modal" data-target="#modal1" id="new-role">New Role</button>
              </div>
            </div>

            <div class="row" id="roles-list">
              <?php foreach($roles as $role){ ?>
                <div class="c-pipeline__card u-width-100">
                  <div class="o-media__body u-p-small d-flex">
                    <div class="o-media__body">
                      <h4><?php echo $role->role_name; ?></h4>
                      <p class="c-pipeline__card-subtitle u-mb-small u-mt-xsmall"><?php echo $role->role_description; ?></p>
                      <p class="c-pipeline__card-subtitle"><?php echo $role->role_date_added; ?></p>
                    </div>
                    
                    <div class="o-media__body u-m-auto">
                        <div class="dropdown u-text-right u-pr-small"> 
                          <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                          <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                          </span>

                          <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="#" class="btnSelect c-dropdown__item dropdown-item">Permissions</a>
                            <a href="#" class="btnSelect c-dropdown__item dropdown-item" data-toggle="modal" data-target="#modal2" roleid="<?php echo $role->role_id; ?>" action="edit">Edit</a>
                            <a href="#" class="btnSelect c-dropdown__item dropdown-item" data-toggle="modal" data-target="#modal3" roleid="<?php echo $role->role_id; ?>" action="delete">Delete</a>

                          </div>
                        </div>
                    </div>
                  </div>             
                </div>
              <?php } ?>
            </div>
          </div>   
    </div>

<!-- Modal 1 -->
  <div class="c-modal modal c-modal--large fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body u-p-zero">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>
                  <h3 class="u-mb-small u-mt-large">ADD ROLE</h3>
                  <p class="u-pb-large u-pl-xlarge u-pr-xlarge">Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>
                <form class="u-mb-zero fc-toolbar">                                             
                  <div class=" u-mb-medium col-xl-12 fc-left u-pl-large u-pr-large">         
                    <div class="c-field u-mb-medium col-xl-12 p-col" id="form_role_name">                           
                      <input class="c-input p-width p-input2" type="text" id="role_name" placeholder="Role Name">
                    </div>             
                    <div class="c-field u-mb-medium col-xl-12 p-col" id="form_role_description">
                      <textarea class="c-input p-width p-input2" placeholder="Description" id="role_description"></textarea>
                    </div>
                  </div>
                  <div class="o-line col-xl-12 u-pl-zero u-pr-zero">
                    <a href="#" class="c-btn col-xl-5 border-radius-0 u-bg-secondary" data-dismiss="modal" aria-label="Close">Cancel</a>
                    <a href="#" class="c-btn col-xl-7 border-radius-0" id="add-role">Add Role<i class="fa fa-chevron-right u-ml-small" aria-hidden="true"></i></a>
                  </div>
                </form>
              </div>
              
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

  <!-- Modal 2 -->
  <div class="c-modal modal c-modal--large fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body u-p-zero">
                <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                    <i class="feather icon-x"></i>
                </span>
                <h3 class="u-mb-small u-mt-large">UPDATE ROLE</h3>
                <p class="u-pb-large u-pl-xlarge u-pr-xlarge">Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p> 
                <form class="u-mb-zero fc-toolbar">
                  <div class=" u-mb-medium col-xl-12 fc-left u-pl-large u-pr-large">         
                    <div class="c-field u-mb-medium col-xl-12 p-col" id="form2_role_name">                            
                      <input class="c-input p-width p-input2" type="text" id="role_name2" placeholder="Role Name">
                    </div>             
                    <div class="c-field u-mb-medium col-xl-12 p-col" id="form2_role_description">
                        <textarea class="c-input p-width p-input2" placeholder="Description" id="role_description2"></textarea>
                    </div>
                  </div>
                  <div class="o-line col-xl-12 u-pl-zero u-pr-zero">
                    <a href="#" class="c-btn col-xl-5 border-radius-0 u-bg-secondary" data-dismiss="modal" aria-label="Close">Cancel</a>
                    <a href="#" class="c-btn col-xl-7 border-radius-0" id="update-role" roleid="">Update Role<i class="fa fa-chevron-right u-ml-small" aria-hidden="true"></i></a>
                  </div>
                </form>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

   <!-- Modal 3 -->
  <div class="c-modal modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                <form>
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">DELETE ROLE</h3>
                  
                  <p class="u-mb-medium">Do you realy want to delete this role <b class="role_name"></b>?</p>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline" id="delete-role">Yes</a>
                    <a href="#" class="c-btn c-btn--info"  data-dismiss="modal" aria-label="Close">Cancel</a>
                  </div>
                </form>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

  <!-- Scripts -->
  <script src="js/neat.min.js?v=1.0"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript" src="js/role.js"></script>

</body></html>