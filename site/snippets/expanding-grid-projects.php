<section class="projects">
  <ul id="og-grid" class="og-grid">
    <?php foreach($data->grandChildren()->visible() as $project): ?>
      <li>
        <a href="<?php echo $project->url() ?>" data-largesrc="<?php echo $project->images()->first()->resize(null, 600, 75)->url() ?>" data-title="<?php echo $project->title() ?>" data-description="<?php echo $project->text() ?>">
          <img src="<?php echo $project->images()->first()->resize(480, 300, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>">
        </a>
        </figure>
      </li>
    <?php endforeach ?>
  </ul>
</section>

<!--
<ul id="og-grid" class="og-grid">
					<li>
						<a href="/" data-largesrc="images/1.jpg" data-title="Penthouse In Chelsea" data-description="This sunless top floor mansion flat was divided into cellular rooms before we stripped it down to floor and part external wall only. A new roof structure of steel angles to support structural boarding was installed to maximise the internal height. A new west facing terrace was created at the higher level to enable sunlight to pour into all parts of the new space throughout the day and evening. 
	</br>
A combination of underfloor heating and a highly insulated new roof provide comfort to complement the spaciousness and light of the new apartment. Walls can be slid out for the creation of extra bedrooms as required and the terrace doors slide back to create a large dining or entertaining space at gallery level where the stone floor continues at the same level from inside to outside.">
							<img src="images/thumbs/1.jpg" alt="img01"/>
						</a>
					</li>
-->

<!-- <img src="<?php echo $project->images()->first()->resize(480, 300, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>"> -->
<!--   <img src="<?php echo thumb($project->images()->first(), array('width' => 480, 'height' => 300, 'crop' => false))->url() ?>"> -->
<!-- <?php echo $project->url() ?> -->


<section class="projects">
  <ul>
    <?php foreach($data->grandChildren()->visible() as $project): ?>
      <li>
        <a href="<?php echo $project->url() ?>">
          <img class="pure-img" src="<?php echo $project->images()->first()->crop(300, 300, 75)->url() ?>" alt="<?php echo $project->title()->html() ?>">
        </a>
        </figure>
      </li>
    <?php endforeach ?>
  </ul>
</section>