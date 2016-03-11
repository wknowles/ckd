<section id="projects" class="projects">
  <div class="grid">
    <?php foreach($data->grandChildren()->visible() as $project): ?>
      <div class="grid-item">
        <a href="<?php echo $project->url() ?>">
          <img src="<?php echo $project->images()->first()->crop(500, 375, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>" width="500" height="375">
        </a>
      </div>
    <?php endforeach ?>
  </div>
</section>
