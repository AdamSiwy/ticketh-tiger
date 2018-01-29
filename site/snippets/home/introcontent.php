<div class="content">
    <header class="major">
        <h2><?= $page->introtitle()->text();?></h2>
    </header>
    <?= $page->introtext()->kt();?>
    <?php if ($page->introbuttonlabel()->isNotEmpty()):?>
    <ul class="actions">
        <li><a href="<?= $page->introbuttonurl() ?>" class="button"><?= $page->introbuttonlabel()->html() ?></a></li>
    </ul>
	<?php endif ?>
</div>