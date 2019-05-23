<?php

use app\modules\group\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\group\models\Group */

$this->title = Module::t('Groups');
$this->params['breadcrumbs'][] = ['label' => Module::t('Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
?>

<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Group: {name}', ['name' => $model->name]); ?>
        </h3>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="theme-view">
            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'description',
                    [
                        'attribute' => 'active',
                        'value' => function($model) {
                            return $model->active ? Module::t('Yes') : Module::t('No');
                        }
                    ],

                ],
            ]) ?>

        </div>
    </div>
</div>
