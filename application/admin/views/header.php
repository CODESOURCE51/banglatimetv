<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Bangla Time TV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link href="<?php echo base_url();?>/assets/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url();?>/assets/admin/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url();?>/assets/admin/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url();?>/assets/admin/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url();?>/assets/admin/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/admin/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/admin/img/favicon.ico">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin/css/magnific-popup.css">
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <span>Bangla Time TV</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    
                    <li><a href="<?php echo base_url();?>admin.php/Dashboard/logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" id="themes">
                    <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                    <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                    <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                    <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                    <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                    <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                    <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                    <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                    <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
                </ul>
            </div>
            <!-- theme selector ends -->


        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/pages"><i class="glyphicon glyphicon-edit"></i><span> Pages</span></a></li>
                          <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/advertorial"><i class="glyphicon glyphicon-eye-open"></i><span> Add Sponsor</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/puja_news"><i class="glyphicon glyphicon-edit"></i><span> Add Puja Special</span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/video_gallery"><i class="glyphicon glyphicon-eye-open"></i><span> Create Video Gallery</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/video_upload"><i class="glyphicon glyphicon-eye-open"></i><span> Upload Video</span></a>
                        </li>
                          <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/category"><i class="glyphicon glyphicon-edit"></i><span> Category Entry</span></a></li>
						 <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/news"><i class="glyphicon glyphicon-eye-open"></i><span> Headline / Current News Entry</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/tricker_news"><i class="glyphicon glyphicon-eye-open"></i><span> Breaking News Entry</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/create_album"><i class="glyphicon glyphicon-eye-open"></i><span> Create Gallery Album</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/add_album_images"><i class="glyphicon glyphicon-eye-open"></i><span> Add Album Images</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/sort_news"><i class="glyphicon glyphicon-eye-open"></i><span> Short News</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/sort_headlines"><i class="glyphicon glyphicon-eye-open"></i><span> Short Headlines</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/sort_breaking_news"><i class="glyphicon glyphicon-eye-open"></i><span> Short Breaking News</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/sort_images"><i class="glyphicon glyphicon-eye-open"></i><span> Short Image Gallery</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/sort_videos"><i class="glyphicon glyphicon-eye-open"></i><span> Short Video Gallery</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url();?>admin.php/Dashboard/general_news"><i class="glyphicon glyphicon-eye-open"></i><span> Today News Entry</span></a>
                        </li>
						
						
                    </ul>
                    <label id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <?php } ?>
