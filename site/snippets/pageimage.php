<?php if($image = $page->pageimage()->toFile()): ?>
  <div class="page-image-container" style="background-image: url(<?= $image->url() ?>)">    
    <?php if ($caption = $page->pageimagecaption()->value): ?>
      <div class="caption-container">
          <div><?= $caption ?></div>
      </div>
    <?php endif ?>
  </div>
<?php endif ?>
