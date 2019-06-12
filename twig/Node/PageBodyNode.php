<?php

namespace app\twig\Node;

use Twig\Compiler;
use Twig\Node\Node;

class PageBodyNode extends Node
{
    public function __construct(Node $body, $attributes = [], $line, $tag = null) {
        $nodes = [
            'body' => $body,
        ];

        parent::__construct($nodes, $attributes, $line, $tag);
    }

    public function compile(Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write('$view = $context["this"];')
            ->write('$view->beginBody();')
            ->subcompile($this->getNode('body'))
            ->write('$view->endBody();')
        ;
    }
}
