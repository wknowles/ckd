<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
  <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
  <?php echo css('assets/css/style.css') ?>
</head>
<body>
<header id="header">
    <div class="fadeIn">
      <img class="logo" src="<?php echo url('assets/images/CKD.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      <h1 class="heading"><?php echo kirbytextSans($site->title()) ?></h1>
      <h2 class="sub-heading"><?php echo kirbytextSans($site->description()) ?></h2>
       <nav class="main-nav">
       <h2 class="sticky-title"><a href="#header">Charles Knowles Design</a></h2>
        <ul>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
 </div>
 </header>
