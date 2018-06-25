<?php

use app\modules\theme\Module;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\theme\models\Theme */

$this->title = Module::t('Update Theme: {nameAttribute}');
$this->params['breadcrumbs'][] = ['label' => Module::t('Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('Update');
?>
<div class="theme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form', [
        'model' => $model,
    ]) ?>

</div>
