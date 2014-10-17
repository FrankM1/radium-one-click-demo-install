



<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>wordpress-importer/parsers.php at master · wp-plugins/wordpress-importer · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="wp-plugins/wordpress-importer" name="twitter:title" /><meta content="wordpress-importer - WordPress.org Plugin Mirror" name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/2996849?v=2&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/2996849?v=2&amp;s=400" property="og:image" /><meta content="wp-plugins/wordpress-importer" property="og:title" /><meta content="https://github.com/wp-plugins/wordpress-importer" property="og:url" /><meta content="wordpress-importer - WordPress.org Plugin Mirror" property="og:description" />

      <meta name="browser-stats-url" content="/_stats">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    
    <meta name="pjax-timeout" content="1000">

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="58C841FC:292C:3009C45:54411787" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="dHFU+khA/s8dc2I3sASlxMFBy8xkwUCvAhiUVDUKl6o43hrrbeXCNwQLGeOxBjt0HhC6pexiuIjJGLF/dYufwA==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-70d73ee874849f7ef47d397ee1ba2e462a8e8ad53be6d7c38ef36b6d361624f8.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-8be33074433d72290ce4ed6e379494f04da2b3e0f94336f6617f816f195be03b.css" media="all" rel="stylesheet" type="text/css" />
    
    


    <meta http-equiv="x-pjax-version" content="2b284dfdc714d3a952c4a9eb4af58566">

      
  <meta name="description" content="wordpress-importer - WordPress.org Plugin Mirror">
  <meta name="go-import" content="github.com/wp-plugins/wordpress-importer git https://github.com/wp-plugins/wordpress-importer.git">

  <meta content="2996849" name="octolytics-dimension-user_id" /><meta content="wp-plugins" name="octolytics-dimension-user_login" /><meta content="11458916" name="octolytics-dimension-repository_id" /><meta content="wp-plugins/wordpress-importer" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="11458916" name="octolytics-dimension-repository_network_root_id" /><meta content="wp-plugins/wordpress-importer" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/wp-plugins/wordpress-importer/commits/master.atom" rel="alternate" title="Recent Commits to wordpress-importer:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production  vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" ga-data-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="button primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fwp-plugins%2Fwordpress-importer%2Fblob%2Fmaster%2Fparsers.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/wp-plugins/wordpress-importer/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/wp-plugins/wordpress-importer/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <input type="text"
    class="js-site-search-field is-clearable"
    data-hotkey="s"
    name="q"
    placeholder="Search"
    data-global-scope-placeholder="Search GitHub"
    data-repo-scope-placeholder="Search"
    tabindex="1"
    autocapitalize="off">
  <div class="scope-badge">This repository</div>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">


  <li>
      <a href="/login?return_to=%2Fwp-plugins%2Fwordpress-importer"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/wp-plugins/wordpress-importer/stargazers">
      1
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fwp-plugins%2Fwordpress-importer"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/wp-plugins/wordpress-importer/network" class="social-count">
        4
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/wp-plugins" class="url fn" itemprop="url" rel="author"><span itemprop="title">wp-plugins</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/wp-plugins/wordpress-importer" class="js-current-repository js-repo-home-link">wordpress-importer</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<div class="sunken-menu vertical-right repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders" role="navigation" data-issue-count-url="/wp-plugins/wordpress-importer/issues/counts" data-pjax-container-selector="#js-repo-pjax-container">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/wp-plugins/wordpress-importer" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /wp-plugins/wordpress-importer">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/wp-plugins/wordpress-importer/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /wp-plugins/wordpress-importer/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class="js-pull-replace-counter"></span>
            <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/wp-plugins/wordpress-importer/pulse/weekly" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /wp-plugins/wordpress-importer/pulse/weekly">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/wp-plugins/wordpress-importer/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /wp-plugins/wordpress-importer/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                
  
<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/wp-plugins/wordpress-importer.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/wp-plugins/wordpress-importer.git" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/wp-plugins/wordpress-importer" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/wp-plugins/wordpress-importer" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>



                <a href="/wp-plugins/wordpress-importer/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download the contents of wp-plugins/wordpress-importer as a zip file"
                   title="Download the contents of wp-plugins/wordpress-importer as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/wp-plugins/wordpress-importer/blob/c838407131d958b08cdac032338c766e07674209/parsers.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:4457d7798838f773eb01ee54945f6a27 -->

