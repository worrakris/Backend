<?php /* @var $this Controller */ ?>
<?php
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->theme->baseUrl;

$session = new CHttpSession;
$session->open();

$http = new CHttpRequest;
Yii::app()->user->returnUrl = $http->getUrl();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/images/site/favicon.ico" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <?php
        $cs->registerCssFile($themePath . '/css/bootstrap.css');
        $cs->registerCssFile($themePath . '/css/bootstrap-theme.css');
        $cs->registerCssFile($themePath . '/css/font-awesome.min.css');
//        $cs->registerCssFile($themePath . '/css/jquery.fancybox.css?v=2.1.5');
//        $cs->registerCssFile($themePath . '/css/intlTelInput.css');

        $cs->registerCoreScript('jquery', CClientScript::POS_END);
        //$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
        $cs->registerScriptFile($themePath . '/js/bootstrap.min.js', CClientScript::POS_END);
//                $cs->registerScriptFile($themePath . '/js/jquery.fancybox.pack.js?v=2.1.5', CClientScript::POS_END);
//        $cs->registerScriptFile($themePath . '/js/intlTelInput.min.js', CClientScript::POS_END);
//        $cs->registerScriptFile($themePath . '/js/jquery.slimscroll.min.js', CClientScript::POS_END);
        ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Internet Explorer HTML5 enabling code: -->

        <!--[if IE]>

        <script src="http://htm5lshiv.googlecode.com/svn/trunk/html5.js"></script>

        <style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        }
        </style>

        <![endif]-->
    </head>

    <body>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Contact', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                ));
                ?>
            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
