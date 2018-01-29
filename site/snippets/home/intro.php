<section id="intro" class="main">
    <div class="spotlight">
    <?php 
    if ($page->introdisplayimage()->isTrue()) {
    	snippet('home/introcontent');
    	echo '<span class="image"><img src="' . $page->introimage()->toFile()->url() . '" alt="" /></span>';
    } else {
    	snippet('home/introcontent');
    };
    ?>
    </div>
</section>