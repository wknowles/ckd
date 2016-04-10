<div id="projects" class="projects">
  <ul>
    <?php foreach(page('projects')->grandChildren()->visible() as $project): ?>
      <li><a href="<?php echo $project->url() ?>" title="<?php echo $project->title()->html() ?>" >
          <img src="<?php echo $project->images()->first()->crop(300, 223, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>" width="223" height="300"></a>
      </li>
    <?php endforeach ?>
  </ul>
</div>

<?php /* ?>
 <ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible() as $project): ?>
  <li>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $project->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
<?php // */ ?>
