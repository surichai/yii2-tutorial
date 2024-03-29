<?php
/* @var $this \yii\web\View */
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/* @var $content string */
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@web');
$this->registerJsFile($directoryAsset.'/js/cbpAnimatedHeader.min.js');
$this->beginContent('@frontend/views/layouts/base.php')
?>
    <div class="container">

        <?php echo Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?php if(Yii::$app->session->hasFlash('alert')):?>
            <?php echo \yii\bootstrap\Alert::widget([
                'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
            ])?>
        <?php endif; ?>

        <?php echo $content ?>

    </div>
<?php $this->endContent() ?>
