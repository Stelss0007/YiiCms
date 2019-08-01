<?php
namespace app\modules\main\models;

use Stelssoft\YiiCmsCore\CmsActiveForm;

class TestForm extends CmsActiveForm
{
    public $name;
    public $email;
    public $subject;
    public $body;


    public function rules()
    {
        return [
            // атрибут required указывает, что name, email, subject, body обязательны для заполнения
            [['name', 'email', 'subject', 'body'], 'required'],

            // атрибут email указывает, что в переменной email должен быть корректный адрес электронной почты
            ['email', 'email'],
        ];
    }
}
