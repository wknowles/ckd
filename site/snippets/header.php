<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <?php echo css('assets/css/style.css') ?>
</head>
<body>
<header>
  <img class="ckd-logo" src="<?php echo url('assets/images/ckd-logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    <h1><a href="/">Charles Knowles Design : Architects</a></h1>
    <?php snippet('nav') ?>
</header>
