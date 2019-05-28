<?php

use app\modules\group\models\Group;
use app\modules\group\Module;
use Stelssoft\YiiCmsCore\CmsPermission;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\group\models\PermissionGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="theme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gid')->dropDownList(ArrayHelper::map(Group::find()->asArray()->all(),'id','name')) ?>
    <?= $form->field($model, 'pattern')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'level')->dropDownList(CmsPermission::permissionLevel()) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(\Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
