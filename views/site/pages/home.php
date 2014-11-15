<?php
/**
 *
 *   Copyright © 2010-2012 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('mc', 'Home');
$this->breadcrumbs=array(
	Yii::t('mc', 'Home'),
);

$this->menu=array(
	array(
		'label'=>Yii::t('mc', 'Main Site'),
		'url'=>array(''),
		'icon'=>'home',
		'linkOptions'=>array(
			'submit'=>'https://www.galacticservers.com/',
		),
	),
	array(
		'label'=>Yii::t('mc', 'Your Client Area'),
		'url'=>array(''),
		'icon'=>'dashboard',
		'linkOptions'=>array(
			'submit'=>'https://my.galacticservers.com/',
		),
	),  
	array(
		'label'=>Yii::t('mc', 'Help & Guidance'),
		'url'=>array(''),
		'icon'=>'question',
		'linkOptions'=>array(
			'submit'=>'http://mc.galacticservers.com/index.php?r=site/report',  
		),
	),
	array(
		'label'=>Yii::t('mc', 'Order More Servers'),
		'url'=>array(''),
		'icon'=>'sitemap',
		'linkOptions'=>array(
			'submit'=>'//galacticservers.com/minecraft-hosting',
		),
	),
);

?>
<br/>
<div class="row">
	<div class="col-md-10">
		<h3>Hi there
		<?php
			if (Yii::app()->user->isGuest){                       
				echo Yii::app()->user->name; 
			} else {
				echo Yii::app()->user->name;                    
			}
		?>,</h3>
		<h4>You may notice a few changes around here while we improve your experience. So on behalf of the team at Galactic Server we hope you are excited as us about these changes.<br><br>
			Regards,<br>
			Galatic Servers
		</h4>
	</div>
</div><br><br>
<div class="row">
<div class="span8">
		   <!--<div class="alert alert-info" href="http://my.galacticservers.com/submitticket.php">
				<div class="row">
					<div class="col-md-1">
						<strong>NOTICE</strong>
					</div>
					<div class="col-md-8">
						We are proud to provide all of our clients with our real time tracking system. Click here to view it.
					</div>
					<div class="col-md-3">
						<a href="https://status.galacticservers.com/">
							<button class="btn btn-default btn-lg" type="button">
								Network Status
							</button>
						</a>
					</div>
				</div>
			</div>-->
	</div>
</div>