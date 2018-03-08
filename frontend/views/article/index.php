<?php
/* @var $articlesProvider
 * @var $this yii\web\View
 */
?>

<div class="article-index">
    <div class="body-content">
        <div class="row">
            <?php foreach ($articlesProvider as $k => $articleItem): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?= $articleItem['thumbnail_image_url'] ?>" alt="image">
                        <div class="caption">
                            <h3><?= $articleItem['caption'] ?></h3>
                            <p><?= $articleItem['description'] ?></p>
                            <p><a href="/article/details/<?= $articleItem['id'] ?>" class="btn btn-primary"
                                  role="button">Details &raquo;</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>