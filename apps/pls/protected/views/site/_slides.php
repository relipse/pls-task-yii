<div id="slides" class="swiper" aria-live="polite">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-question"></i>
				<h3>Need help?<br/>Our support desk is here for you.</h3>
				<div class="row">
					<div class="col-md-12 bubble">
						Email us at <a href="mailto:support@pls3rdlearning.com">support@pls3rdlearning.com</a> or
						<br/>
						call us toll-free at <a href="tel:1-888-201-EVAL">1-888-201-EVAL</a>.
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
				<i class="fal fa-user-friends"></i>
				<h3>Did you know that SuperEval offers multiple leadership team evaluations?</h3>
				<a href="https://supereval.com/our-evaluations/overview/" target="_blank" class="btn btn-primary">Learn
					More</a>
			</div>
		</div>
        <?php if (isset($recent_product_update_items)): ?>
		<div class="swiper-slide">
			<div class="overlay"></div>
			<div class="content">
                <?php
                $count = 0;
                foreach($recent_product_update_items as $item){
                    ?><i class="fal fa-comment-alt-lines"></i><?php
                    $count++;
                    echo '<h3 class="item-title">'.$item->title.'</h3>';
                    ?>
                    <div class="row">
                            <div class="col-md-12 bubble">
                                <?=$item->description?>
                            </div>
                   </div>
                   <a href="https://supereval.com/blog/category/supereval-updates/" target="_blank" class="btn btn-primary">Read
                            the Blog</a>
                    <?php
                    //break after first item because we are only showing one
                    break;
                }
                ?>
            </div>
		</div>
        <?php endif; ?>
        <?php if (isset($recent_blog_items)): ?>
        <div class="swiper-slide">
            <div class="overlay"></div>
            <div class="content">
                <?php
                $count = 0;
                foreach($recent_blog_items as $item){
                    ?><i class="fal fa-comment-alt-lines"></i><?php
                    $count++;
                    echo '<h3 class="item-title">'.$item->title.'</h3>';
                    ?>
                    <div class="row">
                        <div class="col-md-12 bubble">
                            <?=$item->description?>
                        </div>
                    </div>
                    <a href="https://supereval.com/blog/" target="_blank" class="btn btn-primary">Read
                             Our Blog</a>
                    <?php
                    //break after first item because we are only showing one
                    break;
                }
                ?>
            </div>
        </div>
        <?php endif; ?>
	</div>
	<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>

<?php
Yii::app()->clientScript->registerScript('slides', /** @lang JavaScript */ "
	$(function () {
		new Swiper('.swiper', {
			speed: 400,
			autoplay: {
				delay: 8000,
			},
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	});
	");
?>