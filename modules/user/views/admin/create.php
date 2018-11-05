<?php

use app\modules\theme\Module;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\theme\models\User */

$this->title = Module::t('Themes');
$this->params['breadcrumbs'][] = ['label' => Module::t('Themes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('Create Theme');
?>
<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Create Theme');?>
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
