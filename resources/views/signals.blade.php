@extends('layouts.home')
@section('trading') active @endsection
@section('content')
<?
use Carbon\Carbon;
?>
    <div id="main" class="main-full">
        <div class="row">
            <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class=" mt-0 mb-0 display-inline hide-on-small-and-down"><span>Signals</span></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <section class="users-list-wrapper section">
                        <div class="users-list-filter">
                            <div class="card-panel">
                                <div class="row">

                                    <div class="col s12 m6 l3">
                                        <label for="users-list-verified">За период</label>
                                        <div class="input-field">
                                            <input class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l2 display-flex align-items-center show-btn">
                                        <button type="submit" class="btn btn-block indigo waves-effect waves-light"><a href="?date_before={{ Carbon::now()->format('Y-m-d') }}&date_after={{ Carbon::now()->format('Y-m-d') }}">Сегодня</a></button>
                                    </div>
                                    <div class="col s12 m6 l2 display-flex align-items-center show-btn">
                                        <button type="submit" class="btn btn-block indigo waves-effect waves-light"><a href="?date_before={{ Carbon::now()->addDays(-1)->format('Y-m-d') }}&date_after={{ Carbon::now()->format('Y-m-d') }}">Вчера</a></button>
                                    </div>
                                    <div class="col s12 m6 l2 display-flex align-items-center show-btn">
                                        <button type="submit" class="btn btn-block indigo waves-effect waves-light"><a href="?date_before={{ Carbon::now()->addDays(-7)->format('Y-m-d') }}&date_after={{ Carbon::now()->format('Y-m-d') }}">За неделю</a></button>
                                    </div>
                                    <div class="col s12 m6 l2 display-flex align-items-center show-btn">
                                        <button type="submit" class="btn btn-block indigo waves-effect waves-light"><a href="?date_before={{ Carbon::now()->addDays(-30)->format('Y-m-d') }}&date_after={{ Carbon::now()->format('Y-m-d') }}">За месяц</a></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="section">
                        <!--chart dashboard start-->
                        <div id="chart-dashboard">
                            <div class="row">
                                <div class="col s12 m8 l12">
                                    <div class="card animate fadeUp">
                                        <div class="card-move-up waves-effect waves-block waves-light">
                                            <div class="move-up cyan darken-1">
                                                <div>
                                                    <span class="chart-title white-text">Signals</span>
                                                </div>
                                                <div class="trending-line-chart-wrapper"><canvas id="revenue-line-chart2" height="70"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="work-collections">
                            <div class="row">
                                @yield('Top-Profit')
                                @yield('Top-Loss')


                                <div class="col s12">
                                    <div class="card">
                                        <div class="card-content">
                                            <h4 class="card-title">All Signals</h4>
                                            <div class="row">
                                                <div class="col s12">
                                                    <table id="page-length-option_wrappe" class="display table_signals">
                                                        <thead>
                                                        <tr>
                                                            <th>Signal date</th>
                                                            <th>Pair</th>
                                                            <th>Enter</th>
                                                            <th>Target 1</th>
                                                            <th>Target 2</th>
                                                            <th>Target 3</th>
                                                            <th>Stop Loss</th>
                                                            <th>Duration</th>
                                                            <th>Profit</th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="content-overlay"></div>
                                </div>




                            </div>
                        </div>







                    </div>
                    <div class="content-overlay"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('Top-Profit')
    <div class="col s12 m12 l6">
        <ul id="projects-collection" class="collection z-depth-1 animate fadeLeft">
            <li class="collection-item avatar">
                <i class="material-icons green circle">mood</i>
                <h6 class="collection-header m-0">Top Profit</h6>
                <p>Signals</p>
            </li>
            <li>
                <div class="responsive-table">
                    <table id="users-list-datatable" class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Signal date</th>
                            <th>Pair</th>
                            <th>Duration</th>
                            <th>Profit</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($maxs_profit as $max)
                            <tr class="green lighten-5 green-text text-accent-4">
                                <td></td>
                                <td>{{ $max->created_at ?? 'no data'}}</td>
                                <td><a href="" target="_blank">{{ $max->pair ?? 'no data'}}</a></td>
                                <td class=""> {{ $max->work_time ?? 'no data'}} h </td>
                                <td>{{ $max->profit ?? 'no data'}}</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </li>
        </ul>
    </div>
