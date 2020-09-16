

<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>Form Advanced Elements | Remark Admin Template</title>
    
    <link rel="apple-touch-icon" href="{{ url('assets') }}/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="{{ url('assets') }}/images/favicon.ico">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ url('/global') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/global') }}/css/bootstrap-extend.min.css">
    <link rel="stylesheet" href="{{ url('assets') }}/css/site.min.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/animsition/animsition.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/asscrollable/asScrollable.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/switchery/switchery.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/intro-js/introjs.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/slidepanel/slidePanel.css">
    <link rel="stylesheet" href="{{ url('/global') }}/vendor/flag-icon-css/flag-icon.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/select2/select2.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/bootstrap-select/bootstrap-select.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/icheck/icheck.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/switchery/switchery.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/asrange/asRange.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/ionrangeslider/ionrangeslider.min.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/asspinner/asSpinner.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/clockpicker/clockpicker.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/ascolorpicker/asColorPicker.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/jquery-labelauty/jquery-labelauty.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/timepicker/jquery-timepicker.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/jquery-strength/jquery-strength.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/multi-select/multi-select.css">
        <link rel="stylesheet" href="{{ url('/global') }}/vendor/typeahead-js/typeahead.css">
        <link rel="stylesheet" href="{{ url('assets') }}/examples/css/forms/advanced.css">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ url('/global') }}/fonts/web-icons/web-icons.min.css">
    <link rel="stylesheet" href="{{ url('/global') }}/fonts/brand-icons/brand-icons.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="{{ url('/global') }}/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="{{ url('/global') }}/vendor/media-match/media.match.min.js"></script>
    <script src="{{ url('/global') }}/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="{{ url('/global') }}/vendor/breakpoints/breakpoints.js"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="{{ url('assets') }}/images/logo.png" title="Remark">
          <span class="navbar-brand-text hidden-xs-down"> Remark</span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
            <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
              <div class="dropdown-menu" role="menu">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-md-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/panel-structure.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5>Media
                        <span class="badge badge-pill badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{ url('/global') }}/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{ url('/global') }}/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{ url('/global') }}/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{ url('/global') }}/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{ url('/global') }}/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="{{ url('/global') }}/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="mb-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                        role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                              aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                            role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque accusamus
                              clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                            role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur mortis
                              animus adoptionem, bello statuat expediunt naturales.
                            </div>
                          </div>
                        </div>
    
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                            role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                aria-expanded="false" role="button">
                <span class="flag-icon flag-icon-us"></span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="{{ url('/global') }}/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <span class="badge badge-pill badge-danger up">5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="badge badge-round badge-danger">New 5</span>
                </div>
    
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Messages"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-envelope" aria-hidden="true"></i>
                <span class="badge badge-pill badge-info up">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header" role="presentation">
                  <h5>MESSAGES</h5>
                  <span class="badge badge-round badge-info">New 3</span>
                </div>
    
                <div class="list-group" role="presentation">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-online">
                              <img src="{{ url('/global') }}/portraits/2.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Mary Adams</h6>
                            <div class="media-meta">
                              <time datetime="2018-06-17T20:22:05+08:00">30 minutes ago</time>
                            </div>
                            <div class="media-detail">Anyways, i would like just do it</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-off">
                              <img src="{{ url('/global') }}/portraits/3.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Caleb Richards</h6>
                            <div class="media-meta">
                              <time datetime="2018-06-17T12:30:30+08:00">12 hours ago</time>
                            </div>
                            <div class="media-detail">I checheck the document. But there seems</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-busy">
                              <img src="{{ url('/global') }}/portraits/4.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">June Lane</h6>
                            <div class="media-meta">
                              <time datetime="2018-06-16T18:38:40+08:00">2 days ago</time>
                            </div>
                            <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <span class="avatar avatar-sm avatar-away">
                              <img src="{{ url('/global') }}/portraits/5.jpg" alt="..." />
                              <i></i>
                            </span>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Edward Fletcher</h6>
                            <div class="media-meta">
                              <time datetime="2018-06-15T20:34:48+08:00">3 days ago</time>
                            </div>
                            <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer" role="presentation">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item" id="toggleChat">
              <a class="nav-link" data-toggle="site-sidebar" href="javascript:void(0)" title="Chat"
                data-url="../site-sidebar.tpl">
                <i class="icon wb-chat" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar">
      <div class="site-menubar-body">
        <div>
          <div>
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                        <span class="site-menu-title">Dashboard</span>
                            <div class="site-menu-badge">
                                <span class="badge badge-pill badge-success">3</span>
                            </div>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../index.html">
                      <span class="site-menu-title">Dashboard v1</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../dashboard/v2.html">
                      <span class="site-menu-title">Dashboard v2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../dashboard/ecommerce.html">
                      <span class="site-menu-title">Ecommerce</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../dashboard/analytics.html">
                      <span class="site-menu-title">Analytics</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../dashboard/team.html">
                      <span class="site-menu-title">Team</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                        <span class="site-menu-title">Layouts</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/menu-collapsed.html">
                      <span class="site-menu-title">Menu Collapsed</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/menu-collapsed-alt.html">
                      <span class="site-menu-title">Menu Collapsed Alt</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/menu-expended.html">
                      <span class="site-menu-title">Menu Expended</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/grids.html">
                      <span class="site-menu-title">Grid Scaffolding</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/layout-grid.html">
                      <span class="site-menu-title">Layout Grid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/headers.html">
                      <span class="site-menu-title">Different Headers</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/panel-transition.html">
                      <span class="site-menu-title">Panel Transition</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/boxed.html">
                      <span class="site-menu-title">Boxed Layout</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/two-columns.html">
                      <span class="site-menu-title">Two Columns</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/menubar-flipped.html">
                      <span class="site-menu-title">Menubar Flipped</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/menubar-native-scrolling.html">
                      <span class="site-menu-title">Menubar Native Scrolling</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../layouts/bordered-header.html">
                      <span class="site-menu-title">Bordered Header</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Page Aside</span>
                      <div class="site-menu-label">
                        <span class="badge badge-danger badge-round mr-25">new</span>
                      </div>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/aside-left-static.html">
                          <span class="site-menu-title">Left Static</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/aside-right-static.html">
                          <span class="site-menu-title">Right Static</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/aside-left-fixed.html">
                          <span class="site-menu-title">Left Fixed</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../layouts/aside-right-fixed.html">
                          <span class="site-menu-title">Right Fixed</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Pages</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Errors</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/error-400.html">
                          <span class="site-menu-title">400 Bad Request</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/error-403.html">
                          <span class="site-menu-title">403 Forbidden</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/error-404.html">
                          <span class="site-menu-title">404 Not Found</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/error-500.html">
                          <span class="site-menu-title">500 Internal Server Error</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/error-503.html">
                          <span class="site-menu-title">503 Service Unavailable</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/faq.html">
                      <span class="site-menu-title">FAQ</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/gallery.html">
                      <span class="site-menu-title">Gallery</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/gallery-grid.html">
                      <span class="site-menu-title">Gallery Grid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/search-result.html">
                      <span class="site-menu-title">Search Result</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Maps</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/map-google.html">
                          <span class="site-menu-title">Google Maps</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/map-vector.html">
                          <span class="site-menu-title">Vector Maps</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/maintenance.html">
                      <span class="site-menu-title">Maintenance</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/forgot-password.html">
                      <span class="site-menu-title">Forgot Password</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/lockscreen.html">
                      <span class="site-menu-title">Lockscreen</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/login.html">
                      <span class="site-menu-title">Login</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/register.html">
                      <span class="site-menu-title">Register</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/login-v2.html">
                      <span class="site-menu-title">Login V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/register-v2.html">
                      <span class="site-menu-title">Register V2</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/login-v3.html">
                      <span class="site-menu-title">Login V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/register-v3.html">
                      <span class="site-menu-title">Register V3</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/user.html">
                      <span class="site-menu-title">User List</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/invoice.html">
                      <span class="site-menu-title">Invoice</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/blank.html">
                      <span class="site-menu-title">Blank Page</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Email</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/email-articles.html">
                          <span class="site-menu-title">Articles</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/email-welcome.html">
                          <span class="site-menu-title">Welcome</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/email-post.html">
                          <span class="site-menu-title">Post</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/email-thumbnail.html">
                          <span class="site-menu-title">Thumbnail</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../pages/email-news.html">
                          <span class="site-menu-title">News</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/code-editor.html">
                      <span class="site-menu-title">Code Editor</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/profile.html">
                      <span class="site-menu-title">Profile</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/profile-v2.html">
                      <span class="site-menu-title">Profile V2</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/profile-v3.html">
                      <span class="site-menu-title">Profile V3</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/site-map.html">
                      <span class="site-menu-title">Sitemap</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../pages/project.html">
                      <span class="site-menu-title">Project</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-category">Elements</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                        <span class="site-menu-title">Basic UI</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Panel</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../uikit/panel-structure.html">
                          <span class="site-menu-title">Panel Structure</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../uikit/panel-actions.html">
                          <span class="site-menu-title">Panel Actions</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../uikit/panel-portlets.html">
                          <span class="site-menu-title">Panel Portlets</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/buttons.html">
                      <span class="site-menu-title">Buttons</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/cards.html">
                      <span class="site-menu-title">Cards</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/dropdowns.html">
                      <span class="site-menu-title">Dropdowns</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/icons.html">
                      <span class="site-menu-title">Icons</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/list.html">
                      <span class="site-menu-title">List</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/tooltip-popover.html">
                      <span class="site-menu-title">Tooltip &amp; Popover</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/modals.html">
                      <span class="site-menu-title">Modals</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/tabs-accordions.html">
                      <span class="site-menu-title">Tabs &amp; Accordions</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/images.html">
                      <span class="site-menu-title">Images</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/badges.html">
                      <span class="site-menu-title">Badges</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/progress-bars.html">
                      <span class="site-menu-title">Progress Bars</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/carousel.html">
                      <span class="site-menu-title">Carousel</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/typography.html">
                      <span class="site-menu-title">Typography</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/colors.html">
                      <span class="site-menu-title">Colors</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../uikit/utilities.html">
                      <span class="site-menu-title">Utilties</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                        <span class="site-menu-title">Advanced UI</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item hidden-sm-down site-tour-trigger">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Tour</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/animation.html">
                      <span class="site-menu-title">Animation</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/highlight.html">
                      <span class="site-menu-title">Highlight</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/lightbox.html">
                      <span class="site-menu-title">Lightbox</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/scrollable.html">
                      <span class="site-menu-title">Scrollable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/rating.html">
                      <span class="site-menu-title">Rating</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/context-menu.html">
                      <span class="site-menu-title">Context Menu</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/alertify.html">
                      <span class="site-menu-title">Alertify</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/masonry.html">
                      <span class="site-menu-title">Masonry</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/treeview.html">
                      <span class="site-menu-title">Treeview</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/toastr.html">
                      <span class="site-menu-title">Toastr</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/maps-vector.html">
                      <span class="site-menu-title">Vector Maps</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/maps-google.html">
                      <span class="site-menu-title">Google Maps</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/sortable-nestable.html">
                      <span class="site-menu-title">Sortable &amp; Nestable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../advanced/bootbox-sweetalert.html">
                      <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                        <span class="site-menu-title">Structure</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/alerts.html">
                      <span class="site-menu-title">Alerts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/ribbon.html">
                      <span class="site-menu-title">Ribbon</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/pricing-tables.html">
                      <span class="site-menu-title">Pricing Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/overlay.html">
                      <span class="site-menu-title">Overlay</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/cover.html">
                      <span class="site-menu-title">Cover</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/timeline-simple.html">
                      <span class="site-menu-title">Simple Timeline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/timeline.html">
                      <span class="site-menu-title">Timeline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/step.html">
                      <span class="site-menu-title">Step</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/comments.html">
                      <span class="site-menu-title">Comments</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/media.html">
                      <span class="site-menu-title">Media</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/chat.html">
                      <span class="site-menu-title">Chat</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/testimonials.html">
                      <span class="site-menu-title">Testimonials</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/nav.html">
                      <span class="site-menu-title">Nav</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/navbars.html">
                      <span class="site-menu-title">Navbars</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/blockquotes.html">
                      <span class="site-menu-title">Blockquotes</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/pagination.html">
                      <span class="site-menu-title">Pagination</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../structure/breadcrumbs.html">
                      <span class="site-menu-title">Breadcrumbs</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                        <span class="site-menu-title">Widgets</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/statistics.html">
                      <span class="site-menu-title">Statistics Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/data.html">
                      <span class="site-menu-title">Data Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/blog.html">
                      <span class="site-menu-title">Blog Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/chart.html">
                      <span class="site-menu-title">Chart Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/social.html">
                      <span class="site-menu-title">Social Widgets</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../widgets/weather.html">
                      <span class="site-menu-title">Weather Widgets</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub active open">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                        <span class="site-menu-title">Forms</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/general.html">
                      <span class="site-menu-title">General Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/material.html">
                      <span class="site-menu-title">Material Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item active">
                    <a class="animsition-link" href="../forms/advanced.html">
                      <span class="site-menu-title">Advanced Elements</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/layouts.html">
                      <span class="site-menu-title">Form Layouts</span>
                      <div class="site-menu-label">
                        <span class="badge badge badge-warning badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/wizard.html">
                      <span class="site-menu-title">Form Wizard</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/validation.html">
                      <span class="site-menu-title">Form Validation</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/masks.html">
                      <span class="site-menu-title">Form Masks</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Editors</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../forms/editor-summernote.html">
                          <span class="site-menu-title">Summernote</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../forms/editor-markdown.html">
                          <span class="site-menu-title">Markdown</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../forms/editor-ace.html">
                          <span class="site-menu-title">Ace Editor</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/image-cropping.html">
                      <span class="site-menu-title">Image Cropping</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../forms/file-uploads.html">
                      <span class="site-menu-title">File Uploads</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                        <span class="site-menu-title">Tables</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/basic.html">
                      <span class="site-menu-title">Basic Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/bootstrap.html">
                      <span class="site-menu-title">Bootstrap Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/floatthead.html">
                      <span class="site-menu-title">floatThead</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/responsive.html">
                      <span class="site-menu-title">Responsive Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/editable.html">
                      <span class="site-menu-title">Editable Tables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/jsgrid.html">
                      <span class="site-menu-title">jsGrid</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/footable.html">
                      <span class="site-menu-title">FooTable</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/datatable.html">
                      <span class="site-menu-title">DataTables</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/jqtabledit.html">
                      <span class="site-menu-title">Jquery Tabledit</span>
                      <div class="site-menu-label">
                        <span class="badge badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../tables/table-dragger.html">
                      <span class="site-menu-title">Table Dragger</span>
                      <div class="site-menu-label">
                        <span class="badge badge badge-warning badge-round">new</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                        <span class="site-menu-title">Chart</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/chartjs.html">
                      <span class="site-menu-title">Chart.js</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/gauges.html">
                      <span class="site-menu-title">Gauges</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/flot.html">
                      <span class="site-menu-title">Flot</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/peity.html">
                      <span class="site-menu-title">Peity</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/sparkline.html">
                      <span class="site-menu-title">Sparkline</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/morris.html">
                      <span class="site-menu-title">Morris</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/chartist.html">
                      <span class="site-menu-title">Chartist.js</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/rickshaw.html">
                      <span class="site-menu-title">Rickshaw</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/pie-progress.html">
                      <span class="site-menu-title">Pie Progress</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../charts/c3.html">
                      <span class="site-menu-title">C3</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="site-menu-category">Apps</li>
              <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                        <span class="site-menu-title">Apps</span>
                                <span class="site-menu-arrow"></span>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/contacts/contacts.html">
                      <span class="site-menu-title">Contacts</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/calendar/calendar.html">
                      <span class="site-menu-title">Calendar</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/notebook/notebook.html">
                      <span class="site-menu-title">Notebook</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/taskboard/taskboard.html">
                      <span class="site-menu-title">Taskboard</span>
                    </a>
                  </li>
                  <li class="site-menu-item has-sub">
                    <a href="javascript:void(0)">
                      <span class="site-menu-title">Documents</span>
                      <span class="site-menu-arrow"></span>
                    </a>
                    <ul class="site-menu-sub">
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../apps/documents/articles.html">
                          <span class="site-menu-title">Articles</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../apps/documents/categories.html">
                          <span class="site-menu-title">Categories</span>
                        </a>
                      </li>
                      <li class="site-menu-item">
                        <a class="animsition-link" href="../apps/documents/article.html">
                          <span class="site-menu-title">Article</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/forum/forum.html">
                      <span class="site-menu-title">Forum</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/message/message.html">
                      <span class="site-menu-title">Message</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/projects/projects.html">
                      <span class="site-menu-title">Projects</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/mailbox/mailbox.html">
                      <span class="site-menu-title">Mailbox</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/media/overview.html">
                      <span class="site-menu-title">Media</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/work/work.html">
                      <span class="site-menu-title">Work</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/location/location.html">
                      <span class="site-menu-title">Location</span>
                    </a>
                  </li>
                  <li class="site-menu-item">
                    <a class="animsition-link" href="../apps/travel/travel.html">
                      <span class="site-menu-title">Travel</span>
                      <div class="site-menu-label">
                        <span class="badge badge-info badge-round">new</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="site-menubar-section">
              <h5>
                Milestone
                <span class="float-right">30%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
              </div>
              <h5>
                Release
                <span class="float-right">60%</span>
              </h5>
              <div class="progress progress-xs">
                <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
              </div>
            </div>      </div>
        </div>
      </div>
    
      <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Settings">
          <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
          <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span class="icon wb-power" aria-hidden="true"></span>
        </a>
      </div></div>    <div class="site-gridmenu">
      <div>
        <div>
          <ul>
            <li>
              <a href="../apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
              </a>
            </li>
            <li>
              <a href="../apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="../apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="../apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
              </a>
            </li>
            <li>
              <a href="../apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
              </a>
            </li>
            <li>
              <a href="../apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
              </a>
            </li>
            <li>
              <a href="../apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="../index.html">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Page -->
    <div class="page">
      <div class="page-header">
        <h1 class="page-title">Form Advanced Elements</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
          <li class="breadcrumb-item active">Advanced</li>
        </ol>
        <div class="page-header-actions">
          <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
            data-toggle="tooltip" data-original-title="Edit">
            <i class="icon wb-pencil" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
            data-toggle="tooltip" data-original-title="Refresh">
            <i class="icon wb-refresh" aria-hidden="true"></i>
          </button>
          <button type="button" class="btn btn-sm btn-icon btn-default btn-outline btn-round"
            data-toggle="tooltip" data-original-title="Setting">
            <i class="icon wb-settings" aria-hidden="true"></i>
          </button>
        </div>
      </div>

      <div class="page-content container-fluid">
        <!-- Panel Select 2 -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Select 2
              <small><a class="example-plugin-link" href="https://select2.github.io" target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Example Basic -->
                <div class="example-wrap">
                  <h4 class="example-title">Basic</h4>
                  <p>Create a basic select2 by using <code>data-plugin="select2"</code>.</p>
                  <div class="example">
                    <select class="form-control" data-plugin="select2">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Basic -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Multi Balue -->
                <div class="example-wrap">
                  <h4 class="example-title">Multi-Balue</h4>
                  <p>Add <code>multiple</code> to create a multi select2.</p>
                  <div class="example">
                    <select class="form-control" multiple data-plugin="select2">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Multi Balue -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Placeholders -->
                <div class="example-wrap">
                  <h4 class="example-title">Placeholders</h4>
                  <p>You can define placeholder easily by using <code>data-placeholder="Select a State"</code>.</p>
                  <div class="example">
                    <select class="form-control" data-plugin="select2" data-placeholder="Select a State"
                      data-allow-clear="true">
                      <option></option>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Placeholders -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Minimum Input -->
                <div class="example-wrap">
                  <h4 class="example-title">Minimum Input</h4>
                  <p>Custom Search, texts input with min length by using <code>data-minimum-input-length="2"</code>.</p>
                  <div class="example">
                    <select class="form-control" data-plugin="select2" data-minimum-input-length="2">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Minimum Input -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Disabled -->
                <div class="example-wrap">
                  <h4 class="example-title">Disabled</h4>
                  <p>Use <code>disabled</code> to set disabled state.</p>
                  <div class="example">
                    <select class="form-control" data-plugin="select2" disabled>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>

                  <div class="example">
                    <select class="form-control" multiple data-plugin="select2" disabled>
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Disabled -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Color -->
                <div class="example-wrap">
                  <h4 class="example-title">Color</h4>
                  <p>Add class <code>select2-primary</code>, <code>select2-success</code>,
                    <code>select2-info</code>, <code>select2-waring</code>, <code>select2-danger</code>                    the element's parent to add color styles.</p>
                  <div class="example">
                    <div class="select2-primary">
                      <select class="form-control" multiple="multiple" data-plugin="select2">
                        <option value="1" selected>First tag</option>
                        <option value="2">Second tag</option>
                        <option value="3" selected>Third tag</option>
                        <option value="4">Fourth tag</option>
                        <option value="5">Fifth tag</option>
                      </select>
                    </div>
                  </div>

                  <div class="example">
                    <div class="select2-success">
                      <select class="form-control" multiple="multiple" data-plugin="select2">
                        <option value="1" selected>First tag</option>
                        <option value="2">Second tag</option>
                        <option value="3" selected>Third tag</option>
                        <option value="4">Fourth tag</option>
                        <option value="5">Fifth tag</option>
                      </select>
                    </div>
                  </div>

                  <div class="example">
                    <div class="select2-warning">
                      <select class="form-control" multiple="multiple" data-plugin="select2">
                        <option value="1" selected>First tag</option>
                        <option value="2">Second tag</option>
                        <option value="3" selected>Third tag</option>
                        <option value="4">Fourth tag</option>
                        <option value="5">Fifth tag</option>
                      </select>
                    </div>
                  </div>

                  <div class="example">
                    <div class="select2-danger">
                      <select class="form-control" multiple="multiple" data-plugin="select2">
                        <option value="1" selected>First tag</option>
                        <option value="2">Second tag</option>
                        <option value="3" selected>Third tag</option>
                        <option value="4">Fourth tag</option>
                        <option value="5">Fifth tag</option>
                      </select>
                    </div>
                  </div>

                  <div class="example">
                    <div class="select2-info">
                      <select class="form-control" multiple="multiple" data-plugin="select2">
                        <option value="1" selected>First tag</option>
                        <option value="2">Second tag</option>
                        <option value="3" selected>Third tag</option>
                        <option value="4">Fourth tag</option>
                        <option value="5">Fifth tag</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- End Example Color -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Select 2 -->

        <!-- Panel Bootstrap Select -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Bootstrap Select
              <small><a class="example-plugin-link" href="http://silviomoreto.github.io/bootstrap-select"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Example Basic -->
                <div class="example-wrap">
                  <h4 class="example-title">Basic</h4>
                  <div class="example">
                    <select data-plugin="selectpicker">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <p>It also works with option groups:</p>

                  <div class="example">
                    <select data-plugin="selectpicker" title='Choose one of the following...'>
                      <optgroup label="Picnic">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </optgroup>
                      <optgroup label="Camping">
                        <option>Tent</option>
                        <option disabled>Flashlight</option>
                        <option>Toilet Paper</option>
                      </optgroup>
                    </select>
                  </div>
                  <p>You can also show the tick icon on single <code>select</code>                    with the <code>show-tick</code> class:</p>

                  <div class="example">
                    <select class="show-tick" data-plugin="selectpicker">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <p>The bootstrap menu arrow can be added with the <code>show-menu-arrow</code>                    class:</p>

                  <div class="example">
                    <select class="show-menu-arrow" data-plugin="selectpicker">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Basic -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Styles -->
                <div class="example-wrap">
                  <h4 class="example-title">Styles</h4>
                  <p>You can set different Bootstrap classes via the <code>data-style</code>                    attribute:</p>
                  <div class="example">
                    <select data-plugin="selectpicker" data-style="btn-outline btn-primary">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <div class="example">
                    <select data-plugin="selectpicker" data-style="btn-outline btn-info">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <div class="example">
                    <select data-plugin="selectpicker" data-style="btn-outline btn-success">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <div class="example">
                    <select data-plugin="selectpicker" data-style="btn-outline btn-warning">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <div class="example">
                    <select data-plugin="selectpicker" data-style="btn-outline btn-danger">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Styles -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Multiple Selects -->
                <div class="example-wrap">
                  <h4 class="example-title">Multiple Selects</h4>
                  <p>You can limit the number of elements you are allowed to select
                    via the <code>data-max-option</code> attribute. It also works
                    for option groups. </p>
                  <div class="example">
                    <select multiple data-plugin="selectpicker" data-max-options="2">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <div class="example">
                    <select multiple data-plugin="selectpicker">
                      <optgroup data-max-options="2" label="Condiments">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </optgroup>
                      <optgroup data-max-options="2" label="Breads">
                        <option>Plain</option>
                        <option>Steamed</option>
                        <option>Toasted</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Multiple Selects -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Selected Text Format -->
                <div class="example-wrap">
                  <h4 class="example-title">Selected Text Format</h4>
                  <p>Using the <code>data-selected-text-format</code> attribute on
                    a <code>multiple select</code> you can specify how the selection
                    is displayed.</p>
                  <div class="example">
                    <select data-plugin="selectpicker" multiple data-selected-text-format="count">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                    </select>
                  </div>
                  <div class="example">
                    <select data-plugin="selectpicker" multiple data-selected-text-format="count > 3">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                      <option>Onions</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Selected Text Format -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Live Search -->
                <div class="example-wrap">
                  <h4 class="example-title">Live Search</h4>
                  <p>You can add a search input by passing <code>data-live-search="true"</code>                    attribute:</p>
                  <div class="example">
                    <select data-plugin="selectpicker" data-live-search="true">
                      <option>Hot Dog, Fries and a Soda</option>
                      <option>Burger, Shake and a Smile</option>
                      <option>Sugar, Spice and all things nice</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Live Search -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Alternative -->
                <div class="example-wrap">
                  <h4 class="example-title">Alternative Title</h4>
                  <p>You can also use the <code>title</code> attribute as an alternative
                    to display when the option is selected:</p>
                  <div class="example">
                    <select data-plugin="selectpicker">
                      <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                      <option title="Combo 2">Burger, Shake and a Smile</option>
                      <option title="Combo 3">Sugar, Spice and all things nice</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Alternative -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Option Divider -->
                <div class="example-wrap">
                  <h4 class="example-title">Option Divider</h4>
                  <p>Add <code>data-divider="true"</code> to an option to turn it
                    into a divider.</p>
                  <div class="example">
                    <select data-plugin="selectpicker">
                      <option>Mustard</option>
                      <option>Ketchup</option>
                      <option>Relish</option>
                      <option>Mayonnaise</option>
                      <option value="" data-divider="true">&nbsp;</option>
                      <option>Barbecue Sauce</option>
                      <option>Salad Dressing</option>
                      <option>Tabasco</option>
                      <option>Salsa</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Option Divider -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Option Icon -->
                <div class="example-wrap">
                  <h4 class="example-title">Option Icon</h4>
                  <p>Add an icon to an option or optgroup with the <code>data-icon</code>                    attribute:</p>
                  <div class="example">
                    <select data-plugin="selectpicker">
                      <option data-icon="wb-briefcase">Mustard</option>
                      <option data-icon="wb-heart">Ketchup</option>
                      <option data-icon="wb-video">Relish</option>
                      <option data-icon="wb-home">Mayonnaise</option>
                      <option data-icon="wb-print">Barbecue Sauce</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Option Icon -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Option Subtext -->
                <div class="example-wrap">
                  <h4 class="example-title">Option Subtext</h4>
                  <p>Add subtext to an option or optgroup with the <code>data-subtext</code>                    attribute:</p>
                  <div class="example">
                    <select data-plugin="selectpicker">
                      <option data-subtext="French's">Mustard</option>
                      <option data-subtext="Heinz">Ketchup</option>
                      <option data-subtext="Sweet">Relish</option>
                      <option data-subtext="Miracle Whip">Mayonnaise</option>
                      <option value="" data-divider="true">&nbsp;</option>
                      <option data-subtext="Honey">Barbecue Sauce</option>
                      <option data-subtext="Ranch">Salad Dressing</option>
                      <option data-subtext="Sweet & Spicy">Tabasco</option>
                      <option data-subtext="Chunky">Salsa</option>
                    </select>
                  </div>
                  <div class="example">
                    <select data-plugin="selectpicker" data-show-subtext="true">
                      <option data-subtext="French's">Mustard</option>
                      <option data-subtext="Heinz">Ketchup</option>
                      <option data-subtext="Sweet">Relish</option>
                      <option data-subtext="Miracle Whip">Mayonnaise</option>
                      <option value="" data-divider="true">&nbsp;</option>
                      <option data-subtext="Honey">Barbecue Sauce</option>
                      <option data-subtext="Ranch">Salad Dressing</option>
                      <option data-subtext="Sweet & Spicy">Tabasco</option>
                      <option data-subtext="Chunky">Salsa</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Option Subtext -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Bootstrap Select -->

        <!-- Panel Bootstrap Tokenfield -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Bootstrap Tokenfield
              <small><a class="example-plugin-link" href="http://sliptree.github.io/bootstrap-tokenfield/"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-lg-6">
                <!-- Example Basic -->
                <div class="example-wrap">
                  <h4 class="example-title">Basic</h4>
                  <div class="example">
                    <input type="text" class="form-control" data-plugin="tokenfield" value="red,green,blue"
                    />
                  </div>

                  <p>Disabled tokenfield</p>
                  <div class="example">
                    <input type="text" class="form-control" data-plugin="tokenfield" value="red,green,blue"
                      disabled />
                  </div>

                  <p>With search icon</p>
                  <div class="form-group example">
                    <div class="input-search">
                      <input type="text" class="form-control" name="" data-plugin="tokenfield" value="red,green,blue"
                        placeholder="Search...">
                      <button type="submit" class="input-search-btn">
                        <i class="icon wb-search" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>

                </div>
                <!-- End Example Basic -->
              </div>

              <div class="col-lg-6">
                <!-- Example Validation States -->
                <div class="example-wrap">
                  <h4 class="example-title">Validation States</h4>
                  <p>Tokenfield supports all the default validation states from Bootstrap</p>
                  <div class="example">
                    <div class="form-group has-success">
                      <label class="form-control-label" for="inputTokenfieldSuccess">Input with success</label>
                      <input type="text" class="form-control" id="inputTokenfieldSuccess" data-plugin="tokenfield"
                        value="red,green,blue" />
                    </div>

                    <div class="form-group has-warning">
                      <label class="form-control-label" for="inputTokenfieldWarning">Input with warning</label>
                      <input type="text" class="form-control" id="inputTokenfieldWarning" data-plugin="tokenfield"
                        value="red,green,blue">
                    </div>

                    <div class="form-group has-danger">
                      <label class="form-control-label" for="inputTokenfieldError">Input with error</label>
                      <input type="text" class="form-control" id="inputTokenfieldError" data-plugin="tokenfield"
                        value="red,green,blue">
                    </div>
                  </div>
                </div>
                <!-- End Example Validation States -->
              </div>

              <div class="col-lg-6">
                <!-- Example Input Groups -->
                <div class="example-wrap">
                  <h4 class="example-title">With input groups</h4>
                  <p>You can limit the number of elements you are allowed to select
                    via the <code>data-max-option</code> attribute. It also works
                    for option groups. </p>
                  <div class="example">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text h-auto">Tags:</span>
                        </div>
                        <input type="text" class="form-control" data-plugin="tokenfield" value="cool,nice,great"
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" data-plugin="tokenfield" value="red,green,blue"
                        />
                        <div class="input-group-append">
                          <span class="input-group-text h-auto">
                            <i class="icon wb-star" aria-hidden="true"></i>
                          </span>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" data-plugin="tokenfield" value="red,green,blue" />
                    <div class="input-group-append">
                      <button type="button" class="btn btn-default btn-outline">Go!</button>
                    </div>
                  </div>
                </div> -->
                  </div>
                </div>
                <!-- End Example Input Groups -->
              </div>


              <div class="col-lg-6">
                <!-- Example Advanced -->
                <div class="example-wrap">
                  <h4 class="example-title">Advanced Usage</h4>
                  <p>Using With Typeahead.</p>
                  <div class="example">
                    <input type="text" class="form-control" id="inputTokenfieldTypeahead" value="red,green,blue"
                      placeholder="Type something and hit enter" />
                  </div>
                  <p>Using Events For complex example.</p>
                  <div class="example">
                    <input type="text" class="form-control" id="inputTokenfieldEvents" data-tokens="me|me@example.com,you@example.com,not really an email"
                    />
                  </div>
                </div>
                <!-- End Example Advanced -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Bootstrap Tokenfield -->


        <!-- Panel Bootstrap Tags Input -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Tags Input
              <small><a class="example-plugin-link" href="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example Input Tags -->
                <div class="example-wrap">
                  <h4 class="example-title">Input Tags</h4>
                  <p>Just add <code>data-role="tagsinput"</code> to your input field
                    to automatically change it to a tags input field. </p>
                  <div class="example">
                    <input class="form-control" name="tags" data-plugin="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo"
                    />
                  </div>
                </div>
                <!-- End Example Input Tags -->
              </div>

              <div class="col-md-6">
                <!-- Example Tags Input True Multi Value -->
                <div class="example-wrap">
                  <h4 class="example-title">True Multi Value</h4>
                  <p>Use a <code>&lt;select multiple /&gt;</code> as your input element
                    for a tags input, to gain true multivalue support. Instead
                    of a comma separated string, the values will be set in an array.
                    Existing <code>&lt;option /&gt;</code> elements will automatically
                    be set as tags. This makes it also possible to create tags
                    containing a comma. </p>
                  <div class="example">
                    <select data-plugin="tagsinput" multiple>
                      <option value="Amsterdam">Amsterdam</option>
                      <option value="Washington">Washington</option>
                      <option value="Sydney">Sydney</option>
                      <option value="Beijing">Beijing</option>
                      <option value="Cairo">Cairo</option>
                    </select>
                  </div>
                </div>
                <!-- End Example Tags Input True Multi Value -->
              </div>

              <div class="col-md-6">
                <!-- Example Tags Input Objects as tags -->
                <div class="example-wrap">
                  <h4 class="example-title">Objects as tags</h4>
                  <p>Instead of just adding strings as tags, bind objects to your
                    tags. This makes it possible to set id values in your input
                    field's value, instead of just the tag's text. </p>
                  <div class="example">
                    <input class="form-control" id="inputTagsObject" name="inputTagsObject" />
                  </div>
                </div>
                <!-- End Example Tags Input Objects as tags -->
              </div>

              <div class="col-md-6">
                <!-- Example Tags Input Categorizing -->
                <div class="example-wrap">
                  <h4 class="example-title">Categorizing tags</h4>
                  <p>You can set a fixed css class for your tags, or determine dynamically
                    by provinding a custom function. </p>
                  <div class="example">
                    <input class="form-control" id="inputTagsCategorizing" name="inputTagsCategorizing"
                    />
                  </div>
                </div>
                <!-- End Example Tags Input Categorizing -->
              </div>

            </div>
          </div>
        </div>
        <!-- End Panel Bootstrap Tags Input -->

        <!-- Panel Jquery Multi Select -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Multi-Select
              <small><a class="example-plugin-link" href="http://loudev.com/" target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-lg-6">
                <!-- Example Multi-Select Simple -->
                <div class="example-wrap m-md-0">
                  <h4 class="example-title">Simple</h4>
                  <div class="example">
                    <select class="form-control" data-plugin="multiSelect">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <!-- End Example Multi-Select Simple -->
              </div>

              <div class="col-lg-6">
                <!-- Example Multi-Select Public Methods -->
                <div class="example-wrap">
                  <h4 class="example-title">Public Methods</h4>
                  <div class="example">
                    <select class="multi-select-methods form-control">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>

                  <div class="example-buttons">
                    <button class="btn btn-primary btn-outline" id="buttonSelectAll" type="button">select all</button>
                    <button class="btn btn-primary btn-outline" id="buttonDeselectAll" type="button">deselect all</button>
                    <button class="btn btn-primary btn-outline" id="buttonAdd" type="button">add some</button>
                    <button class="btn btn-primary btn-outline" id="buttonRefresh" type="button">refresh</button>
                  </div>
                </div>
                <!-- End Example Multi-Select Public Methods -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Jquery Multi Select -->

        <!-- Panel Bootstrap3 Typeahead -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              Typeahead
              <small><a class="example-plugin-link" href="http://twitter.github.com/typeahead.js"
                  target="_blank">official website</a></small>
              <span class="panel-desc">The typeahead autocomplete plugin for Twitter's Bootstrap 3 base
                on Twitter's typeahead.js.</span>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example Tyepeahead Basics -->
                <div class="example-wrap">
                  <h4 class="example-title">Basics</h4>
                  <div class="example">
                    <form autocomplete="off">
                      <input type="text" class="form-control" id="exampleTypeaheadBasic" placeholder="Countries">
                    </form>
                  </div>
                </div>
                <!-- End Example Tyepeahead Basics -->
              </div>
              <div class="col-md-6">
                <!-- Example Tyepeahead Bloodhound -->
                <div class="example-wrap">
                  <h4 class="example-title">Bloodhound (Suggestion Engine)</h4>
                  <div class="example">
                    <form autocomplete="off">
                      <input type="text" class="form-control" id="exampleTypeaheadBloodhound" placeholder="Countries">
                    </form>
                  </div>
                </div>
                <!-- End Example Tyepeahead Bloodhound -->
              </div>
              <div class="col-md-6">
                <!-- Example Tyepeahead Prefetch -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Prefetch</h4>
                  <div class="example">
                    <form autocomplete="off">
                      <input type="text" class="form-control" id="exampleTypeaheadPrefetch" placeholder="Countries">
                    </form>
                  </div>
                </div>
                <!-- End Example Tyepeahead Prefetch -->
              </div>
              <div class="col-md-6">
                <!-- Example Tyepeahead Style -->
                <div class="example-wrap">
                  <h4 class="example-title">Style</h4>
                  <!-- <P></P> -->
                  <div class="example">
                    <form autocomplete="off">
                      <div class="input-search clearfix">
                        <input type="text" class="form-control" id="exampleTypeaheadStyle" name="exampleTypeaheadStyle"
                          placeholder="Search...">
                        <button type="submit" class="input-search-btn">
                          <i class="icon wb-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Tyepeahead Style -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Bootstrap3 Typeahead -->

        <!-- Panel Maxlength Control -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Maxlength Control
              <small><a class="example-plugin-link" href="https://github.com/mimo84/bootstrap-maxlength"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example Maxlength Input -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Input</h4>
                  <p><code>max-length</code> set to 35. </p>
                  <div class="example">
                    <input type="text" class="maxlength-input form-control" data-plugin="maxlength"
                      data-placement="bottom-right-inside" maxlength="35" value="This input has a limit of 35 chars"
                      placeholder="This input has a limit of 35 chars.">
                  </div>
                </div>
                <!-- End Example Maxlength Input -->
              </div>

              <div class="col-md-6">
                <!-- Example Maxlength Textarea -->
                <div class="example-wrap">
                  <h4 class="example-title">Textarea</h4>
                  <p><code>max-length</code> set to 100. </p>
                  <div class="example">
                    <textarea class="maxlength-textarea form-control" data-plugin="maxlength" data-placement="bottom-right-inside"
                      maxlength="100" rows="3" placeholder="This textarea has a limit of 100 chars."></textarea>
                  </div>
                </div>
                <!-- End Example Maxlength Textarea -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Maxlength Control -->

        <!-- Panel Spinner -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Spinner
              <small><a class="example-plugin-link" href="https://github.com/amazingSurge/jquery-asSpinner"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example AsSpinner -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">AsSpinner</h4>
                  <p>Use <code>data-plugin="asSpinner"</code> to create a basic spinner,also
                    can extend by <code>data-option</code> .</p>
                  <div class="example">
                    <h4 class="example-title">Default Spinner</h4>
                    <input type="text" class="form-control" data-plugin="asSpinner" value="0" />
                  </div>
                  <div class="example">
                    <h4 class="example-title">Custom Format</h4>
                    <input type="text" class="form-control" id="inputSpinnerCustomFormat" value="0"
                    />
                  </div>
                  <div class="example">
                    <h4 class="example-title">Disabled</h4>
                    <input type="text" class="form-control" data-plugin="asSpinner" data-disabled="true"
                      value="0" />
                  </div>
                </div>
                <!-- End Example AsSpinner -->
              </div>

              <div class="col-md-6">
                <!-- Example Bootstrap Touchspin -->
                <div class="example-wrap">
                  <h4 class="example-title">Bootstrap Touchspin</h4>
                  <p>Use <code>data-plugin="touchSpin"</code> to create a Bootstrap
                    style spinner,also can extend by <code>data-option</code> .</p>
                  <div class="example">
                    <h4 class="example-title">Postfix</h4>
                    <input type="text" class="form-control" name="touchSpinPostfix" data-plugin="TouchSpin"
                      data-min="0" data-max="100" data-step="0.1" data-decimals="2"
                      data-boostat="5" data-maxboostedstep="10" data-postfix="%"
                      value="55" />
                  </div>
                  <div class="example">
                    <h4 class="example-title">Prefix</h4>
                    <input type="text" class="form-control" name="touchSpinPrefix" data-plugin="TouchSpin"
                      data-min="-1000000000" data-max="1000000000" data-stepinterval="50"
                      data-maxboostedstep="10000000" data-prefix="$" value="0" />
                  </div>
                  <div class="example">
                    <h4 class="example-title">Vertical</h4>
                    <input type="text" class="form-control" name="touchSpinVertical" data-plugin="TouchSpin"
                      data-verticalbuttons="true" value="0" />
                  </div>
                </div>
                <!-- End Example Bootstrap Touchspin -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Spinner -->

        <!-- Panel Icheck -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Icheck
              <small><a class="example-plugin-link" href="http://fronteed.com/iCheck"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Panel Checkboxes -->
                <div class="example-wrap m-lg-0">
                  <h4 class="example-title">Checkboxes</h4>
                  <p>Create checkbox by adding <code>data-plugin="iCheck"</code>,
                    <code>type="checkbox"</code>.</p>
                  <ul class="list-unstyled example">
                    <li class="mb-15">
                      <input type="checkbox" class="icheckbox-primary" id="inputUnchecked" name="inputiCheckCheckboxes"
                        data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                      />
                      <label for="inputUnchecked">Unchecked</label>
                    </li>
                    <li class="mb-15">
                      <input type="checkbox" class="icheckbox-primary" id="inputChecked" name="inputiCheckCheckboxes"
                        data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                        checked />
                      <label for="inputChecked">Checked</label>
                    </li>
                    <li class="mb-15">
                      <input type="checkbox" class="icheckbox-primary" id="inputDisabledUnchecked" name="inputiCheckCheckboxes"
                        data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                        disabled />
                      <label for="inputDisabledUnchecked">Disabled Unchecked</label>
                    </li>
                    <li class="mb-15">
                      <input type="checkbox" class="icheckbox-primary" id="inputCheckedDisabled" name="inputiCheckCheckboxes"
                        data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                        disabled checked />
                      <label for="inputCheckedDisabled">Checked Disabled</label>
                    </li>
                  </ul>
                </div>
                <!-- End Panel Checkboxes -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Radios -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Radios</h4>
                  <p>Create radio by adding <code>data-plugin="iCheck"</code>, <code>type="radio"</code>.</p>
                  <ul class="list-unstyled example">
                    <li class="mb-15">
                      <input type="radio" class="icheckbox-primary" id="inputRadiosUnchecked" name="inputRadios"
                        data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                      />
                      <label for="inputRadiosUnchecked">Unchecked</label>
                    </li>
                    <li class="mb-15">
                      <input type="radio" class="icheckbox-primary" id="inputRadiosChecked" name="inputRadios"
                        data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                        checked />
                      <label for="inputRadiosChecked">Checked</label>
                    </li>
                    <li class="mb-15">
                      <input type="radio" class="icheckbox-primary" id="inputRadiosDisabledUnchecked"
                        name="inputRadiosDisabledUnchecked" data-plugin="iCheck"
                        data-radio-class="iradio_flat-blue" disabled />
                      <label for="inputRadiosDisabledUnchecked">Disabled Unchecked</label>
                    </li>
                    <li class="mb-15">
                      <input type="radio" class="icheckbox-primary" id="inputRadiosCheckedDisabled" name="inputRadiosCheckedDisabled"
                        data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                        checked disabled />
                      <label for="inputRadiosCheckedDisabled">Checked Disabled</label>
                    </li>
                  </ul>
                </div>
                <!-- End Example Radios -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Color Options -->
                <div class="example-wrap">
                  <h4 class="example-title">Color Options</h4>
                  <p>Add class <code>.icheckbox-primary</code>, <code>.icheckbox-green</code>,
                    <code>.icheckbox-orange</code>, <code>.icheckbox-red</code>,
                    <code>.icheckbox-grey</code> to add colors style.</p>
                  <div class="example">
                    <ul class="list-unstyled list-inline m-0">
                      <li class="list-inline-item mb-20">
                        <input type="checkbox" class="icheckbox-primary" id="inputColorPrimary" name="inputiCheckColorCheckboxes"
                          data-plugin="iCheck" data-checkbox-class="icheckbox_flat-blue"
                          checked />
                        <label for="inputColorPrimary"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="checkbox" class="icheckbox-green" id="inputColorGreen" name="inputiCheckColorCheckboxes"
                          data-plugin="iCheck" data-checkbox-class="icheckbox_flat-green"
                          checked>
                        <label for="inputColorGreen"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="checkbox" class="icheckbox-orange" id="inputColorOrange" name="inputiCheckColorCheckboxes"
                          data-plugin="iCheck" data-checkbox-class="icheckbox_flat-orange"
                          checked>
                        <label for="inputColorOrange"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="checkbox" class="icheckbox-red" id="inputColorRed" name="inputiCheckColorCheckboxes"
                          data-plugin="iCheck" data-checkbox-class="icheckbox_flat-red"
                          checked>
                        <label for="inputColorRed"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="checkbox" class="icheckbox-grey" id="inputColorGrey" name="inputiCheckColorCheckboxes"
                          data-plugin="iCheck" data-checkbox-class="icheckbox_flat-grey"
                          checked>
                        <label for="inputColorGrey"></label>
                      </li>
                    </ul>

                    <ul class="list-unstyled list-inline m-0">
                      <li class="list-inline-item mb-20">
                        <input type="radio" class="icheckbox-primary" id="inputiCheckColorRadios1" name="inputiCheckColorRadios1"
                          data-plugin="iCheck" data-radio-class="iradio_flat-blue"
                          checked />
                        <label for="inputiCheckColorRadios1"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="radio" class="icheckbox-green" id="inputiCheckColorRadios2" name="inputiCheckColorRadios2"
                          data-plugin="iCheck" data-radio-class="iradio_flat-green"
                          checked>
                        <label for="inputiCheckColorRadios2"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="radio" class="icheckbox-orange" id="inputiCheckColorRadios3" name="inputiCheckColorRadios3"
                          data-plugin="iCheck" data-radio-class="iradio_flat-orange"
                          checked>
                        <label for="inputiCheckColorRadios3"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="radio" class="icheckbox-red" id="inputiCheckColorRadios4" name="inputiCheckColorRadios4"
                          data-plugin="iCheck" data-radio-class="iradio_flat-red"
                          checked>
                        <label for="inputiCheckColorRadios4"></label>
                      </li>
                      <li class="list-inline-item mb-20">
                        <input type="radio" class="icheckbox-grey" id="inputiCheckColorRadios5" name="inputiCheckColorRadios5"
                          data-plugin="iCheck" data-radio-class="iradio_flat-grey"
                          checked>
                        <label for="inputiCheckColorRadios5"></label>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Example Color Options -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Icheck -->

        <!-- Panel Toggle Switches -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Toggle Switches
              <small><a class="example-plugin-link" href="http://abpetkov.github.io/switchery/"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Example Basic -->
                <div class="example-wrap m-lg-0">
                  <h4 class="example-title">Basic</h4>
                  <p>Use <code>data-plugin="switchery"</code> and <code>type="checkbox"</code>                    to create a basic switcher.</p>
                  <div class="example">
                    <div class="float-left mr-20">
                      <input type="checkbox" id="inputBasicOff" name="inputiCheckBasicCheckboxes" data-plugin="switchery"
                      />
                    </div>
                    <label class="pt-3" for="inputBasicOff">Off</label>
                  </div>
                  <div class="example">
                    <div class="float-left mr-20">
                      <input type="checkbox" id="inputBasicOn" name="inputiCheckBasicCheckboxes" data-plugin="switchery"
                        checked />
                    </div>
                    <label class="pt-3" for="inputBasicOn">On</label>
                  </div>
                  <div class="example">
                    <div class="float-left mr-20">
                      <input type="checkbox" id="inputBasicDisabledOff" name="inputiCheckBasicCheckboxes"
                        data-plugin="switchery" data-disabled="true" />
                    </div>
                    <label class="pt-3" for="inputBasicDisabledOff">Disabled Off</label>
                  </div>
                  <div class="example">
                    <div class="float-left mr-20">
                      <input type="checkbox" id="inputBasicDisabledOn" name="inputiCheckBasicCheckboxes"
                        data-plugin="switchery" data-disabled="true" checked />
                    </div>
                    <label class="pt-3" for="inputBasicDisabledOn">Disabled On</label>
                  </div>
                </div>
                <!-- End Example Basic -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Colors -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Colors</h4>
                  <p>Add attr <code>data-color</code> to change colors style.</p>
                  <ul class="list-unstyled list-inline example">
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" data-plugin="switchery" checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" data-plugin="switchery" data-color="#526069" checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" data-plugin="switchery" data-color="#17b3a3" checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" data-plugin="switchery" data-color="#eb6709" checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" class="js-switch-secondary" data-plugin="switchery" data-color="#ff4c52"
                        checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" data-plugin="switchery" data-color="#9463f7" checked />
                    </li>
                  </ul>
                </div>
                <!-- End Example Colors -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Size -->
                <div class="example-wrap">
                  <h4 class="example-title">Size</h4>
                  <p>Add <code>data-size="large"</code> ,<code>data-size="small"</code>                    to change size.</p>
                  <ul class="list-unstyled list-inline example">
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" class="js-switch-large" data-plugin="switchery" data-size="large"
                        checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" class="js-switch" data-plugin="switchery" checked />
                    </li>
                    <li class="list-inline-item mr-25 mb-25">
                      <input type="checkbox" class="js-switch-small" data-plugin="switchery" data-size="small"
                        checked />
                    </li>
                  </ul>
                </div>
                <!-- End Example Size -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Toggle Switches -->

        <!-- Panel Clockpicker -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Clockpicker
              <small><a class="example-plugin-link" href="http://weareoutman.github.io/clockpicker/"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6">
                <!-- Example Default Clockpicker -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Default</h4>
                  <p>Use <code>data-plugin="clockpicker"</code> create it.</p>
                  <div class="example">
                    <div class="input-group clockpicker-wrap" data-plugin="clockpicker">
                      <input type="text" class="form-control" value="09:30">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="wb-time" aria-hidden="true"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Default Clockpicker -->
              </div>

              <div class="col-md-6">
                <!-- Example Auto Colse -->
                <div class="example-wrap">
                  <h4 class="example-title">Auto Colse</h4>
                  <p>Add <code>data-autoclose="true"</code> to open the autoclose.</p>
                  <div class="example">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="wb-time" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="timepicker form-control" data-plugin="clockpicker" data-autoclose="true">
                    </div>
                  </div>
                </div>
                <!-- End Example Auto Colse -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Clockpicker -->

        <!-- Panel Time Pickers -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Jquery Timepicker
              <small><a class="example-plugin-link" href="http://jonthornton.github.com/jquery-timepicker/"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Example Basic -->
                <div class="example-wrap m-lg-0">
                  <h4 class="example-title">Basic</h4>
                  <p>Use <code>data-plugin="timepicker"</code> create a basic timepicker.</p>
                  <div class="example">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="wb-time" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" data-plugin="timepicker" />
                    </div>
                  </div>
                </div>
                <!-- End Example Basic -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Duration -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Duration</h4>
                  <p>Adding <code>data-min-time</code>, <code>data-max-time</code>,
                    <code>data-show-duration="true"</code> to set the duration.</p>
                  <div class="example">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="wb-time" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" data-plugin="timepicker" data-min-time="2:00pm"
                        data-max-time="11:30pm" data-show-duration="true" />
                    </div>
                  </div>
                </div>
                <!-- End Example Duration -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Reset Current -->
                <div class="example-wrap">
                  <h4 class="example-title">Reset Current</h4>
                  <p>You can reset current time.</p>
                  <div class="example">
                    <div class="input-group">
                      <input type="text" class="form-control" id="inputTextCurrent" data-plugin="timepicker"
                      />
                      <span class="input-group-append">
                        <button type="button" class="btn btn-primary" id="exampleTimeButton">Reset current time</button>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Example Reset Current -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Time Pickers -->

        <!-- Panel Date Picker -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Date Picker
              <small><a class="example-plugin-link" href="https://github.com/eternicode/bootstrap-datepicker"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Example Default Datepicker -->
                <div class="example-wrap">
                  <h4 class="example-title">Default Datepicker</h4>
                  <p>Add <code>data-plugin="datepicker"</code> to create a default
                    datepicker. use <code>data-multidate="true"</code> to selecting
                    multi dates.</p>
                  <div class="example">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" data-plugin="datepicker">
                    </div>
                  </div>
                  <div class="example">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" data-plugin="datepicker" data-multidate="true">
                    </div>
                  </div>
                </div>
                <!-- End Example Default Datepicker -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Date Range -->
                <div class="example-wrap">
                  <h4 class="example-title">Date Range</h4>
                  <p>Set <code>name="start"</code> and <code>name="end"</code> for
                    date range.</p>
                  <div class="example">
                    <div class="input-daterange" data-plugin="datepicker">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="icon wb-calendar" aria-hidden="true"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control" name="start" />
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">to</span>
                        </div>
                        <input type="text" class="form-control" name="end" />
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Example Date Range -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Inline -->
                <div class="example-wrap">
                  <h4 class="example-title">Inline</h4>
                  <p>You also can set the datepicker to be inline and flat.</p>
                  <div class="example">
                    <div id="inlineDatepicker" data-autoclose="false" data-date="03/12/2017"></div>
                    <input type="hidden" id="inputHiddenInline" />
                  </div>
                </div>
                <!-- End Example Inline -->
              </div>
            </div>
          </div>

          <div class="panel-heading">
            <h3 class="panel-title">Datepair.Js
              <small><a class="example-plugin-link" href="http://jonthornton.github.com/Datepair.js"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body">
            <p>Add <code>datepair.js</code> file to make datepicker with timepicker
              be a pair.</p>
            <div class="example-wrap">
              <div class="example datepair-wrap" data-plugin="datepair">
                <div class="input-daterange-wrap">
                  <div class="input-daterange">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control datepair-date datepair-start" data-plugin="datepicker">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon wb-time" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control datepair-time datepair-start" data-plugin="timepicker"
                      />
                    </div>
                  </div>
                </div>
                <div class="input-daterange-to">to</div>
                <div class="input-daterange-wrap">
                  <div class="input-daterange">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon wb-calendar" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control datepair-date datepair-end" name="end" data-plugin="datepicker">
                    </div>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon wb-time" aria-hidden="true"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control datepair-time datepair-end" data-plugin="timepicker"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Date Picker -->

        <!-- Panel Color Picker -->
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Color Picker
              <small><a class="example-plugin-link" href="https://github.com/amazingSurge/jquery-asColorPicker"
                  target="_blank">official website</a></small>
            </h3>
          </div>
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-6 col-xl-4">
                <!-- Example Simple Mode -->
                <div class="example-wrap">
                  <h4 class="example-title">Simple Mode</h4>
                  <p>Use <code>data-plugin="asColorPicker"</code>, <code>data-mode="simple"</code>                    to make a simple mode colorpicker.</p>
                  <div class="example">
                    <input type="text" class="asColorpicker form-control" data-plugin="asColorPicker"
                      data-mode="simple" value="#ff666b" />
                  </div>
                </div>
                <!-- End Example Simple Mode -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Complex Mode -->
                <div class="example-wrap">
                  <h4 class="example-title">Complex Mode</h4>
                  <p>Add <code>data-mode="complex"</code> to change mode.</p>
                  <div class="example">
                    <input type="text" class="asColorpicker form-control" data-plugin="asColorPicker"
                      data-mode="complex" value="#bba7e4" />
                  </div>
                </div>
                <!-- End Example Complex Mode -->
              </div>

              <div class="col-md-6 col-xl-4">
                <!-- Example Gradient Mode -->
                <div class="example-wrap">
                  <h4 class="example-title">Gradient Mode</h4>
                  <p>Add <code>data-mode="gradient"</code> ,then,you can generate
                    CSS3 gradient by the mode.</p>
                  <div class="example">
                    <input type="text" class="asColorpicker form-control" data-plugin="asColorPicker"
                      data-mode="gradient" value="#79d1c9" />
                  </div>
                </div>
                <!-- End Example Gradient Mode -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Color Picker -->

        <div class="row">
          <div class="col-md-6">
            <!-- Panel Slider Range -->
            <div class="panel">
              <header class="panel-heading">
                <h3 class="panel-title">Slider Range
                  <small><a class="example-plugin-link" href="https://github.com/amazingSurge/jquery-asRange"
                      target="_blank">official website</a></small>
                </h3>
              </header>
              <div class="panel-body">
                <p>Use <code>data-plugin="asRange"</code> to make a default slider
                  range.Add <code>data-range="true"</code>, <code>data-tip=true</code>,
                  ...to change mode or add tooltip... </p>
                <!-- Example Default -->
                <div class="example-wrap">
                  <h4 class="example-title">Default</h4>
                  <div class="example">
                    <div class="asRange" data-plugin="asRange" data-namespace="rangeUi" data-step="1"
                      data-min="2" data-max="12" data-value="7"></div>
                  </div>
                </div>
                <!-- End Example Default -->

                <!-- Example Range -->
                <div class="example-wrap">
                  <h4 class="example-title">Range</h4>
                  <div class="example">
                    <div class="asRange" data-plugin="asRange" data-namespace="rangeUi" data-step="10"
                      data-min="2" data-range="true" data-value="[10,70]"></div>
                  </div>
                </div>
                <!-- End Example Range -->

                <!-- Example With Tooltip -->
                <div class="example-wrap">
                  <h4 class="example-title">With Tooltip</h4>
                  <div class="example mt-30">
                    <div class="asRange" data-plugin="asRange" data-namespace="rangeUi" data-step="1"
                      data-min="2" data-tip=true data-max="12" data-value="7"></div>
                  </div>
                </div>
                <!-- End Example With Tooltip -->
              </div>
            </div>
            <!-- End Panel Slider Range -->
          </div>

          <div class="col-md-6">
            <!-- Panel Jquery Strength -->
            <div class="panel">
              <header class="panel-heading">
                <h3 class="panel-title">Jquery Strength
                  <small><a class="example-plugin-link" href="https://github.com/amazingSurge/jquery-strength"
                      target="_blank">official website</a></small>
                </h3>
              </header>
              <div class="panel-body">
                <p>Use <code>data-plugin="strength"</code> to make a password strength
                  validation.</p>
                <!-- Example -->
                <div class="example-wrap">
                  <form class="example">
                    <div class="form-group">
                      <label class="form-control-label mb-15" for="inputPassword1">Password</label>
                      <input type="password" class="password-strength-example1 form-control" id="inputPassword1"
                        name="inputPasswords" data-plugin="strength" value="" />
                    </div>
                    <div class="form-group">
                      <label class="form-control-label mb-15" for="inputPassword2">Password</label>
                      <input type="password" class="password-strength-example2 form-control" id="inputPassword2"
                        name="inputPasswords" data-plugin="strength" data-show-toggle="true"
                        value="123456" />
                    </div>
                  </form>
                </div>
                <!-- End Example -->
              </div>
            </div>
            <!-- End Panel Jquery Strength -->
          </div>
        </div>

        <!-- Panel Jquery Knob -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Jquery Knob
              <small><a class="example-plugin-link" href="https://github.com/aterrien/jQuery-Knob"
                  target="_blank">official website</a></small>
            </h3>
          </header>
          <div class="panel-body">
            <p>Use <code>data-plugin="knob"</code> init plugin, and also can set options
              with attributes 'data-option'.</p>
            <div class="row text-center">
              <div class="col-lg-4 col-md-6">
                <div class="example-wrap">
                  <h4 class="example-title">Disable display input</h4>
                  <div class="example">
                    <input type="text" class="knob-chart knob-example-5" data-plugin="knob" data-displayInput="false"
                      data-fg-color="#526069" value="0" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="example-wrap">
                  <h4 class="example-title">'cursor' mode</h4>
                  <div class="example">
                    <input type="text" class="knob-chart knob-example-3" data-plugin="knob" data-line-cap="round"
                      data-fg-color="#3e8ef7" data-cursor="true" value="-25" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="example-wrap">
                  <h4 class="example-title">Display previous value</h4>
                  <div class="example">
                    <input type="text" class="knob-chart knob-example-1" data-plugin="knob" data-fg-color="#ff4c52"
                      data-min="0" data-max="100" value="20" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="example-wrap">
                  <h4 class="example-title">5-digit values, step 1000</h4>
                  <div class="example">
                    <input type="text" class="knob-chart knob-example-2" data-plugin="knob" data-min="-15000"
                      data-max="15000" data-step="1000" data-display-previous="true"
                      data-fg-color="#9463f7" value="-10000" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="example-wrap">
                  <h4 class="example-title">Angle offset</h4>
                  <div class="example">
                    <input type="text" class="knob-chart knob-example-6" data-plugin="knob" data-angleOffset="90"
                      data-linecap="round" data-min="0" data-max="100" data-fg-color="#0bb2d4"
                      value="60" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="example-wrap">
                  <h4 class="example-title">Angle offset and arc</h4>
                  <div class="example">
                    <input type="text" class="knob-chart knob-example-4" data-plugin="knob" data-fg-color="#17b3a3"
                      data-cursor="true" data-line-cap="round" data-angle-offset="-125"
                      data-angle-arc="250" value="11" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Panel Jquery Knob -->

        <div class="row row-lg">
          <div class="col-12">
            <!-- Panel Labelauty -->
            <div class="panel">
              <header class="panel-heading">
                <h3 class="panel-title">Labelauty
                  <small><a class="example-plugin-link" href="https://github.com/fntneves/jquery-labelauty"
                      target="_blank">official website</a></small>
                </h3>
              </header>
              <div class="panel-body container-fluid">
                <p>Add <code>data-plugin="labelauty"</code> to use it.</p>
                <div class="row row-lg">
                  <div class="col-md-6">
                    <!-- Example Labeled Checkbox -->
                    <div class="example-wrap">
                      <h4 class="example-title">Labeled Checkbox</h4>
                      <div class="example">
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty" name="inputLableautyCheckbox" data-plugin="labelauty"
                            data-labelauty="Don't synchronize|Synchronize" checked/>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty" name="inputLableautyCheckbox" data-plugin="labelauty"
                            data-labelauty="I don't accept|I accept" />
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty" name="inputLableautyCheckbox" data-plugin="labelauty"
                            data-labelauty="I am disabled!" disabled/>
                        </div>
                      </div>
                    </div>
                    <!-- End Example Labeled Check -->
                  </div>

                  <div class="col-md-6">
                    <!-- Example Labeled Radio -->
                    <div class="example-wrap">
                      <h4 class="example-title">Labeled Radio</h4>
                      <div class="example">
                        <div class="form-group">
                          <input type="radio" class="to-labelauty" name="inputLableautyRadio" data-plugin="labelauty"
                            data-labelauty="Don't synchronize|Synchronize" checked/>
                        </div>
                        <div class="form-group">
                          <input type="radio" class="to-labelauty" name="inputLableautyRadio" data-plugin="labelauty"
                            data-labelauty="I don't accept|I accept" />
                        </div>
                        <div class="form-group">
                          <input type="radio" class="to-labelauty" name="inputLableautyRadio" data-plugin="labelauty"
                            data-labelauty="I am disabled!" disabled/>
                        </div>
                      </div>
                    </div>
                    <!-- End Example Labeled Radio -->
                  </div>

                  <div class="col-md-6">
                    <!-- Example Non Labeled Checkbox -->
                    <div class="example-wrap">
                      <h4 class="example-title">Non-Labeled Checkbox</h4>
                      <div class="example">
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" />
                          <span>Unchecked</span>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" checked/>
                          <span>Checked</span>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" disabled checked/>
                          <span>Disabled Checked</span>
                        </div>
                        <div class="form-group">
                          <input type="checkbox" class="to-labelauty-icon" name="inputLableautyNoLabeledCheckbox"
                            data-plugin="labelauty" data-label="false" disabled/>
                          <span>Disabled Unchecked</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Example Non Labeled Checkbox -->
                  </div>

                  <div class="col-md-6">
                    <!-- Example Non Labeled Radio -->
                    <div class="example-wrap">
                      <h4 class="example-title">Non-Labeled Radio</h4>
                      <div class="example">
                        <div class="form-group">
                          <input type="radio" class="to-labelauty-icon" name="inputLableautyNoLabeledRadio"
                            data-plugin="labelauty" data-label="false" />
                          <span>Unchecked</span>
                        </div>
                        <div class="form-group">
                          <input type="radio" class="to-labelauty-icon" name="inputLableautyNoLabeledRadio"
                            data-plugin="labelauty" data-label="false" checked />
                          <span>Checked</span>
                        </div>
                        <div class="form-group">
                          <input type="radio" class="to-labelauty-icon" name="inputLableautyNoLabeledRadio1"
                            data-plugin="labelauty" data-label="false" disabled checked
                          />
                          <span>Disabled Checked</span>
                        </div>
                        <div class="form-group">
                          <input type="radio" class="to-labelauty-icon" name="inputLableautyNoLabeledRadio2"
                            data-plugin="labelauty" data-label="false" disabled />
                          <span>Disabled Unchecked</span>
                        </div>
                      </div>
                    </div>
                    <!-- End Example Non Labeled Radio -->
                  </div>
                </div>
              </div>
            </div>
            <!-- End Panel Labelauty -->
          </div>
        </div>
        <!-- Ion Range Slider -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">
              Ion Range Slider
              <small>
                <a class="example-plugin-link" href="https://github.com/IonDen/ion.rangeSlider"
                  target="_blank">official website</a>
              </small>
            </h3>
          </header>
          <div class="panel-body container-fluid">
            <!-- Examples-->
            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                BASIC
              </h4>
              <p>
                Use <code>data-plugin="ionRangeSlider"</code> to make a default
                slider range.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_1" name="irsExample" data-plugin="ionRangeSlider" />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Min-Max
              </h4>
              <p>
                Add <code>data-min=100</code>,<code>data-max=1000</code>,<code>data-from=500</code>                Set min value, max value and start point.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_2" name="irsExample" data-plugin="ionRangeSlider" data-min=100
                    data-max=1000 data-from=500 />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Prefix
              </h4>
              <p>
                Add <code>data-type="double"</code>,<code>data-from=100</code>,<code>data-to=800</code>                Set type to double and specify range.
                <br/> Add <code>data-grid=true</code> showing grid.
                <br/>Add <code>data-prefix="$"</code>adding prefix "$".
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_3" name="irsExample" data-plugin="ionRangeSlider" data-type="double"
                    data-grid=true data-min=0 data-max=1000 data-from=100 data-to=800
                    data-prefix="$" />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Range
              </h4>
              <p>
                Use <code>data-from=-500</code> Set up range with negative values.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_4" name="irsExample" data-plugin="ionRangeSlider" data-type="double"
                    data-grid=true data-min=-1000 data-max=1000 data-from=-500 data-to=500
                  />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Step
              </h4>
              <p>
                Use <code>data-step=250</code> to Using step 250.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_5" name="irsExample" data-plugin="ionRangeSlider" data-type="double"
                    data-grid=true data-min=-1000 data-max=1000 data-from=-500 data-to=500
                    data-step=250 />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Custom Values
              </h4>
              <p>
                Use <code>
                data-values="zero, one, ..., nine, ten"
              </code> to Using any strings as values.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_6" name="irsExample" data-plugin="ionRangeSlider" data-grid=true
                    data-from=3 data-values="zero,one,two,three,four,five,six,seven,eight,nine,ten"
                  />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Prettify Numbers
              </h4>
              <p>
                Use <code>data-prettify_enabled=true</code> Prettify enabled. Much
                better!.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_7" name="irsExample" data-plugin="ionRangeSlider" data-type="double"
                    data-grid=true data-min=1000 data-max=1000000 data-from=200000
                    data-step=1000 data-prettify_enabled=true />
                </div>
              </div>
            </div>

            <div class="example-wrap m-lg-0">
              <h4 class="example-title">
                Disabled
              </h4>
              <p>
                Lock slider by using <code>data-disable=true</code> disable option.
              </p>
              <div class="example">
                <div class="form-group">
                  <input type="text" id="irs_8" name="irsExample" data-plugin="ionRangeSlider" data-from=50
                    data-disable=true />
                </div>
              </div>
            </div>
            <!-- End Examples -->
          </div>
        </div>
        <!-- End Ion Range Slider -->
      </div>
    </div>
    <!-- End Page -->


    <!-- Footer -->
    <footer class="site-footer">
      <div class="site-footer-legal">© 2018 <a href="http://themeforest.net/item/remark-responsive-bootstrap-admin-template/11989202">Remark</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 wb wb-heart"></i> by <a href="https://themeforest.net/user/creation-studio">Creation Studio</a>
      </div>
    </footer>
    <!-- Core  -->
    <script src="{{ url('/global') }}/vendor/babel-external-helpers/babel-external-helpers.js"></script>
    <script src="{{ url('/global') }}/vendor/jquery/jquery.js"></script>
    <script src="{{ url('/global') }}/vendor/popper-js/umd/popper.min.js"></script>
    <script src="{{ url('/global') }}/vendor/bootstrap/bootstrap.js"></script>
    <script src="{{ url('/global') }}/vendor/animsition/animsition.js"></script>
    <script src="{{ url('/global') }}/vendor/mousewheel/jquery.mousewheel.js"></script>
    <script src="{{ url('/global') }}/vendor/asscrollbar/jquery-asScrollbar.js"></script>
    <script src="{{ url('/global') }}/vendor/asscrollable/jquery-asScrollable.js"></script>
    <script src="{{ url('/global') }}/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
    
    <!-- Plugins -->
    <script src="{{ url('/global') }}/vendor/switchery/switchery.js"></script>
    <script src="{{ url('/global') }}/vendor/intro-js/intro.js"></script>
    <script src="{{ url('/global') }}/vendor/screenfull/screenfull.js"></script>
    <script src="{{ url('/global') }}/vendor/slidepanel/jquery-slidePanel.js"></script>
        <script src="{{ url('/global') }}/vendor/select2/select2.full.min.js"></script>
        <script src="{{ url('/global') }}/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
        <script src="{{ url('/global') }}/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="{{ url('/global') }}/vendor/bootstrap-select/bootstrap-select.js"></script>
        <script src="{{ url('/global') }}/vendor/icheck/icheck.min.js"></script>
        <script src="{{ url('/global') }}/vendor/switchery/switchery.js"></script>
        <script src="{{ url('/global') }}/vendor/asrange/jquery-asRange.min.js"></script>
        <script src="{{ url('/global') }}/vendor/ionrangeslider/ion.rangeSlider.min.js"></script>
        <script src="{{ url('/global') }}/vendor/asspinner/jquery-asSpinner.min.js"></script>
        <script src="{{ url('/global') }}/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
        <script src="{{ url('/global') }}/vendor/ascolor/jquery-asColor.min.js"></script>
        <script src="{{ url('/global') }}/vendor/asgradient/jquery-asGradient.min.js"></script>
        <script src="{{ url('/global') }}/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
        <script src="{{ url('/global') }}/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
        <script src="{{ url('/global') }}/vendor/jquery-knob/jquery.knob.js"></script>
        <script src="{{ url('/global') }}/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
        <script src="{{ url('/global') }}/vendor/jquery-labelauty/jquery-labelauty.js"></script>
        <script src="{{ url('/global') }}/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <script src="{{ url('/global') }}/vendor/timepicker/jquery.timepicker.min.js"></script>
        <script src="{{ url('/global') }}/vendor/datepair/datepair.min.js"></script>
        <script src="{{ url('/global') }}/vendor/datepair/jquery.datepair.min.js"></script>
        <script src="{{ url('/global') }}/vendor/jquery-strength/password_strength.js"></script>
        <script src="{{ url('/global') }}/vendor/jquery-strength/jquery-strength.min.js"></script>
        <script src="{{ url('/global') }}/vendor/multi-select/jquery.multi-select.js"></script>
        <script src="{{ url('/global') }}/vendor/typeahead-js/bloodhound.min.js"></script>
        <script src="{{ url('/global') }}/vendor/typeahead-js/typeahead.jquery.min.js"></script>
        <script src="{{ url('/global') }}/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Scripts -->
    <script src="{{ url('/global') }}/js/Component.js"></script>
    <script src="{{ url('/global') }}/js/Plugin.js"></script>
    <script src="{{ url('/global') }}/js/Base.js"></script>
    <script src="{{ url('/global') }}/js/Config.js"></script>
    
    <script src="{{ url('assets') }}/js/Section/Menubar.js"></script>
    <script src="{{ url('assets') }}/js/Section/GridMenu.js"></script>
    <script src="{{ url('assets') }}/js/Section/Sidebar.js"></script>
    <script src="{{ url('assets') }}/js/Section/PageAside.js"></script>
    <script src="{{ url('assets') }}/js/Plugin/menu.js"></script>
    
    <script src="{{ url('/global') }}/js/config/colors.js"></script>
    <script src="{{ url('assets') }}/js/config/tour.js"></script>
    <script>Config.set('assets', '{{ url('assets') }}');</script>
    
    <!-- Page -->
    <script src="{{ url('assets') }}/js/Site.js"></script>
    <script src="{{ url('/global') }}/js/Plugin/asscrollable.js"></script>
    <script src="{{ url('/global') }}/js/Plugin/slidepanel.js"></script>
    <script src="{{ url('/global') }}/js/Plugin/switchery.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/select2.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/bootstrap-tokenfield.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/bootstrap-tagsinput.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/bootstrap-select.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/icheck.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/switchery.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/asrange.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/ionrangeslider.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/asspinner.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/clockpicker.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/ascolorpicker.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/bootstrap-maxlength.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/jquery-knob.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/bootstrap-touchspin.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/card.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/jquery-labelauty.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/bootstrap-datepicker.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/jt-timepicker.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/datepair.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/jquery-strength.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/multi-select.js"></script>
        <script src="{{ url('/global') }}/js/Plugin/jquery-placeholder.js"></script>
    
        <script src="{{ url('assets') }}/examples/js/forms/advanced.js"></script>
  </body>
</html>
