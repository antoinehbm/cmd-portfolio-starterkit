<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">

  <?php snippet('intro') ?>

  <div class="row" <?= attr(['data-even' => $page->children()->listed()->isEven()], ' ') ?>>
    <?php foreach ($page->children()->listed()->paginate(9) as $article): ?>
    <div class="col-12 col-lg-4">
      <div class="card h-100">
      <img src="<?= $article->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
        <div class="card-body">
          <h4 class="card-title"><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h4>
          <p class="card-text"><?= $article->roles() ?> </p>
          <a href="<?= $article->url() ?>">Read more &#8594;</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>

</section>

<?php snippet('pagination') ?>
<?php snippet('footer') ?>