<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>
    
    <?php $projects_pages= $site->pages()->filterBy('template', 'projects')->visible(); if ($projects_pages->count() > 0): ?>
    <section class="projects-section">
      
      <div class="wrap wide">
        <h2>Freie Cluster</h2>
        <?php snippet('showcase', ['limit' => 3]) ?>
        <p class="projects-section-more"><a href="<?= $projects_pages->first()->url() ?>" class="btn">Alle freien Cluster &hellip;</a></p>
      </div>
      
    </section>
    <?php endif; ?>
  
  </main>

<?php snippet('footer') ?>