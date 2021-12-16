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
</head>
<body>
<div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar bg-royal sidebar-text-light">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="HBC Select" class="logo-src"></a>

                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Heading</li>
                                <li class="mm-active">
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Nav 1
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul class="mm-show">
                                        <li><a  class="mm-active" href="#">Sub-Nav-1</a></li>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-browser"></i>
                                        Nav 2
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                        <li><a href="#">Sub-Nav-1</a></li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Heading 2</li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Nav 3
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                Sub-Nav-2
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="metismenu-icon">
                                                        </i>Sub-Sub-Nav-1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="metismenu-icon">
                                                        </i>Sub-Sub-Nav-1
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Sub-Nav-2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Sub-Nav-2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="app-sidebar__heading">Singular </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-graph2">
                                        </i>Single-Nav
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-graph">
                                        </i>Single-Nav
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-graph1">
                                        </i>Single-Nav
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="container"> 
                            <div class="row">
                                <div id="results"></div>
                            </div>
                        </div>   

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
var App = App || {};

App.YoutubePlaylistLoader = {
  
  resultsTarget: null,
  
  xhr: null,
  
  apiBase: 'https://www.googleapis.com/youtube/v3',
  
  results: null,

  params: {
    playlistId: 'PLp-dDxjZ139lOhf-9TXlBgi7BXd8-CfhV',
    key: 'AIzaSyCO9WXh_74m7ATK50P0vegWRQwjVADShmA',
    part: 'contentDetails,snippet',
    pageToken: null
  },
  
  init: function(resultsTarget) {
    var _this = App.YoutubePlaylistLoader;
    
    _this.resultsTarget = resultsTarget;
    _this.resultsTarget.on('click', '.youtube-result', _this.onResultClick);
    
    _this.getPlaylistItems();
  },
  
  getPlaylistItems: function() {
    var _this = App.YoutubePlaylistLoader;
    
    _this.resultsTarget.html('');
    
    _this.xhr && _this.xhr.abort();
    
    _this.xhr = $.ajax({
      url: _this.apiBase + '/playlistItems',
      data: _this.params,
      success: function(response) {
        
        if ( response.items ) {
          _this.processResults(response.items);
        }
      },
      error: function(xhr, errorThrown, textStatus) {
        console.log(errorThrown);
      }
    });
  },
  
  processResults: function(results) {
    var _this = App.YoutubePlaylistLoader;
    _this.results = results;
    
    var resultsHTML = '';
    
    for ( var i = 0; i < _this.results.length; i++ ) {
      var result = _this.results[i];
      resultsHTML += [
        '<a href="javascript:void(0)" data-video-id="',
          result.contentDetails.videoId,
          '" class="youtube-result">',
          '<img src=' + (
            result.snippet.thumbnails.medium ?
              result.snippet.thumbnails.medium.url :
              result.snippet.thumbnails.default.url
          ) + '>',
          '<strong>' + result.snippet.title + '</strong>',
          '<span class="clearfix"></span>',
        '</a>'
       ].join('');
    }
    
    _this.resultsTarget.html(resultsHTML);
    
  },
  
  onResultClick: function() {
    var _this = App.YoutubePlaylistLoader;
    var videoId = $(this).data('video-id');
    window.open('youtube.php?id=' + videoId, '_system');
  }
  
};

$(function() {
  App.YoutubePlaylistLoader.init($('#results'));
});
                    </script>
                        


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script></body>
</html>
