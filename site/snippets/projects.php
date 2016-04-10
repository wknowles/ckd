<!-- <section id="projects" class="projects">
  <div class="grid">
    <?php foreach($data->grandChildren()->visible() as $project): ?>
      <div class="grid-item">
        <a href="<?php echo $project->url() ?>" title="<?php echo $project->title()->html() ?>" >
          <img src="<?php echo $project->images()->first()->crop(500, 375, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>" width="500" height="375">
        </a>
      </div>
    <?php endforeach ?>
  </div>
</section>
 -->
<div id="projects" class="projects">
  <ul>
    <?php foreach($data->grandChildren()->visible() as $project): ?>
      <li><a href="<?php echo $project->url() ?>" title="<?php echo $project->title()->html() ?>" >
          <img src="<?php echo $project->images()->first()->crop(300, 223, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>" width="223" height="300"></a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
