<?php

use app\modules\theme\Module;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\module\models\Module */

$this->title = Module::t('Modules');
$this->params['breadcrumbs'][] = ['label' => Module::t('Modules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('Create Module');
?>
<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Create Module');?>
        </h3>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div class="theme-create">
            <?= $this->render(
                '_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>
