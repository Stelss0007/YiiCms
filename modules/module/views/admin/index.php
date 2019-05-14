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
                            <th style="width: 30%">
                                <a href="/admin/theme/index?isAdminInterface=1&amp;sort=name" data-sort="name">Название</a>
                            </th>
                            <th style="width: *">
                                <a href="/admin/theme/index?isAdminInterface=1&amp;sort=description" data-sort="description">Описание</a>
                            </th>
                            <th style="width: 150px;" class="action-column"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($availableModules as $module): ?>
                            <tr data-key="1">
                                <td><?php echo $module->name ?></td>
                                <td><?php echo $module->description ?></td>
                                <td class="btn-col1">
                                    <div class="btn-group btn-group-sm">
                                        <a class="btn btn-control btn-default" href="/admin/module/<?php echo $module->systemName ?>" title="Module Info" aria-label="Module Info" data-pjax="0">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                        <?php if(isset($instaledModules[$module->systemName])): ?>
                                            <a class="btn btn-control btn-default" href="/admin/<?php echo $module->systemName ?>" title="Go to Module" aria-label="Go to Module" data-pjax="0">
                                                <i class="fa fa-cog"></i>
                                            </a>
                                            <a class="btn btn-control btn-default" href="/admin/module/uninstall?module=<?php echo $module->systemName ?>" title="Uninstall" aria-label="Uninstall" data-pjax="0">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <?php if($instaledModules[$module->systemName]->active): ?>
                                                <a class="btn btn-control btn-default" href="/admin/module/deactivate?module=<?php echo $module->systemName ?>" title="Deactivate" aria-label="Deactivate" data-pjax="0">
                                                    <i class="fa fa-pause"></i>
                                                </a>
                                            <?php else: ?>
                                                <a class="btn btn-control btn-default" href="/admin/module/activate?module=<?php echo $module->systemName ?>" title="Activate" aria-label="Activate" data-pjax="0">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <a class="btn btn-control btn-default" href="/admin/module/install?module=<?php echo $module->systemName ?>" title="Install" aria-label="Install" data-pjax="0">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        <?php endif; ?>
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
