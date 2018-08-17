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
    
    <div class="wrap wide">   
      <h2 id="showcase">Freie Zimmer und Cluster</h2> 
      <?php snippet('showcase') ?>
    </div>
    
    <div class="text wrap">
      <h2 id="images">Impressionen</h2>
      <?php snippet('images'); ?>
    </div>
    
  </main>

<?php snippet('footer') ?>