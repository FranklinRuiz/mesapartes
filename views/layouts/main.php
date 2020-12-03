<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\bundles\TemplateAsset;
use yii\helpers\Url;

$bundle = TemplateAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="fixed-header menu-pin menu-behind">

        <?php $this->beginBody() ?>

        <nav class="page-sidebar" data-pages="sidebar">
            <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
            <div class="sidebar-overlay-slide from-top" id="appMenu">
                <div class="row">
                    <div class="col-xs-6 no-padding">
                        <a href="#" class="p-l-40"><img src="<?php echo $bundle->baseUrl ?>/img/demo/social_app.svg" alt="socail">
                        </a>
                    </div>
                    <div class="col-xs-6 no-padding">
                        <a href="#" class="p-l-10"><img src="<?php echo $bundle->baseUrl ?>/img/demo/email_app.svg" alt="socail">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 m-t-20 no-padding">
                        <a href="#" class="p-l-40"><img src="<?php echo $bundle->baseUrl ?>/img/demo/calendar_app.svg" alt="socail">
                        </a>
                    </div>
                    <div class="col-xs-6 m-t-20 no-padding">
                        <a href="#" class="p-l-10"><img src="<?php echo $bundle->baseUrl ?>/img/demo/add_more.svg" alt="socail">
                        </a>
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
            <!-- BEGIN SIDEBAR MENU HEADER-->
            <div class="sidebar-header">
                <img src="<?php echo $bundle->baseUrl ?>/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo $bundle->baseUrl ?>/img/logo_white.png" data-src-retina="<?php echo $bundle->baseUrl ?>/img/logo_white_2x.png" width="78" height="22">
                <div class="sidebar-header-controls">
                    <button aria-label="Toggle Drawer" type="button" class="btn btn-icon-link invert sidebar-slide-toggle m-l-20 m-r-10" data-pages-toggle="#appMenu">
                        <i class="pg-icon">chevron_down</i>
                    </button>
                    <button aria-label="Pin Menu" type="button" class="btn btn-icon-link invert d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar">
                        <i class="pg-icon"></i>
                    </button>
                </div>
            </div>
            <!-- END SIDEBAR MENU HEADER-->
            <!-- START SIDEBAR MENU -->
            <?php if (!Yii::$app->user->isGuest): ?>
                <?php $rol = Yii::$app->user->identity->rol; ?>
                <div class="sidebar-menu">
                    <!-- BEGIN SIDEBAR MENU ITEMS-->
                    <ul class="menu-items">
                        <?php if ($rol != 'usuario') { ?>
                            <li class="m-t-20 ">
                                <a href="<?= Yii::$app->urlManager->createUrl("/dashboard"); ?>" class="detailed">
                                    <span class="title">Dashboard</span>
                                    <span class="details">Reportes</span>
                                </a>
                                <span class="icon-thumbnail"><i class="pg-icon">home</i></span>
                            </li>
                            <li>
                                <a href="javascript:;"><span class="title">Crud</span>
                                    <span class=" arrow"></span></a>
                                <span class="icon-thumbnail"><i class="pg-icon">grid</i></span>
                                <ul class="sub-menu">
                                    <li class="">
                                        <a href="<?= Yii::$app->urlManager->createUrl("/area"); ?>">Área</a>
                                        <span class="icon-thumbnail"><i class="pg-icon">Ar</i></span>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                        <li class="">
                            <a href="<?= Yii::$app->urlManager->createUrl("/registro"); ?>" class="detailed">
                                <span class="title">Registro</span>
                                <span class="details">Registro Documento</span>
                            </a>
                            <span class="icon-thumbnail"><i class="pg-icon">page</i></span>
                        </li>
                        <?php if ($rol != 'usuario') { ?>
                            <li class="">
                                <a href="<?= Yii::$app->urlManager->createUrl("/bandeja"); ?>" class="detailed">
                                    <span class="title">Bandeja</span>
                                    <span class="details">Documento Pendiente</span>
                                </a>
                                <span class="icon-thumbnail"><i class="pg-icon">inbox</i></span>
                            </li> 
                        <?php } ?>
                        <?php if ($rol == 'usuario') { ?>
                            <li class="">
                                <a href="<?= Yii::$app->urlManager->createUrl("/seguimiento"); ?>" class="detailed">
                                    <span class="title">Bandeja</span>
                                    <span class="details">Documento enviados</span>
                                </a>
                                <span class="icon-thumbnail"><i class="pg-icon">inbox</i></span>
                            </li> 
                        <?php } ?>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            <?php endif ?>
            <!-- END SIDEBAR MENU -->
        </nav>
        <!-- END SIDEBAR -->
        <!-- END SIDEBPANEL-->
        <!-- START PAGE-CONTAINER -->
        <div class="page-container ">
            <!-- START HEADER -->
            <?php if (!Yii::$app->user->isGuest): ?>
                <div class="header ">
                    <!-- START MOBILE SIDEBAR TOGGLE -->
                    <a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
                        menu</a>
                    <!-- END MOBILE SIDEBAR TOGGLE -->
                    <div class="">
                        <div class="brand inline  m-l-10 ">
                            <img src="<?php echo $bundle->baseUrl ?>/img/logo.png" alt="logo" data-src="<?php echo $bundle->baseUrl ?>/img/logo.png" data-src-retina="<?php echo $bundle->baseUrl ?>/img/logo_2x.png" width="78" height="22">
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <!-- START User Info-->
                        <div class="dropdown pull-right d-lg-block d-none">
                            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown">
                                <span class="thumbnail-wrapper d32 circular inline">
                                    <img src="<?php echo $bundle->baseUrl ?>/img/profiles/avatar.jpg" alt="" data-src="<?php echo $bundle->baseUrl ?>/img/profiles/avatar.jpg"
                                         data-src-retina="<?php echo $bundle->baseUrl ?>/img/profiles/avatar_small2x.jpg" width="32" height="32">
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                                <a href="#" class="dropdown-item"><span>Logeado como <br /><b><?php echo Yii::$app->user->identity->usuario ?></b></span></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">Perfil</a>
                                <a class="dropdown-item" href="javascript:0;"
                                   onclick="document.getElementById('logoutForm').submit()">Cerrar sesión</a>
                                   <?php
                                   echo Html::beginForm(['/login/login/logout'], 'POST', ['id' => 'logoutForm']);
                                   echo Html::endForm()
                                   ?>
                            </div>
                        </div>
                        <!-- END User Info-->

                    </div>
                </div>
            <?php endif ?>
            <!-- END HEADER -->
            <!-- START PAGE CONTENT WRAPPER -->
            <div class="page-content-wrapper ">
                <!-- START PAGE CONTENT -->
                <div class="content ">
                    <!-- START JUMBOTRON -->
                    <div class="jumbotron" data-pages="parallax">
                        <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                            <div class="inner">
                                <!-- START BREADCRUMB -->
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><?= $this->context->module->id ?></a></li>
                                    <li class="breadcrumb-item active"><?= $this->context->action->id ?></li>
                                </ol>
                                <!-- END BREADCRUMB -->
                            </div>
                        </div>
                    </div>
                    <!-- END JUMBOTRON -->
                    <!-- START CONTAINER FLUID -->
                    <div class=" container-fluid   container-fixed-lg">
                        <!-- BEGIN PlACE PAGE CONTENT HERE -->
                        <?= Alert::widget() ?>
                        <?= $content ?>
                        <!-- END PLACE PAGE CONTENT HERE -->
                    </div>
                    <!-- END CONTAINER FLUID -->
                </div>
                <div class="content-loader" id="loader" style="top: 0;display: none;">
                    <img src="<?php echo $bundle->baseUrl ?>/img/load.gif" alt=""/>
                </div>
                <!-- END PAGE CONTENT -->
                <!-- START COPYRIGHT -->
                <!-- START CONTAINER FLUID -->
                <!-- START CONTAINER FLUID -->
                <?php if (!Yii::$app->user->isGuest): ?>
                    <div class=" container-fluid  container-fixed-lg footer">
                        <div class="copyright sm-text-center">
                            <p class="small-text no-margin pull-left sm-pull-reset">
                                ©2020 Todos los derechos reservados. Universidad Tecnológica del Peru.
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                <?php endif ?>
                <!-- END COPYRIGHT -->
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTAINER -->

        <?php $this->registerJsVar('APP_URL', Url::base(true)) ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
