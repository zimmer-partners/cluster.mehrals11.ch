<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="wrap">
      
      <header>
        <h1><?= $page->title()->html() ?></h1>
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>
        <hr />
      </header>
      
      <div class="text">
        <?= $page->text()->kirbytext() ?>
      </div>
      
    </div>
    
    <section class="team wrap wide">
      
      <h2 id="team">Unsere Gemeinschaft</h2>

      <ul class="team-list grid gutter-1">
        <?php foreach($page->children()->visible() as $member): ?>
          <li class="team-item column">
            
            <?php if($image = $member->image()): ?>
              <figure class="team-portrait">
                <img src="<?= $image->url() ?>" alt="Portrait of <?= $member->title()->html() ?>" />
              </figure>
            <?php endif ?>
            
            <div class="team-info">
              <h3 class="team-name"><?= $member->title()->html() ?></h3>
              <p class="team-position"><?= $member->position()->html() ?></p>
              <div class="team-about text">
                <?= $member->about()->kirbytext() ?>
              </div>
            </div>
            
            <div class="team-contact text">
              <?php if ($member->phone()->isNotEmpty()): ?>
                <i>Telefon:</i><br />
                <?= kirbytag(['tel' => $member->phone()->html()]) ?><br />
              <?php endif; ?>
              <?php if ($member->email()->isNotEmpty()): ?>
                <i>E-Mail:</i><br />
                <a href="mailto:<?= $member->email()->html() ?>"><?= $member->email()->html() ?></a><br />
              <?php endif; ?>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
      
    </section>

  </main>

<?php snippet('footer') ?>
