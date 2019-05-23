<?php

use app\modules\group\Module;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\group\models\Group */

$this->title = Module::t('Groups');
$this->params['breadcrumbs'][] = ['label' => Module::t('Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('Create Group');
?>
<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Create Group');?>
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
