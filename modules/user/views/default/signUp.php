<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin(['id' => 'login-form']);
echo $form->field($model, 'email');
echo $form->field($model, 'password')->passwordInput();
echo $form->field($model, 'passwordRepeat')->passwordInput();
echo Html::submitButton(
    'Sign Up',
    ['class' => 'btn btn-primary', 'name' => 'login-button']
);
ActiveForm::end();
