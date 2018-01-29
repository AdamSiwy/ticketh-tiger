    <div id="newsletter">
<script src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script>require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us17.list-manage.com","uuid":"2bc2687b71c43795a7737fcfb","lid":"3dd22509ec"}) })</script>
	</div>

	<footer id="footer">
        <section>
            <h2><?= $site->footerinfotitle()->html();?></h2>
            <?= $site->footerinfotext()->kt() ?>
            <?php if ($site->footerinfobuttonlabel()->isNotEmpty()):?>
            <ul class="actions">
                <li><a href="<?= $site->footerinfobuttonurl() ?>" class="button"><?= $site->footerinfobuttonlabel()->html() ?></a></li>
            </ul>
            <?php endif ?>
        </section>
        <section>
            <h2><?= $site->footercontacttitle()->html();?></h2>
            <?php $details = array_slice($site->footercontactdetails()->yaml(),0);?>
            <?php $icons = array_slice($site->footericons()->yaml(),0);?>
            <dl class="alt">
                <?php foreach($details as $detail): ?>
                <dt><?= html($detail['label']);?></dt>
                <dd><?= kirbytextRaw($detail['text']);?></dd>
                <?php endforeach ?>
            </dl>
            <ul class="icons">
                <?php foreach($icons as $icon): ?>
                <li><a href="<?= $icon['link'];?>" class="icon fa-<?= $icon['icon'];?> alt"><span class="label"><?= html($icon['label']);?></span></a></li>
                <?php endforeach ?>
            </ul>
        </section>
        <p class="copyright"><?= $site->copyright()->kirbytextRaw() ?></p>
    </footer>

    </main>
    <?php echo js('assets/js/jquery.min.js');?>
    <?php echo js('assets/js/jquery.scrollex.min.js');?>
    <?php echo js('assets/js/jquery.scrolly.min.js');?>
    <?php echo js('assets/js/skel.min.js');?>
    <?php echo js('assets/js/util.js');?>
    <!--[if lte IE 8]>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo js('assets/js/main.js');?>
</body>

</html>