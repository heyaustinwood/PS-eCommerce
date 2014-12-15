<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

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
        <section id="header">
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
              <h1>Free Gift Cards. <span class="nucards">nuCards</span>.</h1>
                <h3>Activate your cards below.</h3>
            </div><!--/ .container -->
          </section><!--/ #hero -->
        </section><!--/ #header -->
            
        <section id="activation">
          <div class="container">
            <?php
                $errors = $this->flashSession->getMessages();
                @$errors = json_decode($errors["error"][0], true);
            ?>
            
            <?php echo $this->tag->form(array('index/success', 'method' => 'POST')); ?>
                
              <?php if($errors != NULL) { echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Hey!</strong> You're missing some info!</div>"; } ?>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="FORMID">Name<span class="required">*</span></label>
                    <?php echo $this->tag->textField(array("full_name", "class" => "form-control", "id" => "full_name", "placeholder" => "Your full name...")); ?>
                    <?php if(@strpos($errors["full_name"], "required") !== False) { echo '<p class="help-block required">THIS FIELD IS REQUIRED</p>'; } ?>
                  </div>
                </div><!--/ .col-md-6 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="FORMID">Email<span class="required">*</span></label>
                    <?php echo $this->tag->textField(array("email", "class" => "form-control", "id" => "FORMID", "placeholder" => "Your full email address...")); ?>
                    <?php if(@strpos($errors["email"], "required") !== False) { echo '<p class="help-block required">THIS FIELD IS REQUIRED</p>'; } ?>
                    <?php if(@strpos($errors["email"], "format") !== False) { echo '<p class="help-block required">CHECK FORMAT</p>'; } ?>
                  </div>
                </div><!--/ .col-md-6 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="FORMID">Phone<span class="required">*</span></label>
                    <?php echo $this->tag->textField(array("phone", "class" => "form-control", "id" => "FORMID", "data-mask" => "(999)-999-9999", "placeholder" => "(999)-999-9999")); ?>
                    <?php if(@strpos($errors["phone"], "required") !== False) { echo '<p class="help-block required">THIS FIELD IS REQUIRED</p>'; } ?>
                  </div>
                </div><!--/ .col-md-6 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="FORMID">Card #<span class="required">*</span> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="It's the 16 digit # located on back of card"><span class="glyphicon glyphicon-question-sign"></span></a></label>
                    <?php 
                        if($card_code == NULL) { 
                            echo $this->tag->textField(array("card_code", "class" => "form-control", "id" => "FORMID", "data-mask" => "9999-9999-9999-9999", "placeholder" => "16-digit card activation number....")); 
                        } else { 
                            echo $this->tag->textField(array("card_code", "value" => "{$card_code}", "class" => "form-control", "id" => "FORMID", "data-mask" => "9999-9999-9999-9999", "placeholder" => "16-digit card activation number....")); 
                        }

                    ?>
                    <?php if(@strpos($errors["card_code"], "required") !== False) { echo '<p class="help-block required">THIS FIELD IS REQUIRED</p>'; } ?>
                    <?php if(@strpos($errors["card_code"], "unique") !== False) { echo '<p class="help-block required">This card has already been activated</p>'; } ?>
                  </div>
                </div><!--/ .col-md-6 -->
                <div class="col-md-6 col-md-offset-3">
                  <button type="submit" class="btn btn-default btn-block">Activate <i class="fa fa-angle-right"></i></button>
                </div>
              </div><!--/ .row -->
              <p class="disclaimer">By clicking 'Activate' you agree to our <a href="/privacy">Privacy Policy</a>.</p>
            </form>
            
          </div><!--/ .container -->
        </section><!--/ #activation -->
          
        <section id="footer">
          <div class="container">
            <div class="left">
              <p>&copy; nuCards, Inc.</p>
            </div><!--/ .left -->
          
            <div class="right">
              <ul>
                <!--<li><a href="terms.html">Terms</a></li>-->
                <li><a href="/privacy">Privacy</a></li>
              </ul>
            </div><!--/ .right -->
         </div><!--/ .container -->
        </section><!--/ #footer -->
            
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <?php echo $this->assets->outputJs(); ?>

    </body>
</html>