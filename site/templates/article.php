<?php snippet('header') ?>
<?php snippet('menu') ?>


<section class="content article">
  <article>
    <?php snippet('intro') ?>
    <p><?= $page->date()->toDate('d.m.Y') ?></p>
    <?= $page->text()->blocks()->html() ?>
    <a href="<?= url('articles') ?>">&#8592; Back</a>
  </article>
</section>

<?php
  if ($blogPage = page('articles')): ?>
  <div class="row border-top">
    <div class="col-12">
      <h2 class="float-left">View more articles</h2>
      <a class="float-right" href="<?= url('articles') ?>">View all articles &#8594;</a>
    </div>
    <?php foreach ($blogPage->children()->listed()->paginate(3) as $article): ?>
    <div class="col-12 col-lg-4">
      <div class="card h-100">
      <img src="<?= $article->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $article->url() ?>"><?= $article->title() ?></a></h4>
        <p class="card-text"><?= $article->roles() ?></p>
        <a href="<?= $article->url() ?>">Read more &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>

<?php snippet('footer') ?>