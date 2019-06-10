<?php
namespace app\twig;

use Twig\Error\LoaderError;
use Twig\Loader\LoaderInterface;

class TwigSimpleLoader implements LoaderInterface
{
    /**
     * @inheritdoc
     */
    public function getSourceContext($name)
    {
        throw new LoaderError("Can not render using empty loader");
    }
    /**
     * @inheritdoc
     */
    public function getCacheKey($name)
    {
        throw new LoaderError("Can not render using empty loader");
    }
    /**
     * @inheritdoc
     */
    public function isFresh($name, $time)
    {
        throw new LoaderError("Can not render using empty loader");
    }
    /**
     * @inheritdoc
     */
    public function exists($name)
    {
        return false;
    }
}
