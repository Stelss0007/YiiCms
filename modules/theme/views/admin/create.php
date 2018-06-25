<?php

use app\modules\theme\Module;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\theme\models\Theme */

$this->title = Module::t('Create Theme');
$this->params['breadcrumbs'][] = ['label' => Module::t('Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render(
        '_form', [
        'model' => $model,
    ]) ?>

</div>
