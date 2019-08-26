<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Campaigns</title>
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
  </head>
<body>
    <div class="o-page">
      <header class="c-navbar u-mb-medium"> 
        <div class="p-header">          
          <a class="c-navbar__brand" href="#">
            <img src="img/studio.jpg" alt="logo" style="height: 50px;">
          </a>
          <a class="c-tabs__link  u-mr-small u-ml-auto active" id="nav-home-tab" data-toggle="tab" href="home.html" role="tab" aria-controls="nav-dashboard" aria-selected="true">Home</a>
          <a class="c-tabs__link" id="nav-home-tab" data-toggle="tab" href="campaigns.html" role="tab" aria-controls="nav-studio" aria-selected="false" style="margin-left: 24px;">Campaigns</a>
          <div style="margin: auto; display: none;">Your Free Trial Ends in <b>17 Days</b></div>
          <div class="c-dropdown dropdown u-mr-small u-ml-auto">
            <div class="c-notification has-indicator dropdown-toggle" id="dropdownMenuToggle2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <i class="c-notification__icon feather icon-bell"></i>
            </div>

            <div class="c-dropdown__menu c-dropdown__menu--large has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuToggle2" x-placement="top-end" style="position: absolute; transform: translate3d(-326px, -37px, 0px); top: 0px; left: 0px; will-change: transform;">

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
            <div class="c-avatar c-avatar--xsmall dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
              <span style="margin-right: 10px;">Junathan Nuez</span>
              <img class="c-avatar__img" src="img/junathan.jpg" alt="photo">
            </div>

            <div class="c-dropdown__menu has-arrow dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuAvatar">
              <a class="c-dropdown__item dropdown-item" href="profile.html">Account</a>
              <a class="c-dropdown__item dropdown-item" href="settings.html">Settings</a>
              <a class="c-dropdown__item dropdown-item" href="users.html">Team</a>
              <a class="c-dropdown__item dropdown-item" href="#">Help center</a>
              <a class="c-dropdown__item dropdown-item" href="login.html">Sign out</a>
            </div>
          </div>
        </div>
      </header>
      <div class="container">

  
        <div class="row" style="margin: 15px auto;">
          <div style="display: flex;width: 100%;">
            <h1>Lorem ipsum</h1>
            <div style="margin-left: auto;margin-top: auto;margin-bottom: auto;">
                <select class="p-input" name="sort" id="sort">
                  <option value="" selected="true">Sort</option>
                </select>

                <select class="p-input" name="filter" id="filter">
                   <option value="">Filter By</option>
                </select>                 
                <button  class="c-btn" style="position: initial; padding: 14px 17px;" onclick="showSearch();"><i class="fa fa-search"></i></button>
                <button value="New Campaign" class="c-btn" style="position: initial;">New Campaign</button>
            </div>
          </div>
        </div>

        <div class="row" style="margin: auto;display: none;" id="search">           
            <div class="input-container">
              <i class="fa fa-search icon"></i>
              <input class="input-field" type="text" placeholder="Search..." name="keyword">
            </div><!-- Search form -->
            
        </div>
        <div class="row" style="margin: auto;">
            <div class="c-pipeline__card" style="width: 100%;">
              <div class="o-media">
                <div class="o-media__img u-mr-small">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler" style="border-radius: initial;width: 74px;height: 100%;">
                  </div>
                </div>
                <div class="o-media__body">
                  <h4 class="c-pipeline__card-title" style="font-size: 1.25rem;">Transformers</h4>
                  <p class="c-pipeline__card-subtitle">Movie</p>
                  <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-btn">
                    <i class="fa fa-align-justify"></i>
                    <label style="margin-left: 10px;">Structure</label>
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                    <div class="dropdown" style="text-align: right;padding-right: 1pc;"> 
                      <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                      </span>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Delete</a>

                      </div>
                    </div>
                </div>
              </div>             
            </div>
            <div class="c-pipeline__card" style="width: 100%;">
              <div class="o-media">
                <div class="o-media__img u-mr-small">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler" style="border-radius: initial;width: 74px;height: 100%;">
                  </div>
                </div>
                <div class="o-media__body">
                  <h4 class="c-pipeline__card-title" style="font-size: 1.25rem;">Transformers</h4>
                  <p class="c-pipeline__card-subtitle">Movie</p>
                  <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-btn">
                    <i class="fa fa-align-justify"></i>
                    <label style="margin-left: 10px;">Structure</label>
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                    <div class="dropdown" style="text-align: right;padding-right: 1pc;"> 
                      <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                      </span>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Delete</a>

                      </div>
                    </div>
                </div>
              </div>             
            </div>
            <div class="c-pipeline__card" style="width: 100%;">
              <div class="o-media">
                <div class="o-media__img u-mr-small">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler" style="border-radius: initial;width: 74px;height: 100%;">
                  </div>
                </div>
                <div class="o-media__body">
                  <h4 class="c-pipeline__card-title" style="font-size: 1.25rem;">Transformers</h4>
                  <p class="c-pipeline__card-subtitle">Movie</p>
                  <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-btn">
                    <i class="fa fa-align-justify"></i>
                    <label style="margin-left: 10px;">Structure</label>
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                    <div class="dropdown" style="text-align: right;padding-right: 1pc;"> 
                      <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                      </span>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Delete</a>

                      </div>
                    </div>
                </div>
              </div>             
            </div>
            <div class="c-pipeline__card" style="width: 100%;">
              <div class="o-media">
                <div class="o-media__img u-mr-small">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="http://via.placeholder.com/72" alt="Adam Sandler" style="border-radius: initial;width: 74px;height: 100%;">
                  </div>
                </div>
                <div class="o-media__body">
                  <h4 class="c-pipeline__card-title" style="font-size: 1.25rem;">Transformers</h4>
                  <p class="c-pipeline__card-subtitle">Movie</p>
                  <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-avatar c-avatar--small">
                    <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                    <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                  <div class="c-btn">
                    <i class="fa fa-align-justify"></i>
                    <label style="margin-left: 10px;">Structure</label>
                  </div>
                </div>
                <div class="o-media__body" style="margin: auto;">
                    <div class="dropdown" style="text-align: right;padding-right: 1pc;"> 
                      <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                      <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                      </span>

                      <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end" style="position: absolute; transform: translate3d(-130px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                        <a href="#" class="btnSelect c-dropdown__item dropdown-item">Delete</a>

                      </div>
                    </div>
                </div>
              </div>             
            </div>
        </div>
      </div>
      
      
    </div>
    <!-- Scripts -->
    <!-- Main JavaScript -->
    <script src="js/neat.min.js?v=1.0"></script>
    <!-- Main JavaScript -->
    <script src="js/script.js"></script>



</body></html>