<div class="file-navigation">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/blob/0.5/parsers.php"
                 data-name="0.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.5">0.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/blob/master/parsers.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.6.1/parsers.php"
                 data-name="0.6.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.6.1">0.6.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.6/parsers.php"
                 data-name="0.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.6">0.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.5.2/parsers.php"
                 data-name="0.5.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.5.2">0.5.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.5/parsers.php"
                 data-name="0.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.5">0.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.4/parsers.php"
                 data-name="0.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.4">0.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.3/parsers.php"
                 data-name="0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.3">0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/wp-plugins/wordpress-importer/tree/0.2/parsers.php"
                 data-name="0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="0.2">0.2</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/wp-plugins/wordpress-importer/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button class="js-zeroclipboard minibutton zeroclipboard-button"
          data-clipboard-text="parsers.php"
          aria-label="Copy to clipboard"
          data-copied-hint="Copied!">
      <span class="octicon octicon-clippy"></span>
    </button>
  </div>

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/wp-plugins/wordpress-importer" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">wordpress-importer</span></a></span></span><span class="separator"> / </span><strong class="final-path">parsers.php</strong>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/wp-plugins/wordpress-importer/contributors/master/parsers.php">
    <div class="file-history-tease-header">
      Fetching contributors&hellip;
    </div>

    <div class="participation">
      <p class="loader-loading"><img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
          <span>665 lines (589 sloc)</span>
          <span class="meta-divider"></span>
        <span>23.486 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
          <a href="/wp-plugins/wordpress-importer/raw/master/parsers.php" class="minibutton " id="raw-url">Raw</a>
            <a href="/wp-plugins/wordpress-importer/blame/master/parsers.php" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/wp-plugins/wordpress-importer/commits/master/parsers.php" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->


            <a class="octicon-button disabled tooltipped tooltipped-w" href="#"
               aria-label="You must be signed in to make or propose changes"><span class="octicon octicon-pencil"></span></a>

          <a class="octicon-button danger disabled tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </a>
      </div><!-- /.actions -->
    </div>
    
  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size-8 js-file-line-container">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code js-file-line"><span class="o">&lt;?</span><span class="nx">php</span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code js-file-line"><span class="sd">/**</span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code js-file-line"><span class="sd"> * WordPress eXtended RSS file parser implementations</span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code js-file-line"><span class="sd"> *</span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code js-file-line"><span class="sd"> * @package WordPress</span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code js-file-line"><span class="sd"> * @subpackage Importer</span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code js-file-line"><span class="sd"> */</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code js-file-line"><span class="sd">/**</span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code js-file-line"><span class="sd"> * WordPress Importer class for managing parsing of WXR files.</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code js-file-line"><span class="sd"> */</span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code js-file-line"><span class="k">class</span> <span class="nc">WXR_Parser</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code js-file-line">		<span class="c1">// Attempt to use proper XML parsers first</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nb">extension_loaded</span><span class="p">(</span> <span class="s1">&#39;simplexml&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code js-file-line">			<span class="nv">$parser</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">WXR_Parser_SimpleXML</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code js-file-line">			<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$parser</span><span class="o">-&gt;</span><span class="na">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code js-file-line">			<span class="c1">// If SimpleXML succeeds or this is an invalid WXR file then return the results</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nx">is_wp_error</span><span class="p">(</span> <span class="nv">$result</span> <span class="p">)</span> <span class="o">||</span> <span class="s1">&#39;SimpleXML_parse_error&#39;</span> <span class="o">!=</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">get_error_code</span><span class="p">()</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code js-file-line">				<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code js-file-line">		<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span> <span class="nb">extension_loaded</span><span class="p">(</span> <span class="s1">&#39;xml&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code js-file-line">			<span class="nv">$parser</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">WXR_Parser_XML</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code js-file-line">			<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$parser</span><span class="o">-&gt;</span><span class="na">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code js-file-line">			<span class="c1">// If XMLParser succeeds or this is an invalid WXR file then return the results</span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nx">is_wp_error</span><span class="p">(</span> <span class="nv">$result</span> <span class="p">)</span> <span class="o">||</span> <span class="s1">&#39;XML_parse_error&#39;</span> <span class="o">!=</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">get_error_code</span><span class="p">()</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code js-file-line">				<span class="k">return</span> <span class="nv">$result</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code js-file-line">		<span class="c1">// We have a malformed XML file, so display the error and fallthrough to regex</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;IMPORT_DEBUG&#39;</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nx">IMPORT_DEBUG</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s1">&#39;&lt;pre&gt;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span> <span class="s1">&#39;SimpleXML_parse_error&#39;</span> <span class="o">==</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">get_error_code</span><span class="p">()</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code js-file-line">				<span class="k">foreach</span>  <span class="p">(</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">get_error_data</span><span class="p">()</span> <span class="k">as</span> <span class="nv">$error</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code js-file-line">					<span class="k">echo</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">line</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">column</span> <span class="o">.</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nx">esc_html</span><span class="p">(</span> <span class="nv">$error</span><span class="o">-&gt;</span><span class="na">message</span> <span class="p">)</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code js-file-line">			<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span> <span class="s1">&#39;XML_parse_error&#39;</span> <span class="o">==</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">get_error_code</span><span class="p">()</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code js-file-line">				<span class="nv">$error</span> <span class="o">=</span> <span class="nv">$result</span><span class="o">-&gt;</span><span class="na">get_error_data</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code js-file-line">				<span class="k">echo</span> <span class="nv">$error</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$error</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nx">esc_html</span><span class="p">(</span> <span class="nv">$error</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s1">&#39;&lt;/pre&gt;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code js-file-line">			<span class="k">echo</span> <span class="s1">&#39;&lt;p&gt;&lt;strong&gt;&#39;</span> <span class="o">.</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;There was an error when reading this WXR file&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&lt;/strong&gt;&lt;br /&gt;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code js-file-line">			<span class="k">echo</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;Details are shown above. The importer will now try again with a different parser...&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&lt;/p&gt;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code js-file-line">		<span class="c1">// use regular expressions if nothing else available or this is bad XML</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code js-file-line">		<span class="nv">$parser</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">WXR_Parser_Regex</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$parser</span><span class="o">-&gt;</span><span class="na">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code js-file-line"><span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code js-file-line"><span class="sd">/**</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code js-file-line"><span class="sd"> * WXR Parser that makes use of the SimpleXML PHP extension.</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code js-file-line"><span class="sd"> */</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code js-file-line"><span class="k">class</span> <span class="nc">WXR_Parser_SimpleXML</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code js-file-line">		<span class="nv">$authors</span> <span class="o">=</span> <span class="nv">$posts</span> <span class="o">=</span> <span class="nv">$categories</span> <span class="o">=</span> <span class="nv">$tags</span> <span class="o">=</span> <span class="nv">$terms</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code js-file-line">		<span class="nv">$internal_errors</span> <span class="o">=</span> <span class="nb">libxml_use_internal_errors</span><span class="p">(</span><span class="k">true</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code js-file-line">		<span class="nv">$dom</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">DOMDocument</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code js-file-line">		<span class="nv">$old_value</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nb">function_exists</span><span class="p">(</span> <span class="s1">&#39;libxml_disable_entity_loader&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code js-file-line">			<span class="nv">$old_value</span> <span class="o">=</span> <span class="nb">libxml_disable_entity_loader</span><span class="p">(</span> <span class="k">true</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code js-file-line">		<span class="nv">$success</span> <span class="o">=</span> <span class="nv">$dom</span><span class="o">-&gt;</span><span class="na">loadXML</span><span class="p">(</span> <span class="nb">file_get_contents</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">is_null</span><span class="p">(</span> <span class="nv">$old_value</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code js-file-line">			<span class="nb">libxml_disable_entity_loader</span><span class="p">(</span> <span class="nv">$old_value</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$success</span> <span class="o">||</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$dom</span><span class="o">-&gt;</span><span class="na">doctype</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;SimpleXML_parse_error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;There was an error when reading this WXR file&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">),</span> <span class="nb">libxml_get_errors</span><span class="p">()</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code js-file-line">		<span class="nv">$xml</span> <span class="o">=</span> <span class="nb">simplexml_import_dom</span><span class="p">(</span> <span class="nv">$dom</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code js-file-line">		<span class="nb">unset</span><span class="p">(</span> <span class="nv">$dom</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code js-file-line">		<span class="c1">// halt if loading produces an error</span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$xml</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;SimpleXML_parse_error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;There was an error when reading this WXR file&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">),</span> <span class="nb">libxml_get_errors</span><span class="p">()</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code js-file-line">		<span class="nv">$wxr_version</span> <span class="o">=</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">xpath</span><span class="p">(</span><span class="s1">&#39;/rss/channel/wp:wxr_version&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$wxr_version</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;WXR_parse_error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;This does not appear to be a WXR file, missing/invalid WXR version number&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code js-file-line">		<span class="nv">$wxr_version</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nb">trim</span><span class="p">(</span> <span class="nv">$wxr_version</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code js-file-line">		<span class="c1">// confirm that we are dealing with the correct file format</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;/^\d+\.\d+$/&#39;</span><span class="p">,</span> <span class="nv">$wxr_version</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;WXR_parse_error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;This does not appear to be a WXR file, missing/invalid WXR version number&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code js-file-line">		<span class="nv">$base_url</span> <span class="o">=</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">xpath</span><span class="p">(</span><span class="s1">&#39;/rss/channel/wp:base_site_url&#39;</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code js-file-line">		<span class="nv">$base_url</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nb">trim</span><span class="p">(</span> <span class="nv">$base_url</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code js-file-line">		<span class="nv">$namespaces</span> <span class="o">=</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">getDocNamespaces</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code js-file-line">			<span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;http://wordpress.org/export/1.1/&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;excerpt&#39;</span><span class="p">]</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code js-file-line">			<span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;excerpt&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="s1">&#39;http://wordpress.org/export/1.1/excerpt/&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code js-file-line">		<span class="c1">// grab authors</span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">xpath</span><span class="p">(</span><span class="s1">&#39;/rss/channel/wp:author&#39;</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$author_arr</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code js-file-line">			<span class="nv">$a</span> <span class="o">=</span> <span class="nv">$author_arr</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code js-file-line">			<span class="nv">$login</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$a</span><span class="o">-&gt;</span><span class="na">author_login</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code js-file-line">			<span class="nv">$authors</span><span class="p">[</span><span class="nv">$login</span><span class="p">]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code js-file-line">				<span class="s1">&#39;author_id&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$a</span><span class="o">-&gt;</span><span class="na">author_id</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code js-file-line">				<span class="s1">&#39;author_login&#39;</span> <span class="o">=&gt;</span> <span class="nv">$login</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code js-file-line">				<span class="s1">&#39;author_email&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$a</span><span class="o">-&gt;</span><span class="na">author_email</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code js-file-line">				<span class="s1">&#39;author_display_name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$a</span><span class="o">-&gt;</span><span class="na">author_display_name</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code js-file-line">				<span class="s1">&#39;author_first_name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$a</span><span class="o">-&gt;</span><span class="na">author_first_name</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code js-file-line">				<span class="s1">&#39;author_last_name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$a</span><span class="o">-&gt;</span><span class="na">author_last_name</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code js-file-line">			<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code js-file-line">		<span class="c1">// grab cats, tags and terms</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">xpath</span><span class="p">(</span><span class="s1">&#39;/rss/channel/wp:category&#39;</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$term_arr</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code js-file-line">			<span class="nv">$t</span> <span class="o">=</span> <span class="nv">$term_arr</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code js-file-line">			<span class="nv">$categories</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code js-file-line">				<span class="s1">&#39;term_id&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_id</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code js-file-line">				<span class="s1">&#39;category_nicename&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">category_nicename</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code js-file-line">				<span class="s1">&#39;category_parent&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">category_parent</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code js-file-line">				<span class="s1">&#39;cat_name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">cat_name</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code js-file-line">				<span class="s1">&#39;category_description&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">category_description</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code js-file-line">			<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">xpath</span><span class="p">(</span><span class="s1">&#39;/rss/channel/wp:tag&#39;</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$term_arr</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code js-file-line">			<span class="nv">$t</span> <span class="o">=</span> <span class="nv">$term_arr</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code js-file-line">			<span class="nv">$tags</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code js-file-line">				<span class="s1">&#39;term_id&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_id</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code js-file-line">				<span class="s1">&#39;tag_slug&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">tag_slug</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code js-file-line">				<span class="s1">&#39;tag_name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">tag_name</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code js-file-line">				<span class="s1">&#39;tag_description&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">tag_description</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code js-file-line">			<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">xpath</span><span class="p">(</span><span class="s1">&#39;/rss/channel/wp:term&#39;</span><span class="p">)</span> <span class="k">as</span> <span class="nv">$term_arr</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code js-file-line">			<span class="nv">$t</span> <span class="o">=</span> <span class="nv">$term_arr</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code js-file-line">			<span class="nv">$terms</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code js-file-line">				<span class="s1">&#39;term_id&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_id</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code js-file-line">				<span class="s1">&#39;term_taxonomy&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_taxonomy</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code js-file-line">				<span class="s1">&#39;slug&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_slug</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code js-file-line">				<span class="s1">&#39;term_parent&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_parent</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code js-file-line">				<span class="s1">&#39;term_name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_name</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code js-file-line">				<span class="s1">&#39;term_description&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$t</span><span class="o">-&gt;</span><span class="na">term_description</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code js-file-line">			<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code js-file-line">		<span class="c1">// grab posts</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$xml</span><span class="o">-&gt;</span><span class="na">channel</span><span class="o">-&gt;</span><span class="na">item</span> <span class="k">as</span> <span class="nv">$item</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code js-file-line">			<span class="nv">$post</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code js-file-line">				<span class="s1">&#39;post_title&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">title</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code js-file-line">				<span class="s1">&#39;guid&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">guid</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code js-file-line">			<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code js-file-line">			<span class="nv">$dc</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="s1">&#39;http://purl.org/dc/elements/1.1/&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_author&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$dc</span><span class="o">-&gt;</span><span class="na">creator</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code js-file-line">			<span class="nv">$content</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="s1">&#39;http://purl.org/rss/1.0/modules/content/&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code js-file-line">			<span class="nv">$excerpt</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;excerpt&#39;</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_content&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$content</span><span class="o">-&gt;</span><span class="na">encoded</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_excerpt&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$excerpt</span><span class="o">-&gt;</span><span class="na">encoded</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code js-file-line">			<span class="nv">$wp</span> <span class="o">=</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">children</span><span class="p">(</span> <span class="nv">$namespaces</span><span class="p">[</span><span class="s1">&#39;wp&#39;</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_id</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_date&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_date</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_date_gmt&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_date_gmt</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;comment_status&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">comment_status</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;ping_status&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">ping_status</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_name</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;status&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">status</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_parent&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_parent</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;menu_order&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">menu_order</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_type&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_type</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;post_password&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">post_password</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code js-file-line">			<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;is_sticky&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">is_sticky</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">attachment_url</span><span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code js-file-line">				<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;attachment_url&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">attachment_url</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code js-file-line">			<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$item</span><span class="o">-&gt;</span><span class="na">category</span> <span class="k">as</span> <span class="nv">$c</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code js-file-line">				<span class="nv">$att</span> <span class="o">=</span> <span class="nv">$c</span><span class="o">-&gt;</span><span class="na">attributes</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$att</span><span class="p">[</span><span class="s1">&#39;nicename&#39;</span><span class="p">]</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code js-file-line">					<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;terms&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code js-file-line">						<span class="s1">&#39;name&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$c</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code js-file-line">						<span class="s1">&#39;slug&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$att</span><span class="p">[</span><span class="s1">&#39;nicename&#39;</span><span class="p">],</span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code js-file-line">						<span class="s1">&#39;domain&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$att</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">]</span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code js-file-line">					<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code js-file-line">			<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">postmeta</span> <span class="k">as</span> <span class="nv">$meta</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code js-file-line">				<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;postmeta&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code js-file-line">					<span class="s1">&#39;key&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$meta</span><span class="o">-&gt;</span><span class="na">meta_key</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code js-file-line">					<span class="s1">&#39;value&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$meta</span><span class="o">-&gt;</span><span class="na">meta_value</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code js-file-line">				<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code js-file-line">			<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$wp</span><span class="o">-&gt;</span><span class="na">comment</span> <span class="k">as</span> <span class="nv">$comment</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code js-file-line">				<span class="nv">$meta</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">commentmeta</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code js-file-line">					<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">commentmeta</span> <span class="k">as</span> <span class="nv">$m</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code js-file-line">						<span class="nv">$meta</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code js-file-line">							<span class="s1">&#39;key&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$m</span><span class="o">-&gt;</span><span class="na">meta_key</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code js-file-line">							<span class="s1">&#39;value&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$m</span><span class="o">-&gt;</span><span class="na">meta_value</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code js-file-line">						<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code js-file-line">					<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code js-file-line">			</td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code js-file-line">				<span class="nv">$post</span><span class="p">[</span><span class="s1">&#39;comments&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code js-file-line">					<span class="s1">&#39;comment_id&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_id</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code js-file-line">					<span class="s1">&#39;comment_author&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_author</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code js-file-line">					<span class="s1">&#39;comment_author_email&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_author_email</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code js-file-line">					<span class="s1">&#39;comment_author_IP&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_author_IP</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code js-file-line">					<span class="s1">&#39;comment_author_url&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_author_url</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code js-file-line">					<span class="s1">&#39;comment_date&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_date</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code js-file-line">					<span class="s1">&#39;comment_date_gmt&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_date_gmt</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code js-file-line">					<span class="s1">&#39;comment_content&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_content</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code js-file-line">					<span class="s1">&#39;comment_approved&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_approved</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code js-file-line">					<span class="s1">&#39;comment_type&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_type</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code js-file-line">					<span class="s1">&#39;comment_parent&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">string</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_parent</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code js-file-line">					<span class="s1">&#39;comment_user_id&#39;</span> <span class="o">=&gt;</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span> <span class="nv">$comment</span><span class="o">-&gt;</span><span class="na">comment_user_id</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code js-file-line">					<span class="s1">&#39;commentmeta&#39;</span> <span class="o">=&gt;</span> <span class="nv">$meta</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code js-file-line">				<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code js-file-line">			<span class="nv">$posts</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$post</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code js-file-line">			<span class="s1">&#39;authors&#39;</span> <span class="o">=&gt;</span> <span class="nv">$authors</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code js-file-line">			<span class="s1">&#39;posts&#39;</span> <span class="o">=&gt;</span> <span class="nv">$posts</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code js-file-line">			<span class="s1">&#39;categories&#39;</span> <span class="o">=&gt;</span> <span class="nv">$categories</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code js-file-line">			<span class="s1">&#39;tags&#39;</span> <span class="o">=&gt;</span> <span class="nv">$tags</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code js-file-line">			<span class="s1">&#39;terms&#39;</span> <span class="o">=&gt;</span> <span class="nv">$terms</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code js-file-line">			<span class="s1">&#39;base_url&#39;</span> <span class="o">=&gt;</span> <span class="nv">$base_url</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code js-file-line">			<span class="s1">&#39;version&#39;</span> <span class="o">=&gt;</span> <span class="nv">$wxr_version</span></td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code js-file-line"><span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code js-file-line"><span class="sd">/**</span></td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code js-file-line"><span class="sd"> * WXR Parser that makes use of the XML Parser PHP extension.</span></td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code js-file-line"><span class="sd"> */</span></td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code js-file-line"><span class="k">class</span> <span class="nc">WXR_Parser_XML</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$wp_tags</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code js-file-line">		<span class="s1">&#39;wp:post_id&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:post_date&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:post_date_gmt&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_status&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:ping_status&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:attachment_url&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code js-file-line">		<span class="s1">&#39;wp:status&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:post_name&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:post_parent&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:menu_order&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:post_type&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:post_password&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code js-file-line">		<span class="s1">&#39;wp:is_sticky&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:term_id&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:category_nicename&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:category_parent&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:cat_name&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:category_description&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code js-file-line">		<span class="s1">&#39;wp:tag_slug&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:tag_name&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:tag_description&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:term_taxonomy&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:term_parent&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code js-file-line">		<span class="s1">&#39;wp:term_name&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:term_description&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:author_id&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:author_login&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:author_email&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:author_display_name&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code js-file-line">		<span class="s1">&#39;wp:author_first_name&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:author_last_name&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code js-file-line">	<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$wp_sub_tags</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code js-file-line">		<span class="s1">&#39;wp:comment_id&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author_email&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author_url&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code js-file-line">		<span class="s1">&#39;wp:comment_author_IP&#39;</span><span class="p">,</span>	<span class="s1">&#39;wp:comment_date&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_date_gmt&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_content&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code js-file-line">		<span class="s1">&#39;wp:comment_approved&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_type&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_parent&#39;</span><span class="p">,</span> <span class="s1">&#39;wp:comment_user_id&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code js-file-line">	<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">wxr_version</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_post</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authors</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">posts</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">term</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">category</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">tag</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code js-file-line">		<span class="nv">$xml</span> <span class="o">=</span> <span class="nb">xml_parser_create</span><span class="p">(</span> <span class="s1">&#39;UTF-8&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code js-file-line">		<span class="nb">xml_parser_set_option</span><span class="p">(</span> <span class="nv">$xml</span><span class="p">,</span> <span class="nx">XML_OPTION_SKIP_WHITE</span><span class="p">,</span> <span class="mi">1</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code js-file-line">		<span class="nb">xml_parser_set_option</span><span class="p">(</span> <span class="nv">$xml</span><span class="p">,</span> <span class="nx">XML_OPTION_CASE_FOLDING</span><span class="p">,</span> <span class="mi">0</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code js-file-line">		<span class="nb">xml_set_object</span><span class="p">(</span> <span class="nv">$xml</span><span class="p">,</span> <span class="nv">$this</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code js-file-line">		<span class="nb">xml_set_character_data_handler</span><span class="p">(</span> <span class="nv">$xml</span><span class="p">,</span> <span class="s1">&#39;cdata&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code js-file-line">		<span class="nb">xml_set_element_handler</span><span class="p">(</span> <span class="nv">$xml</span><span class="p">,</span> <span class="s1">&#39;tag_open&#39;</span><span class="p">,</span> <span class="s1">&#39;tag_close&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">xml_parse</span><span class="p">(</span> <span class="nv">$xml</span><span class="p">,</span> <span class="nb">file_get_contents</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">),</span> <span class="k">true</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code js-file-line">			<span class="nv">$current_line</span> <span class="o">=</span> <span class="nb">xml_get_current_line_number</span><span class="p">(</span> <span class="nv">$xml</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code js-file-line">			<span class="nv">$current_column</span> <span class="o">=</span> <span class="nb">xml_get_current_column_number</span><span class="p">(</span> <span class="nv">$xml</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code js-file-line">			<span class="nv">$error_code</span> <span class="o">=</span> <span class="nb">xml_get_error_code</span><span class="p">(</span> <span class="nv">$xml</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code js-file-line">			<span class="nv">$error_string</span> <span class="o">=</span> <span class="nb">xml_error_string</span><span class="p">(</span> <span class="nv">$error_code</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;XML_parse_error&#39;</span><span class="p">,</span> <span class="s1">&#39;There was an error when reading this WXR file&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span> <span class="nv">$current_line</span><span class="p">,</span> <span class="nv">$current_column</span><span class="p">,</span> <span class="nv">$error_string</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code js-file-line">		<span class="nb">xml_parser_free</span><span class="p">(</span> <span class="nv">$xml</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;/^\d+\.\d+$/&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">wxr_version</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;WXR_parse_error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;This does not appear to be a WXR file, missing/invalid WXR version number&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code js-file-line">			<span class="s1">&#39;authors&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authors</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code js-file-line">			<span class="s1">&#39;posts&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">posts</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code js-file-line">			<span class="s1">&#39;categories&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">category</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code js-file-line">			<span class="s1">&#39;tags&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">tag</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code js-file-line">			<span class="s1">&#39;terms&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">term</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code js-file-line">			<span class="s1">&#39;base_url&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">base_url</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code js-file-line">			<span class="s1">&#39;version&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">wxr_version</span></td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">tag_open</span><span class="p">(</span> <span class="nv">$parse</span><span class="p">,</span> <span class="nv">$tag</span><span class="p">,</span> <span class="nv">$attr</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nb">in_array</span><span class="p">(</span> <span class="nv">$tag</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">wp_tags</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span> <span class="nv">$tag</span><span class="p">,</span> <span class="mi">3</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code js-file-line">			<span class="k">return</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nb">in_array</span><span class="p">(</span> <span class="nv">$tag</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">wp_sub_tags</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span> <span class="nv">$tag</span><span class="p">,</span> <span class="mi">3</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code js-file-line">			<span class="k">return</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code js-file-line">		<span class="k">switch</span> <span class="p">(</span> <span class="nv">$tag</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;category&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$attr</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">],</span> <span class="nv">$attr</span><span class="p">[</span><span class="s1">&#39;nicename&#39;</span><span class="p">])</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$attr</span><span class="p">[</span><span class="s1">&#39;domain&#39;</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;slug&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$attr</span><span class="p">[</span><span class="s1">&#39;nicename&#39;</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;item&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_post</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;title&#39;</span><span class="o">:</span> <span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_post</span> <span class="p">)</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="s1">&#39;post_title&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;guid&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="s1">&#39;guid&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;dc:creator&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="s1">&#39;post_author&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;content:encoded&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="s1">&#39;post_content&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
        <td id="LC315" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;excerpt:encoded&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="s1">&#39;post_excerpt&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
        <td id="LC316" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
        <td id="LC317" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:term_slug&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="s1">&#39;slug&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
        <td id="LC318" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:meta_key&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span> <span class="o">=</span> <span class="s1">&#39;key&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
        <td id="LC319" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:meta_value&#39;</span><span class="o">:</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span> <span class="o">=</span> <span class="s1">&#39;value&#39;</span><span class="p">;</span> <span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
        <td id="LC320" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
        <td id="LC321" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
        <td id="LC322" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
        <td id="LC323" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">cdata</span><span class="p">(</span> <span class="nv">$parser</span><span class="p">,</span> <span class="nv">$cdata</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
        <td id="LC324" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nb">trim</span><span class="p">(</span> <span class="nv">$cdata</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
        <td id="LC325" class="blob-code js-file-line">			<span class="k">return</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
        <td id="LC326" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
        <td id="LC327" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="o">.=</span> <span class="nb">trim</span><span class="p">(</span> <span class="nv">$cdata</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
        <td id="LC328" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
        <td id="LC329" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
        <td id="LC330" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">tag_close</span><span class="p">(</span> <span class="nv">$parser</span><span class="p">,</span> <span class="nv">$tag</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
        <td id="LC331" class="blob-code js-file-line">		<span class="k">switch</span> <span class="p">(</span> <span class="nv">$tag</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
        <td id="LC332" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:comment&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
        <td id="LC333" class="blob-code js-file-line">				<span class="nb">unset</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;key&#39;</span><span class="p">],</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">]</span> <span class="p">);</span> <span class="c1">// remove meta sub_data</span></td>
      </tr>
      <tr>
        <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
        <td id="LC334" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
        <td id="LC335" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">[</span><span class="s1">&#39;comments&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
        <td id="LC336" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
        <td id="LC337" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
        <td id="LC338" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:commentmeta&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
        <td id="LC339" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;commentmeta&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
        <td id="LC340" class="blob-code js-file-line">					<span class="s1">&#39;key&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;key&#39;</span><span class="p">],</span></td>
      </tr>
      <tr>
        <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
        <td id="LC341" class="blob-code js-file-line">					<span class="s1">&#39;value&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;value&#39;</span><span class="p">]</span></td>
      </tr>
      <tr>
        <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
        <td id="LC342" class="blob-code js-file-line">				<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
        <td id="LC343" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
        <td id="LC344" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;category&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
        <td id="LC345" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
        <td id="LC346" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
        <td id="LC347" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">[</span><span class="s1">&#39;terms&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
        <td id="LC348" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
        <td id="LC349" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
        <td id="LC350" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
        <td id="LC351" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:postmeta&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
        <td id="LC352" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
        <td id="LC353" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">[</span><span class="s1">&#39;postmeta&#39;</span><span class="p">][]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
        <td id="LC354" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
        <td id="LC355" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
        <td id="LC356" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;item&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
        <td id="LC357" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">posts</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
        <td id="LC358" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
        <td id="LC359" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
        <td id="LC360" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:category&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
        <td id="LC361" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:tag&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
        <td id="LC362" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:term&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
        <td id="LC363" class="blob-code js-file-line">				<span class="nv">$n</span> <span class="o">=</span> <span class="nb">substr</span><span class="p">(</span> <span class="nv">$tag</span><span class="p">,</span> <span class="mi">3</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
        <td id="LC364" class="blob-code js-file-line">				<span class="nb">array_push</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="nv">$n</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
        <td id="LC365" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
        <td id="LC366" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
        <td id="LC367" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:author&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
        <td id="LC368" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">[</span><span class="s1">&#39;author_login&#39;</span><span class="p">])</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
        <td id="LC369" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authors</span><span class="p">[</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">[</span><span class="s1">&#39;author_login&#39;</span><span class="p">]]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
        <td id="LC370" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
        <td id="LC371" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
        <td id="LC372" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:base_site_url&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
        <td id="LC373" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">base_url</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
        <td id="LC374" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
        <td id="LC375" class="blob-code js-file-line">			<span class="k">case</span> <span class="s1">&#39;wp:wxr_version&#39;</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
        <td id="LC376" class="blob-code js-file-line">				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">wxr_version</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
        <td id="LC377" class="blob-code js-file-line">				<span class="k">break</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
        <td id="LC378" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
        <td id="LC379" class="blob-code js-file-line">			<span class="k">default</span><span class="o">:</span></td>
      </tr>
      <tr>
        <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
        <td id="LC380" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
        <td id="LC381" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sub_data</span><span class="p">[</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span><span class="p">]</span> <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="p">)</span> <span class="o">?</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
        <td id="LC382" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_sub_tag</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
        <td id="LC383" class="blob-code js-file-line">				<span class="p">}</span> <span class="k">else</span> <span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
        <td id="LC384" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">data</span><span class="p">[</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span><span class="p">]</span> <span class="o">=</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="p">)</span> <span class="o">?</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
        <td id="LC385" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">in_tag</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
        <td id="LC386" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
        <td id="LC387" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
        <td id="LC388" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
        <td id="LC389" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">cdata</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
        <td id="LC390" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
        <td id="LC391" class="blob-code js-file-line"><span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
        <td id="LC392" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
        <td id="LC393" class="blob-code js-file-line"><span class="sd">/**</span></td>
      </tr>
      <tr>
        <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
        <td id="LC394" class="blob-code js-file-line"><span class="sd"> * WXR Parser that uses regular expressions. Fallback for installs without an XML parser.</span></td>
      </tr>
      <tr>
        <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
        <td id="LC395" class="blob-code js-file-line"><span class="sd"> */</span></td>
      </tr>
      <tr>
        <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
        <td id="LC396" class="blob-code js-file-line"><span class="k">class</span> <span class="nc">WXR_Parser_Regex</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
        <td id="LC397" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$authors</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
        <td id="LC398" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$posts</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L399" class="blob-num js-line-number" data-line-number="399"></td>
        <td id="LC399" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$categories</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L400" class="blob-num js-line-number" data-line-number="400"></td>
        <td id="LC400" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$tags</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L401" class="blob-num js-line-number" data-line-number="401"></td>
        <td id="LC401" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$terms</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L402" class="blob-num js-line-number" data-line-number="402"></td>
        <td id="LC402" class="blob-code js-file-line">	<span class="k">var</span> <span class="nv">$base_url</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L403" class="blob-num js-line-number" data-line-number="403"></td>
        <td id="LC403" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L404" class="blob-num js-line-number" data-line-number="404"></td>
        <td id="LC404" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">__construct</span><span class="p">()</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L405" class="blob-num js-line-number" data-line-number="405"></td>
        <td id="LC405" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">has_gzip</span> <span class="o">=</span> <span class="nb">is_callable</span><span class="p">(</span> <span class="s1">&#39;gzopen&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L406" class="blob-num js-line-number" data-line-number="406"></td>
        <td id="LC406" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L407" class="blob-num js-line-number" data-line-number="407"></td>
        <td id="LC407" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L408" class="blob-num js-line-number" data-line-number="408"></td>
        <td id="LC408" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">WXR_Parser_Regex</span><span class="p">()</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L409" class="blob-num js-line-number" data-line-number="409"></td>
        <td id="LC409" class="blob-code js-file-line">		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">__construct</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L410" class="blob-num js-line-number" data-line-number="410"></td>
        <td id="LC410" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L411" class="blob-num js-line-number" data-line-number="411"></td>
        <td id="LC411" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L412" class="blob-num js-line-number" data-line-number="412"></td>
        <td id="LC412" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">parse</span><span class="p">(</span> <span class="nv">$file</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L413" class="blob-num js-line-number" data-line-number="413"></td>
        <td id="LC413" class="blob-code js-file-line">		<span class="nv">$wxr_version</span> <span class="o">=</span> <span class="nv">$in_post</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L414" class="blob-num js-line-number" data-line-number="414"></td>
        <td id="LC414" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L415" class="blob-num js-line-number" data-line-number="415"></td>
        <td id="LC415" class="blob-code js-file-line">		<span class="nv">$fp</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fopen</span><span class="p">(</span> <span class="nv">$file</span><span class="p">,</span> <span class="s1">&#39;r&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L416" class="blob-num js-line-number" data-line-number="416"></td>
        <td id="LC416" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$fp</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L417" class="blob-num js-line-number" data-line-number="417"></td>
        <td id="LC417" class="blob-code js-file-line">			<span class="k">while</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">feof</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L418" class="blob-num js-line-number" data-line-number="418"></td>
        <td id="LC418" class="blob-code js-file-line">				<span class="nv">$importline</span> <span class="o">=</span> <span class="nb">rtrim</span><span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fgets</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L419" class="blob-num js-line-number" data-line-number="419"></td>
        <td id="LC419" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L420" class="blob-num js-line-number" data-line-number="420"></td>
        <td id="LC420" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$wxr_version</span> <span class="o">&amp;&amp;</span> <span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:wxr_version&gt;(\d+\.\d+)&lt;/wp:wxr_version&gt;|&#39;</span><span class="p">,</span> <span class="nv">$importline</span><span class="p">,</span> <span class="nv">$version</span> <span class="p">)</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L421" class="blob-num js-line-number" data-line-number="421"></td>
        <td id="LC421" class="blob-code js-file-line">					<span class="nv">$wxr_version</span> <span class="o">=</span> <span class="nv">$version</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L422" class="blob-num js-line-number" data-line-number="422"></td>
        <td id="LC422" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L423" class="blob-num js-line-number" data-line-number="423"></td>
        <td id="LC423" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;wp:base_site_url&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L424" class="blob-num js-line-number" data-line-number="424"></td>
        <td id="LC424" class="blob-code js-file-line">					<span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:base_site_url&gt;(.*?)&lt;/wp:base_site_url&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$importline</span><span class="p">,</span> <span class="nv">$url</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L425" class="blob-num js-line-number" data-line-number="425"></td>
        <td id="LC425" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">base_url</span> <span class="o">=</span> <span class="nv">$url</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L426" class="blob-num js-line-number" data-line-number="426"></td>
        <td id="LC426" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L427" class="blob-num js-line-number" data-line-number="427"></td>
        <td id="LC427" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L428" class="blob-num js-line-number" data-line-number="428"></td>
        <td id="LC428" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;wp:category&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L429" class="blob-num js-line-number" data-line-number="429"></td>
        <td id="LC429" class="blob-code js-file-line">					<span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:category&gt;(.*?)&lt;/wp:category&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$importline</span><span class="p">,</span> <span class="nv">$category</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L430" class="blob-num js-line-number" data-line-number="430"></td>
        <td id="LC430" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">categories</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">process_category</span><span class="p">(</span> <span class="nv">$category</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L431" class="blob-num js-line-number" data-line-number="431"></td>
        <td id="LC431" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L432" class="blob-num js-line-number" data-line-number="432"></td>
        <td id="LC432" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L433" class="blob-num js-line-number" data-line-number="433"></td>
        <td id="LC433" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;wp:tag&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L434" class="blob-num js-line-number" data-line-number="434"></td>
        <td id="LC434" class="blob-code js-file-line">					<span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:tag&gt;(.*?)&lt;/wp:tag&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$importline</span><span class="p">,</span> <span class="nv">$tag</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L435" class="blob-num js-line-number" data-line-number="435"></td>
        <td id="LC435" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">tags</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">process_tag</span><span class="p">(</span> <span class="nv">$tag</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L436" class="blob-num js-line-number" data-line-number="436"></td>
        <td id="LC436" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L437" class="blob-num js-line-number" data-line-number="437"></td>
        <td id="LC437" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L438" class="blob-num js-line-number" data-line-number="438"></td>
        <td id="LC438" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;wp:term&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L439" class="blob-num js-line-number" data-line-number="439"></td>
        <td id="LC439" class="blob-code js-file-line">					<span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:term&gt;(.*?)&lt;/wp:term&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$importline</span><span class="p">,</span> <span class="nv">$term</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L440" class="blob-num js-line-number" data-line-number="440"></td>
        <td id="LC440" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">terms</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">process_term</span><span class="p">(</span> <span class="nv">$term</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L441" class="blob-num js-line-number" data-line-number="441"></td>
        <td id="LC441" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L442" class="blob-num js-line-number" data-line-number="442"></td>
        <td id="LC442" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L443" class="blob-num js-line-number" data-line-number="443"></td>
        <td id="LC443" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;wp:author&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L444" class="blob-num js-line-number" data-line-number="444"></td>
        <td id="LC444" class="blob-code js-file-line">					<span class="nb">preg_match</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:author&gt;(.*?)&lt;/wp:author&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$importline</span><span class="p">,</span> <span class="nv">$author</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L445" class="blob-num js-line-number" data-line-number="445"></td>
        <td id="LC445" class="blob-code js-file-line">					<span class="nv">$a</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">process_author</span><span class="p">(</span> <span class="nv">$author</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L446" class="blob-num js-line-number" data-line-number="446"></td>
        <td id="LC446" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authors</span><span class="p">[</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;author_login&#39;</span><span class="p">]]</span> <span class="o">=</span> <span class="nv">$a</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L447" class="blob-num js-line-number" data-line-number="447"></td>
        <td id="LC447" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L448" class="blob-num js-line-number" data-line-number="448"></td>
        <td id="LC448" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L449" class="blob-num js-line-number" data-line-number="449"></td>
        <td id="LC449" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;item&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L450" class="blob-num js-line-number" data-line-number="450"></td>
        <td id="LC450" class="blob-code js-file-line">					<span class="nv">$post</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L451" class="blob-num js-line-number" data-line-number="451"></td>
        <td id="LC451" class="blob-code js-file-line">					<span class="nv">$in_post</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L452" class="blob-num js-line-number" data-line-number="452"></td>
        <td id="LC452" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L453" class="blob-num js-line-number" data-line-number="453"></td>
        <td id="LC453" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L454" class="blob-num js-line-number" data-line-number="454"></td>
        <td id="LC454" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="k">false</span> <span class="o">!==</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$importline</span><span class="p">,</span> <span class="s1">&#39;&lt;/item&gt;&#39;</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L455" class="blob-num js-line-number" data-line-number="455"></td>
        <td id="LC455" class="blob-code js-file-line">					<span class="nv">$in_post</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L456" class="blob-num js-line-number" data-line-number="456"></td>
        <td id="LC456" class="blob-code js-file-line">					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">posts</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">process_post</span><span class="p">(</span> <span class="nv">$post</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L457" class="blob-num js-line-number" data-line-number="457"></td>
        <td id="LC457" class="blob-code js-file-line">					<span class="k">continue</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L458" class="blob-num js-line-number" data-line-number="458"></td>
        <td id="LC458" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L459" class="blob-num js-line-number" data-line-number="459"></td>
        <td id="LC459" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="nv">$in_post</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L460" class="blob-num js-line-number" data-line-number="460"></td>
        <td id="LC460" class="blob-code js-file-line">					<span class="nv">$post</span> <span class="o">.=</span> <span class="nv">$importline</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L461" class="blob-num js-line-number" data-line-number="461"></td>
        <td id="LC461" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L462" class="blob-num js-line-number" data-line-number="462"></td>
        <td id="LC462" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L463" class="blob-num js-line-number" data-line-number="463"></td>
        <td id="LC463" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L464" class="blob-num js-line-number" data-line-number="464"></td>
        <td id="LC464" class="blob-code js-file-line">			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">fclose</span><span class="p">(</span><span class="nv">$fp</span><span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L465" class="blob-num js-line-number" data-line-number="465"></td>
        <td id="LC465" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L466" class="blob-num js-line-number" data-line-number="466"></td>
        <td id="LC466" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L467" class="blob-num js-line-number" data-line-number="467"></td>
        <td id="LC467" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="nv">$wxr_version</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L468" class="blob-num js-line-number" data-line-number="468"></td>
        <td id="LC468" class="blob-code js-file-line">			<span class="k">return</span> <span class="k">new</span> <span class="nx">WP_Error</span><span class="p">(</span> <span class="s1">&#39;WXR_parse_error&#39;</span><span class="p">,</span> <span class="nx">__</span><span class="p">(</span> <span class="s1">&#39;This does not appear to be a WXR file, missing/invalid WXR version number&#39;</span><span class="p">,</span> <span class="s1">&#39;wordpress-importer&#39;</span> <span class="p">)</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L469" class="blob-num js-line-number" data-line-number="469"></td>
        <td id="LC469" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L470" class="blob-num js-line-number" data-line-number="470"></td>
        <td id="LC470" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L471" class="blob-num js-line-number" data-line-number="471"></td>
        <td id="LC471" class="blob-code js-file-line">			<span class="s1">&#39;authors&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">authors</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L472" class="blob-num js-line-number" data-line-number="472"></td>
        <td id="LC472" class="blob-code js-file-line">			<span class="s1">&#39;posts&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">posts</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L473" class="blob-num js-line-number" data-line-number="473"></td>
        <td id="LC473" class="blob-code js-file-line">			<span class="s1">&#39;categories&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">categories</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L474" class="blob-num js-line-number" data-line-number="474"></td>
        <td id="LC474" class="blob-code js-file-line">			<span class="s1">&#39;tags&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">tags</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L475" class="blob-num js-line-number" data-line-number="475"></td>
        <td id="LC475" class="blob-code js-file-line">			<span class="s1">&#39;terms&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">terms</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L476" class="blob-num js-line-number" data-line-number="476"></td>
        <td id="LC476" class="blob-code js-file-line">			<span class="s1">&#39;base_url&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">base_url</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L477" class="blob-num js-line-number" data-line-number="477"></td>
        <td id="LC477" class="blob-code js-file-line">			<span class="s1">&#39;version&#39;</span> <span class="o">=&gt;</span> <span class="nv">$wxr_version</span></td>
      </tr>
      <tr>
        <td id="L478" class="blob-num js-line-number" data-line-number="478"></td>
        <td id="LC478" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L479" class="blob-num js-line-number" data-line-number="479"></td>
        <td id="LC479" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L480" class="blob-num js-line-number" data-line-number="480"></td>
        <td id="LC480" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L481" class="blob-num js-line-number" data-line-number="481"></td>
        <td id="LC481" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">get_tag</span><span class="p">(</span> <span class="nv">$string</span><span class="p">,</span> <span class="nv">$tag</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L482" class="blob-num js-line-number" data-line-number="482"></td>
        <td id="LC482" class="blob-code js-file-line">		<span class="nb">preg_match</span><span class="p">(</span> <span class="s2">&quot;|&lt;</span><span class="si">$tag</span><span class="s2">.*?&gt;(.*?)&lt;/</span><span class="si">$tag</span><span class="s2">&gt;|is&quot;</span><span class="p">,</span> <span class="nv">$string</span><span class="p">,</span> <span class="nv">$return</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L483" class="blob-num js-line-number" data-line-number="483"></td>
        <td id="LC483" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nb">isset</span><span class="p">(</span> <span class="nv">$return</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">)</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L484" class="blob-num js-line-number" data-line-number="484"></td>
        <td id="LC484" class="blob-code js-file-line">			<span class="k">if</span> <span class="p">(</span> <span class="nb">substr</span><span class="p">(</span> <span class="nv">$return</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">9</span> <span class="p">)</span> <span class="o">==</span> <span class="s1">&#39;&lt;![CDATA[&#39;</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L485" class="blob-num js-line-number" data-line-number="485"></td>
        <td id="LC485" class="blob-code js-file-line">				<span class="k">if</span> <span class="p">(</span> <span class="nb">strpos</span><span class="p">(</span> <span class="nv">$return</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="s1">&#39;]]]]&gt;&lt;![CDATA[&gt;&#39;</span> <span class="p">)</span> <span class="o">!==</span> <span class="k">false</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L486" class="blob-num js-line-number" data-line-number="486"></td>
        <td id="LC486" class="blob-code js-file-line">					<span class="nb">preg_match_all</span><span class="p">(</span> <span class="s1">&#39;|&lt;!\[CDATA\[(.*?)\]\]&gt;|s&#39;</span><span class="p">,</span> <span class="nv">$return</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="nv">$matches</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L487" class="blob-num js-line-number" data-line-number="487"></td>
        <td id="LC487" class="blob-code js-file-line">					<span class="nv">$return</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L488" class="blob-num js-line-number" data-line-number="488"></td>
        <td id="LC488" class="blob-code js-file-line">					<span class="k">foreach</span><span class="p">(</span> <span class="nv">$matches</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="k">as</span> <span class="nv">$match</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L489" class="blob-num js-line-number" data-line-number="489"></td>
        <td id="LC489" class="blob-code js-file-line">						<span class="nv">$return</span> <span class="o">.=</span> <span class="nv">$match</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L490" class="blob-num js-line-number" data-line-number="490"></td>
        <td id="LC490" class="blob-code js-file-line">				<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L491" class="blob-num js-line-number" data-line-number="491"></td>
        <td id="LC491" class="blob-code js-file-line">					<span class="nv">$return</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span> <span class="s1">&#39;|^&lt;!\[CDATA\[(.*)\]\]&gt;$|s&#39;</span><span class="p">,</span> <span class="s1">&#39;$1&#39;</span><span class="p">,</span> <span class="nv">$return</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L492" class="blob-num js-line-number" data-line-number="492"></td>
        <td id="LC492" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L493" class="blob-num js-line-number" data-line-number="493"></td>
        <td id="LC493" class="blob-code js-file-line">			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L494" class="blob-num js-line-number" data-line-number="494"></td>
        <td id="LC494" class="blob-code js-file-line">				<span class="nv">$return</span> <span class="o">=</span> <span class="nv">$return</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L495" class="blob-num js-line-number" data-line-number="495"></td>
        <td id="LC495" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L496" class="blob-num js-line-number" data-line-number="496"></td>
        <td id="LC496" class="blob-code js-file-line">		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L497" class="blob-num js-line-number" data-line-number="497"></td>
        <td id="LC497" class="blob-code js-file-line">			<span class="nv">$return</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L498" class="blob-num js-line-number" data-line-number="498"></td>
        <td id="LC498" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L499" class="blob-num js-line-number" data-line-number="499"></td>
        <td id="LC499" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$return</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L500" class="blob-num js-line-number" data-line-number="500"></td>
        <td id="LC500" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L501" class="blob-num js-line-number" data-line-number="501"></td>
        <td id="LC501" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L502" class="blob-num js-line-number" data-line-number="502"></td>
        <td id="LC502" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">process_category</span><span class="p">(</span> <span class="nv">$c</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L503" class="blob-num js-line-number" data-line-number="503"></td>
        <td id="LC503" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L504" class="blob-num js-line-number" data-line-number="504"></td>
        <td id="LC504" class="blob-code js-file-line">			<span class="s1">&#39;term_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$c</span><span class="p">,</span> <span class="s1">&#39;wp:term_id&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L505" class="blob-num js-line-number" data-line-number="505"></td>
        <td id="LC505" class="blob-code js-file-line">			<span class="s1">&#39;cat_name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$c</span><span class="p">,</span> <span class="s1">&#39;wp:cat_name&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L506" class="blob-num js-line-number" data-line-number="506"></td>
        <td id="LC506" class="blob-code js-file-line">			<span class="s1">&#39;category_nicename&#39;</span>	<span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$c</span><span class="p">,</span> <span class="s1">&#39;wp:category_nicename&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L507" class="blob-num js-line-number" data-line-number="507"></td>
        <td id="LC507" class="blob-code js-file-line">			<span class="s1">&#39;category_parent&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$c</span><span class="p">,</span> <span class="s1">&#39;wp:category_parent&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L508" class="blob-num js-line-number" data-line-number="508"></td>
        <td id="LC508" class="blob-code js-file-line">			<span class="s1">&#39;category_description&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$c</span><span class="p">,</span> <span class="s1">&#39;wp:category_description&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L509" class="blob-num js-line-number" data-line-number="509"></td>
        <td id="LC509" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L510" class="blob-num js-line-number" data-line-number="510"></td>
        <td id="LC510" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L511" class="blob-num js-line-number" data-line-number="511"></td>
        <td id="LC511" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L512" class="blob-num js-line-number" data-line-number="512"></td>
        <td id="LC512" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">process_tag</span><span class="p">(</span> <span class="nv">$t</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L513" class="blob-num js-line-number" data-line-number="513"></td>
        <td id="LC513" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L514" class="blob-num js-line-number" data-line-number="514"></td>
        <td id="LC514" class="blob-code js-file-line">			<span class="s1">&#39;term_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_id&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L515" class="blob-num js-line-number" data-line-number="515"></td>
        <td id="LC515" class="blob-code js-file-line">			<span class="s1">&#39;tag_name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:tag_name&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L516" class="blob-num js-line-number" data-line-number="516"></td>
        <td id="LC516" class="blob-code js-file-line">			<span class="s1">&#39;tag_slug&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:tag_slug&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L517" class="blob-num js-line-number" data-line-number="517"></td>
        <td id="LC517" class="blob-code js-file-line">			<span class="s1">&#39;tag_description&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:tag_description&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L518" class="blob-num js-line-number" data-line-number="518"></td>
        <td id="LC518" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L519" class="blob-num js-line-number" data-line-number="519"></td>
        <td id="LC519" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L520" class="blob-num js-line-number" data-line-number="520"></td>
        <td id="LC520" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L521" class="blob-num js-line-number" data-line-number="521"></td>
        <td id="LC521" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">process_term</span><span class="p">(</span> <span class="nv">$t</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L522" class="blob-num js-line-number" data-line-number="522"></td>
        <td id="LC522" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L523" class="blob-num js-line-number" data-line-number="523"></td>
        <td id="LC523" class="blob-code js-file-line">			<span class="s1">&#39;term_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_id&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L524" class="blob-num js-line-number" data-line-number="524"></td>
        <td id="LC524" class="blob-code js-file-line">			<span class="s1">&#39;term_taxonomy&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_taxonomy&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L525" class="blob-num js-line-number" data-line-number="525"></td>
        <td id="LC525" class="blob-code js-file-line">			<span class="s1">&#39;slug&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_slug&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L526" class="blob-num js-line-number" data-line-number="526"></td>
        <td id="LC526" class="blob-code js-file-line">			<span class="s1">&#39;term_parent&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_parent&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L527" class="blob-num js-line-number" data-line-number="527"></td>
        <td id="LC527" class="blob-code js-file-line">			<span class="s1">&#39;term_name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_name&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L528" class="blob-num js-line-number" data-line-number="528"></td>
        <td id="LC528" class="blob-code js-file-line">			<span class="s1">&#39;term_description&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$t</span><span class="p">,</span> <span class="s1">&#39;wp:term_description&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L529" class="blob-num js-line-number" data-line-number="529"></td>
        <td id="LC529" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L530" class="blob-num js-line-number" data-line-number="530"></td>
        <td id="LC530" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L531" class="blob-num js-line-number" data-line-number="531"></td>
        <td id="LC531" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L532" class="blob-num js-line-number" data-line-number="532"></td>
        <td id="LC532" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">process_author</span><span class="p">(</span> <span class="nv">$a</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L533" class="blob-num js-line-number" data-line-number="533"></td>
        <td id="LC533" class="blob-code js-file-line">		<span class="k">return</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L534" class="blob-num js-line-number" data-line-number="534"></td>
        <td id="LC534" class="blob-code js-file-line">			<span class="s1">&#39;author_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$a</span><span class="p">,</span> <span class="s1">&#39;wp:author_id&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L535" class="blob-num js-line-number" data-line-number="535"></td>
        <td id="LC535" class="blob-code js-file-line">			<span class="s1">&#39;author_login&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$a</span><span class="p">,</span> <span class="s1">&#39;wp:author_login&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L536" class="blob-num js-line-number" data-line-number="536"></td>
        <td id="LC536" class="blob-code js-file-line">			<span class="s1">&#39;author_email&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$a</span><span class="p">,</span> <span class="s1">&#39;wp:author_email&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L537" class="blob-num js-line-number" data-line-number="537"></td>
        <td id="LC537" class="blob-code js-file-line">			<span class="s1">&#39;author_display_name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$a</span><span class="p">,</span> <span class="s1">&#39;wp:author_display_name&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L538" class="blob-num js-line-number" data-line-number="538"></td>
        <td id="LC538" class="blob-code js-file-line">			<span class="s1">&#39;author_first_name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$a</span><span class="p">,</span> <span class="s1">&#39;wp:author_first_name&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L539" class="blob-num js-line-number" data-line-number="539"></td>
        <td id="LC539" class="blob-code js-file-line">			<span class="s1">&#39;author_last_name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$a</span><span class="p">,</span> <span class="s1">&#39;wp:author_last_name&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L540" class="blob-num js-line-number" data-line-number="540"></td>
        <td id="LC540" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L541" class="blob-num js-line-number" data-line-number="541"></td>
        <td id="LC541" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L542" class="blob-num js-line-number" data-line-number="542"></td>
        <td id="LC542" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L543" class="blob-num js-line-number" data-line-number="543"></td>
        <td id="LC543" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">process_post</span><span class="p">(</span> <span class="nv">$post</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L544" class="blob-num js-line-number" data-line-number="544"></td>
        <td id="LC544" class="blob-code js-file-line">		<span class="nv">$post_id</span>        <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_id&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L545" class="blob-num js-line-number" data-line-number="545"></td>
        <td id="LC545" class="blob-code js-file-line">		<span class="nv">$post_title</span>     <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;title&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L546" class="blob-num js-line-number" data-line-number="546"></td>
        <td id="LC546" class="blob-code js-file-line">		<span class="nv">$post_date</span>      <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_date&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L547" class="blob-num js-line-number" data-line-number="547"></td>
        <td id="LC547" class="blob-code js-file-line">		<span class="nv">$post_date_gmt</span>  <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_date_gmt&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L548" class="blob-num js-line-number" data-line-number="548"></td>
        <td id="LC548" class="blob-code js-file-line">		<span class="nv">$comment_status</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:comment_status&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L549" class="blob-num js-line-number" data-line-number="549"></td>
        <td id="LC549" class="blob-code js-file-line">		<span class="nv">$ping_status</span>    <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:ping_status&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L550" class="blob-num js-line-number" data-line-number="550"></td>
        <td id="LC550" class="blob-code js-file-line">		<span class="nv">$status</span>         <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:status&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L551" class="blob-num js-line-number" data-line-number="551"></td>
        <td id="LC551" class="blob-code js-file-line">		<span class="nv">$post_name</span>      <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_name&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L552" class="blob-num js-line-number" data-line-number="552"></td>
        <td id="LC552" class="blob-code js-file-line">		<span class="nv">$post_parent</span>    <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_parent&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L553" class="blob-num js-line-number" data-line-number="553"></td>
        <td id="LC553" class="blob-code js-file-line">		<span class="nv">$menu_order</span>     <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:menu_order&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L554" class="blob-num js-line-number" data-line-number="554"></td>
        <td id="LC554" class="blob-code js-file-line">		<span class="nv">$post_type</span>      <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_type&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L555" class="blob-num js-line-number" data-line-number="555"></td>
        <td id="LC555" class="blob-code js-file-line">		<span class="nv">$post_password</span>  <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:post_password&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L556" class="blob-num js-line-number" data-line-number="556"></td>
        <td id="LC556" class="blob-code js-file-line">		<span class="nv">$is_sticky</span>      <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:is_sticky&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L557" class="blob-num js-line-number" data-line-number="557"></td>
        <td id="LC557" class="blob-code js-file-line">		<span class="nv">$guid</span>           <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;guid&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L558" class="blob-num js-line-number" data-line-number="558"></td>
        <td id="LC558" class="blob-code js-file-line">		<span class="nv">$post_author</span>    <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;dc:creator&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L559" class="blob-num js-line-number" data-line-number="559"></td>
        <td id="LC559" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L560" class="blob-num js-line-number" data-line-number="560"></td>
        <td id="LC560" class="blob-code js-file-line">		<span class="nv">$post_excerpt</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;excerpt:encoded&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L561" class="blob-num js-line-number" data-line-number="561"></td>
        <td id="LC561" class="blob-code js-file-line">		<span class="nv">$post_excerpt</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span> <span class="s1">&#39;|&lt;(/?[A-Z]+)|&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span> <span class="o">&amp;</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;_normalize_tag&#39;</span> <span class="p">),</span> <span class="nv">$post_excerpt</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L562" class="blob-num js-line-number" data-line-number="562"></td>
        <td id="LC562" class="blob-code js-file-line">		<span class="nv">$post_excerpt</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span> <span class="s1">&#39;&lt;br&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;br /&gt;&#39;</span><span class="p">,</span> <span class="nv">$post_excerpt</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L563" class="blob-num js-line-number" data-line-number="563"></td>
        <td id="LC563" class="blob-code js-file-line">		<span class="nv">$post_excerpt</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span> <span class="s1">&#39;&lt;hr&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;hr /&gt;&#39;</span><span class="p">,</span> <span class="nv">$post_excerpt</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L564" class="blob-num js-line-number" data-line-number="564"></td>
        <td id="LC564" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L565" class="blob-num js-line-number" data-line-number="565"></td>
        <td id="LC565" class="blob-code js-file-line">		<span class="nv">$post_content</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;content:encoded&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L566" class="blob-num js-line-number" data-line-number="566"></td>
        <td id="LC566" class="blob-code js-file-line">		<span class="nv">$post_content</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span> <span class="s1">&#39;|&lt;(/?[A-Z]+)|&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span> <span class="o">&amp;</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;_normalize_tag&#39;</span> <span class="p">),</span> <span class="nv">$post_content</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L567" class="blob-num js-line-number" data-line-number="567"></td>
        <td id="LC567" class="blob-code js-file-line">		<span class="nv">$post_content</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span> <span class="s1">&#39;&lt;br&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;br /&gt;&#39;</span><span class="p">,</span> <span class="nv">$post_content</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L568" class="blob-num js-line-number" data-line-number="568"></td>
        <td id="LC568" class="blob-code js-file-line">		<span class="nv">$post_content</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span> <span class="s1">&#39;&lt;hr&gt;&#39;</span><span class="p">,</span> <span class="s1">&#39;&lt;hr /&gt;&#39;</span><span class="p">,</span> <span class="nv">$post_content</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L569" class="blob-num js-line-number" data-line-number="569"></td>
        <td id="LC569" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L570" class="blob-num js-line-number" data-line-number="570"></td>
        <td id="LC570" class="blob-code js-file-line">		<span class="nv">$postdata</span> <span class="o">=</span> <span class="nb">compact</span><span class="p">(</span> <span class="s1">&#39;post_id&#39;</span><span class="p">,</span> <span class="s1">&#39;post_author&#39;</span><span class="p">,</span> <span class="s1">&#39;post_date&#39;</span><span class="p">,</span> <span class="s1">&#39;post_date_gmt&#39;</span><span class="p">,</span> <span class="s1">&#39;post_content&#39;</span><span class="p">,</span> <span class="s1">&#39;post_excerpt&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L571" class="blob-num js-line-number" data-line-number="571"></td>
        <td id="LC571" class="blob-code js-file-line">			<span class="s1">&#39;post_title&#39;</span><span class="p">,</span> <span class="s1">&#39;status&#39;</span><span class="p">,</span> <span class="s1">&#39;post_name&#39;</span><span class="p">,</span> <span class="s1">&#39;comment_status&#39;</span><span class="p">,</span> <span class="s1">&#39;ping_status&#39;</span><span class="p">,</span> <span class="s1">&#39;guid&#39;</span><span class="p">,</span> <span class="s1">&#39;post_parent&#39;</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L572" class="blob-num js-line-number" data-line-number="572"></td>
        <td id="LC572" class="blob-code js-file-line">			<span class="s1">&#39;menu_order&#39;</span><span class="p">,</span> <span class="s1">&#39;post_type&#39;</span><span class="p">,</span> <span class="s1">&#39;post_password&#39;</span><span class="p">,</span> <span class="s1">&#39;is_sticky&#39;</span></td>
      </tr>
      <tr>
        <td id="L573" class="blob-num js-line-number" data-line-number="573"></td>
        <td id="LC573" class="blob-code js-file-line">		<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L574" class="blob-num js-line-number" data-line-number="574"></td>
        <td id="LC574" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L575" class="blob-num js-line-number" data-line-number="575"></td>
        <td id="LC575" class="blob-code js-file-line">		<span class="nv">$attachment_url</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$post</span><span class="p">,</span> <span class="s1">&#39;wp:attachment_url&#39;</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L576" class="blob-num js-line-number" data-line-number="576"></td>
        <td id="LC576" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$attachment_url</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L577" class="blob-num js-line-number" data-line-number="577"></td>
        <td id="LC577" class="blob-code js-file-line">			<span class="nv">$postdata</span><span class="p">[</span><span class="s1">&#39;attachment_url&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$attachment_url</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L578" class="blob-num js-line-number" data-line-number="578"></td>
        <td id="LC578" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L579" class="blob-num js-line-number" data-line-number="579"></td>
        <td id="LC579" class="blob-code js-file-line">		<span class="nb">preg_match_all</span><span class="p">(</span> <span class="s1">&#39;|&lt;category domain=&quot;([^&quot;]+?)&quot; nicename=&quot;([^&quot;]+?)&quot;&gt;(.+?)&lt;/category&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$post</span><span class="p">,</span> <span class="nv">$terms</span><span class="p">,</span> <span class="nx">PREG_SET_ORDER</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L580" class="blob-num js-line-number" data-line-number="580"></td>
        <td id="LC580" class="blob-code js-file-line">		<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$terms</span> <span class="k">as</span> <span class="nv">$t</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L581" class="blob-num js-line-number" data-line-number="581"></td>
        <td id="LC581" class="blob-code js-file-line">			<span class="nv">$post_terms</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L582" class="blob-num js-line-number" data-line-number="582"></td>
        <td id="LC582" class="blob-code js-file-line">				<span class="s1">&#39;slug&#39;</span> <span class="o">=&gt;</span> <span class="nv">$t</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span></td>
      </tr>
      <tr>
        <td id="L583" class="blob-num js-line-number" data-line-number="583"></td>
        <td id="LC583" class="blob-code js-file-line">				<span class="s1">&#39;domain&#39;</span> <span class="o">=&gt;</span> <span class="nv">$t</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span></td>
      </tr>
      <tr>
        <td id="L584" class="blob-num js-line-number" data-line-number="584"></td>
        <td id="LC584" class="blob-code js-file-line">				<span class="s1">&#39;name&#39;</span> <span class="o">=&gt;</span> <span class="nb">str_replace</span><span class="p">(</span> <span class="k">array</span><span class="p">(</span> <span class="s1">&#39;&lt;![CDATA[&#39;</span><span class="p">,</span> <span class="s1">&#39;]]&gt;&#39;</span> <span class="p">),</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$t</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L585" class="blob-num js-line-number" data-line-number="585"></td>
        <td id="LC585" class="blob-code js-file-line">			<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L586" class="blob-num js-line-number" data-line-number="586"></td>
        <td id="LC586" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L587" class="blob-num js-line-number" data-line-number="587"></td>
        <td id="LC587" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$post_terms</span> <span class="p">)</span> <span class="p">)</span> <span class="nv">$postdata</span><span class="p">[</span><span class="s1">&#39;terms&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$post_terms</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L588" class="blob-num js-line-number" data-line-number="588"></td>
        <td id="LC588" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L589" class="blob-num js-line-number" data-line-number="589"></td>
        <td id="LC589" class="blob-code js-file-line">		<span class="nb">preg_match_all</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:comment&gt;(.+?)&lt;/wp:comment&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$post</span><span class="p">,</span> <span class="nv">$comments</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L590" class="blob-num js-line-number" data-line-number="590"></td>
        <td id="LC590" class="blob-code js-file-line">		<span class="nv">$comments</span> <span class="o">=</span> <span class="nv">$comments</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L591" class="blob-num js-line-number" data-line-number="591"></td>
        <td id="LC591" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$comments</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L592" class="blob-num js-line-number" data-line-number="592"></td>
        <td id="LC592" class="blob-code js-file-line">			<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$comments</span> <span class="k">as</span> <span class="nv">$comment</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L593" class="blob-num js-line-number" data-line-number="593"></td>
        <td id="LC593" class="blob-code js-file-line">				<span class="nb">preg_match_all</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:commentmeta&gt;(.+?)&lt;/wp:commentmeta&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$comment</span><span class="p">,</span> <span class="nv">$commentmeta</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L594" class="blob-num js-line-number" data-line-number="594"></td>
        <td id="LC594" class="blob-code js-file-line">				<span class="nv">$commentmeta</span> <span class="o">=</span> <span class="nv">$commentmeta</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L595" class="blob-num js-line-number" data-line-number="595"></td>
        <td id="LC595" class="blob-code js-file-line">				<span class="nv">$c_meta</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></td>
      </tr>
      <tr>
        <td id="L596" class="blob-num js-line-number" data-line-number="596"></td>
        <td id="LC596" class="blob-code js-file-line">				<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$commentmeta</span> <span class="k">as</span> <span class="nv">$m</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L597" class="blob-num js-line-number" data-line-number="597"></td>
        <td id="LC597" class="blob-code js-file-line">					<span class="nv">$c_meta</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L598" class="blob-num js-line-number" data-line-number="598"></td>
        <td id="LC598" class="blob-code js-file-line">						<span class="s1">&#39;key&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$m</span><span class="p">,</span> <span class="s1">&#39;wp:meta_key&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L599" class="blob-num js-line-number" data-line-number="599"></td>
        <td id="LC599" class="blob-code js-file-line">						<span class="s1">&#39;value&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$m</span><span class="p">,</span> <span class="s1">&#39;wp:meta_value&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L600" class="blob-num js-line-number" data-line-number="600"></td>
        <td id="LC600" class="blob-code js-file-line">					<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L601" class="blob-num js-line-number" data-line-number="601"></td>
        <td id="LC601" class="blob-code js-file-line">				<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L602" class="blob-num js-line-number" data-line-number="602"></td>
        <td id="LC602" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L603" class="blob-num js-line-number" data-line-number="603"></td>
        <td id="LC603" class="blob-code js-file-line">				<span class="nv">$post_comments</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L604" class="blob-num js-line-number" data-line-number="604"></td>
        <td id="LC604" class="blob-code js-file-line">					<span class="s1">&#39;comment_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_id&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L605" class="blob-num js-line-number" data-line-number="605"></td>
        <td id="LC605" class="blob-code js-file-line">					<span class="s1">&#39;comment_author&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L606" class="blob-num js-line-number" data-line-number="606"></td>
        <td id="LC606" class="blob-code js-file-line">					<span class="s1">&#39;comment_author_email&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author_email&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L607" class="blob-num js-line-number" data-line-number="607"></td>
        <td id="LC607" class="blob-code js-file-line">					<span class="s1">&#39;comment_author_IP&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author_IP&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L608" class="blob-num js-line-number" data-line-number="608"></td>
        <td id="LC608" class="blob-code js-file-line">					<span class="s1">&#39;comment_author_url&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_author_url&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L609" class="blob-num js-line-number" data-line-number="609"></td>
        <td id="LC609" class="blob-code js-file-line">					<span class="s1">&#39;comment_date&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_date&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L610" class="blob-num js-line-number" data-line-number="610"></td>
        <td id="LC610" class="blob-code js-file-line">					<span class="s1">&#39;comment_date_gmt&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_date_gmt&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L611" class="blob-num js-line-number" data-line-number="611"></td>
        <td id="LC611" class="blob-code js-file-line">					<span class="s1">&#39;comment_content&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_content&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L612" class="blob-num js-line-number" data-line-number="612"></td>
        <td id="LC612" class="blob-code js-file-line">					<span class="s1">&#39;comment_approved&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_approved&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L613" class="blob-num js-line-number" data-line-number="613"></td>
        <td id="LC613" class="blob-code js-file-line">					<span class="s1">&#39;comment_type&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_type&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L614" class="blob-num js-line-number" data-line-number="614"></td>
        <td id="LC614" class="blob-code js-file-line">					<span class="s1">&#39;comment_parent&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_parent&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L615" class="blob-num js-line-number" data-line-number="615"></td>
        <td id="LC615" class="blob-code js-file-line">					<span class="s1">&#39;comment_user_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$comment</span><span class="p">,</span> <span class="s1">&#39;wp:comment_user_id&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L616" class="blob-num js-line-number" data-line-number="616"></td>
        <td id="LC616" class="blob-code js-file-line">					<span class="s1">&#39;commentmeta&#39;</span> <span class="o">=&gt;</span> <span class="nv">$c_meta</span><span class="p">,</span></td>
      </tr>
      <tr>
        <td id="L617" class="blob-num js-line-number" data-line-number="617"></td>
        <td id="LC617" class="blob-code js-file-line">				<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L618" class="blob-num js-line-number" data-line-number="618"></td>
        <td id="LC618" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L619" class="blob-num js-line-number" data-line-number="619"></td>
        <td id="LC619" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L620" class="blob-num js-line-number" data-line-number="620"></td>
        <td id="LC620" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$post_comments</span> <span class="p">)</span> <span class="p">)</span> <span class="nv">$postdata</span><span class="p">[</span><span class="s1">&#39;comments&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$post_comments</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L621" class="blob-num js-line-number" data-line-number="621"></td>
        <td id="LC621" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L622" class="blob-num js-line-number" data-line-number="622"></td>
        <td id="LC622" class="blob-code js-file-line">		<span class="nb">preg_match_all</span><span class="p">(</span> <span class="s1">&#39;|&lt;wp:postmeta&gt;(.+?)&lt;/wp:postmeta&gt;|is&#39;</span><span class="p">,</span> <span class="nv">$post</span><span class="p">,</span> <span class="nv">$postmeta</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L623" class="blob-num js-line-number" data-line-number="623"></td>
        <td id="LC623" class="blob-code js-file-line">		<span class="nv">$postmeta</span> <span class="o">=</span> <span class="nv">$postmeta</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></td>
      </tr>
      <tr>
        <td id="L624" class="blob-num js-line-number" data-line-number="624"></td>
        <td id="LC624" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$postmeta</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L625" class="blob-num js-line-number" data-line-number="625"></td>
        <td id="LC625" class="blob-code js-file-line">			<span class="k">foreach</span> <span class="p">(</span> <span class="nv">$postmeta</span> <span class="k">as</span> <span class="nv">$p</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L626" class="blob-num js-line-number" data-line-number="626"></td>
        <td id="LC626" class="blob-code js-file-line">				<span class="nv">$post_postmeta</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></td>
      </tr>
      <tr>
        <td id="L627" class="blob-num js-line-number" data-line-number="627"></td>
        <td id="LC627" class="blob-code js-file-line">					<span class="s1">&#39;key&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$p</span><span class="p">,</span> <span class="s1">&#39;wp:meta_key&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L628" class="blob-num js-line-number" data-line-number="628"></td>
        <td id="LC628" class="blob-code js-file-line">					<span class="s1">&#39;value&#39;</span> <span class="o">=&gt;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_tag</span><span class="p">(</span> <span class="nv">$p</span><span class="p">,</span> <span class="s1">&#39;wp:meta_value&#39;</span> <span class="p">),</span></td>
      </tr>
      <tr>
        <td id="L629" class="blob-num js-line-number" data-line-number="629"></td>
        <td id="LC629" class="blob-code js-file-line">				<span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L630" class="blob-num js-line-number" data-line-number="630"></td>
        <td id="LC630" class="blob-code js-file-line">			<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L631" class="blob-num js-line-number" data-line-number="631"></td>
        <td id="LC631" class="blob-code js-file-line">		<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L632" class="blob-num js-line-number" data-line-number="632"></td>
        <td id="LC632" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="o">!</span> <span class="k">empty</span><span class="p">(</span> <span class="nv">$post_postmeta</span> <span class="p">)</span> <span class="p">)</span> <span class="nv">$postdata</span><span class="p">[</span><span class="s1">&#39;postmeta&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$post_postmeta</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L633" class="blob-num js-line-number" data-line-number="633"></td>
        <td id="LC633" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L634" class="blob-num js-line-number" data-line-number="634"></td>
        <td id="LC634" class="blob-code js-file-line">		<span class="k">return</span> <span class="nv">$postdata</span><span class="p">;</span></td>
      </tr>
      <tr>
        <td id="L635" class="blob-num js-line-number" data-line-number="635"></td>
        <td id="LC635" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L636" class="blob-num js-line-number" data-line-number="636"></td>
        <td id="LC636" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L637" class="blob-num js-line-number" data-line-number="637"></td>
        <td id="LC637" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">_normalize_tag</span><span class="p">(</span> <span class="nv">$matches</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L638" class="blob-num js-line-number" data-line-number="638"></td>
        <td id="LC638" class="blob-code js-file-line">		<span class="k">return</span> <span class="s1">&#39;&lt;&#39;</span> <span class="o">.</span> <span class="nb">strtolower</span><span class="p">(</span> <span class="nv">$matches</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L639" class="blob-num js-line-number" data-line-number="639"></td>
        <td id="LC639" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L640" class="blob-num js-line-number" data-line-number="640"></td>
        <td id="LC640" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L641" class="blob-num js-line-number" data-line-number="641"></td>
        <td id="LC641" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">fopen</span><span class="p">(</span> <span class="nv">$filename</span><span class="p">,</span> <span class="nv">$mode</span> <span class="o">=</span> <span class="s1">&#39;r&#39;</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L642" class="blob-num js-line-number" data-line-number="642"></td>
        <td id="LC642" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">has_gzip</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L643" class="blob-num js-line-number" data-line-number="643"></td>
        <td id="LC643" class="blob-code js-file-line">			<span class="k">return</span> <span class="nb">gzopen</span><span class="p">(</span> <span class="nv">$filename</span><span class="p">,</span> <span class="nv">$mode</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L644" class="blob-num js-line-number" data-line-number="644"></td>
        <td id="LC644" class="blob-code js-file-line">		<span class="k">return</span> <span class="nb">fopen</span><span class="p">(</span> <span class="nv">$filename</span><span class="p">,</span> <span class="nv">$mode</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L645" class="blob-num js-line-number" data-line-number="645"></td>
        <td id="LC645" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L646" class="blob-num js-line-number" data-line-number="646"></td>
        <td id="LC646" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L647" class="blob-num js-line-number" data-line-number="647"></td>
        <td id="LC647" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">feof</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L648" class="blob-num js-line-number" data-line-number="648"></td>
        <td id="LC648" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">has_gzip</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L649" class="blob-num js-line-number" data-line-number="649"></td>
        <td id="LC649" class="blob-code js-file-line">			<span class="k">return</span> <span class="nb">gzeof</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L650" class="blob-num js-line-number" data-line-number="650"></td>
        <td id="LC650" class="blob-code js-file-line">		<span class="k">return</span> <span class="nb">feof</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L651" class="blob-num js-line-number" data-line-number="651"></td>
        <td id="LC651" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L652" class="blob-num js-line-number" data-line-number="652"></td>
        <td id="LC652" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L653" class="blob-num js-line-number" data-line-number="653"></td>
        <td id="LC653" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">fgets</span><span class="p">(</span> <span class="nv">$fp</span><span class="p">,</span> <span class="nv">$len</span> <span class="o">=</span> <span class="mi">8192</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L654" class="blob-num js-line-number" data-line-number="654"></td>
        <td id="LC654" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">has_gzip</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L655" class="blob-num js-line-number" data-line-number="655"></td>
        <td id="LC655" class="blob-code js-file-line">			<span class="k">return</span> <span class="nb">gzgets</span><span class="p">(</span> <span class="nv">$fp</span><span class="p">,</span> <span class="nv">$len</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L656" class="blob-num js-line-number" data-line-number="656"></td>
        <td id="LC656" class="blob-code js-file-line">		<span class="k">return</span> <span class="nb">fgets</span><span class="p">(</span> <span class="nv">$fp</span><span class="p">,</span> <span class="nv">$len</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L657" class="blob-num js-line-number" data-line-number="657"></td>
        <td id="LC657" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L658" class="blob-num js-line-number" data-line-number="658"></td>
        <td id="LC658" class="blob-code js-file-line">
</td>
      </tr>
      <tr>
        <td id="L659" class="blob-num js-line-number" data-line-number="659"></td>
        <td id="LC659" class="blob-code js-file-line">	<span class="k">function</span> <span class="nf">fclose</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">)</span> <span class="p">{</span></td>
      </tr>
      <tr>
        <td id="L660" class="blob-num js-line-number" data-line-number="660"></td>
        <td id="LC660" class="blob-code js-file-line">		<span class="k">if</span> <span class="p">(</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">has_gzip</span> <span class="p">)</span></td>
      </tr>
      <tr>
        <td id="L661" class="blob-num js-line-number" data-line-number="661"></td>
        <td id="LC661" class="blob-code js-file-line">			<span class="k">return</span> <span class="nb">gzclose</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L662" class="blob-num js-line-number" data-line-number="662"></td>
        <td id="LC662" class="blob-code js-file-line">		<span class="k">return</span> <span class="nb">fclose</span><span class="p">(</span> <span class="nv">$fp</span> <span class="p">);</span></td>
      </tr>
      <tr>
        <td id="L663" class="blob-num js-line-number" data-line-number="663"></td>
        <td id="LC663" class="blob-code js-file-line">	<span class="p">}</span></td>
      </tr>
      <tr>
        <td id="L664" class="blob-num js-line-number" data-line-number="664"></td>
        <td id="LC664" class="blob-code js-file-line"><span class="p">}</span></td>
      </tr>
</table>

  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.14625s from github-fe123-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents js-suggester-field" placeholder=""></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-3d6415a807b351117a075649a484659a51123e9916f8d6db57c6d516d8ae60d7.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-3bc9b3e4883d2f34db938c1cb44d0237ec3a9e64b20a0e0d415a6e821a75b6a0.js" type="text/javascript"></script>
      
      
  </body>
</html>

