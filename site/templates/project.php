<?php snippet('headerProject') ?>
<div class="project">
  <?php snippet('gallery-slider') ?>
    <div class="project-content">
      <h1><?php echo kirbytextSans($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>
<!--       <a class="project-return" href="../../#projects"><< Back to Projects</a> -->
    </div>
    <div class="project-info">
      <p><?php echo kirbytextSans($page->info()) ?></p>
<!--       <img src="http://placehold.it/400x360"> -->
    </div>
</div>
<hr>
<?php snippet('footerProject'); ?>
