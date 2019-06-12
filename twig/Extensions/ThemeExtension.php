<?php

namespace app\twig\Extensions;

use app\twig\TokenParser\PageBodyTokenParser;
use app\twig\TokenParser\PageTokenParser;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use yii\web\View;

class ThemeExtension extends AbstractExtension
{
    public function getFunctions()
    {
        $options = [
            'is_safe' => ['html'],
            'needs_context' => true,
        ];

        return [
            new TwigFunction('head', [$this, 'head'], $options),
            new TwigFunction('registerAssetBundle', [$this, 'registerAssetBundle'], $options),
            new TwigFunction('themeAsset', [$this, 'themeAsset']),
        ];
    }

    public function getTokenParsers()
    {
        return [
            new PageTokenParser(),
            new PageBodyTokenParser(),
        ];
    }

    public function head($context)
    {
        /** @var View $view */
        $view = $context['this'];

        return $view->head();
    }

    public function registerAssetBundle($context, $bundle, $return = false)
    {
        $bundle = str_replace('/', '\\', $bundle);
        $bundle = $this->call($bundle, 'register', [
            isset($context['this']) ? $context['this'] : null,
        ]);

        \Yii::$app->params['themeAssetBundle'] = $bundle;

        if ($return) {
            return $bundle;
        }
    }

    public function themeAsset($path)
    {
        return \Yii::$app->params['themeAssetBundle']->baseUrl . '/' . $path;
    }

    private function call($className, $method, $arguments = null)
    {
        $callable = [$className, $method];
        if ($arguments === null) {
            return call_user_func($callable);
        }

        return call_user_func_array($callable, $arguments);
    }

    public function getName()
    {
        return 'theme';
    }
}
