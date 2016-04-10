<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
  <link rel="stylesheet" href="https://npmcdn.com/flickity@1.1/dist/flickity.min.css">
  <?php echo css('assets/css/style.css') ?>
</head>
<body>
<header>
  <img class="ckd-logo" src="<?php echo url('assets/images/ckd-logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    <h1><a href="/">Charles Knowles Design : Architects</a></h1>
    <?php snippet('nav') ?>
</header>
