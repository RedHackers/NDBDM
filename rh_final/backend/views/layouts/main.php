<?php

/**
 * Team: red hackers
 * Coding by yii2, 20170704
 * This is created by yii2 of backend web. 
 */
 
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => 'My Company',
        'brandLabel' => Yii::t('common','website_title'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItemsLeft = [
         ['label' => '首页', 'url' => ['/']],
		//['label' => '首页', 'url' => ['/site/index']],
       /*  ['label' => '类别', 'url' => ['#'], 'items' => [
            ['label' => '少儿组', 'url' => ['/customer/category', 'type' => '0']],
            ['label' => '青少年', 'url' => ['/customer/category', 'type' => '1']],
            ['label' => '中年组', 'url' => ['/customer/category', 'type' => '2']],
            ['label' => '老年组', 'url' => ['/customer/category', 'type' => '3']],
        ]], */
        [
            'label' => '团队信息', 
            'items' => 
            [
                [
                    'label' => 'RhTeamInfo', 
                    'url' => ['/rh-team-info/index']
                ],
                [
                    'label' => 'RhTeamService', 
                    'url' => ['/rh-team-server/index']
                ],
            ],
        ],
        [
            'label' => '成员信息', 
            'items' => 
            [
                [
                    'label' => 'RhMemberInfo', 
                    'url' => ['/rh-member-info/index']
                ],
                [
                    'label' => 'RhMemberLive', 
                    'url' => ['/rh-member-live/index']
                ],
            ],
        ],
        [
            'label' => '活动信息', 
            'items' => 
            [
                [
                    'label' => 'RhActivityInfo', 
                    'url' => ['/rh-activity-info/index']
                ],
                [
                    'label' => 'RhActivityAttend', 
                    'url' => ['/rh-activity-attend/index']
                ],
                [
                    'label' => 'RhActivityShow', 
                    'url' => ['/rh-activity-show/index']
                ],
            ],
        ],
        [
            'label' => '留言信息', 
            'items' => 
            [
                [
                    'label' => 'RhNoteRecord', 
                    'url' => ['/rh-note-record/index']
                ],
                [
                    'label' => 'RhNoteShow', 
                    'url' => ['/rh-note-show/index']
                ],
            ],
        ],
        ['label' => '链接信息', 'url' => ['/rh-info-link/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItemsRight[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItemsRight[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItemsRight[] = [
            //'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            //'url' => ['/site/logout'],
            //'linkOptions' => ['data-method' => 'post']
            'label' => Yii::$app->user->identity->username,
            'items' => [
                ['label' => '<i class= "icon-signout"></i>退出', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
            ],
           
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        //显示html标签
        'encodeLabels' => false,
        'items' => $menuItemsLeft,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        //显示html标签
        'encodeLabels' => false,
        'items' => $menuItemsRight,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
