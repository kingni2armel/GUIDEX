<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>



</head>

<body class="animsition">
    @include('layout.link');
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="GuidEx" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

      <!-- MENU SIDEBAR-->
      @include('layout.header')
      @include('layout.header-left')
    <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">A partir du dollar (USD)</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="">GBP</i>
                                            </div>
                                            <div class="text">
                                                <h2 id="exchange">0.76490082</h2>
                                                <span>Sterling</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="">XAF</i>
                                            </div>
                                            <div class="text">
                                                <h2 id="exchange1">587.67129042</h2>
                                                <span>Franc CFA BEAC</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="">EUR</i>
                                            </div>
                                            <div class="text">
                                                <h2 id="exchange2"> 0.89589911</h2>
                                                <span>EURO</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="">XOF</i>
                                            </div>
                                            <div class="text">
                                                <h2 id="exchange3">587.67129042</h2>
                                                <span>Franc CFA BCEAO</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Les devises - Actuellement...</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Monnaie</th>
                                                <th>ISO</th>
                                                <th>Pays</th>
                                                <th class="text-right">Taux</th>
                                                {{-- <th class="text-right">quantity</th>
                                                <th class="text-right">total</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Euro</td>
                                                <td>EUR</td>
                                                <td>France</td>
                                                <td class="text-right" id="eur">0.89589911</td>

                                            </tr>
                                            <tr>
                                                <td>Livre Sterling</td>
                                                <td>GBP</td>
                                                <td>Angleterre</td>
                                                <td class="text-right" id="gbp">0.76490082</td>

                                            </tr>
                                            <tr>
                                                <td>Franc CFA</td>
                                                <td>XFA</td>
                                                <td>BEAC</td>
                                                <td class="text-right" id="xaf">...</td>

                                            </tr>
                                            <tr>
                                                <td>Franc CFA BCEAO</td>
                                                <td>XOF</td>
                                                <td>BCEAO</td>
                                                <td class="text-right" id="xof">587.67129042</td>

                                            </tr>
                                            <tr>
                                                <td>Naira</td>
                                                <td>NGN</td>
                                                <td>Nigeria</td>
                                                <td class="text-right" id="ngn">414.99</td>

                                            </tr>
                                            <tr>
                                                <td>Dollar Canadien</td>
                                                <td>CAD</td>
                                                <td>Canada</td>
                                                <td class="text-right" id="cad">1.291002</td>

                                            </tr>
                                            <tr>
                                                <td>Yen</td>
                                                <td>JPY</td>
                                                <td>Japon</td>
                                                <td class="text-right" id="jpy">135.21010</td>

                                            </tr>
                                            <tr>
                                                <td>Dirham</td>
                                                <td>AED</td>
                                                <td>Dubai</td>
                                                <td class="text-right" id="aed">...</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="text" style="font-size: 20px; font-family:arial;">Estimation de vente:</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>Euro</td>
                                                        <td class="text-right" id="eurvente">...</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Livre Sterling</td>
                                                        <td class="text-right">$70,261.65</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dollar canadien</td>
                                                        <td class="text-right">$46,399.22</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Yen</td>
                                                        <td class="text-right">$35,364.90</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dirham</td>
                                                        <td class="text-right">$20,366.96</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Naira</td>
                                                        <td class="text-right">$10,366.96</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Nombre total des utilisateurs &nbsp &nbsp &nbsp
                                            <small>
                                                <a href="{{route('GETLISTEUSER')}}">
                                                <span class="badge badge-success cc float-right mt-1">
                                                            @if ($alluser->count()>0)
                                                                        {{$alluser->count()}}
                                                            @else
                                                            0
                                                            @endif
                                                </span>
                                            </a>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Nombre total des clients
                                            <small>
                                                <span class="badge badge-success cc float-right mt-1">
                                                    @if ($allclient->count()>0)
                                                    {{$allclient->count()}}
                                                    @else
                                                    0
                                                    @endif
                                                </span>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Nombre total des fournisseurs
                                            <small>
                                                <span class="badge badge-success cc float-right mt-1">
                                                    @if ($allfournisseur->count()>0)
                                                    {{$allfournisseur->count()}}
                                                    @else
                                                    0
                                                    @endif
                                                </span>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row">

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Nombre total des devises
                                            <small>
                                                <span class="badge badge-success cc float-right mt-1">
                                                            @if ($alldevise->count()>0)
                                                                        {{$alldevise->count()}}
                                                            @else
                                                            0
                                                            @endif
                                                </span>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Nombre total des achats des  devises
                                            <small>
                                                <span class="badge badge-success cc float-right mt-1">
                                                            @if ($allachat->count()>0)
                                                                        {{$allachat->count()}}
                                                            @else
                                                            0
                                                            @endif
                                                </span>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>




                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Nombre total des  ventes des  devises
                                            <small>
                                                <span class="badge badge-success cc float-right mt-1">
                                                            @if ($allvente->count()>0)
                                                                        {{$allvente->count()}}
                                                            @else
                                                            0
                                                            @endif
                                                </span>
                                            </small>
                                        </strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>


                        {{-- <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i>26 April, 2018</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Tasks for John Doe</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--primary">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">02:00 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--success">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">03:30 PM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--danger js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Meeting about plan for Admin Template 2018</a>
                                                    </h5>
                                                    <span class="time">10:00 AM</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning js-load-item">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Create new task for Dashboard</a>
                                                    </h5>
                                                    <span class="time">11:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">load more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-comment-text"></i>New Messages</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-inbox-wrap js-inbox-wrap">
                                        <div class="au-message js-list-load">
                                            <div class="au-message__noti">
                                                <p>You Have
                                                    <span>2</span>

                                                    new messages
                                                </p>
                                            </div>
                                            <div class="au-message-list">
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">John Smith</h5>
                                                                <p>Have sent a photo</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>12 Min ago</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item unread">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Nicholas Martinez</h5>
                                                                <p>You are now connected on message</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>11:00 PM</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Lorem ipsum dolor sit amet</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="au-message__item js-load-item">
                                                    <div class="au-message__item-inner">
                                                        <div class="au-message__item-text">
                                                            <div class="avatar-wrap">
                                                                <div class="avatar">
                                                                    <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                                                </div>
                                                            </div>
                                                            <div class="text">
                                                                <h5 class="name">Michelle Sims</h5>
                                                                <p>Purus feugiat finibus</p>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item-time">
                                                            <span>Sunday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-message__footer">
                                                <button class="au-btn au-btn-load js-load-btn">load more</button>
                                            </div>
                                        </div>
                                        <div class="au-chat">
                                            <div class="au-chat__title">
                                                <div class="au-chat-info">
                                                    <div class="avatar-wrap online">
                                                        <div class="avatar avatar--small">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                    </div>
                                                    <span class="nick">
                                                        <a href="#">John Smith</a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="au-chat__content">
                                                <div class="recei-mess-wrap">
                                                    <span class="mess-time">12 Min ago</span>
                                                    <div class="recei-mess__inner">
                                                        <div class="avatar avatar--tiny">
                                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                                        </div>
                                                        <div class="recei-mess-list">
                                                            <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                            <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="send-mess-wrap">
                                                    <span class="mess-time">30 Sec ago</span>
                                                    <div class="send-mess__inner">
                                                        <div class="send-mess-list">
                                                            <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="au-chat-textfield">
                                                <form class="au-form-icon">
                                                    <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                    <button class="au-input-icon">
                                                        <i class="zmdi zmdi-camera"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"> --}}
                            <div class="col-md-12">
                                <div class="copyright">
                                    {{-- <p>Copyright ?? 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <style>
          .cc{  font-size: 35px !important

          }
        </style>


@include('layout.link')
</body>

</html>
<!-- end document-->
