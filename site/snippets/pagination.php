<?php 
$list = $page->children()->paginate(9); // FIXME Magic number, this should probably be a configurable option
$pagination = $list->pagination();
if ($pagination->hasPages()): ?>
<nav>
  <ul class="pagination">

    <?php if ($pagination->hasPrevPage()): ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pagination->prevPageURL() ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php else: ?>
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php endif ?>

    <?php foreach ($pagination->range(9) as $r): ?>
    <li class="page-item">
      <a<?= $pagination->page() === $r ? ' aria-current="page"' : '' ?> href="<?= $pagination->pageURL($r) ?>" class="page-link">
        <?= $r ?>
      </a>
    </li>
    <?php endforeach ?>

    <?php if ($pagination->hasNextPage()): ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pagination->nextPageURL() ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    <?php else: ?>
    <li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Next">
      <span aria-hidden="true">&raquo;</span>
      <span class="sr-only">Next</span>
    </a>
    </li>
    <?php endif ?>
  </ul>
</nav>
<?php endif ?>
