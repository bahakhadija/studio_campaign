<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Settings</title>
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/billing.css">
    <link rel="stylesheet" href="css/settings.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
</head>

<body class="">
    <div class="o-page">
        <?php include 'C:\wamp64\www\studio_campaign\resources\views\studio\layouts\header2.php' ?>
            <form>
                
                    <div class="container">
                        <div class="row" id="row1">
                            <div class="p-width-100">
                                <h2>Account</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing, elit aenean euismod bibendum laoreet proin gravida laoreet proin dolor sit amet.</p>
                            </div>
                        </div>

                        <div class="row" id="row-company-info">

                            <div class="col-xl-7">
                                <h6 class="c-pipeline__card-title">COMPANY  INFORMATIONS</h6>
                                <span class="c-divider u-mv-medium"></span>
                                <div class="row">
                                    <div class="col-xl-2">
                                        <div class="c-dropdown dropdown">
                                            <div class="c-avatar c-avatar--mediumStudio dropdown-toggle" id="dropdownMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                <?php if($studio->studio_logo==NULL){ ?>
                            <img class="c-avatar__img" src="img/studio.jpg" id="studio-logo" alt="<?php echo($studio->studio_name); ?>">
                          <?php } else{ ?>
                            <img class="c-avatar__img" src="<?php echo('uploads/photo/'.$studio->studio_logo); ?>" id="studio-logo" alt="<?php echo($studio->studio_name); ?>">
                          <?php } ?>
                                            </div>

                                            <div class="c-dropdown__menu dropdown-menu has-arrow dropdown-menu-right" aria-labelledby="dropdownMenuAvatar" x-placement="top-end" style="position: absolute; transform: translate3d(-90px, -130px, 0px); top: 0px; left: 0px; will-change: transform;">

                                                <a class="c-dropdown__item dropdown-item" id="edit_avatar">
                                                    <form id="file-upload-form" class="uploader" enctype="multipart/form-data">
                                                        <input id="studio_logo" type="file" name="fileUpload" accept="image/*" class="hidden" style="display: none" />

                                                        <label for="studio_logo" id="file-drag" class="p-0 d-flex align-items-center" class="hidden">

                                                            <div id="start">

                                                                <div id="notimage" class="hidden">Edit</div>
                                                            </div>
                                                            <div id="response" class="hidden">
                                                                <div id="messages"></div>
                                                            </div>
                                                        </label>
                                                    </form>
                                                </a>
                                                <a class="c-dropdown__item dropdown-item" href="#">Delete</a>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-10" id="div-company-info">
                                        <input class="c-input p-width" disabled="true" type="text" id="studio_id" name="studio_id" placeholder="Studio Name" value="<?php echo($studio->studio_id); ?>" style="visibility:hidden;">
                                        <div class="c-field u-mb-medium" id="form_studio_name">

                                          <input class="c-input p-width" disabled="true" type="text" id="studio_name" name="studio_name" placeholder="Studio Name" value="<?php echo($studio->studio_name); ?>">
                                        </div>
                                        <div class="c-field u-mb-medium" id="form_studio_short_name">

                                            <input class="c-input p-width" type="text" id="studio_short_name" name="studio_short_name" placeholder="Company Short Name" value="<?php echo($studio->studio_short_name); ?>">
                                        </div>

                                        <div class="row company-info">
                                            <div class="col-6" id="form_studio_phone">

                                                <input class="c-input p-width" type="text" id="studio_phone" name="studio_phone" placeholder="Phone" value="<?php echo($studio->studio_phone); ?>">
                                            </div>

                                            <div class="col-6" id="form_studio_time_out">

                                                <input class="c-input p-width" type="text" id="studio_time_out" name="studio_time_out" placeholder="Ilde Timeout" value="<?php echo($studio->studio_time_out); ?>">
                                            </div>
                                        </div>
                                        <div class="row company-info">
                                            <div class="col-6" id="form_studio_email">

                                                <input class="c-input p-width" type="text" id="studio_email" name="studio_email" placeholder="Company Email" value="<?php echo($studio->studio_email); ?>">
                                            </div>

                                            <div class="col-6" id="form_studio_website">

                                                <input class="c-input p-width" type="text" id="studio_website" name="studio_website" placeholder="Company Website" value="<?php echo($studio->studio_website); ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5" id="div-map">
                                <iframe class="iframe-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6949763.745885979!2d-11.645723818710872!3d31.731207251888105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b88619651c58d%3A0xd9d39381c42cffc3!2sMaroc!5e0!3m2!1sfr!2sma!4v1564138120502!5m2!1sfr!2sma" frameborder="0" allowfullscreen=""></iframe>
                               <div class="row"> 
                                <h6 class="c-pipeline__card-title" id="timezone" name="timezone" style="float:right;"><?php echo($timezone); ?><?php echo("  "); ?><?php echo($location); ?></h6>
                            </div>
                            </div>
                            

                        </div>


                        <div class="row" id="row-adress-info">
                            <div class="col-7">

                                <div class="c-field u-mb-medium" id="form_studio_address_line1">

                                    <input class="c-input p-width" type="text" id="studio_address_line1" name="studio_address_line1" placeholder="Address line 1" value="<?php echo($studio->studio_address_line1); ?>">
                                </div>

                                <div class="row" id="row-c-field" style="margin-bottom: 1.875rem!important;">
                                    <div class="col-7" id="form_studio_address_line2">

                                        <input class="c-input p-width" type="text" id="studio_address_line2" name="studio_address_line2" placeholder="Address line 2" value="<?php echo($studio->studio_address_line2); ?>">
                                    </div>

                                    <div class="col-5" id="form_studio_city">

                                        <input class="c-input p-width" type="text" id="studio_city" name="studio_city" placeholder="City" value="<?php echo($studio->studio_city); ?>">
                                    </div>
                                </div>
                                <div class="c-field u-mb-medium" id="form_studio_state">

                                    <input class="c-input p-width" type="text" id="studio_state" name=studio_state placeholder="State" value="<?php echo($studio->studio_state); ?>">
                                </div>

                                <div class="c-field u-mb-medium" id="form_studio_zip_code">

                                    <input class="c-input p-width" type="text" id="studio_zip_code" name="studio_zip_code" placeholder="Zip Code" value="<?php echo($studio->studio_zip_code); ?>">
                                </div>
                                <span class="c-divider u-mv-medium"></span>

                            </div>

                            <div class="col-5">
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

                        </div>
                        <div class="col-xl-8 u-text-center">
                            <a class="c-btn c-btn--secondary c-btn u-mr-large" href="settings">Cancel</a>
                            <input type="submit" name="update-studio" id="update-studio" value="Save Changes" class="c-btn c-btn--primary c-btn u-mr-large">
                        </div>
                    </div>
                    
            </form>
            <!-- Scripts -->
            <script src="js/settings.js"></script>
            <!-- Main JavaScript -->
            <script src="js/neat.min.js?v=1.0"></script>
            <!-- Main JavaScript -->
            <script src="js/script.js"></script>

            <script src="https://maps.googleapis.com/maps/api/timezone/json?location=38.908133,-77.047119&timestamp=1458000000&key=AIzaSyDAFh4Zro7Nf8Drp1s8O1pp643vXAd8w4A"></script>
            <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>
    </div>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
</body>

</html>