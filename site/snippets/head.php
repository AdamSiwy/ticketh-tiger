<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <meta name="author" content="<?php echo $site->author() ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <title><?php echo $site->title()->html() ?></title>

    <!--[if lte IE 8]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    <?php echo css('assets/css/main.css') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
    <!--[if lte IE 9]><?php echo css('assets/css/ie9.css') ?><![endif]-->
    <!--[if lte IE 8]><?php echo css('assets/css/ie8.css') ?><![endif]-->
  </head>

  <body>