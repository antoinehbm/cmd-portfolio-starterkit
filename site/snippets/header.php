<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/test.css" type="text/css">
  
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="icon" href="<?= $site->image()->url() ?>">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?= $site->url() ?>">
        <img src="<?= $site->image()->url() ?>" width="48px" height="48px" alt="<?= $site->image()->alt() ?>" class="rounded-circle"/>
        <?= $site->title() ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <?php foreach ($site->children()->listed() as $item): ?>
          <li class="nav-item">
            <a href="<?= $item->url(); ?>" class="nav-link"><?= $item->title(); ?></a>
          </li>
          <?php endforeach ?>
          <li class="nav-item">
            <a class="nav-link" href="#social">Contact me</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container">
