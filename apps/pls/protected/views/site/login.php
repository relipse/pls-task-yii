<?php
/**
 * @var SiteController $this
 * @var LoginForm      $model
 */
$txtLogin = Yii::t('pls', 'Login');
$this->pageTitle = Yii::app()->name . ' - ' . $txtLogin;
$this->breadcrumbs = [
	$txtLogin,
];
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 align-self-center">
			<?php
			$this->renderPartial('_login', ['model' => $model]);
			?>
		</div>
		<div class="col-md-6">
			<?php
            //slides will have updates from the rss now
			$this->renderPartial('_slides', [
                'recent_product_update_rss'=> $recent_product_update_rss ?? null,
                'recent_blog_rss'=>$recent_blog_rss ?? null,
            ]);
			?>
		</div>
	</div>
</div>