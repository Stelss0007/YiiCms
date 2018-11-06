<?php

use app\modules\user\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="theme-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'active') ?>

    <?= $form->field($model, 'updatedAt') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'version') ?>

    <?php // echo $form->field($model, 'author') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Module::t('Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
