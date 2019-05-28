<?php

use app\modules\permission\Module;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\group\models\Group */

$this->title = Module::t('Permissions');
$this->params['breadcrumbs'][] = ['label' => Module::t('Permissions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('Create Permission');
?>
<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Create Permission');?>
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
