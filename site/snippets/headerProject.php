<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="stylesheet" href="https://npmcdn.com/flickity@1.1/dist/flickity.min.css">
  <?php echo css('assets/css/style.css') ?>
</head>
<body>
<header>
  <a href="/"><img class="ckd-logo" src="<?php echo url('assets/images/ckd-logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" /></a>
  <h1>Charles Knowles Design : Architects</h1>
    <?php snippet('nav') ?>
</header>
