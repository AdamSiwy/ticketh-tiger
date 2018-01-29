<main id="wrapper">
	
<nav class="languages" style="font-size:14px; text-align:right;">
  <ul>
    <?php foreach($site->languages() as $language): ?>
    <li<?php e($site->language() == $language, ' class="active" ') ?> style="display: inline-block;">
      <a href="<?php echo $language->url() ?>">
        <?php echo html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
<header id="header" class="alt">
	
	<canvas class='connecting-dots'></canvas>

    <a href="<?= $site->url();?>" title="Homepage"><span class="logo"><img src="<?php echo $site->logo()->toFile()->url(); ?>" alt="<?= $site->title();?>" /></span></a>
    <h1><?= $site->title();?></h1>
    <?= $site->tagline()->kt();?>
</header>
