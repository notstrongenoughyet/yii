<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <title>Need For Food</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl;?>/assets/img/favicon.png"  rel="stylesheet">
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script type="text/JavaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap.js"></script>
 
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/bootstrap.css"  />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/assets/css/bootstrap-responsive.css"  />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/file/rendercss.css" />

        
	<title><?php //echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php
    $BASEURL = Yii::app()->baseUrl;
?>
<div class="main_container">
    <header>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
              <div class="container">

                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar">aasdf</span>
                  <span class="icon-bar">asdf</span>
                  <span class="icon-bar">asdf</span>
                </a>

                <!-- Be sure to leave the brand out there if you want it shown -->
                <a class="brand_logo" href="<?php echo $BASEURL;?>"><img src="<?php echo $BASEURL;?>/assets/img/favicon.png"/></a>
                <a class="brand" href="<?php echo $BASEURL;?>">Need For Food</a>
                <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav">
                      <li class="active"><a href="<?php echo $BASEURL;?>">Home</a></li>
                      <li><a href="#">Dishes</a></li>
                      <li><a href="#">Materials</a></li>
                      <li><a href="<?php echo $BASEURL;?>/users">Users</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="nav-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <form class="navbar-search pull-left" action="">
                      <input type="text" class="search-query span2" placeholder="Search">
                    </form>
                    <ul class="nav pull-right">
                      <li><a href="#">Support</a></li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->template_info->isLoggedIn() ? "User" : "Login"; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Profile</a></li>
                          <li><a href="#">My posts</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                <!-- Everything you want hidden at 940px or less, place within here -->
                <div class="nav-collapse collapse">
                  <!-- .nav, .navbar-search, .navbar-form, etc -->
                </div>

              </div>
            </div>
          </div>
    </header>
    <div class="main">
        <?php echo $content; ?>
    </div>
    <footer>
        <div id="copy_right">
	Copyright &copy; <?php echo date('Y'); ?> by TonyIsTheSh*t. All Rights Reserved.
	<?php //echo Yii::powered(); ?>
        </div>
    </footer>
    
</div><!-- page -->

</body>
</html>
