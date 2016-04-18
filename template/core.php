<?php if($this->page->isIndex()): ?>
    <div class="container">
    <h1><?php echo $this->page->getNumberAndTitle(); ?></h1>
    <?php echo $this->render('toc') ?>
    </div>
<?php else: ?>
    <div class="container">
    <?php echo $this->render('navheader'); ?>
    <div class="row">
        <div class="col-md-2">
            <?php echo $this->render('toc') ?>
        </div>
        <div class="col-md-10">
            <?php echo $this->html; ?>
        </div>
    </div>
    <?php echo $this->render('navfooter'); ?>
    </div>
<?php endif; ?>
