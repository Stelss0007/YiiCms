<?php

use app\modules\group\models\Group;
use app\modules\user\Module;
use Stelssoft\YiiCmsCore\widgets\DateTimePicker\DateTimePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\user\models\User */
/* @var $form yii\widgets\ActiveForm */

//\yii\helpers\VarDumper::dump(ArrayHelper::map(Group::find()->asArray()->all(),'id','name'));
//exit;
?>

<div class="theme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'email')->input('email', ['maxlength' => true]) ?>
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'gid')->dropDownList(ArrayHelper::map(Group::find()->asArray()->all(),'id','name')) ?>
    <?= $form->field($model, 'active')->dropDownList([
            '1' => Module::t('Yes'),
            '0' => Module::t('No'),
    ]) ?>

    <?=DateTimePicker::widget([
        'model' => $model,
        'attribute' => 'createdAt',
        //'language' => 'ru',
        //'dateFormat' => 'yyyy-MM-dd',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(\Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
