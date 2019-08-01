<?php

namespace app\twig\Node;

use Twig\Compiler;
use Twig\Node\Node;

class FormNode extends Node
{
    public function __construct(Node $body, $attributes = [], $line, $tag = null) {
        $nodes = [
            'body' => $body,
            'params' => $attributes,
        ];

        parent::__construct($nodes, [], $line, $tag);
    }

    public function compile(Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write('$this->form = yii\widgets\ActiveForm::begin(')
        ;

        if ($this->hasNode('params')) {
            foreach ($this->getNode('params') as $node) {
                $compiler
                    //->raw(", ")
                    ->subcompile($node)
                ;
            }
        }

        $compiler->raw(");\n");
        $compiler
            ->subcompile($this->getNode('body'))
            ->write('yii\widgets\ActiveForm::end();')
        ;
    }
}
