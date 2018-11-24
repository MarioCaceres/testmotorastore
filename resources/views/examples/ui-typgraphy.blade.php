<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href=""><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="tables-data.html"><i class="fa fa-shopping-cart"></i>Ventas</a>
                    </li>
                    <li class="active">
                            <a href="stock.html"><i class="fa  fa-suitcase"></i>Stock</a>
                    </li>
                    <li class="active">
                            <a href="actividad-reciente.html"><i class="fa fa-th-list"></i>Actividad Reciente</a>
                    </li>
                    <li class="active">
                            <a href="usuarios.html"><i class="fa fa-users"></i>Administrar Usuarios</a>
                    </li>

                    <li class="menu-title">UI elements</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('ui-buttons')}}">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{url('ui-badges')}}">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{url('ui-tabs')}}">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="{{url('ui-cards')}}">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="{{url('ui-alerts')}}">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="{{url('ui-progressbar')}}">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="{{url('ui-modals')}}">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="{{url('ui-switches')}}">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="{{url('ui-grids')}}">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="{{url('ui-typgraphy')}}">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('tables-basic')}}">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('tables-data')}}">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('forms-basic')}}">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('forms-advanced')}}">Advanced Form</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Icons</li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('font-fontawesome')}}">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="{{url('font-themify')}}">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('widgets')}}"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="{{url('charts-chartjs')}}">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{url('charts-flot')}}">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="{{url('charts-peity')}}">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="{{url('maps-gmap')}}">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="{{url('maps-vector')}}">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Extras</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('page-login')}}">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('page-register')}}">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{url('pages-forget')}}">Forget Pass</a></li>
                        </ul> 
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">UI Elements</a></li>
                                    <li class="active">Typography</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">Typography</strong>
                                </div>

                                <div class="card-body">

                                  <div class="typo-headers">
                                    <h1 class="pb-2 display-4">Very Important Information H1</h1>
                                    <h2 class="pb-2 display-5">Sections & Modal Names H2</h2>
                                    <h3 class="pb-2 display-5">Articles & Block Headings H3</h3>
                                    <h4 class="pb-2 display-5">Random Tiny Heading H4</h4>
                                    <h5 class="pb-2 display-5">Random Tiny Heading H5</h5>
                                    <h6 class="pb-4 display-5">Random Tiny Heading H6</h6>
                                </div>
                                <div class="typo-articles">
                                    <p>
                                      The unique stripes of zebras make them one of the animals most familiar to people. They occur in a variety of habitats, such as grasslands, savannas, <span
                                      class="bg-flat-color-1 text-light">woodlands</span>, thorny scrublands, <span
                                      class="clickable-text">mountains</span>
                                      , and coastal hills. However, various anthropogenic factors have had a severe impact on zebra populations, in particular hunting for skins and habitat destruction. Grévy's zebra and the mountain <mark>highlighted text</mark> zebra are endangered.</p>
                                      <blockquote class="blockquote mt-3 text-right">
                                          <p>
                                          Blockquotes. However, various anthropogenic factors have had a severe impact on zebra populations, in particular hunting for skins. </p>
                                          <footer class="blockquote-footer">Jefferey Lebowski</footer>
                                      </blockquote>
                                      <p>
                                          lthough zebra species may have overlapping ranges, they do not interbreed. In captivity, plains zebras have been crossed with mountain zebras. The hybrid foals <span
                                          class="bg-flat-color-1 text-light">selected text</span> lacked a dewlap and resembled their
                                      </p>
                                  </div>
                                  <div class="vue-lists">
                                    <h2 class="mb-4">Lists</h2>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <h3>Unordered</h3>
                                        <ul >
                                          <li>
                                            A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                                        </li>
                                        <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                                        <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                                        <li>
                                            In addition, even at moderate distances, the striking striping merges to an apparent grey.
                                            <ul class="vue-list-inner">
                                              <li>However, the camouflage has been contested with arguments that most of a zebra's predator.</li>
                                              <li>Such as lions and hyenas cannot see well at a distance.</li>
                                              <li>More likely to have smelled or heard a zebra.</li>
                                          </ul>
                                      </li>
                                      <li>Before seeing it from a distance, especially at night.</li>
                                  </ul>
                              </div>
                              <div class="col-md-6 text-left">
                                <div>
                                  <h3>Ordered</h3>
                                  <ol class="vue-ordered">
                                    <li>
                                      A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                                  </li>
                                  <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                                  <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                                  <li>
                                      In addition, even at moderate distances, the striking striping merges to an apparent grey.
                                      <ul class="vue-list-inner">
                                        <li>However, the camouflage has been contested with arguments that most of a zebra's predator.
                                        </li>
                                        <li>Such as lions and hyenas cannot see well at a distance.</li>
                                        <li>More likely to have smelled or heard a zebra.</li>
                                    </ul>
                                </li>
                                <li>Before seeing it from a distance, especially at night.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vue-misc">
                <h2 class="display-5 my-3">Misc</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3>Address</h3>
                    <address class="mt-3">
                      <strong>SJØNNA</strong><br>
                      Nezalezhnasti Ave, 13 - 28A<br>
                      Minsk, Belarus, 220141<br>
                      +375 29 319-53-98<br>
                      <br>
                      <b>Vasili Savitski</b><br>
                      <a href="mailto">hello@examplemail.com</a>

                  </address>
              </div>
              <div class="col-md-6">
                <h3 class="mb-3">Well</h3>
                <div class="jumbotron">
                  Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the sides of its head, giving it a wide field of view.
              </div>
          </div>
      </div>
  </div>

</div>
</div>


</div>
</div>
</div>



</div><!-- .animated -->
</div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
