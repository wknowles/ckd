<?php snippet('headerProject') ?>
<div class="project fadeIn">
  <?php snippet('gallery-slider') ?>
    <div class="project-content">
      <h1><?php echo kirbytextSans($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>
    </div>
    <a class="project-return" href="../../#projects"><< Back to Projects</a>
</div>
<?php snippet('footerProject'); ?>
