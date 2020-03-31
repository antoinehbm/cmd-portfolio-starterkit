<?php snippet('header') ?>

<main>
  <div class="row align-items-center pt-5 pb-5">
    
  <div class="col-12 col-lg-6">
      <h1><?= $page->introductiontitle() ?></h1>
      <p class="lead"><?= $page->introductiontext() ?></p>
      <a href="<?= $site->page('projects') ?>" class="btn btn-primary" role="button" aria-pressed="true">View my work</a>
      <a href="<?= $site->page('about') ?>" class="btn btn-outline-primary" role="button" aria-pressed="true">More about me</a>
    </div>

    <div class="col-12 col-lg-6">
      <img src="<?= $page->image()->url(); ?>" class="img-fluid" alt="<?= $page->image()->title(); ?>" />
    </div>
  </div>


  <div class="row">
    <div class="col-6">
      <div class="row">
        <div class="col-6">
          <p>Dit is dummytekst blablabla laalal ieodjoswde  iop;ueadh oiu adeuio aesdoiua </p>
        </div>
        <div class="col-6">
          <p>Dit is dummytekst blablabla. Laten we er voor de verandering eens even gewone tekst van maken, kijken of dat werkt. ja leuk doei...</p>
        </div>
      </div>
    </div>
    <div class="col-6">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, sit molestiae nobis quidem dicta Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea suscipit aperiam quia, ducimus aut incidunt eum voluptates, soluta eligendi quod beatae corrupti cupiditate consequuntur facilis veritatis aliquid quos quaerat possimus. </p>
    </div>
  </div>


  <?php
  if ($projectsPage = page('projects')): ?>
  <div class="row border-top pt-5 pb-5">
    <div class="col-12">
      <h2 class="float-left pb-4">My work</h2>
      <a class="float-right projectsknop" href="<?= $site->page('projects') ?>">View all projects &#8594;</a>
    </div>
    <?php foreach ($projectsPage->children()->listed()->paginate(4) as $project): ?>
    <div class="col-12 col-lg-3 mb-4">
      <div class="card h-100">
      <img src="<?= $project->images()->findBy("template", "thumbnail")->url(); ?>" class="card-img-top" alt="thumbnail" />
      <div class="card-body">
        <h4 class="card-title"><a href="<?= $project->url() ?>"><?= $project->title() ?></a></h4>
        <p class="card-text"><?= $project->roles() ?></p>
        <a class="readmoreknop" href="<?= $project->url() ?>">Read more &#8594;</a>
      </div>
    </div>
    </div>
    <?php endforeach ?>
  </div>
  <?php endif ?>
</main>

<?php snippet('footer') ?>