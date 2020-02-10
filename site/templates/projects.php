<?php snippet('header') ?>

<main>
  <?php snippet('intro') ?>
  <div class="row" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $project): ?>
    <div class="col-12 col-lg-4">
      <div class="card h-100">
        <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
        <div class="card-body">
          <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
          <p class="card-text"><?= $project->roles() ?> </p>
          <a href="<?= $project->url() ?>">Read more &#8594;</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</main>
<?php snippet('pagination') ?>
<?php snippet('footer') ?>