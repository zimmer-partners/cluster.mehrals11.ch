      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          <?php if ($image->caption()->isNotEmpty()): ?>
            <figcaption><?= $image->caption()->html() ?></figcaption>
          <?php endif; ?>
        </figure>
      <?php endforeach ?>