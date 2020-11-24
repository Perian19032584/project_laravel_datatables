<?php

namespace App\Http\Controllers;

use App\Subscriptions;
use App\User;
use App\UsersInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\UsersData;
use App\Http\Controllers\Redirect;
use Alert;
use App\balance_history;



class UsersInfoController extends Controller
{
    public function render(Request $request)
    {
        if ($request->ajax()) {
            $users = User::whereHas('subscriptions', $filter = function ($query) {
                $query->where('active', '1');
            })
                ->with(['subscriptions' => $filter])
                ->get();
            return DataTables::of($users)
                ->addColumn('subscriptions', function ($users) {
                    foreach ($users->subscriptions as $subs) {
                        return $subs->subscription_name . ' : ' . $subs->expired_at;
                    }
                })
                ->addColumn('balance', function ($bal) {
                    foreach ($bal->balanc as $balance) {
                        return $balance->balance;
                    }
                })
                ->make(true);
        }


        return view('usersView');
    }
    public function list_user(){
        return view('list_user');
    }
    public function edit_user(Request $request){
        $user_id = $request->get('user_id');
        if($user_id != null) {

            $get_user = UsersData::where('id', $user_id)->get();

            return view('/editing_user', compact('get_user'));
        }else{
            //return redirect()->back()->with('alert', 'Deleted!');
            echo '<script type="text/javascript">alert("Пожалуйста выберите пользователя")</script>';
            return redirect()->route('list_user');
        }
    }
    public function get_table_datatables(Request $data){
            if($data->ajax()) {
                $data = UsersData::get();
//                    return $data = datatables()->of($data)->addIndexColumn()->addColumn('action', function ($row) {
//                        return '<td><a href="/edit_user?user_id=' . $row['id'] . '" class="data"><i class="material-icons">edit</i></a></td>';
//                    })->addIndexColumn()->addColumn('status', function ($row) {
//                        //$status = balance_history::where('id_user', $row['id'])->get('status');
//                        return 123;
//
//                    })->addIndexColumn()->addColumn('action2', function ($row) {
//                        return '<td><a href="/show_user?user_id=' . $row['id'] . '" class="data"><i class="material-icons">remove_red_eye</i></a></td>';
//                    })->rawColumns(['action2', 'action'])->toJson();
            }

    }
    public function change_user(Request $request){
        $user_id = $request->get('user_id');



        $get_user = UsersData::where('id', $user_id)->get();
        if(!empty($request->get('username')) && !empty($request->get('First_Name')) && !empty($request->get('Last_Name')) && !empty($request->get('language_Code'))){
            foreach ($get_user as $user) {
                $user['username'] = $request->get('username');
                $user['first_name'] = $request->get('First_Name');
                $user['last_name'] = $request->get('Last_Name');
                $user['language_code'] = $request->get('language_Code');
                $user['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');
            }
            $user->save();
        }
        return view('editing_user', compact('get_user'));
    }
    public function show_user(Request $request){

        $user_id = $request->get('user_id');
        $get_user  = UsersData::find($user_id);

        $balance_history = $get_user->balance_history->filter(function ($value) {
            if($value['status'] == 'active'){
                return $value;
            }
        });


        foreach ($balance_history as $get_amount){
            $money['sum'][] = $get_amount['sum'];
            $money['commission'][] = $get_amount['commission'];
        }

        return view('show_user', compact('get_user', 'money'));
    }
    public function balance_user(){

        $data = balance_history::all()->filter(function ($value){
            if($value['status'] == 'active'){
                return $value;
            }
        });

        foreach ($data as $get_amount){
            $money['sum'][] = $get_amount['sum'];
            $money['commission'][] = $get_amount['commission'];
        }

        return view('balance_user', compact('money'));
    }

}

