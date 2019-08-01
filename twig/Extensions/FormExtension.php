<?php

namespace app\twig\Extensions;

use app\twig\Node\FormBeginNode;
use app\twig\TokenParser\FormTokenParser;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use yii\widgets\ActiveField;
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

    public function getTokenParsers()
    {
        return [
            new FormTokenParser(),
        ];
    }

    public function formBegin(&$context, $model = null, $params= [])
    {
        $context['__form'] = \yii\widgets\ActiveForm::begin($params);
        $context['__formModel'] = $model;
        return;
    }

    public function formEnd(&$context)
    {
        \yii\widgets\ActiveForm::end();
        unset($context['__form'], $context['__formModel']);
        return;
    }

    public function formField(&$context, $field = null, $options = null)
    {
        /** @var ActiveField $field */
        $field = $context['__form']->field($context['__formModel'], $field);

        if($options) {
            if(!empty($options['type'])) {
                switch ($options['type']) {
                    case 'textarea':
                        $field->textarea();
                        break;
                    case 'input':
                        $field->textInput();
                        break;
                    case 'password':
                        $field->passwordInput();
                        break;
                    case 'select':
                        $field->dropDownList($options['list']);
                        break;
                    case 'checkbox':
                        $field->checkbox();
                        break;
                    case 'checkboxList':
                        $field->checkboxList([]);
                        break;
                    case 'radio':
                        $field->radio();
                        break;
                    case 'radioList':
                        $field->radioList([]);
                        break;
                    case 'file':
                        $field->fileInput();
                        break;
                }
            }
        }

        return $field;
        //return $form->field($model, 'name');
    }


    public function getName()
    {
        return 'form';
    }
}
