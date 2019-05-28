<?php

use app\modules\group\Module;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

$this->title = Module::t('Groups');
$this->params['breadcrumbs'][] = ['label' => Module::t('Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Module::t('View'), 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = \Yii::t('yii', 'Update');
?>

<div class="x_panel">
    <div class="x_title">
        <h3><?php echo Module::t('Update Permission'); ?></h3>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="theme-update">
            <?= $this->render(
                '_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>
