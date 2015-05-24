<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <!-- CSS  -->
<!--   <link href='//fonts.googleapis.com/css?family=Droid+Sans|Droid+Sans+Mono' rel='stylesheet' type='text/css'> -->
<!--   <link href="assets/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
<!--   <link href="assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <?php echo css('assets/css/style.min.css') ?>
</head>
<body>
	<header id="page-header">
	  <nav role="navigation">
	    <div class="nav-wrapper">
	      <input id="menu-toggle" type="checkbox" checked="checked" />
	      <label for="menu-toggle" class="button-collapse hide-on-large-only hide-on-print left"><i class="fa fa-bars fa-2x"></i></label>

	      <a id="logo-container" href="<?php echo url() ?>" class="brand-logo"><?php echo $site->title()->html() ?></a>
	      
	      <ul class="nav-deskop right hide-on-med-and-down hide-on-print">
	        <?php foreach($pages->visible() as $p): ?>
	        <li><a<?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
	        <?php endforeach ?>
	      </ul>
	
	      <ul class="nav-mobil hide-on-large-only hide-on-print">
	        <?php foreach($pages->visible() as $p): ?>
	        <li><a<?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
	        <?php endforeach ?>
	      </ul>
	      
	    </div>
	  </nav>
  </header>
  
  <main id="page-content">