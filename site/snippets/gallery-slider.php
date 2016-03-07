<?php if($page->hasImages()): ?>
<div class="main-gallery js-flickity" data-flickity-options='{ "freeScroll": false, "wrapAround": true, "pageDots": false, "imagesLoaded": true }'>
  <?php foreach($page->images() as $image): ?>
	  <div class="gallery-cell"><img class="img-adjust" src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>" /></div>
  <?php endforeach ?>
</div>
<?php endif ?>
