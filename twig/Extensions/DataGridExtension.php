<?php
namespace app\twig\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use yii\grid\GridView;

class DataGridExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('dataGrid', [$this, 'dataGridWidget']),
        ];
    }

    public function dataGridWidget($params)
    {
        echo GridView::widget($params);
    }
}
