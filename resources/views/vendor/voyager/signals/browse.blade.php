@extends('voyager::master')
@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))


@section('content')

    <table id="jara" class="table table-bordered">
        <thead>
        <tr>
            <td>Пара</td>
            <td>Цена</td>
            <td>Создан</td>
            <td>Обновлен</td>
            <td id="target_1">Цель 1</td>
            <td>Цель 2</td>
            <td>Цель 3</td>
            <td>Покупка</td>
            <td>Источник</td>
            <td>Направление</td>
            <td>Время Работы</td>
            <td>Профит</td>
            <td>Action</td>
        </tr>
        </thead>
    </table>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Заголовок модального окна</h4>
                </div>
                <div class="modal-body">
                    <input id="target_1" value=""> </input>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div>
        </div>
    </div>
    </div>

@stop

@section('javascript')
    <script type="text/javascript">
        $(function () {
            var table = $('#jara').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('signals.render') }}",
                dataType: "json",
                columns: [
                    {data: 'pair', name: 'pair'},
                    {data: 'prices', name: 'prices'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'target_1', name: 'target_1'},
                    {data: 'target_2', name: 'target_2'},
                    {data: 'target_3', name: 'target_3'},
                    {data: 'buy', name: 'buy'},
                    {data: 'source', name: 'source'},
                    {data: 'direction', name: 'direction'},
                    {data: 'work_time', name: 'work_time'},
                    {data: 'profit', name: 'profit'},
                    {
                        data: 'action',
                        name: 'action',
                    },

                ],
            });

            $(document).on('click', '.actionSend', function () {
                $.ajax({
                    type: "POST",
                    url: "https://binanbot.vip.trade/telegram_bot_signals/actions/new_signal",
                    data: {
                        symbol: $(this).data('pair'),
                        input_cost: $(this).data('buy'),
                        target_1: $(this).data('target1'),
                        target_2: $(this).data('target2'),
                        target_3: $(this).data('target3'),
                        stop_loss: $(this).data('stop_loss'),
                        course: $(this).data('course'),
                    },
                    success: function (success) {
                        console.log(success);
                    }
                });
            });
            $(document).ready(function() {
                $("#myModalBox").modal('show');
            });

        });


    </script>
@stop
