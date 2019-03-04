<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin(['id' => 'login-form']);
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'rememberMe')->checkbox();
echo Html::submitButton(
    'Login',
    ['class' => 'btn btn-primary', 'name' => 'login-button']
);
ActiveForm::end();
