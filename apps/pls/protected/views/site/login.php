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
                'recent_product_update_items'=> $recent_product_update_items ?? null,
                'recent_blog_items'=> $recent_blog_items ?? null,
            ]);
			?>
		</div>
	</div>
</div>