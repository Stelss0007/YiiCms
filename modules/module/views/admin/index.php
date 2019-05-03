<?php

use app\modules\theme\Module;
use Stelssoft\YiiCmsCore\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */


$this->title = Module::t('Modules');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="x_panel">
        <div class="x_title">
            <h3>
                <?php echo Module::t('Modules List');?>
            </h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="text-right">
                <?= Html::a(Module::t('Create Module'), ['create'], ['class' => 'btn btn-success']) ?>
                <?= Html::a(Module::t('Configuration'), ['configuration'], ['class' => 'btn btn-default']) ?>
            </div>

            <div id="w0" class="grid-view">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><a href="/admin/theme/index?isAdminInterface=1&amp;sort=name" data-sort="name">Название</a></th>
                            <th><a href="/admin/theme/index?isAdminInterface=1&amp;sort=description" data-sort="description">Описание</a></th>
                            <th><a href="/admin/theme/index?isAdminInterface=1&amp;sort=version" data-sort="version">Версия</a></th>
                            <th><a href="/admin/theme/index?isAdminInterface=1&amp;sort=author" data-sort="author">Автор</a></th>
                            <th class="action-column">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($availableModules as $module): ?>
                            <tr data-key="1">
                                <td><?php echo $module->name ?></td>
                                <td><?php echo $module->description ?></td>
                                <td><?php echo $module->version ?></td>
                                <td><?php echo $module->author ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a class="btn btn-control btn-default" href="/admin/<?php echo $module->systemName ?>" title="Просмотр" aria-label="Просмотр" data-pjax="0">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
