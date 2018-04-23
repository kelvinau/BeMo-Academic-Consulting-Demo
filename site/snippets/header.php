<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <?php 
        //  Google Analytics Tag
        if ($site->google_meta()->value) {
          echo $site->google_meta()->html();
        }
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="Expires" content="30">

  <title>
    <?php if ($page->metatitle()->value) :?>
      <?= $page->metatitle()->value ?>
    <?php else: ?>
      <?= $site->title()->html() ?> | <?= $page->title()->html() ?>
    <?php endif ?>
  </title>
  <meta name="description" 
    content="<?= $page->metadescription()->value ? $page->metadescription()->value : $site->description()->html()  ?>"
  >
  <?php if ($page->noindex()->value !== '0'):?>
    <meta name="robots" content="noindex">
  <?php endif ?>

  <?php // echo css('assets/css/index.css') ?>
  <?= css('assets/css/site.min.css') ?>
  <?= css('site/fields/ckeditor/assets/css/ckeditor.css') ?>
  <?= css('@auto') ?>
  <?php 
      //  Facebook Pixel Code
      if ($site->fb_meta()->value) {
        echo $site->fb_meta()->html();
      }
  ?>
</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">
      <?php snippet('menu') ?>
    </div>
  </header>
