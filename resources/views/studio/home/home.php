<html lang="en"><head>
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Home</title>
   <meta name="description" content="Home">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

   <!-- Favicon -->
   <link rel="apple-touch-icon" href="apple-touch-icon.png">

   <!-- Stylesheet -->
   <link rel="stylesheet" href="css/neat.min.css?v=1.0">
   <link rel="stylesheet" href="css/neat.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/billing.css">
  </head>
<body>
    <div class="o-page">
      <?php include 'C:\wamp64\www\studio_campaign\resources\views\studio\layouts\header1.php' ?>
      
      <div class="container">
        <div class="c-tabs__content tab-content" id="nav-tabContent">
          <!-- home -->
          <div class="c-tabs__pane active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">  
            <div class="row" style="margin: auto;">
              <div style="display: flex;width: 100%;">
                <h1>Overview</h1>
                <form style="float: right;padding: 0;margin: auto;margin-right: 0;">
                  <i class="fa fa-calendar"></i>
                   <select class="p-input" name="date" id="date">
                       <option value="">This Week</option>
                       <option value="">This Month</option>
                       <option value="">From - To</option>
                   </select>
                    
                </form>
              </div>
            </div>
            <div class="row" style="margin-top: 15px;">
              <div class="col-md-6 col-xl-3">
                <div class="c-card">
                  <span class="c-icon c-icon--info u-mb-small">
                    <i class="feather icon-activity"></i>
                  </span>
                  <h2>62</h2><h3 class="c-text--subtitle">Shared campaign Website</h3>            
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="c-card">
                  <span class="c-icon c-icon--danger u-mb-small">
                    <i class="feather icon-shopping-cart"></i>
                  </span>
                  <h2>100</h2><h3 class="c-text--subtitle">Total Campaigns</h3>             
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="c-card">
                  <span class="c-icon c-icon--success u-mb-small">
                    <i class="feather icon-users"></i>
                  </span>
                  <h2>947</h2><h3 class="c-text--subtitle">14GB of 1TB</h3>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="c-card">
                  <span class="c-icon c-icon--warning u-mb-small">
                    <i class="feather icon-zap"></i>
                  </span>
                  <h2>15.2 GB/ 1TB</h2>
                  <h3 class="c-text--subtitle">Storage Left</h3>
                </div>
              </div>
            </div>
            <div class="row" style="margin: auto;">
              <div style="width: 100%;">
                <h1>Activity</h1>
                <p>lorem ipsum dolor set amet</p>
                <div class="" style="margin-top: 15px;">
                  <div class="c-card" data-mh="dashboard3-cards" style="height: 432px;">
                    <div class="d-flex">
                      <h4>Today</h4>
                      <i class="fa fa-filter u-mb-auto u-ml-auto u-mt-auto"></i>
                    </div>
                    <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    
                    <div class="c-feed" id="c-feed">
                        <div class="p-over">
                          <div class="c-avatar c-avatar--xsmall dropdown-toggle">              
                            <img class="c-avatar__img" src="img/junathan.jpg" alt="photo">
                            <div class="p-div-v"><span style="margin-right: 10px;">Junathan Nuez</span><p>New order received from Canada by #49832</p></div>
                          </div>
                        </div>
                        <div class="p-over">
                          <div class="c-avatar c-avatar--xsmall dropdown-toggle">                          
                            <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                            <div class="p-div-v"> <span style="margin-right: 10px;">Manwella</span><p>New order received from Canada by #49832</p></div>
                          </div>
                        </div>
                        <div class="p-over">
                          <div class="c-avatar c-avatar--xsmall dropdown-toggle">
                  
                            <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                            <div class="p-div-v"> <span style="margin-right: 10px;">esabel</span><p>New order received from Canada by #49832</p></div>
                          </div>
                        </div>
                        <div class="p-over">
                          <div class="c-avatar c-avatar--xsmall dropdown-toggle">              
                            <img class="c-avatar__img" src="img/junathan.jpg" alt="photo">
                            <div class="p-div-v"><span style="margin-right: 10px;">Junathan Nuez</span><p>New order received from Canada by #49832</p></div>
                          </div>
                        </div>
                        <div class="p-over">
                          <div class="c-avatar c-avatar--xsmall dropdown-toggle">                          
                            <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                            <div class="p-div-v"> <span style="margin-right: 10px;">Manwella</span><p>New order received from Canada by #49832</p></div>
                          </div>
                        </div>                      
                    </div><!-- // .c-feed -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- campaigns -->
          <div class="c-tabs__pane" id="nav-campaigns" role="tabpanel" aria-labelledby="nav-campaigns-tab">
            <div id="campaign-full">  
                <div class="row u-mt-small u-mb-xsmall">
                  <div class="d-flex p-width-100">
                    <h2>Lorem ipsum</h2>
                    <div class="u-ml-auto u-mt-auto u-mb-auto">
                        <select class="p-input" name="sort" id="sort">
                          <option value="" selected="true">Sort</option>
                        </select>

                        <select class="p-input" name="filter" id="filter">
                           <option value="">Filter By</option>
                        </select>                 
                        <button class="c-btn" id="btn-search" onclick="showSearch();"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <button value="New Campaign" id="btn-new-campaign" data-toggle="modal" data-target="#modal11" class="c-btn">New Campaign</button>
                    </div>
                  </div>
                </div>

                <div class="row" style="display: none;" id="search">           
                    <div class="input-container">
                      <i class="fa fa-search icon" aria-hidden="true"></i>
                      <input class="input-field" type="text" placeholder="Search..." name="keyword">
                    </div><!-- Search form -->
                    
                </div>
                <div class="row u-mt-large">
                  <div class="c-pipeline__card c-btn--fullwidth">
                    <div class="o-media u-p-xsmall">
                      <div class="o-media__img u-mr-medium">
                        <div class="c-avatar c-avatar--small cover p-shadow">
                          <img class="cover" src="img/cover1.jpg" alt="Adam Sandler">
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                        <h4 class="c-pipeline__card-title u-h4">Transformers</h4>
                        <p class="c-pipeline__card-subtitle">Movie</p>
                        <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                      </div>
                      <div class="c-avatar--xsmall d-flex fc-toolbar o-media__body u-m-auto">                      
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 1">
                          <a href="#">
                            <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 2">
                          <a href="#">
                            <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 3">
                          <a href="#">
                            <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 4">
                          <a href="#">
                            <img class="c-avatar__img" src="img/3.png" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 5">
                          <a href="#">
                            <img class="c-avatar__img" src="img/4.jpg" alt="photo">
                          </a>
                        </div>                          
                      </div>

                      <div class="o-media__body u-m-auto u-text-center">
                        <div class="c-btn c-tooltip c-tooltip--top" aria-label="Trailer | Film Clips">
                          <i class="fa fa-align-justify" aria-hidden="true"></i>
                          <label class="u-ml-xsmall">Structure</label>
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                          <div class="dropdown u-pr-small fc-rtl"> 
                            <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                            <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                            </span>
                            <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end p-dropdown" id="dropdown2">
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                              <a href="#" data-toggle="modal" data-target="#modal33" class="btnSelect c-dropdown__item dropdown-item">Delete</a>
                            </div>
                          </div>
                      </div>
                    </div>             
                  </div>
                  <div class="c-pipeline__card c-btn--fullwidth">
                    <div class="o-media u-p-xsmall">
                      <div class="o-media__img u-mr-medium">
                        <div class="c-avatar c-avatar--small cover p-shadow">
                          <img class="cover" src="img/cover2.jpg" alt="Adam Sandler">
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                        <h4 class="c-pipeline__card-title u-h4">Transformers</h4>
                        <p class="c-pipeline__card-subtitle">Movie</p>
                        <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                      </div>
                      <div class="c-avatar--xsmall d-flex fc-toolbar o-media__body u-m-auto">                      
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 1">
                          <a href="#">
                            <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 2">
                          <a href="#">
                            <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 3">
                          <a href="#">
                            <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 4">
                          <a href="#">
                            <img class="c-avatar__img" src="img/3.png" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 5">
                          <a href="#">
                            <img class="c-avatar__img" src="img/4.jpg" alt="photo">
                          </a>
                        </div>                          
                      </div>

                      <div class="o-media__body u-m-auto u-text-center">
                        <div class="c-btn c-tooltip c-tooltip--top" aria-label="Trailer | Film Clips">
                          <i class="fa fa-align-justify" aria-hidden="true"></i>
                          <label class="u-ml-xsmall">Structure</label>
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                          <div class="dropdown u-pr-small fc-rtl"> 
                            <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                            <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                            </span>
                            <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end p-dropdown" id="dropdown2">
                              <a href="campaign_folders.html" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                              <a href="#" data-toggle="modal" data-target="#modal33" class="btnSelect c-dropdown__item dropdown-item">Delete</a>
                            </div>
                          </div>
                      </div>
                    </div>             
                  </div>
                  <div class="c-pipeline__card c-btn--fullwidth">
                    <div class="o-media u-p-xsmall">
                      <div class="o-media__img u-mr-medium">
                        <div class="c-avatar c-avatar--small cover p-shadow">
                          <img class="cover" src="img/cover3.jpg" alt="Adam Sandler">
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                        <h4 class="c-pipeline__card-title u-h4">Transformers</h4>
                        <p class="c-pipeline__card-subtitle">Movie</p>
                        <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                      </div>
                      <div class="c-avatar--xsmall d-flex fc-toolbar o-media__body u-m-auto">                      
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 1">
                          <a href="#">
                            <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 2">
                          <a href="#">
                            <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 3">
                          <a href="#">
                            <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 4">
                          <a href="#">
                            <img class="c-avatar__img" src="img/3.png" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 5">
                          <a href="#">
                            <img class="c-avatar__img" src="img/4.jpg" alt="photo">
                          </a>
                        </div>                          
                      </div>

                      <div class="o-media__body u-m-auto u-text-center">
                        <div class="c-btn c-tooltip c-tooltip--top" aria-label="Trailer | Film Clips">
                          <i class="fa fa-align-justify" aria-hidden="true"></i>
                          <label class="u-ml-xsmall">Structure</label>
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                          <div class="dropdown u-pr-small fc-rtl"> 
                            <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                            <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                            </span>
                            <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end p-dropdown" id="dropdown2">
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                              <a href="#" data-toggle="modal" data-target="#modal33" class="btnSelect c-dropdown__item dropdown-item">Delete</a>
                            </div>
                          </div>
                      </div>
                    </div>             
                  </div>
                  <div class="c-pipeline__card c-btn--fullwidth">
                    <div class="o-media u-p-xsmall">
                      <div class="o-media__img u-mr-medium">
                        <div class="c-avatar c-avatar--small cover p-shadow">
                          <img class="cover" src="img/cover4.jpg" alt="Adam Sandler">
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                        <h4 class="c-pipeline__card-title u-h4">Transformers</h4>
                        <p class="c-pipeline__card-subtitle">Movie</p>
                        <p class="c-pipeline__card-subtitle">From 2 Jan, 2019 to 5 Jan, 2019</p>
                      </div>
                      <div class="c-avatar--xsmall d-flex fc-toolbar o-media__body u-m-auto">                      
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 1">
                          <a href="#">
                            <img class="c-avatar__img" src="img/0.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 2">
                          <a href="#">
                            <img class="c-avatar__img" src="img/1.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 3">
                          <a href="#">
                            <img class="c-avatar__img" src="img/2.jpg" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 4">
                          <a href="#">
                            <img class="c-avatar__img" src="img/3.png" alt="photo">
                          </a>
                        </div>
                        <div class="c-tooltip c-tooltip--top u-ml-xsmall" aria-label="member 5">
                          <a href="#">
                            <img class="c-avatar__img" src="img/4.jpg" alt="photo">
                          </a>
                        </div>                          
                      </div>

                      <div class="o-media__body u-m-auto u-text-center">
                        <div class="c-btn c-tooltip c-tooltip--top" aria-label="Trailer | Film Clips">
                          <i class="fa fa-align-justify" aria-hidden="true"></i>
                          <label class="u-ml-xsmall">Structure</label>
                        </div>
                      </div>
                      <div class="o-media__body u-m-auto">
                          <div class="dropdown u-pr-small fc-rtl"> 
                            <span class="dropdown-toggle" id="dropdownMenuState1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                            <i class="feather icon-more-horizontal" style="color: #768093de;"></i>
                            </span>
                            <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuState1" x-placement="bottom-end p-dropdown" id="dropdown2">
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Explore</a>
                              <a href="#" class="btnSelect c-dropdown__item dropdown-item">Edit</a>
                              <a href="#" data-toggle="modal" data-target="#modal33" class="btnSelect c-dropdown__item dropdown-item">Delete</a>
                            </div>
                          </div>
                      </div>
                    </div>             
                  </div>
                </div>
            </div>
            <div id="campaign-empty" style="display: none;">
              <div class="row fc-toolbar" style="display: block;">
                <img src="img/studio.jpg" class="c-btn--fullwidth">
                <h2 class="u-m-auto u-mb-small u-mt-medium">Lorem ipsum dolor sit amet</h2>
                <p class="u-mb-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
                <button class="c-btn u-mb-medium" data-target="#modal11" data-toggle="modal">Create Campaign</button>
              </div>
            </div>
          </div>      
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <script src="js/neat.min.js?v=1.0"></script>
  <script src="js/script.js"></script>
  <!-- script de font awesome -->
  <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>
 <!-- ----------------------------------------------------------------------------- -->
  <!-- campaigns -->
  <!-- Modal 11 new campaign -->
  <div class="c-modal modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="modal11" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body u-p-zero">
                <div id="div1" style="display: block;">
                  <div class="u-p-medium">
                    <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                        <i class="feather icon-x"></i>
                    </span>

                    <h3 class="u-mb-small">Create Campaign</h3>
                    <p class="u-pb-medium u-pl-medium u-pr-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>

                    <div class="d-flex">          
                      <div class="c-field u-mb-medium col-xl-6 p-col">               
                        <input class="c-input p-width p-input2" type="text" id="campaign-name" placeholder="Campaign Name">
                      </div>
                  
                      <div class="c-field u-mb-medium col-xl-6 p-col fc-toolbar">                    
                        <input class="c-input p-width p-input2 fc-right" type="text" id="movie" placeholder="Movie">
                      </div>
                    </div>
                    
                    <div class="d-flex">          
                      <div class="c-field u-mb-medium col-xl-6 p-col">               
                        <div class="c-select p-width">
                          <select class="c-select__input p-input2">
                            <option>Value One</option>
                            <option>Value Two</option>
                            <option>Value Three</option>
                          </select>
                        </div>
                      </div>
                  
                      <div class="c-field col-xl-6 fc-toolbar p-col u-mb-medium">                    
                        <div class="date fc-right input-container p-input2 p-width">
                          <input type="date" class="c-input form-control border-none"><button class="input-group-addon border-none"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex">          
                      <div class="c-field u-mb-medium">                    
                        
                          <textarea class="c-input p-input2" placeholder="Description"></textarea>
                       
                      </div>
                    </div>
                  </div>
                  <div class="o-line">
                    <a href="#" class="c-btn col-xl-5 border-radius-0 u-bg-secondary">Cancel</a>
                    <a href="#" class="c-btn col-xl-7 border-radius-0" onclick="suivant('div1','div2','div3');">Assign Team<i class="fa fa-chevron-right u-ml-small" aria-hidden="true"></i></a>
                  </div>
                </div>
                <div id="div2" class="u-p-medium" style="display: none;">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>
                  <a href="#" onclick="precedent('div1','div2','div3');" style="color: initial;"><i class="fas fa-arrow-up"></i></a>
                  <h3 class="u-mb-small">Invite Team To Collaborate</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
                  <div class="input-container" style="border: 2px solid;border-color: #00000054;border-radius: 5px;margin: initial;box-shadow: initial;">
                    <input class="input-field" type="text" placeholder="Find Team" name="keyword" style="padding-left: 15px;">
                    <i class="fa fa-search icon" aria-hidden="true"></i>
                  </div>
                  
                  <div style="border: 2px solid;border-color: #00000054;border-radius: 8px;padding: 10px 25px;margin: 25px 0px;margin-top: 0;border-top: none;border-top-left-radius: initial;border-top-right-radius: inherit;">
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="img/0.jpg" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;">
                            <h6>Jarid Doran</h6>
                            <p>Owner</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <p style="/* margin: auto; */">Email : jared@email.com<br>Phone : +1 2223 3445 56</p>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="img/0.jpg" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;">
                            <h6>Jarid Doran</h6>
                            <p>Owner</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <p style="/* margin: auto; */">Email : jared@email.com<br>Phone : +1 2223 3445 56</p>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="img/0.jpg" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;">
                            <h6>Jarid Doran</h6>
                            <p>Owner</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <p style="/* margin: auto; */">Email : jared@email.com<br>Phone : +1 2223 3445 56</p>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info" onclick="suivant('div1','div2','div3');">Choose Template<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 12px;"></i></a>
                  </div>
                </div>
                <div id="div3" class="u-p-medium" style="display: none;">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>
                  <a href="#" onclick="precedent('div1','div2','div3');" style="color: initial;"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
                  <h3 class="u-mb-small">Choose Template</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
                  
                  
                  <div style="border: 2px solid;border-color: #00000054;border-radius: 8px;padding: 10px 15px;margin: 0;margin-top: 30px;border-bottom-left-radius: initial;border-bottom-right-radius: inherit;">
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover1.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div><div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover2.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div><div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover3.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    <div class="c-pipeline__card" style="margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover4.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    
                    
                    
                  </div>
                  <div style="margin-bottom: 25px;"><button style="width: 100%;padding: 15px;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;background-color: #ababab;border-color: #ababab;color: white;font-size: medium;">Custom Template</button></div><div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info">Create Campaign<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 12px;"></i></a>
                  </div>
                </div>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

  <!-- Modal 22 edit campaign -->
  <div class="c-modal modal fade" id="modal22" tabindex="-1" role="dialog" aria-labelledby="modal22" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                <div id="div11" style="display: block;">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">Edit Transformers</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>

                  <div class="d-flex">          
                    <div class="c-field u-mb-medium col-xl-6 p-col">               
                      <input class="c-input p-width" type="text" id="campaign-name" placeholder="Campaign Name">
                    </div>
                
                    <div class="c-field u-mb-medium col-xl-6 p-col">                    
                      <input class="c-input p-width" type="text" id="movie" placeholder="Movie">
                    </div>
                  </div>
                  
                  <div class="d-flex">          
                    <div class="c-field u-mb-medium col-xl-6 p-col">               
                      <div class="c-select p-width">
                        <select class="c-select__input">
                          <option>Value One</option>
                          <option>Value Two</option>
                          <option>Value Three</option>
                        </select>
                      </div>
                    </div>
                
                    <div class="c-field u-mb-medium col-xl-6 p-col">                    
                      <div class="input-group date">
                        <input type="text" class="c-input form-control p-width"><button class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex">          
                    <div class="c-field u-mb-medium col-xl-12 p-col">                    
                      
                        <textarea class="c-input p-width" placeholder="Description"></textarea>
                     
                    </div>
                  </div>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info" onclick="suivant('div1','div2','div3');">Assign Team<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 12px;"></i></a>
                  </div>
                </div>
                <div id="div22" style="display: none;">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>
                  <a href="#" onclick="precedent('div1','div2','div3');" style="color: initial;"><i class="fas fa-arrow-up"></i></a>
                  <h3 class="u-mb-small">Invite Team To Collaborate</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
                  <div class="input-container" style="border: 2px solid;border-color: #00000054;border-radius: 5px;margin: initial;box-shadow: initial;">
                    <input class="input-field" type="text" placeholder="Find Team" name="keyword" style="padding-left: 15px;">
                    <i class="fa fa-search icon" aria-hidden="true"></i>
                  </div>
                  
                  <div style="border: 2px solid;border-color: #00000054;border-radius: 8px;padding: 10px 25px;margin: 25px 0px;margin-top: 0;border-top: none;border-top-left-radius: initial;border-top-right-radius: inherit;">
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="img/0.jpg" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;">
                            <h6>Jarid Doran</h6>
                            <p>Owner</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <p style="/* margin: auto; */">Email : jared@email.com<br>Phone : +1 2223 3445 56</p>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="img/0.jpg" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;">
                            <h6>Jarid Doran</h6>
                            <p>Owner</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <p style="/* margin: auto; */">Email : jared@email.com<br>Phone : +1 2223 3445 56</p>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-xsmall">
                            <div class="c-avatar c-avatar--small">
                              <img class="c-avatar__img" src="img/0.jpg" alt="Jessica Alba">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;">
                            <h6>Jarid Doran</h6>
                            <p>Owner</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <p style="/* margin: auto; */">Email : jared@email.com<br>Phone : +1 2223 3445 56</p>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info" onclick="suivant('div1','div2','div3');">Choose Template<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 12px;"></i></a>
                  </div>
                </div>
                <div id="div33" style="display: none;">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>
                  <a href="#" onclick="precedent('div1','div2','div3');" style="color: initial;"><i class="fas fa-arrow-up" aria-hidden="true"></i></a>
                  <h3 class="u-mb-small">Choose Template</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.</p>
                  
                  
                  <div style="border: 2px solid;border-color: #00000054;border-radius: 8px;padding: 10px 15px;margin: 0;margin-top: 30px;border-bottom-left-radius: initial;border-bottom-right-radius: inherit;">
                    <div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover1.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div><div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover2.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div><div class="c-pipeline__card" style="border-bottom: 1px solid #ecedf2;margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover3.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    <div class="c-pipeline__card" style="margin-bottom: initial;box-shadow: initial;">
                        <div class="o-media" style="text-align: left;">
                          <div class="o-media__img u-mr-small">
                            <div class="c-avatar c-avatar--small">
                              <img class="cover" src="img/cover4.jpg" alt="cover" style="height: 60px;width: 90px;">
                            </div>
                          </div>
                          <div class="" style="padding-right: 20px;margin-right: 10px;margin: auto;">
                            <h6>Template Title</h6>
                            <p>Category : Movies</p>
                          </div>
                          <div class="" style="padding-left: 25px;margin: auto;padding-right: 20px;">
                            <button style="border-radius: 5px;padding: 9px 15px;"><i class="fa fa-eye" aria-hidden="true" style="margin-right: 7px;"></i>Preview</button>
                          </div>
                          
                          <div class="o-media__body" style="display: flex;margin: auto;">
                            <input type="checkbox" style="margin: auto;margin-left: auto;margin-right: 20px;">
                          </div>
                        </div>
                    </div>
                    
                    
                    
                  </div>
                  <div style="margin-bottom: 25px;"><button style="width: 100%;padding: 15px;border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;background-color: #ababab;border-color: #ababab;color: white;font-size: medium;">Custom Template</button></div><div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Cancel</a>
                    <a href="#" class="c-btn c-btn--info">Edit Transformers<i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 12px;"></i></a>
                  </div>
                </div>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->

     <!-- Modal 33 delete campaign -->
  <div class="c-modal modal fade" id="modal33" tabindex="-1" role="dialog" aria-labelledby="modal33" style="display: none;" aria-hidden="true">
      <div class="c-modal__dialog modal-dialog" role="document">
          <div class="c-modal__content">
              <div class="c-modal__body">
                  <span class="c-modal__close" data-dismiss="modal" aria-label="Close">
                      <i class="feather icon-x"></i>
                  </span>

                  <h3 class="u-mb-small">DELETE CAMPAIGN</h3>
                  
                  <p class="u-mb-medium">Do you realy want to delete this campaign ?</p>
                  <div class="o-line">
                    <a href="#" class="c-btn c-btn--info c-btn--outline">Yes</a>
                    <a href="#" class="c-btn c-btn--info">No</a>
                  </div>
              </div>
          </div><!-- // .c-modal__content -->
      </div><!-- // .c-modal__dialog -->
  </div><!-- // .c-modal -->
</body></html>