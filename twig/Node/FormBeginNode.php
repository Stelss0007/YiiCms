<?php

namespace app\twig\Node;

use Twig\Compiler;
use Twig\Node\Expression\FunctionExpression;
use Twig\Node\Node;

class FormBeginNode extends FunctionExpression
{
    public function compile(Compiler $compiler)
    {
        //$arguments = iterator_to_array($this->getNode('arguments'));
        //var_dump($this->attributes);
        preg_match('/_([^_]+)$/', $this->getAttribute('name'), $matches);
        $compiler
            ->addDebugInfo($this)
            ->write('$form1 = yii\widgets\ActiveForm::begin()');

//            if (isset($arguments[0])) {
//                $compiler->subcompile($arguments[0]);
//                $compiler->raw(', \''.$this->getAttribute('name').'\'');
//
//                if (isset($arguments[1])) {
//                    $compiler->raw(', ');
//                    $compiler->subcompile($arguments[1]);
//                }
//            }

           // $compiler->raw(');');

        return $compiler;
    }
}