@endsection
@section('Top-Loss')
    <div class="col s12 m12 l6">

        <ul id="issues-collection" class="collection z-depth-1 animate fadeRight">
            <li class="collection-item avatar">
                <i class="material-icons red accent-2 circle">mood_bad</i>
                <h6 class="collection-header m-0">Top Loss</h6>
                <p>Signals</p>
            </li>
            <li>
                <div class="responsive-table">
                    <table id="users-list-datatable" class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Signal date</th>
                            <th>Pair</th>
                            <th>Duration</th>
                            <th>Profit</th>
                        </tr>
                        </thead>
                        <tbody>
                     
                        @foreach($mins_profit as $min)
                            <tr class="pink lighten-5 pink-text text-accent-2">
                                <td></td>
                                <td>{{ $min->created_at ?? 'no data'}}</td>
                                <td><a href="" target="_blank">{{ $min->pair ?? 'no data'}}</a></td>
                                <td class=""> {{ $min->work_time ?? 'no data'}} h </td>
                                <td>{{ $min->profit ?? 'no data'}}</td>
                            </tr>
                        @endforeach
                     
                        </tbody>
                    </table>
                </div>
            </li>
        </ul>
    </div>
@endsection

@section('chartjs_script')
    <script>
        (function (window, document, $) {
            //Trending line chart
            var revenueLineChartCTX = $("#revenue-line-chart2");

            var revenueLineChartOptions = {
                responsive: true,
                // maintainAspectRatio: false,
                legend: {
                    display: false
                },
                hover: {
                    mode: "label"
                },
                scales: {
                    xAxes: [
                        {
                            display: true,
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                fontColor: "#fff"
                            }
                        }
                    ],
                    yAxes: [
                        {
                            display: true,
                            fontColor: "#fff",
                            gridLines: {
                                display: true,
                                color: "rgba(255,255,255,0.3)"
                            },
                            ticks: {
                                beginAtZero: false,
                                fontColor: "#fff"
                            }
                        }
                    ]
                }
            };


            var revenueLineChartData = {
                labels: @json(array_keys($signals_data)),
                datasets: [
                    {
                        label: "Pair",
                        data: @json(array_values($signals_data)),
                        backgroundColor: "rgba(128, 222, 234, 0.5)",
                        borderColor: "#d1faff",
                        pointBorderColor: "#d1faff",
                        pointBackgroundColor: "#f7931a",
                        pointHighlightFill: "#d1faff",
                        pointHoverBackgroundColor: "#d1faff",
                        borderWidth: 2,
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 4,
                        pointRadius: 4
                    }
                ]
            };

            var revenueLineChart;

            var revenueLineChartConfig = {
                type: "bar",
                options: revenueLineChartOptions,
                data: revenueLineChartData
            };


            window.onload = function () {
                revenueLineChart = new Chart(revenueLineChartCTX, revenueLineChartConfig);

            };
        })(window, document, jQuery);
    </script>

@endsection

