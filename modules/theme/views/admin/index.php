<?php

use app\modules\theme\Module;
use Stelssoft\YiiCmsCore\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\theme\models\ThemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $availableThemesList array */

$this->title = Module::t('Themes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="x_panel">
        <div class="x_title">
            <h3>
                <?php echo Module::t('Themes List');?>
            </h3>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="text-right">
                <?= Html::a(Module::t('Create Theme'), ['create'], ['class' => 'btn btn-success']) ?>
                <?= Html::a(Module::t('Configuration'), ['configuration'], ['class' => 'btn btn-default']) ?>
            </div>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => SerialColumn::class],
                    'id',
                    'name',
                    'description',
                    'title',
                    'version',
                    'author',

                    ['class' => ActionColumn::class],
                ],
            ]); ?>

            <div class="row theme-list">
                <?php foreach ($availableThemesList as $theme): ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="image-container">
                                <img src="/admin/theme/screenshot?theme=<?php echo $theme['themeDirName']; ?>" alt="<?php echo $theme['themeInfo']['name']; ?>">
                            </div>
                            <div class="caption">
                                <h3><?php echo $theme['themeInfo']['name']; ?></h3>
                                <div>
                                    <a href="#" class="btn btn-primary" role="button"><?php echo Module::t('Activate'); ?> </a>
                                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#themeInfo_<?php echo $theme['themeDirName']; ?>" role="button"><?php echo Module::t('Info'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="themeInfo_<?php echo $theme['themeDirName']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body theme-info">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img  src="/admin/theme/screenshot?theme=<?php echo $theme['themeDirName']; ?>" alt="<?php echo $theme['themeInfo']['name']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <h2><?php echo $theme['themeInfo']['name']; ?></h2>
                                            <sup>
                                                <b><?php echo Module::t('Author'); ?>:</b>
                                                <?php echo $theme['themeInfo']['author']; ?>
                                            </sup>
                                            <p><?php echo $theme['themeInfo']['description']; ?></p>
                                            <hr>
                                            <p>
                                                <b><?php echo Module::t('Tags'); ?>:</b>
                                                <?php
                                                foreach($theme['themeInfo']['tags'] as $tag):
                                                    echo sprintf('%s, ', $tag);
                                                endforeach;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
