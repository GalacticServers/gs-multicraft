<?php
/**
 *
 *   Copyright © 2010-2012 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/
?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="col-md-3">
    <div id="sidebar">
    <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title'=>end($this->breadcrumbs),
            'hideOnEmpty'=>false,
        ));
        $this->widget('application.components.Menu', array(
            'items'=>$this->menu,
            'htmlOptions'=>array('class'=>'operations'),
        ));
        $this->endWidget();
    ?><br/>
    <!--<div class="alert alert-success">
        <a href="#" class="alert-link">
            <bold>WANT MORE SERVERS? </bold> <a></a><br>  Message us for multiple servers or more RAM and receive a discount across all servers.</a>
        </a>
    </div>
    <div class="alert alert-info">
        <a href="#" class="alert-link">
            <bold>SAVE THE PLANET </bold> <a></a><br> Help everyone's servers perform better. Please turn off your server when you're not using it.</a>
        </a>
    </div>-->
    </div><!-- sidebar -->
</div>
<div class="col-md-9">
    <?php echo $content; ?>
</div>
<div class="clearfix"></div>
<?php $this->endContent(); ?>
