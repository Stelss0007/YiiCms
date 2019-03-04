<?php

use app\modules\user\Module;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<section class="innerpage-titlebar">
    <div class="container">
        <div class="titlebar-box">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <h2><?php echo Module::t('My Account');?></h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 fw600">
                    <div class="titlebar-col">
                        <p><a href="index.html">Home</a> | <a href="#"><span>Account</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="account-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php if(\Yii::$app->user->isGuest): ?>
                <div class="tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation">
                            <a href="/user/login">
                                <?php echo Module::t('Sign In');?>
                            </a>
                        </li>
                        <li role="presentation" class="active">
                            <a href="#Section2" role="tab" data-toggle="tab" aria-expanded="false">
                                <?php echo Module::t('Sign Up');?>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div class="tab-pane fade active in" id="Section1">
                            <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'form-horizontal']]); ?>
                                <div class="form-group">
                                    <?php echo $form->field($model, 'email'); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->field($model, 'password')->passwordInput(); ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $form->field($model, 'passwordRepeat')->passwordInput(); ?>
                                </div>
                                <div class="form-group text-center">
                                    <?php echo Html::submitButton(
                                        Module::t('Sign Up'),
                                        [
                                            'class' => 'btn btn-default',
                                            'name' => 'login-button'
                                        ]
                                    ); ?>
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                        <div class="tab-pane fade" id="Section2">
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="tab">
                    <a href="/user/logout"><?php echo Module::t('Log Out'); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
