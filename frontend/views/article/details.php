<?php
/* @var $article
 * @var $this yii\web\View
 * */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?=$article['caption']?></h3>
    </div>
    <div class="panel-body">
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object" src="<?=$article['thumbnail_image_url']?>" alt="image">
                </a>
            </div>
            <div class="media-body">
                <?=$article['description']?>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <a href="<?=$article['description']?>" class="btn btn-primary" target="_blank">Source &raquo;</a>
    </div>
</div>