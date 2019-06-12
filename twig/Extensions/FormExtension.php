<?php

namespace app\twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use yii\widgets\ActiveForm;

class FormExtension extends AbstractExtension
{
    public function getFunctions()
    {
        $options = [
            'is_safe' => ['html'],
            'needs_context' => true,
        ];

        return [
            new TwigFunction('formBegin', [$this, 'formBegin'], $options),
            new TwigFunction('formEnd', [$this, 'formEnd'], $options),
            new TwigFunction('formField', [$this, 'formField'], $options),
        ];
    }

    public function formBegin($params = [])
    {
        return ActiveForm::begin($params);
    }

    public function formEnd()
    {
        return ActiveForm::end();
    }

    public function formField($model, )
    {
        return $form->field($model, 'name');
    }


    public function getName()
    {
        return 'form';
    }
}
