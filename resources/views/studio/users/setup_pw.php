<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Setup password</title>
    <meta name="description" content="Home">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <!-- front awesome -->
   <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>

   <!-- Favicon -->
   <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Stylesheet -->
   <link rel="stylesheet" href="../css/neat.min.css?v=1.0">
   <link rel="stylesheet" href="../css/neat.css">
   <link rel="stylesheet" href="../css/style.css">
   <script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>       
   <meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
  </head>
<body>
    
    <div class="o-page o-page--center">
    <div class="o-page__card">
      <div class="c-card c-card--center">
        <span class="">
          <img src="../img/studio.jpg" alt="logo" id="logo">
        </span>
        
        <h1 class="u-mb-small u-mt-medium">Setup password</h1>
        <h4 class="u-mb-large" style="color: gray;">Enter your password</h4>
        <form>   
          <input type="hidden" id="user_code" value="<?php echo $user_code; ?>">           
          <div class="c-field">
            <input class="c-input u-mb-small p-input2 u-mb-medium" type="password" name="password1" id="password1" placeholder="Password">
            <input class="c-input u-mb-small p-input2 u-mb-medium" type="password" name="password2" id="password2" placeholder="Confirm Password">
          </div>

          <input type="submit" id="setup-pw" value="Log in" class="c-btn p-shadow c-btn--info"><i class="fa fa-arrow-right u-ml-large"></i>
        </form>
      </div>
    </div>
  </div>
    <!-- Scripts -->
    <script src="../js/neat.min.js?v=1.0"></script>
    <!-- Main JavaScript -->
    <script src="../js/script.js"></script>
    <script src="../js/login.js"></script>
    <script src="../js/setup_pw.js"></script>
    <script src="https://kit.fontawesome.com/39c7ddd9f6.js"></script>
</body>
</html>