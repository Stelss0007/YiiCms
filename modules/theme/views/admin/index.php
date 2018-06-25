<?php

use app\modules\theme\Module;
use Stelssoft\YiiCmsCore\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\theme\models\ThemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('Themes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="widget-box">
        <div class="widget-content">
            <div class="text-right">
                <?= Html::a(Module::t('Create Theme'), ['create'], ['class' => 'btn btn-success']) ?>
            </div>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => SerialColumn::class],
                    'id',
                    'name',
                    'description',
                    //'active',
                    //'updatedAt',
                    'title',
                    'version',
                    'author',

                    ['class' => ActionColumn::class],
                ],
            ]); ?>
        </div>
    </div>
</div>
