<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Styles -->
        <link href='public\css\chosen.css' rel='stylesheet' type="text/css">
        <link href="public\css\bootstrap.css" rel="stylesheet" type="text/css">
        <link href="public\css\theme\avocado.css" rel="stylesheet" type="text/css" id="theme-style">
        <link href="public\css\prism.css" rel="stylesheet/less" type="text/css">
        <link href='public\css\fullcalendar.css' rel='stylesheet' type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'>
        <style type="text/css">
            body { padding-top: 102px; }
        </style>
        <link href="public\css\bootstrap-responsive.css" rel="stylesheet">
        <!-- JavaScript/jQuery, Pre-DOM -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="public\js\charts\excanvas.js"></script>
        <script src="public\js\charts\jquery.js"></script>
        <script src="public\js\jquery.jpanelmenu.js"></script>
        <script src="public\js\jquery.js"></script>
        <script src="public\js\avocado-custom-predom.js"></script>
        <!-- HTML5, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Top Fixed Bar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <!-- Top Fixed Bar: Navbar Inner -->
            <div class="navbar-inner">
                <!-- Top Fixed Bar: Container -->
                <div class="container">
                    <!-- Mobile Menu Button -->
                    <a href="#">
                    <button type="button" class="btn btn-navbar mobile-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    </a>
                    <!-- / Mobile Menu Button -->
                    <!-- / Logo / Brand Name -->
                    <a class="brand" href="<?= url('/') ?>"><i class="icon-leaf"></i> PVI<b> App</b></a>
                    <!-- / Logo / Brand Name -->
                    <!-- User Navigation -->
                    <ul class="nav pull-right">
                        <!-- User Navigation: Messages -->
                        <li class="dropdown">
                            <!-- User Navigation: Messages Link -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class=" icon-align-justify"></i>
                            <span class="hidden-phone">Overzichten</span>
                            </a>
                            <!-- / User Navigation: Messages Link -->
                            <!-- / User Navigation: Messages Dropdown -->
                            <ul class="dropdown-menu widget">
                                <!-- User Navigation: Messages Message -->
                                <li><a href="<?= url('/Medewerker') ?>"><i class="icon-th-list"></i> Medewerkers overzicht</a></li>
                                <li><a href="<?= url('/Klassen') ?>"><i class="icon-th-list"></i> Klassen overzicht</a></li>
                                <li><a href="<?= url('/Vakken') ?>"><i class="icon-th-list"></i> Vakken overzicht</a></li>
                                <li><a href="<?= url('/Taken') ?>"><i class="icon-th-list"></i> Taken overzicht</a></li>
                                <li><a href="<?= url('/Regelingen') ?>"><i class="icon-th-list"></i> Regelingen overzicht</a></li>
                                <!-- User Navigation: Messages View All Messages -->
                                <li>
                                    <a href="<?= url('/pvi') ?>" class="text-center">
                                    <i class="icon-check"></i> Een nieuwe PVI
                                    </a>
                                </li>
                                <!-- / User Navigation: Messages View All Messages -->
                            </ul>
                            <!-- / User Navigation: Messages Dropdown -->
                            <!-- / User Navigation: Messages -->
                        </li>
                        <!-- User Navigation: Messages -->
                        <li class="dropdown">
                            <!-- User Navigation: Messages Link -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-signal"></i>
                            <span class="hidden-phone"> Statistieken </span>
                            </a>
                            <!-- / User Navigation: Messages Link -->
                            <!-- / User Navigation: Messages Dropdown -->
                            <ul class="dropdown-menu widget">
                                <!-- User Navigation: Messages Message -->
                                <li>
                                    <a href="<?= url('/Analyse') ?>" class="message">
                                        <h3><i class=" icon-th-list"></i> Analyseblad </h3>
                                    </a>
                                </li>
                                <!-- / User Navigation: Messagses Message -->
                            </ul>
                            <!-- / User Navigation: Messages Dropdown -->
                        </li>
                        <!-- / User Navigation: Messages -->
                        <!-- User Navigation: User -->
                        <li class="dropdown">
                            <!-- User Navigation: User Link -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user icon-white"></i> 
                            <span class="hidden-phone">P. de Jager</span>
                            </a>
                            <!-- / User Navigation: User Link -->
                            <!-- User Navigation: User Dropdown -->
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> Profiel</a></li>
                                <li><a href="#settings" data-toggle="modal"><i class="icon-cog"></i> Instellingen</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-off"></i> Uitloggen</a></li>
                            </ul>
                            <!-- / User Navigation: User Dropdown -->
                        </li>
                        <!-- / User Navigation: User -->
                    </ul>
                    <!-- / User Navigation -->
                </div>
                <!-- / Top Fixed Bar: Container -->
            </div>
            <!-- / Top Fixed Bar: Navbar Inner -->
            <!-- Top Fixed Bar: Breadcrumb -->
            <div class="breadcrumb clearfix">
                <!-- Top Fixed Bar: Breadcrumb Container -->
                <div class="container">
                    <!-- Top Fixed Bar: Breadcrumb Location -->
                    <ul class="pull-left">
                        <li><a href="<?= url('/') ?>"><i class="icon-home"></i> Home</a> <span class="divider">/</span></li>
                        <li class="active"><a href="<?= url('/pvi') ?>"><i class="icon-check"></i> PVI</a></li>
                    </ul>
                    <!-- / Top Fixed Bar: Breadcrumb Location -->
                    <!-- Top Fixed Bar: Breadcrumb Right Navigation -->
                    <ul class="pull-right">
                        <li><a href="login.html"><i class="icon-off"></i> Uitloggen</a></li>
                    </ul>
                    <!-- / Top Fixed Bar: Breadcrumb Right Navigation -->
                </div>
                <!-- / Top Fixed Bar: Breadcrumb Container -->
            </div>
            <!-- / Top Fixed Bar: Breadcrumb -->
        </div>
        <!-- / Top Fixed Bar -->
        <!-- Moldule: Settings -->
        <div id="settings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel"><i class="icon-cog"></i> Instellingen</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="inputName"><i class="icon-user"></i> Naam</label>
                        <div class="controls">
                            <input type="text" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputUsername"><i class="icon-user"></i> Gebruikersnaam</label>
                        <div class="controls">
                            <input type="text" id="inputUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword"><i class="icon-key"></i> Password</label>
                        <div class="controls">
                            <input type="password" id="inputPassword" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputRepeat"><i class="icon-key"></i> Herhaal Password</label>
                        <div class="controls">
                            <input type="password" id="inputRepeat" placeholder="Password">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
                        <div class="controls">
                            <input type="text" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary">Opslaan</button>
            <button class="btn" data-dismiss="modal" aria-hidden="true">Sluiten</button>
            </div>
        </div>




        <!-- / Module: Settings -->
        <?= $body ?>
        <!-- Footer -->
        <footer class="footer">
            <!-- Footer Container -->
            <div class="container">
                <!-- Footer Container: Content -->
                V.Poenai
                <!-- / Footer Container: Content -->
            </div>
            <!-- / Footer Container -->
        </footer>
        <!-- / Footer -->
    </body>
    <!-- Javascript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='public\js\jquery.js'></script>
    <script src='public\js\calendar\fullcalendar.js'></script>
    <script src="public\js\jquery-ui-1.10.2.custom.js"></script>
    <script src="public\js\jquery.prism.js"></script>
    <script src="public\js\jquery.dataTables.js"></script>
    <script src="public\js\charts\jquery.flot.js"></script>
    <script src="public\js\bootstrap\bootstrap.js"></script>
    <script src="public\js\bootstrap\bootstrap-wysiwyg.js"></script>
    <script src="public\js\bootstrap\bootstrap-typeahead.js"></script>
    <script src="public\js\jquery.easing.js"></script>
    <script src="public\js\jquery.chosen.js"></script>
    <script src="public\js\avocado-custom.js"></script>
</html>
</body>