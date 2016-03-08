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
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  <?php echo css('assets/css/style.css') ?>
</head>
<body>
    <nav>
      <ul>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  <header >
    <div>
      <img class="logo fadeInDown" src="<?php echo url('assets/images/CKD.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
      <h2 class="fadeIn"><?php echo kirbytextSans($site->title()) ?></h2>
      <h3 class="fadeIn sub-heading"><?php echo kirbytextSans($site->description()) ?></h3>
 </div>
</header>

