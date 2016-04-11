<?php snippet('headerProject') ?>
<div class="project">
  <?php snippet('gallery-slider') ?>
    <div class="project-content">
      <h1><?php echo kirbytextSans($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>
      <a class="project-return" href="<?php echo url('/projects') ?>"><< back to projects page</a>
    </div>
    <div class="project-info">
      <p><?php echo kirbytextSans($page->info()) ?></p>
      <img src="http://placehold.it/200x360">
    </div>
</div>
<?php snippet('footerProject'); ?>
