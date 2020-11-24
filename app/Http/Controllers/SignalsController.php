<?php


namespace App\Http\Controllers;


use App\Signals;
use App\Subscriptions;
use Binance;
use Binance\API;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

//use Yajra\DataTables\DataTables;

class SignalsController extends BaseController
{

    public function signals()
    {
        $files = Storage::disk('signals')->files();
        foreach ($files as $fileName) {
            $file = Storage::disk('signals')->get($fileName);
            $decode = json_decode($file, true);
            $signals = new Signals();
            $signals->pair = $decode['pair'];
            $signals->target_1 = $decode['buy'] * 1.20;
            $signals->target_2 = $decode['buy'] * 3.20;
            $signals->target_3 = $decode['buy'] * 5.20;
            $signals->buy = $decode['buy'];
            $signals->source = $decode['source'];
//                $signals->status = $decode['status'];
            $signals->direction = $decode['direction'];
            $signals->profit = $decode['profit'];
            $signals->work_time = $decode['work_time'];
//                $signals->signal_id = $decode['signal_id'];
//                $signals->risk_filter = $decode['risk_filter'];
//                $signals->term = $decode['term'];
            $signals->save();
            if (!Storage::exists($fileName)) {
                Storage::disk('signals')->move($fileName, 'temp/' . $fileName);
            }
        }
    }

    public function render(Request $request)//Получаем ajax
    {
        if ($request->ajax()) {
            $data = Signals::latest()->get();
//            $api = new API(false, falsse);
//            $prices = $api->prices();
//            foreach ($data as $key => $row) {
//                $pair = str_replace('/', '', $row['pair']);
//                $data[$key]['prices'] = $prices[$pair];
//                Log::info($row['prices']);
        }
        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<td> <a class="btn btn-primary mb-2 mr-1 actionSend" data-pair="' . $row['pair'] . '"
                      data-target1="' . $row['target_1'] . '"
                      data-target2="' . $row['target_2'] . '"
                      data-target3="' . $row['target_3'] . '"
                      data-stop_loss="' . $row['stop_loss'] . '"
                      data-course="' . $row['prices'] . '"
                      data-buy="' . $row['buy'] . '"
                       > Send</a></td>
                       <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Открыть модальное окно
</button> </td>

                       ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->toJson();


        return view('signalsView');
    }


    public function apiSignals(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pair' => 'string',
            'target_1' => 'numeric|nullable',
            'target_2' => 'numeric|nullable',
            'target_3' => 'numeric|nullable',
            'buy' => 'numeric|nullable',
            'source' => 'string|nullable',
            'status' => 'string|nullable',
            'direction' => 'string|nullable',
            'profit' => 'string|nullable',
            'work_time' => 'string|nullable',
            'signal_id' => 'integer',
            'risk_filter' => 'integer|nullable',
            'term' => 'string|nullable',
            'target_1_time' => 'numeric|nullable',
            'target_2_time' => 'numeric|nullable',
            'target_3_time' => 'numeric|nullable',
            'buy_time' => 'string|nullable',
            'stop_loss' => 'numeric|nullable',
            'stop_loss_time' => 'numeric|nullable',
            'created_at' => 'string',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $signals = Signals::create($request->all());

        return response()->json($signals, 201);

    }

	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function get_data_tables(Request $data){
        if($data->ajax()) {
			$data = Signals::latest()->get();
            return $data = datatables()->of($data)->toJson();

        }
    }

    public function signals_show(){


        $chart_data = Signals::whereNotNull('profit')->select('created_at', 'profit', 'pair', 'work_time')->orderBy('created_at', 'desc')->get();

        $get_array_profit = array();
        foreach($chart_data as $key=>$val){
            $get_day = Carbon::parse($val['created_at'])->format('Y-m-d');
            if(!empty($get_array_profit[$get_day])){
                $get_array_profit[$get_day] += $val['profit'];
            } else {
                $get_array_profit[$get_day] = $val['profit'];
            }
        }

        $signals_data = collect($get_array_profit)->take(30)->sortKeysDesc();

        $mins_profit = $signals_data->sortBy('profit')->slice(0, 5);
        $maxs_profit = $signals_data->SortByDesc('profit')->slice(0, 5);

        $signals_data = $signals_data->toArray();
        return view('signals', compact('mins_profit', 'maxs_profit', 'signals_data'));
    }
    public function sort_day(){//Закоментить

        $chart_data = Signals::whereNotNull('profit')->select('created_at', 'profit', 'pair', 'work_time')->whereBetween('created_at', array($_GET['date_before']." 00:00:00", $_GET['date_after']." 23:59:59"))->orderBy('created_at', 'desc')->get();


        if(!$chart_data->isEmpty()){
            foreach($chart_data as $key=>$val){
                $get_day = Carbon::parse($val['created_at'])->format('Y-m-d');
                $get_array_profit[$get_day][] = $val['profit'];
            }
            foreach($get_array_profit as $key1=>$unused){
                $received_table_signals[$key1] = array_sum($get_array_profit[$key1]);
            }
            $mins_profit = $chart_data->sortBy('profit')->slice(0, 5);
            $maxs_profit = $chart_data->SortByDesc('profit')->slice(0, 5);

            $signals_data = array_reverse(array_splice($received_table_signals, 0, 29));
        }else{
            $signals_data = "";
            $mins_profit = "";
            $maxs_profit = "";
        }



        return view('signals', compact('mins_profit', 'maxs_profit', 'signals_data'));
    }

}
