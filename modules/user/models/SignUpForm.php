<?php

namespace app\modules\user\models;

use app\modules\user\Module;
use Yii;
use yii\base\Model;

class SignUpForm extends Model
{

    public $username;
    public $email;
    public $password;
    public $passwordRepeat;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::class, 'message' => Module::t('This email address has already been taken.')],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['passwordRepeat', 'required'],
            ['passwordRepeat', 'compare', 'compareAttribute'=>'password', 'message' => Module::t('Passwords don\'t match') ],
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

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->email = $this->email;
        $user->password= $this->password;

        return $user->save() ? $user : null;
    }

}
