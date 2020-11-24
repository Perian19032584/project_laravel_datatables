@extends('layouts.home')
@section('balance') active @endsection
@section('content')

<div id="main" class="main-full">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6 breadcrumbs-left">
                        <h5 class=" mt-0 mb-0 display-inline hide-on-small-and-down"><span>Внутренний баланс</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">

                <div class="section">

                    <!-- card stats start -->
                    <div id="card-stats" class="pt-0">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="card animate fadeLeft">
                                    <div class="card-content green lighten-1 white-text">
                                        <p class="card-stats-title"><i class="material-icons">trending_up</i> На счету</p>
                                        <p class="card-stats-number white-text">{{ array_sum($money['sum']) }}$</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card animate fadeRight">
                                    <div class="card-content cyan white-text">
                                        <p class="card-stats-title"><i class="material-icons">trending_up</i> Снято на комиссию</p>
                                        <p class="card-stats-number white-text">{{ array_sum($money['commission']) }}$</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <section class="users-list-wrapper section">
                        <div class="users-list-filter">
                            <div class="card-panel">
                                <h5 class="card-title">
                                    Пополнить внутренний баланс
                                </h5>
                                <div class="row">
                                    <div class="card-alert card red">
                                        <div class="card-content white-text">
                                            <p>Для пополнения счета обратитесь к своему менеджеру. Телеграм <a href="https://t.me/Antonio_Admin" target="_blank">@Antonio_Admin</a></p>
                                        </div>
                                    </div>
                                    <form style="display: none">
                                        <div class="col s12 m6 l4">
                                            <label for="users-list-verified">Сумма</label>
                                            <div class="input-field">
                                                <input class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l4">
                                            <label for="users-list-verified">Валюта</label>
                                            <div class="input-field">
                                                <select class="form-control" id="users-list-verified">
                                                    <option value="">USD</option>
                                                    <option value="Yes">UAH</option>
                                                    <option value="No">RUB</option>
                                                    <option value="No">BTC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s12 m6 l4 display-flex align-items-center show-btn">
                                            <button type="submit" class="btn btn-block indigo waves-effect waves-light">Пополнить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--card stats end-->
                    <h4 class="header">История пополнений</h4>
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <!-- datatable start -->
                                <div class="responsive-table">
                                    <table  class="table users-list-datatable users-list-datatable">
                                        <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Status</th>
                                            <th>username</th>
                                            <th>first name</th>
                                            <th>last name</th>
                                            <th>language code</th>
                                            <th>last activity</th>
                                            <th>edit</th>
                                            <th>show</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- datatable ends -->
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
@section('datatables_script')
    <script>
        $(function () {
            var table = $(".users-list-datatable").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('get_table_datatables')}}",
                dataType: "json",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'status', name: 'status'},
                    {data: 'username', name: 'username'},
                    {data: 'first_name', name: 'first_name'},
                    {data: 'last_name', name: 'last_name'},
                    {data: 'language_code', name: 'language_code'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'action'},
                    {data: 'action2', name: 'action2'},
                ],

            });
        });
    </script>
@endsection
