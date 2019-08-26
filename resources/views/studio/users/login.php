<html lang="en">
    <head>
       <meta charset="utf-8">
       <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>Sign in</title>
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

       
       <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
    </head>
<body>
    
    <div class="o-page o-page--center">
    <div class="o-page__card">
      <div class="c-card c-card--center">
        <span class="c-icon c-icon--large u-mb-small">
          <img src="img/studio.jpg" alt="logo">
        </span>

        <h1 class="u-mb-medium">Sign in to Studio</h1>
        <h4 class="u-mb-medium" style="color: gray;">Enter your details below</h4>
        
        <form id="form1">              
          <div class="c-field">
            <div id="form_user_email">
              <input class="c-input u-mb-small" type="text" name="user_email" id="user_email" placeholder="Email Address">
            </div>
            <a href="#" style="float: right;" onclick="switch_form();">Forgot Password ?</a>
            <div id="form_user_password">
              <input class="c-input u-mb-small" type="password" name="user_password" id="user_password" placeholder="Enter password">
            </div>
          </div>
          <input type="submit" name="login" value="Log in" id="login" class="c-btn c-btn--fullwidth c-btn--info">
          
        </form>
        <form method="" action="" id="form2" style="display: none;">              
          <div class="c-field">
            
            <a href="#" style="float: right;" onclick="switch_form();">Back to log in ?</a>
            <input class="c-input u-mb-small" type="text" name="email" placeholder="Email@example.com">
          </div>
          <a href="#" class="c-btn c-btn--fullwidth c-btn--info">Reset password</a>
          
        </form>
      </div>
    </div>
  </div>
    <!-- Scripts -->
    <script src="js/neat.min.js?v=1.0"></script>
    <!-- Main JavaScript -->
    <script src="js/script.js"></script>
    <script src="js/login.js"></script>
</body>
</html>