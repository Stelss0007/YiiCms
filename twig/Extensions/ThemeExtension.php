<?php

namespace app\twig\Extensions;

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
            new TwigFunction('beginPage', [$this, 'beginPage'], $options),
            new TwigFunction('endPage', [$this, 'endPage'], $options),
            new TwigFunction('beginBody', [$this, 'beginBody'], $options),
            new TwigFunction('endBody', [$this, 'endBody'], $options),
            new TwigFunction('head', [$this, 'head'], $options),
            new TwigFunction('registerAssetBundle', [$this, 'registerAssetBundle'], $options),
            new TwigFunction('themeAsset', [$this, 'themeAsset']),
        ];
    }

    public function beginPage($context)
    {
        /** @var View $view */
        $view = $context['this'];

        return $view->beginPage();
    }

    public function endPage($context)
    {
        /** @var View $view */
        $view = $context['this'];

        return $view->endPage();
    }

    public function beginBody($context)
    {
        /** @var View $view */
        $view = $context['this'];

        return $view->beginBody();
    }

    public function endBody($context)
    {
        /** @var View $view */
        $view = $context['this'];

        $view->endBody();
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
}
