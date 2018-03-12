<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;

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
    if (!Yii::$app->user->isGuest)
        $idHabitante = \app\models\Habitantes::getIdPorDocumento(Yii::$app->user->identity->documento);

    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo.svg', ['alt'=>Yii::$app->name, 'style' => 'width: 30%']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top myclass',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>' .
                Html::label(
                    Html::a(Yii::$app->user->identity->usuario, [($idHabitante) ? 'habitantes/view?id=' . $idHabitante : 'index']),
                    null,
                    ['class' => 'btn', 'style' => 'color: white;']
                ) .
                '</li>' .
                '<li>' .
                Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Salir',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php if (!Yii::$app->user->isGuest) { 
                    echo $this->render('notificaciones');
                } ?>
            </div>
            <div class="col-md-8">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content ?>
            </div>
            <div class="col-md-2">
                <?php
                    if (!Yii::$app->user->isGuest) {
                        $items =  [];

                        $items[] = [
                            'url' => Yii::$app->getHomeUrl(),
                            'label' => 'Inicio',
                            'icon' => 'home',
                        ];

                        if (Yii::$app->user->identity->id_rol === 1) {
                            $items[] = [
                                'label' => 'Usuarios',
                                'items' => [
                                    [
                                        'label' => 'Administrar',
                                        'url' => ['/usuarios/index'],
                                        'icon' => 'user',
                                    ],
                                    [
                                        'label' => 'Notificaciones',
                                        'url' => ['/notificaciones/index'],
                                        'icon' => 'envelope',
                                    ],
                                ],
                            ];
                            $items[] = [
                                'url' => ['/apartamentos/index'],
                                'label' => 'Apartamentos',
                                'icon' => 'menu-hamburger',
                            ];
                            $items[] = [
                                'label' => 'Habitantes',
                                'items' => [
                                    [
                                        'label' => 'Administrar',
                                        'url' => ['/habitantes/index'],
                                        'icon' => 'user',
                                    ],
                                    [
                                        'label' => 'Mascotas',
                                        'url' => ['/mascotas/index'],
                                        'icon' => 'grain',
                                    ],
                                    [
                                        'label' => 'Vehículos',
                                        'url' => ['/vehiculos/index'],
                                        'icon' => 'road',
                                    ],
                                ],
                            ];
                            $items[] = [
                                'label' => 'Equipos',
                                'icon' => '',
                                'items' => [
                                    [
                                        'label' => 'Administrar',
                                        'url' => ['/equipos/index'],
                                    ],
                                    [
                                        'label' => 'Mantenimientos',
                                        'url' => ['/mantenimientos/index'],
                                    ],
                                ],
                            ];
                        } else {
                            $items[] = [
                                'label' => 'Apartamentos',
                                'icon' => '',
                                'url' => ['/apartamentos/index'],
                            ];
                        }

                        echo SideNav::widget([
                            'type' => SideNav::TYPE_DEFAULT,
                            'heading' => false,
                            'items' => $items,
                        ]);
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
<script type="text/javascript">
    $.timeago.settings.strings = {
      prefixAgo: "hace",
      prefixFromNow: null,
      suffixAgo: "",
      suffixFromNow: "",
      seconds: "un minuto",
      minute: "un minuto",
      minutes: "%d minutos",
      hour: "una hora",
      hours: "%d horas",
      day: "un día",
      days: "%d días",
      month: "un mes",
      months: "%d meses",
      year: "un año",
      years: "%d años",
      wordSeparator: " ",
      numbers: []
    };

    $(document).ready(function() {
        $("time.timeago").timeago();
    });
</script>
</body>
</html>
<?php $this->endPage() ?>
