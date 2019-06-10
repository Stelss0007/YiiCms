<?php
namespace app\twig\Extensions;

use Symfony\Component\VarDumper\VarDumper;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\Template;
use Twig\TemplateWrapper;
use Twig\TwigFunction;

class DebugExtension extends AbstractExtension
{
    public function getFunctions()
    {
//        $isDumpOutputHtmlSafe = \extension_loaded('xdebug')
//            && (false === ini_get('xdebug.overload_var_dump') || ini_get('xdebug.overload_var_dump'))
//            && (false === ini_get('html_errors') || ini_get('html_errors'))
//            || 'cli' === \PHP_SAPI
//        ;

        $isDumpOutputHtmlSafe = true;

        return [
            new TwigFunction('dump', [$this, 'dump'], ['is_safe' => $isDumpOutputHtmlSafe ? ['html'] : [], 'needs_context' => true, 'needs_environment' => true, 'is_variadic' => true]),
            new TwigFunction('dd', [$this, 'dump'], ['is_safe' => $isDumpOutputHtmlSafe ? ['html'] : [], 'needs_context' => true, 'needs_environment' => true, 'is_variadic' => true]),
        ];
    }

    public function dump(Environment $env, $context, ...$vars)
    {
        if (!$env->isDebug()) {
            return;
        }

        ob_start(function () { return ''; });

        if (!$vars) {
            $vars = [];
            foreach ($context as $key => $value) {
                if (!$value instanceof Template && !$value instanceof TemplateWrapper) {
                    $vars[$key] = $value;
                }
            }

            VarDumper::dump($vars);
        } else {
            VarDumper::dump(...$vars);
        }

        return ob_get_clean();
    }
}