@section('datatables_script')
    <script>


        $(function () {
            var table = $(".table_signals").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get_data_tables') }}",
                dataType: "json",
                columns: [
                    {data: 'created_at', name: 'created_at', className: 'css_td_signals'},
                    {data: 'pair', name: 'pair', className: 'css_td_signals'},
                    {data: 'buy', name: 'buy', className: 'css_td_signals'},
                    {data: 'target_1', name: 'target_1', className: 'css_td_signals'},
                    {data: 'target_2', name: 'target_2', className: 'css_td_signals'},
                    {data: 'target_3', name: 'target_3', className: 'css_td_signals'},
                    {data: 'stop_loss', name: 'stop_loss', className: 'css_td_signals'},
                    {data: 'work_time', name: 'work_time', className: 'css_td_signals'},
                    {data: 'profit', name: 'profit', className: 'css_td_signals'},

                ],

                "columnDefs": [
                    {
                        "targets": 1,
                        "createdCell": function(td, cellData, rowData, row, col, aData){
                            $(td).html("<a href target=\"_blank\">"+$(td).text()+"</a>");
                        }
                    },
                    {
                        "targets": 2,
                        "createdCell": function(td, cellData, rowData, row, col, aData){
                            console.log(cellData);
                            if(rowData.buy_time != null) {
                                    $(td).addClass('orange  lighten-5 orange-text text-accent-4');
                            }else{
                                $(td).html('-');
                            }

                        }
                    },
                    {
                        "targets": 3,
                        "createdCell": function(td, cellData, rowData, row, col, aData){
                            if(rowData.target_1_time != null) {
                                $(td).addClass('green lighten-5 green-text text-accent-4');
                            }

                        }
                    },
                    {
                        "targets": 4,
                        "createdCell": function(td, cellData, rowData, row, col, aData){
                            if(rowData.target_2_time != null) {

                                $(td).addClass('green lighten-5 green-text text-accent-4');
                            }

                        }
                    },
                    {
                        "targets": 5,
                        "createdCell": function(td, cellData, rowData, row, col, aData){
                            if(rowData.target_3_time != null) {
                                $(td).addClass('green lighten-5 green-text text-accent-4');
                            }

                        }
                    },
                    {
                        "targets": 6,
                        "createdCell": function(td, cellData, rowData, row, col, aData){
                            if(rowData.stop_loss_time != null) {
                                $(td).addClass('pink lighten-5 pink-text text-accent-2');
                            }

                        }
                    },
                    {
                        "targets": 8,
                        "createdCell": function(td, cellData, rowData, row, col, aData){

                                var negative_check = Math.sign(rowData.profit);
                                if(negative_check == -1){
                                    $(td).addClass('pink lighten-5 pink-text text-accent-2');
                                }else{
                                    console.log(rowData);
                                    if(rowData.profit != null){
                                        $(td).addClass('green lighten-5 green-text text-accent-2');
                                    }else{
                                        $(td).html('-');
                                    }
                                }


                        }
                    },




            ]

            });
        });

    </script>
@endsection

