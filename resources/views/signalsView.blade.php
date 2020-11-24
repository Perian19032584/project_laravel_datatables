@extends('voyager::master')

@section('content')


    <!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <table class="table table-bordered yajra-datatable">
        <thead>
        <tr>
            <th>created_at</th>
            <th>updated_at</th>
            <th>target_1</th>
            <th>target_2</th>
            <th>target_3</th>
            <th>buy</th>
            <th>source</th>
            <th>direction</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('signals.render') }}",
            columns: [
                {data: 'pair', name: 'pair'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'target_1', name: 'target_1'},
                {data: 'target_2', name: 'target_2'},
                {data: 'target_3', name: 'target_3'},
                {data: 'buy', name: 'buy'},
                {data: 'source', name: 'source'},
                {data: 'direction', name: 'direction'},
                {
                    data: 'action',
                    name: 'action',
                },
            ]
        });

    });

    $(document).on('click', '.actionSend', function () {
        $.ajax({
            type: "POST",
            // url:
            data: {
                target_1: $(this).data('target1'),

            },
            success: function (success) {
                console.log(success);
            }
        });
    });
</script>
</html>
