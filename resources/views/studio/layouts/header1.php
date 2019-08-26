<header class="c-navbar u-mb-medium">
        <div class="p-header">          
          <a class="c-navbar__brand" href="#">
            <img src="img/studio.jpg" alt="logo" id="logo">
          </a>
          
          <div class="c-tabs__list nav nav-tabs" id="myTab" role="tablist">
            <a class="c-tabs__link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="c-tabs__link" id="nav-campaigns-tab" data-toggle="tab" href="#nav-campaigns" role="tab" aria-controls="nav-campaigns" aria-selected="false">Campaigns</a>
          </div>
          <div id="free-trial">Your Free Trial Ends in <b>17 Days</b></div>
          <div class="c-dropdown dropdown u-mr-small u-ml-auto">
            <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <i class="c-notification__icon feather icon-bell"></i>
            </div>

            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right p-dropdown" aria-labelledby="dropdownMenuToggle2" x-placement="top-end">

              <span class="c-dropdown__menu-header">
                Notifications
              </span>
              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--info c-icon--xsmall"><i class="feather icon-globe"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--danger c-icon--xsmall"><i class="feather icon-x"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__item dropdown-item" href="#">
                <div class="o-media">
                  <div class="o-media__img u-mr-xsmall">
                    <span class="c-icon c-icon--success c-icon--xsmall"><i class="feather icon-anchor"></i></span>
                  </div>

                  <div class="o-media__body">
                    <p>We've updated the Stripe Services agreement and its supporting terms. Your continueduse of Stripe's services.</p>
                  </div>
                </div>
              </a>

              <a class="c-dropdown__menu-footer">
                All Notifications
              </a>
            </div>
          </div>

          <div class="c-dropdown dropdown">
            <div class="c-avatar c-avatar--small dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <?php if(Session::get('user_photo')==NULL){ ?>
                <img class="c-avatar__img u-mr-xsmall" id="photo_header" src="img/default.jpg" alt="<?php echo Session::get('user_full_name'); ?>">
              <?php } else{ ?> 
                <img class="c-avatar__img u-mr-xsmall" id="photo_header" src="<?php echo('uploads/photo/'. Session::get('user_photo')); ?>" alt="photo">
              <?php } ?>
              <span class="u-mr-xsmall" id="full_name_header"><?php echo Session::get('user_full_name'); ?></span>
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>

            <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right p-dropdown" aria-labelledby="dropdownMenuAvatar" x-placement="bottom-end" id="dropdown">
              <a class="c-dropdown__item dropdown-item" href="profile">Account</a>
              <a class="c-dropdown__item dropdown-item" href="settings">Settings</a>
              <a class="c-dropdown__item dropdown-item" href="users">Team</a>
              <a class="c-dropdown__item dropdown-item" href="#">Help center</a>
              <a class="c-dropdown__item dropdown-item" href="logout">Sign out</a>
            </div>
          </div>
        </div>
      </header>