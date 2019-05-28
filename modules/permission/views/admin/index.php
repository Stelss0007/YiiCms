<?php

use app\modules\permission\Module;
use Stelssoft\YiiCmsCore\grid\ActionColumn;
use Stelssoft\YiiCmsCore\grid\WeightColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\permission\models\PermissionGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('Permissions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="x_panel">
        <div class="x_title">
            <h3>
                <?php echo Module::t('Permissions List');?>
            </h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="text-right">
                <?= Html::a(Module::t('Create Permission'), ['create'], ['class' => 'btn btn-success']) ?>
                <?= Html::a(Module::t('Configuration'), ['configuration'], ['class' => 'btn btn-default']) ?>
            </div>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => SerialColumn::class],
                    'group.name',
                    'pattern',
                    'accessLevelName',
                    'description',
                    [
                        'class' => WeightColumn::class,
                    ],
                    [
                        'class' => ActionColumn::class,
                        'contentOptions' => ['style'=>'width: 160px;'],
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
