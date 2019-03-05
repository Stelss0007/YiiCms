<?php

namespace app\modules\user\models;

use app\modules\user\Module;
use yii\base\Model;
use Yii;

class LogInForm extends Model
{
    public $email;
    public $password;
    public $rememberMe;

    /** @var User */
    public $user;

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => Module::t('Email'),
            'password' => Module::t('Password'),
            'passwordRepeat' => Module::t('Password Repeat'),
        ];
    }

    public function validatePassword($attributeName)
    {
        if ($this->hasErrors())
            return;

        $user = $this->getUser($this->email);
        if (!($user and $this->isCorrectHash($this->$attributeName, $user->password)))
            $this->addError('password', Module::t('Incorrect email or password.'));
    }

    private function getUser($email)
    {
        if (!$this->user)
            $this->user = $this->fetchUser($email);

        return $this->user;
    }

    private function fetchUser($email)
    {
        return User::findOne(['email' => $email]);
    }

    private function isCorrectHash($plaintext, $hash)
    {
        return Yii::$app->security->validatePassword($plaintext, $hash);
    }

    public function login()
    {
        if (!$this->validate())
            return false;

        $user = $this->getUser($this->email);
        if (!$user)
            return false;

        return Yii::$app->user->login(
            $user,
            $this->rememberMe ? 3600 * 24 * 30 : 0
        );
    }

}
