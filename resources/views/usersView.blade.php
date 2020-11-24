@extends('voyager::master')

@section('content')

    <body>

    <table class="table table-bordered table">
        <thead>
        <tr>
            <th>name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>telegram_id</th>
            <th>subscription</th>
            <th>balance</th>
        </tr>
        </thead>
    </table>
    </body>
@stop
@section('javascript')
    <script type="text/javascript">
        $(function () {
            var table = $('.table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.render') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'telegram_id', name: 'telegram_id'},
                    {data: 'subscriptions', name: 'subscriptions'},
                    {data: 'balance', name: 'balance'},
                ]
            });

        });
    </script>
@stop
