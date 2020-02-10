<?php snippet('header') ?>
<div class="row border-bottom">
  <div class="col-12">
    <?php snippet('intro') ?>
  </div>
</div>
<div class="row">
  <div class="col-6 col-lg-3 border-bottom">
    <h6>Roles:</h6>
    <?= $page->roles() ?>
  </div>
  <div class="col-6 col-lg-3 border-bottom">
    <h6>Duration:</h6>
    <?= $page->duration() ?>
  </div>
  <div class="col-6 col-lg-3 border-bottom">
    <h6>Deliverables:</h6>
    <?= $page->deliverables() ?>
  </div>
  <div class="col-6 col-lg-3 border-bottom">
    <h6>Client(s):</h6>
    <?= $page->clients() ?>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <?= $page->text()->blocks()->html() ?>
  </div>
</div>

  <?php
  if ($projectsPage = page('projects')): ?>
  <div class="row border-top">
    <div class="col-12">
      <h2 class="float-left">My work</h2>
      <a class="float-right" href="<?= url('projects'); ?>">View all projects &#8594;</a>
    </div>
    <?php foreach ($projectsPage->children()->listed()->paginate(3) as $project): ?>
    <div class="col-12 col-lg-4">
      <div class="card h-100">
      <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
        <p class="card-text"><?= $project->roles() ?></p>
        <a href="<?= $project->url() ?>">Read more &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>

</main>

<?php snippet('footer') ?>
