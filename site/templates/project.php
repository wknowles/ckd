<?php snippet('headerProject') ?>
<div class="project">
  <?php snippet('gallery-slider') ?>
    <div class="project-content">
      <h1><?php echo kirbytextSans($page->title()) ?></h1>
        <?php echo kirbytext($page->text()) ?>
      <a class="project-return" href="<?php echo url('/projects') ?>"><< back to projects</a>
    </div>

<!--<div class="project-info">
      <ul>
        <li><?php echo kirbytextSans($page->year()) ?></li>
        <li><?php echo kirbytextSans($page->info()) ?></li>
      </ul>
    </div> -->

</div>
<?php snippet('footerProject'); ?>
