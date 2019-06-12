<?php

namespace app\twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use yii\helpers\Url;

class RoutingExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('path', [$this, 'path']),
            new TwigFunction('url', [$this, 'url']),
        ];
    }

    public function path($path, $args = [])
    {

        return Url::to($this->preparePath($path, $args));
    }

    public function url($path, $args = [])
    {

        return Url::to($this->preparePath($path, $args), true);
    }

    private function preparePath($path, $args = [])
    {
        if (is_array($path)) {
            return array_merge($path, $args);
        }

        return array_merge([$path], $args);
    }

    public function getName()
    {
        return 'routing';
    }
}
