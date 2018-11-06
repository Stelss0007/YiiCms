<?php

use app\modules\user\Module;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

$this->title = Module::t('Users');
$this->params['breadcrumbs'][] = ['label' => Module::t('Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
?>

<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('User: {name}', ['name' => $model->name]); ?>
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
                    'email',
                    [
                        'attribute' => 'active',
                        'value' => function($model) {
                            return $model->active ? Module::t('Yes') : Module::t('No');
                        }
                    ],
                    [
                        'attribute' => 'createdBy',
                        'value' => function($model) {
                            return $model->createdBy ? 'UserName' : Module::t('Registered');
                        }
                    ],
                    [
                        'attribute' => 'updatedBy',
                        'value' => function($model) {
                            return $model->createdBy ? 'UserName' : Module::t('Registered');
                        }
                    ],
                    'createdAt:datetime',
                    'updatedAt:datetime',
                    'lastLoggedInAt:datetime',
                ],
            ]) ?>

        </div>
    </div>
</div>
