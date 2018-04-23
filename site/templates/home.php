<?php snippet('header') ?>

  <main class="main" role="main">
  
    <?php snippet('pageimage') ?>
    <section>
      <div id="padding">
        <div class="text wrap">
          <?= $page->body_content()->kirbytext() ?>
        </div>
      </div>
    </section>

  </main>

<?php snippet('footer') ?>