@section('sidenav')
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active"><a class="waves-effect waves-cyan active" href="dash_trades.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Трейдинг</span></a></li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge pill orange float-right mr-10">3</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Modern</span></a>
                    </li>
                    <li><a href="dashboard-ecommerce.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                    <li><a href="dashboard-analytics.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="Templates">Templates</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Vertical</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="../vertical-modern-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern Menu">Modern Menu</span></a>
                                </li>
                                <li><a href="../vertical-menu-nav-dark-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar Dark">Navbar Dark</span></a>
                                </li>
                                <li><a href="../vertical-gradient-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gradient Menu">Gradient Menu</span></a>
                                </li>
                                <li><a href="../vertical-dark-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dark Menu">Dark Menu</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal">Horizontal</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="../horizontal-menu-template/"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Horizontal Menu">Horizontal Menu</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Applications</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.html"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Mail</span><span class="badge new badge pill pink accent-2 float-right mr-2">5</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-chat.html"><i class="material-icons">chat_bubble_outline</i><span class="menu-title" data-i18n="Chat">Chat</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-todo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">ToDo</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-kanban.html"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Kanban</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-file-manager.html"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">File manager</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-contacts.html"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Contacts">Contacts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="app-calendar.html"><i class="material-icons">today</i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Invoice</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="app-invoice-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice List">Invoice List</span></a>
                    </li>
                    <li><a href="app-invoice-view.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice View">Invoice View</span></a>
                    </li>
                    <li><a href="app-invoice-edit.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Invoice Edit</span></a>
                    </li>
                    <li><a href="app-invoice-add.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Invoice Add</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_shopping_cart</i><span class="menu-title" data-i18n="eCommerce">eCommerce</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="eCommerce-products-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Products Page">Products Page</span></a>
                    </li>
                    <li><a href="eCommerce-pricing.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pricing">Pricing</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Pages </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="user-profile-page.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile">User Profile</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="Pages">Pages</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="page-contact.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Contact">Contact</span></a>
                    </li>
                    <li><a href="page-blog-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Blog">Blog</span></a>
                    </li>
                    <li><a href="page-search.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Search">Search</span></a>
                    </li>
                    <li><a href="page-knowledge.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Knowledge">Knowledge</span></a>
                    </li>
                    <li><a href="page-timeline.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Timeline">Timeline</span></a>
                    </li>
                    <li><a href="page-faq.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="FAQs">FAQs</span></a>
                    </li>
                    <li><a href="page-account-settings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Account Settings">Account Settings</span></a>
                    </li>
                    <li><a href="page-blank.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Blank">Page Blank</span></a>
                    </li>
                    <li><a href="page-collapse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Collapse">Page Collapse</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">crop_original</i><span class="menu-title" data-i18n="Medias">Medias</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="media-gallery-page.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Gallery Page">Gallery Page</span></a>
                    </li>
                    <li><a href="media-hover-effects.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media Hover Effects">Media Hover Effects</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">face</i><span class="menu-title" data-i18n="User">User</span><span class="badge badge pill purple float-right mr-10">3</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="page-users-list.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="List">List</span></a>
                    </li>
                    <li><a href="{{ route('list_user') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="View">View</span></a>
                    </li>
                    <li><a href="{{ route('edit_user') }}"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Edit">Edit</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">lock_open</i><span class="menu-title" data-i18n="Authentication">Authentication</span><span class="badge badge pill purple float-right mr-10">10</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="user-login.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Login">Login</span></a>
                    </li>
                    <li><a href="user-register.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Register">Register</span></a>
                    </li>
                    <li><a href="user-forgot-password.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Forgot Password">Forgot Password</span></a>
                    </li>
                    <li><a href="user-lock-screen.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Lock Screen">Lock Screen</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">filter_tilt_shift</i><span class="menu-title" data-i18n="Misc">Misc</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="page-404.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="404">404</span></a>
                    </li>
                    <li><a href="page-maintenance.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Page Maintenanace">Page Maintenanace</span></a>
                    </li>
                    <li><a href="page-500.html" target="_blank"><i class="material-icons">radio_button_unchecked</i><span data-i18n="500">500</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">User Interface </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">cast</i><span class="menu-title" data-i18n="Cards">Cards</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="cards-basic.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards">Cards</span></a>
                    </li>
                    <li><a href="cards-advance.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Advance">Cards Advance</span></a>
                    </li>
                    <li><a href="cards-extended.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Cards Extended">Cards Extended</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">invert_colors</i><span class="menu-title" data-i18n="CSS">CSS</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="css-typography.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Typograpy">Typograpy</span></a>
                    </li>
                    <li><a href="css-color.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Color">Color</span></a>
                    </li>
                    <li><a href="css-grid.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Grid">Grid</span></a>
                    </li>
                    <li><a href="css-helpers.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Helpers">Helpers</span></a>
                    </li>
                    <li><a href="css-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
                    </li>
                    <li><a href="css-pulse.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pulse">Pulse</span></a>
                    </li>
                    <li><a href="css-sass.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sass">Sass</span></a>
                    </li>
                    <li><a href="css-shadow.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Shadow">Shadow</span></a>
                    </li>
                    <li><a href="css-animations.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Animations">Animations</span></a>
                    </li>
                    <li><a href="css-transitions.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Transitions">Transitions</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Basic UI">Basic UI</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Buttons">Buttons</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="ui-basic-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a href="ui-extended-buttons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Extended">Extended</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="ui-icons.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Icons">Icons</span></a>
                    </li>
                    <li><a href="ui-alerts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Alerts">Alerts</span></a>
                    </li>
                    <li><a href="ui-badges.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Badges">Badges</span></a>
                    </li>
                    <li><a href="ui-breadcrumbs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                    </li>
                    <li><a href="ui-chips.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chips">Chips</span></a>
                    </li>
                    <li><a href="ui-collections.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collections">Collections</span></a>
                    </li>
                    <li><a href="ui-navbar.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Navbar">Navbar</span></a>
                    </li>
                    <li><a href="ui-pagination.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Pagination">Pagination</span></a>
                    </li>
                    <li><a href="ui-preloader.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Preloader">Preloader</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">settings_brightness</i><span class="menu-title" data-i18n="Advanced UI">Advanced UI</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="advance-ui-carousel.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Carousel">Carousel</span></a>
                    </li>
                    <li><a href="advance-ui-collapsibles.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Collapsibles">Collapsibles</span></a>
                    </li>
                    <li><a href="advance-ui-toasts.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Toasts">Toasts</span></a>
                    </li>
                    <li><a href="advance-ui-tooltip.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tooltip">Tooltip</span></a>
                    </li>
                    <li><a href="advance-ui-dropdown.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Dropdown">Dropdown</span></a>
                    </li>
                    <li><a href="advance-ui-feature-discovery.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Discovery">Discovery</span></a>
                    </li>
                    <li><a href="advance-ui-media.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Media">Media</span></a>
                    </li>
                    <li><a href="advance-ui-modals.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modals">Modals</span></a>
                    </li>
                    <li><a href="advance-ui-scrollspy.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Scrollspy">Scrollspy</span></a>
                    </li>
                    <li><a href="advance-ui-tabs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tabs">Tabs</span></a>
                    </li>
                    <li><a href="advance-ui-waves.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Waves">Waves</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">add_to_queue</i><span class="menu-title" data-i18n="Extra Components">Extra Components</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="extra-components-range-slider.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Range Slider">Range Slider</span></a>
                    </li>
                    <li><a href="extra-components-sweetalert.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sweetalert">Sweetalert</span></a>
                    </li>
                    <li><a href="extra-components-nestable.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Nestable">Nestable</span></a>
                    </li>
                    <li><a href="extra-components-treeview.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Treeview">Treeview</span></a>
                    </li>
                    <li><a href="extra-components-ratings.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Ratings">Ratings</span></a>
                    </li>
                    <li><a href="extra-components-tour.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Tour">Tour</span></a>
                    </li>
                    <li><a href="extra-components-i18n.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="i18n">i18n</span></a>
                    </li>
                    <li><a href="extra-components-highlight.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Highlight">Highlight</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Tables &amp; Forms </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-basic.html"><i class="material-icons">border_all</i><span class="menu-title" data-i18n="Basic Tables">Basic Tables</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="table-data-table.html"><i class="material-icons">grid_on</i><span class="menu-title" data-i18n="Data Tables">Data Tables</span></a>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">chrome_reader_mode</i><span class="menu-title" data-i18n="Forms">Forms</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="form-elements.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Elements">Form Elements</span></a>
                    </li>
                    <li><a href="form-select2.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Select2">Form Select2</span></a>
                    </li>
                    <li><a href="form-validation.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Validation">Form Validation</span></a>
                    </li>
                    <li><a href="form-masks.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Masks">Form Masks</span></a>
                    </li>
                    <li><a href="form-editor.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Form Editor">Form Editor</span></a>
                    </li>
                    <li><a href="form-file-uploads.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="File Uploads">File Uploads</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-layouts.html"><i class="material-icons">image_aspect_ratio</i><span class="menu-title" data-i18n="Form Layouts">Form Layouts</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="form-wizard.html"><i class="material-icons">settings_ethernet</i><span class="menu-title" data-i18n="Form Wizard">Form Wizard</span></a>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Charts</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">pie_chart_outlined</i><span class="menu-title" data-i18n="Chart">Chart</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="charts-chartjs.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="ChartJS">ChartJS</span></a>
                    </li>
                    <li><a href="charts-chartist.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Chartist">Chartist</span></a>
                    </li>
                    <li><a href="charts-sparklines.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Sparkline Charts">Sparkline Charts</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="navigation-header"><a class="navigation-header-text">Misc </a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)"><i class="material-icons">photo_filter</i><span class="menu-title" data-i18n="Menu levels">Menu levels</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level">Second level</span></a>
                    </li>
                    <li><a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Second level child">Second level child</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible" data-collapsible="accordion">
                                <li><a href="JavaScript:void(0)"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Third level">Third level</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.com/materialize-material-design-admin-template/documentation/index.html" target="_blank"><i class="material-icons">import_contacts</i><span class="menu-title" data-i18n="Documentation">Documentation</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="https://pixinvent.ticksy.com/" target="_blank"><i class="material-icons">help_outline</i><span class="menu-title" data-i18n="Support">Support</span></a>
        </li>
    </ul>
@endsection
