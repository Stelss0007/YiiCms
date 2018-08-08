<?php

use app\modules\theme\Module;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\theme\models\Theme */

$this->title = Module::t('Themes');
$this->params['breadcrumbs'][] = ['label' => Module::t('Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('Update');
?>

<div class="x_panel">
    <div class="x_title">
        <h3><?php echo Module::t('Update Theme: {name}', ['name' => $model->name]); ?></h3>
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
