<section id="bottom" class="main special">
    <header class="major">
        <h2><?= $page->bottomtitle()->html();?></h2>
        <?= $page->bottomtext()->kt() ?>
    </header>
    <?php $buttons = array_slice($page->bottombuttons()->yaml(),0,5);?>
    <?php if (size($buttons) > 0):?>
    <footer class="major">    
        <ul class="actions">
        <?php foreach($buttons as $button): ?>
            <li><a href="<?= $button['url'];?>" class="button <?= $button['class'];?>"><?= $button['label'];?></a></li>
        <?php endforeach ?>
        </ul>
    </footer>
    <?php endif ?>
</section>