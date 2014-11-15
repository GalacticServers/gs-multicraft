<?php
/**
 *
 *   Copyright © 2010-2012 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('mc', 'Support');
$this->breadcrumbs=array(
    Yii::t('mc', 'Support'),
);
?>

<?php if(Yii::app()->user->hasFlash('report')): ?>

<div class="flash-success">
    <?php echo Yii::app()->user->getFlash('report'); ?>
</div>

<?php else: ?>

<p>
<?php echo Yii::t('mc', 'If you have questions regarding our server management software or if you find a bug please contact us using your open ticket section of the client area.') ?><br/>
<?php echo Yii::t('mc', 'In case this is a bug report please include all the error messages you encountered and a short description of how to reproduce the bug.') ?>
</p>

<div class="btn-group">
    <a href="skype:diamondxf?chat">
        <button class="btn btn-default btn-lg" type="button">
           	CONTACT ME
        </button>
    </a>
</div>

<?php endif; ?>
