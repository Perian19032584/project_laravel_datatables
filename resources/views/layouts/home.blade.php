<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Analytics | Materialize - Material Design Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/vendors.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/vertical-menu-nav-dark-template/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/page-users.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/custom/custom.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/vertical-menu-nav-dark-template/materialize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/pages/data-tables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/app-assets/css/themes/vertical-menu-nav-dark-template/style.css')}}">
	<style>
	    .css_td_signals{
            display: table-cell;
            padding: 15px 5px !important;
            text-align: left;
            vertical-align: middle;
            border-radius: 2px;
        }
        .indigo a{
            color: white;
        }
        .d-none{
            display: none;
        }
	</style>
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">


<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
            <div class="nav-wrapper">
                <ul class="navbar-list right">
                    <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                    <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('public/app-assets/images/avatar/avatar-7.png') }}" alt="avatar"><i></i></span></a></li>
                </ul>
                <!-- notifications-dropdown-->
                <ul class="dropdown-content" id="notifications-dropdown">
                    <li>
                        <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
                    </li>
                    <li class="divider"></li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li><a class="black-text" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                        <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
                    <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
                    <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
                    <li class="divider"></li>
                    <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li>
                    <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-collapsible sidenav-light navbar-full sidenav-active-rounded nav-collapsed">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="index.html"><img src="https://dashboard.vip.trade/local/assets/images/flogoo1.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Vip.Trade</span></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active"><a class="waves-effect waves-cyan @yield('trading')" href="/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Трейдинг</span></a></li>
        <li class="active bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span class="badge badge pill purple float-right mr-10">3</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a class="@yield('list')" href="{{  route('list_user') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
                    </li>
                    <li><a class="@yield('view')" href="{{ route('edit_user') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
                    </li>
                    <li><a class="@yield('edit')"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
                    </li>
                    <li><a class="@yield('balance')" href="{{  route('balance_user') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Balance</span></a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->

<!-- BEGIN: Page Main-->
@yield('content')
<footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2020 Самая крутая команда Vip.Trade</div>
    </div>
</footer>


<script src="{{ asset('public/app-assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{ asset('public/app-assets/vendors/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('public/app-assets/js/plugins.js') }}"></script>
<script src="{{ asset('public/app-assets/js/search.js') }}"></script>
<script src="{{ asset('public/app-assets/js/custom/custom-script.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('public/app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('public/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('public/app-assets/vendors/data-tables/js/dataTables.select.min.js')}}"></script>
<script src="{{ asset('public/app-assets/js/scripts/data-tables.js')}}"></script>

@yield('chartjs_script')


@yield('datatables_script')

</body>

</html>

