<section id="features" class="main special">
    <header class="major">
        <h2><?= $page->featurestitle()->html();?></h2>
    </header>
    <ul class="features">
    <?php $features = array_slice($page->features()->yaml(),0,3); ?>
    <?php foreach($features as $feature): ?>    
        <li>
       
			<span class="icon major style<?= $feature['iconstyle'];?>"><img src="http://dev-tiger.since1999.de/nine/content/1-home/<?= $feature['icon'];?>" alt="Featured Events"></span>
            <h3><?= html($feature['title']);?></h3>
            <?= kirbytext($feature['text']);?>
            <?php if (strlen($feature['buttonlabel']) > 0):?>
            <a href="<?= $feature['buttonurl'];?>" class="button"><?= html($feature['buttonlabel']);?></a>
            <?php endif ?>
        </li>
    <?php endforeach ?>
    </ul>
</section>