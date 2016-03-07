<section class="gallery">
  <?php foreach($page->images() as $image): ?>
  <figure>
    <a href="<?php echo $image->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="">
    </a>
  </figure>
  <?php endforeach ?>
</section>