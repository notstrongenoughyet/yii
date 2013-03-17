<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl; ?>/file/image?file=favicon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/render.css" media="screen, projection" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php //echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
    <header>
        <div class="title">A place that makes food happen!</div>
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
