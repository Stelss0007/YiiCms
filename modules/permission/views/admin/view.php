<?php

use app\modules\permission\Module;
use Stelssoft\YiiCmsCore\CmsPermission;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\permission\models\PermissionGroup */

$this->title = Module::t('Permissions');
$this->params['breadcrumbs'][] = ['label' => Module::t('Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('View');
?>

<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Permission'); ?>
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
                    'group.name',
                    [
                        'attribute' => 'level',
                        'value' => function($model) {
                            return CmsPermission::permissionLevel($model->level);
                        }
                    ],
                    'pattern',
                    'description',
                ],
            ]) ?>

        </div>
    </div>
</div>
