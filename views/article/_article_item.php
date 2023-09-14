<?php

//este o instanta a articolului din model pentru a putea folosi model
/** @var $model \app\models\Article */
?>

<div>
<!--    //practic aici folosesc o instanta al modelului article si apelez titlul si corpul articolelor create-->
    <a href="<?php echo \yii\helpers\Url::to(['/article/view' , 'slug'=>$model->slug])?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(), 40)?>
    </div>
    <p class="text-muted text-right">
        <small> Created at: <?php echo Yii::$app->formatter->asRelativeTime($model->created_at)?>
            <!--            //acii practic avem o instanta de user si apelam numele-->
            By: <?php echo $model->createdBy->username?>
        </small>
    </p>
    <hr>

</div>
