<section id="stats" class="main special">
    <header class="major">
        <h2><?= $page->statstitle()->html();?></h2>
        <?php e($page->statssubtitle()->isNotEmpty(), $page->statssubtitle()->kt());?>
    </header>
	<?php if ($page->statsbuttonlabel()->isNotEmpty()):?>
		<ul class="actions">
            <li><a href="<?= $page->statsbuttonurl() ?>" class="button"><?= $page->statsbuttonlabel()->html() ?></a></li>
        </ul>
	<?php endif ?>
   
    <p class="content"><?= $page->statstext()->kirbytextRaw();?></p>
	
	<ul class="statistics">
    <?php $stats = array_slice($page->statsnumbers()->yaml(),0,5); $i = 1; ?>
    <?php foreach($stats as $stat): ?>
        <li class="style<?= $i ?>">
            <span class="icon fa-<?= $stat['icon'];?>"></span>
            <strong><?= $stat['number'];?></strong> <br /> <?= $stat['label'];?>
        </li>
        <?php $i++; ?>
    <?php endforeach ?>
    </ul>
	
    
    <footer class="major">

    </footer>
    
</section>