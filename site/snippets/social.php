<?php $icons = array_slice($page->icons()->yaml(),0); ?>
<?php foreach($icons as $icon): ?>
    <a href="<?php echo $icon['link']; ?>"><i class="ion-<?php echo $icon['icon']; ?>"></i></a>
<?php endforeach ?>