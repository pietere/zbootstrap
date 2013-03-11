<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Le styles -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>

  <?php echo gcb(2);?>

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="/"><img alt="<?php bloginfo('name');?>" src="<?php bloginfo('stylesheet_directory');?>/icon.png"/></a>
      <?php wp_nav_menu(array('container' => '','menu_class'=>'nav pull-right')); ?>
    </div>
  </div>
</div>

<div style="background-color:#CDEB8B;border-bottom:solid 1px #ccc;">
  <div class="container">
    <div class="row">
      <div class="span12">
        <?php the_block('top_section') ?>
      </div>
    </div>
  </div>
</div>

<div class="container">
