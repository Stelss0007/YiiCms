<?php

namespace app\twig\Node;

use Twig\Compiler;
use Twig\Node\Node;

class PageNode extends Node
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
            ->write('$view->beginPage();')
            ->subcompile($this->getNode('body'))
            ->write('$view->endPage();')
        ;
    }
}
