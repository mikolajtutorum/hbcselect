<?php

$api_key = "AIzaSyD3bs8r9Splhs5S4CSX0jznKgY5kpejn3k"; //your API Key
$api_ur='https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id='.$_GET["id"].'&key='.$api_key;

$data = json_decode(file_get_contents($api_ur));
// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>HBC Select - The platform where you select what you want to watch!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet">
<link rel="stylesheet" href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/pe-icon-7-stroke/css/helper.css">
<style>
a.custom-card,
a.custom-card:hover {
  color: inherit;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="app-container app-theme-gray app-sidebar-full">
        <div class="app-main">
        <?php include("assets/content/sidebar.txt"); ?>



            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="HBC Select" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            Welcome
                            <div class="page-title-subheading">
                                HBC Select is your go-to source for all things HBC Network including news and esports.
                            </div>
                        </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="container-fluid"> 
                            <div class="row">

                                <div class="col-md-12 col-lg-6 col-xl-7">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body p-2">
                                            <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <iframe width="100%" height="515" src="https://www.youtube.com/embed/<?php echo $_GET["id"];?>?autoplay=1"></iframe>
                                            </div>
                                                </div>
                                                    <div class="card-body">
                                                                <h5 class="menu-header-title"><?php echo $data->items['0']->snippet->title;?></h5>
                                                                <h6 class="menu-header-subtitle opacity-6">Published on 
                                                                    <?php echo $data->items['0']->snippet->publishedAt;?>
                                                                </h6>
                                                                <div class="mt-3 row">
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-border mb-sm-3 mb-md-0 border-light no-shadow card">
                                                                            <div class="widget-content">
                                                                                <div class="widget-content-outer">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Views
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers line-height-1 text-primary">
                                                                                                <span><?php echo $data->items['0']->statistics->viewCount;?></span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-progress-wrapper mt-1">
                                                                                        <div class="progress-bar-xs progress">
                                                                                            <div class="progress-bar bg-primary"
                                                                                                 role="progressbar"
                                                                                                 aria-valuenow="76"
                                                                                                 aria-valuemin="0"
                                                                                                 aria-valuemax="100"
                                                                                                 style="width: 100%;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12 col-md-6">
                                                                        <div class="card-border border-light no-shadow card">
                                                                            <div class="widget-content">
                                                                                <div class="widget-content-outer">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Likes
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="widget-numbers line-height-1 text-success">
                                                                                                <span><?php echo $data->items['0']->statistics->likeCount;?></span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-progress-wrapper mt-1">
                                                                                        <div class="progress-bar-xs progress-bar-animated progress">
                                                                                            <div class="progress-bar bg-primary"
                                                                                                 role="progressbar"
                                                                                                 aria-valuenow="23"
                                                                                                 aria-valuemin="0"
                                                                                                 aria-valuemax="100"
                                                                                                 style="width: 100%;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body p-2">content</div></div></div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
</body>
</html>
