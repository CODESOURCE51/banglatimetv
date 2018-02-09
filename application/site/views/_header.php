<?php error_reporting(0);

$currentDate = date("l, F j, Y");
$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
$engDATE1 = array(1,2,3,4,5,6,7,8,9,0,Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dec,Sat,Sun,Mon,Tue,Wed,Thu,Fri);
$bangDATE1 = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
$this->load->helper('url');
$page_name = $this->router->fetch_class();

switch ($page_name) {
    case "gallery":
        $title = "BANGLATIMETV - GALLERY";
        break;
    case "video":
        $title = "BANGLATIMETV - VIDEO";
        break;
    case "editorial":
        $title = "BANGLATIMETV - EDITORIAL";
        break;    
    default:
       $title = "BANGLATIMETV";
}
?>
<?php
$pagen = $this->uri->segment(3);

switch ($pagen) {
    case "kolkata-news":
        $n_name = "কলকাতা";
        $title = "BANGLATIMETV - KOLKATA NEWS";
        break;
    case "state-news":
        $n_name = "রাজ্য";
        $title = "BANGLATIMETV - STATE NEWS";
        break;
    case "country-news":
        $n_name = "দেশ";
        $title = "BANGLATIMETV - COUNTRY NEWS";
        break;
    case "world-news":
        $n_name = "বিশ্ব";
        $title = "BANGLATIMETV - WORLD NEWS";
        break;
    case "sports-news":
        $n_name = "খেলা";
        $title = "BANGLATIMETV - SPORTS NEWS";
        break;
    case "entertainment-news":
        $n_name = "বিনোদন";
        $title = "BANGLATIMETV - ENTERTAINMENT NEWS";
        break;
    case "life-style-news":
        $n_name = "লাইফ স্টাইল";
        $title = "BANGLATIMETV - LIFE STYLE NEWS";
        break;
        case "editorial-news":
        $n_name = "সম্পাদকীয়";
        $title = "BANGLATIMETV - EDITORIAL NEWS";
        break;
        case "business_news":
        $n_name = "ব্যবসা";
        $title = "BANGLATIMETV - BUSINESS NEWS";
        break;
    default:
       switch ($page_name) {
    case "gallery":
        $n_name = "গ্যালারি";
        $title = "BANGLATIMETV - GALLERY";
        $class = 'current-menu-item';
        break;
    case "video":
        $n_name = "ভিডিও";
        $title = "BANGLATIMETV - VIDEO";
        $class1 = 'current-menu-item';
        break;
    case "editorial-news":
        $n_name = "সম্পাদকীয়";
        $title = "BANGLATIMETV - EDITORIAL";
        $class2 = 'current-menu-item';
        break;    
    default:
       $title = "BANGLATIMETV";
       $n_name = "অনুসন্ধান";
}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="en" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="en" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="en" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<html lang="en-US" itemscope itemtype="http://schema.org/Article">
<head>
    <!-- HEADER -->
    <meta charset="utf-8"/>
    <title><?php echo $title;?></title>

    <!-- SEO -->
    <meta name="description" content="Page description. No longer than 155 characters." />
    <meta name="author" content="">

    <!-- Schema.org markup for Google+ -->
    

    <!-- Twitter Card data -->
   <!--  <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <!--<meta name="twitter:image:src" content="http://www.example.com/image.html"> -->

    <!-- Open Graph data -->
    <?php if(isset($post_data)) { ?>
    <link rel="canonical" href="<?php echo base_url();?>index.php/news/post/<?php echo $post_data[0]['news_id'];?>">
     <meta property="og:url"    content="<?php echo base_url();?>index.php/news/post/<?php echo $post_data[0]['news_id'];?>" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="<?php echo $post_data[0]['name'];?>" />
  <meta property="og:description"   content="<?php echo $post_data[0]['desc'];?>" />
  <meta property="og:image"         content="<?php echo base_url();?>news/<?php echo $post_data[0]['news_image'];?>" /> 
   <meta property="fb:app_id" content="1554842878139182" />  
    <?php } else {?>
     <meta property="og:url"    content="http://banglatimetv.com/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Bangla Time TV" />
  <meta property="og:description"   content="banglatimetv.com.ইন্টারনেটের বাংলা সংবাদ দুনিয়ায় আপন‍াকে স্বাগত। অন‍্যভাবে, অন‍্য ভাবনায় আপনাকে ভাবাতে আর প্রতি মুহূর্তে আপনাকে দিন দুনিয়ার হাল হকিকত দিতে ২৪ ঘণ্টাই আপনার সঙ্গী আমরা। মুহূর্তে স্মার্টফোন ছুঁয়ে বা মাউসের ক্লিকে আপনার সঙ্গী হবে ‍banglatimetv.com। আপনি থাকবেন আপডেটেড। banglatimetv.com আপনার মাধ‍্যম। খবরের সঙ্গে আপনি।" />
  <meta property="og:image"         content="http://banglatimetv.com/assets/site/images/logo.png" /> 
    <?php } ?>
    <!-- END SEO -->
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/favicon/apple-icon-72x72.png"> 
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/favicon/favicon-16x16.png"> 
<link rel="manifest" href="<?php echo base_url();?>assets/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!-- Favicon -->
    <!-- FOR MOBILE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel='stylesheet' id='reset-css' href='<?php echo base_url();?>assets/site/css/reset.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='format-css' href='<?php echo base_url();?>assets/site/css/format.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='refindeslide-css' href='<?php echo base_url();?>assets/site/css/refineslide.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='style-css' href='<?php echo base_url();?>assets/site/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='superfishbase-css' href='<?php echo base_url();?>assets/site/css/superfish.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='prettyPhoto-css' href='<?php echo base_url();?>assets/site/css/prettyPhoto.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='responsive-css' href='<?php echo base_url();?>assets/site/css/responsive.css' type='text/css' media='all'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <link rel='stylesheet' id='awesome-weather-css' href='<?php echo base_url();?>assets/site/plugins/awesome-weather/awesome-weather.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='opensans-googlefont-css' href='https://fonts.googleapis.com/css?family=Open+Sans'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='jnewsticker-base-css' href='<?php echo base_url();?>assets/site/plugins/jnewsticker-for-wordpress/media/frontend.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='jnewsticker-css-css'
          href='<?php echo base_url();?>assets/site/plugins/jnewsticker-for-wordpress/media/jnewsticker/skins/clean_red.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='socialbox-css' href='<?php echo base_url();?>assets/site/plugins/socialbox/assets/css/socialbox.css' type='text/css'
          media='screen'/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/site/plugins/flowplayer/skin/functional.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/site/plugins/lightGallery/css/lightgallery.css">
    <script type='text/javascript' src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/site/plugins/jnewsticker-for-wordpress/media/jnewsticker/newsticker.jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/site/js/jquery-ui.js'></script>
    <script type='text/javascript' src='<?php echo base_url();?>assets/site/plugins/flowplayer/flowplayer.min.js'></script>
	<script type="text/javascript" src="http://www.smartstream.in/banglatime/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="mKvDQzQ4NiqjNSbP0rM88gDPfr2vLc2ZBUMqbdCtz8c=";</script>

    <link href="<?php echo base_url();?>assets/site/pgwmodal.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/site/pgwmodal.min.js"></script>
    <script type="text/javascript">
//         $(window).load(function() {
//     eval($('#kol_news1').attr("onclick"));
//     $('.class1').addClass('current');
// });
function open_modal() {
$.pgwModal({
    target: '#modalContent',
    title: 'Bangla Time APP',
    maxWidth: 600
});
}

    </script>
    <style type='text/css' media='all'>
        /*@import url(http://fonts.googleapis.com/earlyaccess/lohitbengali.css);*/
        body {
        font-family: '4cbengali', sans-serif !important;
    }

    h1, h2, h3, h4, h5, h6, .rs-caption {
        font-family: '4cbengali', sans-serif !important;
        font-weight: 600 !important;
    }
    /*.rs-caption-text {
    white-space: nowrap; 
    width: 50em; 
    overflow: hidden;
    text-overflow: ellipsis;
    color: #ffffff; 
    border: 0px solid #000000;
}*/
    </style>
    <!-- COLOR OPTIONS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/site/css/color.css"/>
    <?php include_once("analyticstracking.php") ?>
</head>
<body class="home blog" onLoad="display_ct();">
<div id="modalContent" style="display: none;">
<center><img src="<?php echo base_url();?>assets/site/images/logo.png" alt="BANGLATIMETV.COM"></center><br/><br/>
   <center> <strong style="color: #000000; font-size: 70px;" >COMING SOON</strong></center>
</div>
<div class="top row">
    <!-- SEARCH BLOCK -->
    <div class="search-block">
        <form action="<?php echo base_url();?>index.php/News/search" methode="get" name="search">
            <input class="search-button" type="submit" value=""/>
            <input type="text" id="s" name="txt_search" value="Search..."
                   onfocus="if (this.value == 'Search...') {this.value = '';}"
                   onblur="if (this.value == '') {this.value = 'Search...';}"/>
        </form>
    </div>
    <div class="search-block">
        <a href="javascript:void(0)" class="openModal1 btg ml10" onclick="open_modal()"><img height="30" style="margin-top: 3px; margin-right: 5px" src="<?php echo base_url();?>assets/site/images/playstore.png" alt=""></a>
    </div>
    <div class="ambrogrid_6 top-nav-wrapper">
        <span id='ct' style="color: white; font-size: 14px; padding-top: 6px; display: inline-block"></span>
    </div>
</div>
<!-- HEADER -->
<div class="header row">
    <script>
        (function ($) {
            $(document).ready(function () {
                $('#newsticker_0').newsticker({
                    'tickerTitle': "<span class='tada animated'><small>Breaking</small> খবর</span>",
                    'style': "scroll",
                    'pauseOnHover': true,
                    'showControls': true,
                    'autoStart': true,
                    'scrollSpeed': "50",
                    'slideSpeed': "1000",
                    'slideEasing': "swing"
                });
            });
        })(jQuery);
    </script>
    <ul class="newsticker" id="newsticker_0">
    <?php foreach($trick_news as $header_news) {?>
        <li><a href="javascript:void(0);"><?php echo $header_news['trick_news'];?></a> <!-- posted 810 days ago -->
        </li>
        
        <?php } ?>
    </ul>
    <!-- /News ticker -->

    <!-- LOGO -->
    <h1 class="header-logo">
        <a href='<?php echo base_url();?>' title="BANGLATIMETV.COM"><img
                src="<?php echo base_url();?>assets/site/images/logo.png"
                alt="BANGLATIMETV.COM"/></a>
    </h1>
    <!-- AD -->
    <div class="header-pub pub728x90" style="max-height: 90px; width: 728px">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/2.0.4/css/glide.core.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/2.0.4/css/glide.theme.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/2.0.4/glide.min.js" type="text/javascript"></script>
        <div id="Glide" class="glide">

            <div class="glide__wrapper">
                <ul class="glide__track">
                <?php foreach($top_banner as $top_add) { ?>
                    <li class="glide__slide"><a href="<?php echo $taurl = $top_add['url'];?>"><img src="<?php echo base_url();?>sponsor/<?php echo $top_add['sp_image'];?>" alt="" class="img-responsive"></a></li>
                    
                <?php } ?>
                </ul>
            </div>

        </div>
    </div>

</div>
<!-- News ticker -->
<div class="navigation row">
    <!-- MAIN MENU -->
    <div class="mgambrogrid_12 main-nav-wrapper">
        <ul id="menu-main" class="sf-menu">
            <li class="menu-item current-menu-item"><a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a></li>
            <?php foreach( $menus as $nav_menu) { ?>
            <li class="menu-item <?php if($n_name == $nav_menu['service'] || $nav_menu['service'] == $p_c_name[0]['service']) echo 'current-menu-item'; else echo '';?>"><a href="<?php echo base_url().'index.php/news/watch/'.$nav_menu['category_slug'];?>"><?php echo $nav_menu['service'];?></a></li>
            <?php } ?>
            <li class="menu-item <?php echo $class;?>"><a href="<?php echo base_url();?>index.php/gallery/view/albums">গ্যালারি</a></li>
            <li class="menu-item <?php echo $class1;?>"><a href="<?php echo base_url();?>index.php/video">ভিডিও</a></li>
<!--            <li class="menu-item --><?php //echo $class2;?><!--"><a href="--><?php //echo base_url().'index.php/news/watch/editorial-news';?><!--">সম্পাদকীয়</a></li>-->
            <!--<li class="menu-item <?php echo $class2;?>"><a href="<?php echo $taurl;?>">শারদসেরা</a></li>-->
        </ul>
    </div>
    <div class="mgambrogrid_12 mobile-nav-wrapper">
        <div class="menu-main-container"><select id="menu-main-1" class="menu dropdown-menu">
                <option value="" class="blank" disabled>যে পাতা দেখবেন বেছে নিন</option>
                <option class="menu-item current-menu-item menu-item-depth-0" value="index.html" selected="selected">
                    হোম পেজ
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    কলকাতা
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    রাজ্য
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    দেশ
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    বিশ্ব
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    খেলা
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    বিনোদন
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    লাইফ স্টাইল
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    গ্যালারি
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    ভিডিও
                </option>
                <option class="menu-item menu-item-depth-0" value="#">
                    সম্পাদকীয়
                </option>
            </select></div>
    </div>
</div>