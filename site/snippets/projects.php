<div id="projects" class="projects">
  <ul>
    <?php foreach(page('projects')->grandChildren()->visible() as $project): ?>
      <li><a href="<?php echo $project->url() ?>" title="<?php echo $project->title()->html() ?>" >
          <?php echo ThumbExt($project->images()->first(), array('width' => 250, 'height' => 250, 'crop' => true, 'quality' => 70 , 'srcset' => '2x')) ?>
          </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>
