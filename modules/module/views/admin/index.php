<?php

use app\modules\theme\Module;
use Stelssoft\YiiCmsCore\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\module\models\ModuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('Modules');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="x_panel">
        <div class="x_title">
            <h3>
                <?php echo Module::t('Modules List');?>
            </h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="text-right">
                <?= Html::a(Module::t('Create Module'), ['create'], ['class' => 'btn btn-success']) ?>
                <?= Html::a(Module::t('Configuration'), ['configuration'], ['class' => 'btn btn-default']) ?>
            </div>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => SerialColumn::class],
                    'id',
                    'name',
                    'description',
                    'title',
                    'version',
                    'author',

                    ['class' => ActionColumn::class],
                ],
            ]); ?>
        </div>
    </div>
</div>
