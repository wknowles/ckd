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
<!-- <div class="project-header">
  <a href="<?php echo url() ?>">
    <img class="logoProject" src="<?php echo url('assets/images/ckd_small.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    <h2 class=""><?php echo kirbytextSans($site->title()) ?></h2>
  </a>
</div> -->
