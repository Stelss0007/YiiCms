<?php

use app\modules\user\Module;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */

$this->title = Module::t('Users');
$this->params['breadcrumbs'][] = ['label' => Module::t('Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Module::t('Create User');
?>
<div class="x_panel">
    <div class="x_title">
        <h3>
            <?php echo Module::t('Create User');?>
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
