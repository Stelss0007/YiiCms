<?php
namespace app\twig\Extensions;

use Stelssoft\YiiCmsCore\CmsModule;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use yii\helpers\Html;
use yii\widgets\Menu;

class HtmlExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('csrfMetaTags', [$this, 'csrfMetaTags']),
            new TwigFunction('encode', [$this, 'encode']),
            new TwigFunction('menu', [$this, 'menu'], ['is_safe' => ['html'],]),
        ];
    }


    public function getFilters()
    {
        return [
            new TwigFilter('translate', [$this, 'translate']),
        ];
    }

    public function csrfMetaTags()
    {
        echo Html::csrfMetaTags();
    }

    public function encode($var)
    {
        echo Html::encode($var);
    }

    public function menu($params)
    {
        return Menu::widget($params);
    }

    public function translate($message, $category = 'app', $params = [], $language = null)
    {
        if (in_array($category, ['app', 'yii'], true)) {
            return \Yii::t($category, $message, $params, $language);
        }

        if (preg_match("/^modules\/.*$/", $category)) {
            /** @var CmsModule $className */
            $className = sprintf('\\app\\%s\\Module', str_replace('/', '\\', str_replace('/', '\\', $category)));
            $className::registerTranslations();
        }


        return \Yii::t($category, $message, $params, $language);
    }
}
