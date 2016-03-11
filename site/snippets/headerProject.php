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
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  <?php echo css('assets/css/style.css') ?>
</head>
<body>
<nav class="nav-stick">
  <h2 class="sticky-title">Charles Knowles Design</h2>
    <ul>
      <li><a class="active" href="<?php echo $site->url() ?>#projects">Projects</a></li>
      <li><a href="<?php echo $site->url() ?>#about">About</a></li>
      <li><a href="<?php echo $site->url() ?>#contact">Contact</a></li>
    </ul>
</nav>
