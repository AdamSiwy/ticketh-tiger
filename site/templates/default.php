<?php 
snippet('head');
snippet('header');
?>

  	<div id="main">
  		<section id="content" class="main">
  			<?php if ($page->cover()->isNotEmpty()):?><span class="image main"><img src="<?= $page->cover()->toFile()->url() ?>" alt="" /></span><?php endif ?>
	    	<h2><?= $page->title()->html() ?></h2>
	    	<?= $page->text()->kirbytext() ?>
	    </section>
	</div>

<?php snippet('footer') ?>