<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

	<title><?php echo $title; ?></title>

    <!-- CSS -->
    <?php echo $this->assets->outputCss(); ?>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
    </head>
    <body>
        <section id="header" class="success">
          <section id="nav">
            <div class="container">
              <div id="brand">
                <span class="nucards">nuCards</span>
              </div><!--/ #brand -->
        
              <div id="menu">
                <ul>
                  <li><a href="#">&nbsp;</a></li>
                </ul>
              </div><!--/ #menu -->
            </div>
          </section><!--/ #nav -->
        
          <section id="hero">
            <div class="container">
              <h1>Your <span class="nucards">nuCards</span> are ready to go.</h1>
                <h3>Go ahead, spend that money.</h3>
            </div><!--/ .container -->
          </section><!--/ #hero -->
        </section><!--/ #header .success -->
            
        <section id="socialize">
          <div class="container">
            
            <h1>Socialize with us!</h1>
            
            <ul>
              <li class="insta"><a href="http://www.instagram.com/nucards" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></li>
              <li class="twitter"><a href="http://www.twitter.com/nucards" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li class="fb"><a href="http://www.facebook.com/nucards" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
            </ul>
            
          </div><!--/ .container -->
        </section><!--/ #socialize -->
          
        <section id="footer">
          <div class="container">
            <div class="left">
              <p>&copy; nuCards, Inc.</p>
            </div><!--/ .left -->
          
            <div class="right">
              <ul>
                <li><a href="terms.html">Terms</a></li>
                <!--<li><a href="terms.html">Terms</a></li>-->
              </ul>
            </div><!--/ .right -->
         </div><!--/ .container -->
        </section><!--/ #footer -->
            
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <?php echo $this->assets->outputJs(); ?>

    </body>
</html>