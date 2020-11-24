{{--@extends('dashboard.layouts.app')--}}

{{--@section('content')--}}
{{--        <!--Grid row-->--}}
{{--        <div class="form-row">--}}
{{--            <div class="form-group col-lg-2 col-md-12 mb-3">--}}
{{--                <label class="mr-sm-2" for="picker-user-id" >UserIDs</label>--}}
{{--                <select class="custom-select mr-sm-2" id="picker-user-id">--}}
{{--                    @foreach($users as $index => $user)--}}
{{--                        <option value="{{$index}}">{{$index . ' ' . $user}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <div class="form-group col-lg-2 col-md-12 mb-3">--}}
{{--                <label class="mr-sm-2" for="picker-date-type" >Date Type</label>--}}
{{--                <select class="custom-select mr-sm-2" id="picker-date-type">--}}
{{--                        <option value="close_time">Close</option>--}}
{{--                        <option selected value="created_at">Created</option>--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <div class="form-group col-lg-2 col-md-12 mb-3">--}}
{{--                <label class="mr-sm-2" for="picker-date-from">Date From</label>--}}
{{--                <input type="text" id="picker-date-from" class="datepicker form-control">--}}
{{--            </div>--}}

{{--            <div class="form-group col-lg-2 col-md-12 mb-3">--}}
{{--                <label class="mr-sm-2" for="picker-date-to">Date To</label>--}}
{{--                <input type="text" id="picker-date-to" class="datepicker form-control">--}}
{{--            </div>--}}

{{--            <div class="form-group col-lg-2 col-md-12 mb-3">--}}
{{--                <label class="mr-sm-2" for="picker-status" >Trade Status</label>--}}
{{--                <select class="custom-select mr-sm-2" id="picker-status">--}}
{{--                    <option value="close">Close</option>--}}
{{--                    <option value="all">All</option>--}}
{{--                    <option value="work">Work</option>--}}
{{--                    <option value="broken">Broken</option>--}}
{{--                    <option value="stopped">Stopped</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--Grid row-->--}}
{{--        <div id="stats">--}}
{{--        </div>--}}
{{--        <!--Grid row-->--}}
{{--        <div class="row" id="setting-info">--}}
{{--        </div>--}}
{{--        <!--Grid row-->--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <table id="stats-table" class="table table-bordered">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>ID</th>--}}
{{--                        <th>UserID</th>--}}
{{--                        <th>Время создания</th>--}}
{{--                        <th>Время обновления</th>--}}
{{--                        <th>Профит</th>--}}
{{--                        <th>Профит %</th>--}}
{{--                        <th>Время закрытия</th>--}}
{{--                        <th>Пара</th>--}}
{{--                        <th>Тип</th>--}}
{{--                        <th>Курс (Binance)</th>--}}
{{--                        <th>Trailing Buy</th>--}}
{{--                        <th>Trailing Take Profit</th>--}}
{{--                        <th>СО (Страховочный ордер)</th>--}}
{{--                        <th>Цена покупки</th>--}}
{{--                        <th>Средняя цена покупки</th>--}}
{{--                        <th>Куплено</th>--}}
{{--                        <th>Куплено ($)</th>--}}
{{--                        <th>Цена продажи</th>--}}
{{--                        <th>Продано</th>--}}
{{--                        <th>Часов работы</th>--}}
{{--                        <th>Источник</th>--}}
{{--                        <th>Статус</th>--}}
{{--                        <th>Событие</th>--}}
{{--                        <th>Режим</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tfoot>--}}
{{--                    <tr>--}}
{{--                        <th>ID</th>--}}
{{--                        <th>UserID</th>--}}
{{--                        <th>Время создания</th>--}}
{{--                        <th>Время обновления</th>--}}
{{--                        <th>Профит</th>--}}
{{--                        <th>Профит %</th>--}}
{{--                        <th>Время закрытия</th>--}}
{{--                        <th>Пара</th>--}}
{{--                        <th>Тип</th>--}}
{{--                        <th>Курс (Binance)</th>--}}
{{--                        <th>Trailing Buy</th>--}}
{{--                        <th>Trailing Take Profit</th>--}}
{{--                        <th>СО (Страховочный ордер)</th>--}}
{{--                        <th>Цена покупки</th>--}}
{{--                        <th>Куплено</th>--}}
{{--                        <th>Куплено ($)</th>--}}
{{--                        <th>Цена продажи</th>--}}
{{--                        <th>Продано</th>--}}
{{--                        <th>Средняя цена покупки</th>--}}
{{--                        <th>Часов работы</th>--}}
{{--                        <th>Источник</th>--}}
{{--                        <th>Статус</th>--}}
{{--                        <th>Событие</th>--}}
{{--                        <th>Режим</th>--}}
{{--                    </tr>--}}
{{--                    </tfoot>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--@endsection--}}

{{--@push('scripts')--}}
{{--    <script>--}}
{{--        $('#picker-date-from').datepicker({--}}
{{--            format:'dd.mm.yyyy',--}}
{{--            autoclose: true,--}}
{{--        }).datepicker("setDate",'now');--}}
{{--        $('#picker-date-to').datepicker({--}}
{{--            format :"dd.mm.yyyy",--}}
{{--            autoclose: true,--}}
{{--        });--}}

{{--        $(document).ready(function(){--}}
{{--            var table_status = $('#stats-table').DataTable({--}}
{{--                processing: true,--}}
{{--                serverSide: true,--}}
{{--                ordering: true,--}}
{{--                searching: true,--}}
{{--                pageLength: 50,--}}
{{--                scrollX: true,--}}
{{--                dom: 'r<"row"<"col-md-12 col-lg-1"B><"col-md-12 col-lg-1"l><"col-md-12 col-lg-2"f>><"row"<"col-12"t>><"row"<"col-md-12 col-lg-2"i><"col-md-12 col-lg-2"p>>',--}}
{{--                buttons: [--}}
{{--                    {--}}
{{--                        text :'Refresh',--}}
{{--                        className: 'btn btn-primary btn-lg',--}}
{{--                        action: function ( e, dt, node, config ) {--}}
{{--                            this.ajax.reload();--}}
{{--                        }--}}
{{--                    }--}}
{{--                ],--}}
{{--                language: {--}}
{{--                    processing: "<img src ='{{asset('img/spinner.svg')}}'>",--}}
{{--                },--}}
{{--                order: [[ 6, "desc" ]],--}}
{{--                ajax: {--}}
{{--                    url : "{{route('moderator.stats.data')}}",--}}
{{--                    data : {--}}
{{--                        date_from : function() { return $('#picker-date-from').val() },--}}
{{--                        date_to : function() { return $('#picker-date-to').val() },--}}
{{--                        date_type : function() { return $('#picker-date-type').val() },--}}
{{--                        user_id : function() { return $('#picker-user-id').val() },--}}
{{--                        status : function() { return $('#picker-status').val() },--}}
{{--                    },--}}
{{--                },--}}
{{--                columns: [--}}
{{--                    {data: 'id', name: 'id'},--}}
{{--                    {--}}
{{--                        data: 'name',--}}
{{--                        name: 'name',--}}
{{--                    },--}}
{{--                    {--}}
{{--                        data: 'created_at',--}}
{{--                        name: 'created_at',--}}
{{--                        render : function(data, type) {--}}
{{--                            return type === 'sort' ? data : moment.unix(data).format('DD/MM/YYYY HH:mm:ss');--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {--}}
{{--                        data: 'updated_at',--}}
{{--                        name: 'updated_at',--}}
{{--                        render : function(data, type) {--}}
{{--                            return type === 'sort' ? data : moment.unix(data).format('DD/MM/YYYY HH:mm:ss');--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {data: 'profit', name: 'profit'},--}}
{{--                    {data: 'profit_percent', name: 'profit_percent'},--}}
{{--                    {--}}
{{--                        data: 'close_time',--}}
{{--                        name: 'close_time',--}}
{{--                        render : function(data, type) {--}}
{{--                            return type === 'sort' ? data : moment.unix(data).format('DD/MM/YYYY HH:mm:ss');--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {--}}
{{--                        data: 'pair',--}}
{{--                        name: 'pair',--}}
{{--                        render : function(data) {--}}
{{--                            let href = data.replace("/","_");--}}
{{--                            return '<a href="https://www.binance.com/ru/trade/'+ href+ '" target="_blank" style="font-weight: bold">' + data + '</a>';--}}
{{--                        }--}}
{{--                    },--}}
{{--                    // {data: 'direction', name: 'direction'},--}}
{{--                    {data: 'course', name: 'course'},--}}
{{--                    {--}}
{{--                        data: 'trailing_buy',--}}
{{--                        name: 'trailing_buy',--}}
{{--                        render : function(data, type, row) {--}}
{{--                            let string = '<div class="cell-row">';--}}
{{--                            $.each(data, function(time, value) {--}}
{{--                                string += '<div class="cell-data"><div class="time">' + time/100 + ' ч. от начала </div><div class="value">' + value + '</div></div>';--}}
{{--                            });--}}
{{--                            string += '</div>';--}}
{{--                            return string;--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {--}}
{{--                        data: 'trailing_target',--}}
{{--                        name: 'trailing_target',--}}
{{--                        render: function (data, type, row) {--}}
{{--                            let string = '<div class="cell-row">';--}}
{{--                            $.each(data, function (time, value) {--}}
{{--                                string += '<div class="cell-data"><div class="time">' + time / 100 + ' ч. от начала </div><div class="value">' + value + '</div></div>';--}}
{{--                            });--}}
{{--                            string += '</div>';--}}
{{--                            return string;--}}
{{--                        },--}}
{{--                    },--}}
{{--                    {--}}
{{--                        data: 'trailing_safe_order',--}}
{{--                        name: 'trailing_safe_order',--}}
{{--                        render : function(data, type, row) {--}}
{{--                            let string = '<div class="cell-row">';--}}
{{--                            $.each(data, function(time, value) {--}}
{{--                                let text = (time/100 === 0) ? 'ожидает покупки' : time/100 + ' ч. от начала';--}}
{{--                                string += '<div class="cell-data"><div class="time">' + text + ' </div><div class="value">' + value + '</div></div>';--}}
{{--                            });--}}
{{--                            string += '</div>';--}}
{{--                            return string;--}}
{{--                        }--}}
{{--                    },--}}
{{--                    {data: 'buy_price', name: 'buy_price'},--}}
{{--                    {data: 'middle_price', name: 'middle_price'},--}}
{{--                    {data: 'buy_amount', name: 'buy_amount'},--}}
{{--                    {data: 'buy_amount_usd', name: 'buy_amount_usd'},--}}
{{--                    {data: 'sell_price', name: 'sell_price'},--}}
{{--                    {data: 'sell_amount', name: 'sell_amount'},--}}
{{--                    {data: 'work_time', name: 'work_time'},--}}
{{--                    {data: 'source', name: 'source'},--}}
{{--                    {data: 'status', name: 'status'},--}}
{{--                    {data: 'event', name: 'event'},--}}
{{--                    {data: 'mode', name: 'mode'},--}}
{{--                ],--}}
{{--                // initComplete: function () {--}}
{{--                //     this.api().columns().every( function (i , j) {--}}
{{--                //         if(i === 1 || i === 3){--}}
{{--                //             var column = this;--}}
{{--                //             var select = $('<select><option value=""></option></select>')--}}
{{--                //                 .appendTo( $(column.header()).empty() )--}}
{{--                //                 .on( 'change', function () {--}}
{{--                //                     column.search( this.value ).draw();--}}
{{--                //                 } );--}}
{{--                //--}}
{{--                //             column.data().unique().sort().each( function ( d, j ) {--}}
{{--                //                 select.append( '<option value="'+d+'">'+d+'</option>' )--}}
{{--                //             } );--}}
{{--                //         }--}}
{{--                //     });--}}
{{--                // },--}}

{{--                columnDefs: [{--}}
{{--                    targets: [9,10,11,18],--}}
{{--                    createdCell: function (td, cellData, rowData, row, col) {--}}
{{--                        if(col === 15){--}}
{{--                            $(td).addClass('hover-data');--}}
{{--                        } else {--}}
{{--                            $(td).addClass('cell-table');--}}
{{--                        }--}}
{{--                    }--}}
{{--                }],--}}
{{--            });--}}

{{--            $('#picker-user-id, #picker-date-from, #picker-date-to, #picker-status, #picker-date-type').on('change', function(){--}}
{{--                table_status.ajax.reload();--}}
{{--                renderStats();--}}
{{--            });--}}

{{--            $('#picker-user-id, #picker-date-from, #picker-date-to').on('change', function(){--}}
{{--                if($('#picker-user-id').val() !== ' '){--}}
{{--                    renderExtraInfo();--}}
{{--                } else {--}}
{{--                    $('#setting-info').html('');--}}
{{--                }--}}
{{--            });--}}

{{--            function renderStats() {--}}
{{--                let request = $.ajax({--}}
{{--                    url : '{{route('moderator.stats.summary')}}',--}}
{{--                    data : {--}}
{{--                        date_from : function() { return $('#picker-date-from').val() },--}}
{{--                        date_to : function() { return $('#picker-date-to').val() },--}}
{{--                        date_type : function() { return $('#picker-date-type').val() },--}}
{{--                        user_id : function() { return $('#picker-user-id').val() },--}}
{{--                        status : function() { return $('#picker-status').val() },--}}
{{--                    },--}}
{{--                });--}}
{{--                request.done(function(data) {--}}
{{--                    $('#stats').html(data.html);--}}
{{--                });--}}
{{--            }--}}

{{--            function renderExtraInfo() {--}}
{{--                let request = $.ajax({--}}
{{--                    url : '{{route('moderator.stats.extra')}}',--}}
{{--                    data : {--}}
{{--                        user_id : function() { return $('#picker-user-id').val() },--}}
{{--                        date_from : function() { return $('#picker-date-from').val() },--}}
{{--                        date_to : function() { return $('#picker-date-to').val() },--}}
{{--                    },--}}
{{--                });--}}
{{--                request.done(function(data) {--}}
{{--                    $('#setting-info').html(data.html);--}}
{{--                })--}}
{{--            }--}}
{{--            renderStats();--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
