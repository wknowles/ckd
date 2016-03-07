<section id="projects" class="projects">
<!--   <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?> -->
  <div class="grid">
    <?php foreach($data->grandChildren()->visible() as $project): ?>
      <div class="grid-item fadeIn">
              <a href="<?php echo $project->url() ?>">
          <img src="<?php echo $project->images()->first()->resize(380, null, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>" width="380" height="<?php echo $project->images()->first()->resize(380, null, 75)->height() ?>">
          </a>
      </div>
    <?php endforeach ?>
  </div>
</section>
