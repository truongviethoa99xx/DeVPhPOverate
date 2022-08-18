<?php

namespace App\Http\Controllers\DataTable;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class DataTableController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }


    public function data(Request $request){
        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer 96674d66-4151-4056-9f51-dfbc76ec24cc',
                'Content-Type' => 'application/json',
            ],
        ]);

        $data_req = [
            'request_url' => "/api/large/application/salary-table",
            'project_id' => 8094,
            'http_method' => 0, // 0: get, 1: post
            'is_production_mode' => 0, // 0: beta, 1: live
            'os_name' => 'Test',
            'params' => [
                "branch_id" => "1359",
                "time" => "01/08/2022",
                "status" => "0,1,2,3,4,5,6,7",
                "employee_role_ids" => "",
                "is_force_online" => 1
            ]
        ];

        $response =  $client->request('POST', 'http://172.16.2.243:8092/api/queues' , [
            'http_errors' => false,
            'json' => $data_req,
        ]);
        $config = json_decode($response->getBody(), true);
        $config['data']['total_record'] = count($config['data']['list']);
        foreach ($config['data']['list'] as $key => $data){
            $config['data']['list'][$key]['action'] = '<div class="btn-group btn-group-sm">
                                <button type="button" class="data-table-btn-action btn-success waves-effect " onclick="openModalConvertSupplierRestaurant($(this))" data-id="1" data-toggle="tooltip" data-placement="top" data-original-title="Danh sách NCC sổ tay"><i class="fas fa-check"></i></button>
                                <button type="button" class="data-table-btn-action btn-warning waves-effect " onclick="openModalUpdateRestaurantManage($(this))" data-id="1" data-toggle="tooltip" data-placement="top" data-original-title="Chỉnh sửa"><i class="fas fa-pen-fancy"></i></i></span></button>
                                <button type="button" class="data-table-btn-action btn-primary waves-effect " onclick="openModalDetailRestaurantManage($(this))" data-id="1" data-toggle="tooltip" data-placement="top" data-original-title="Chi tiết"><i class="fas fa-eye"></i></button>
                                <button type="button" class="data-table-btn-action btn-danger waves-effect " onclick="openModalDetailRestaurantManage($(this))" data-id="1" data-toggle="tooltip" data-placement="top" data-original-title="Xóa"><i class="fas fa-trash"></i></button>
                            </div>';
        }


        $data_table = array(
            'draw' => $request->get('draw'),
            'recordsTotal' => $config['data']['total_record'],
            'recordsFiltered' => $config['data']['total_record'],
            'data' => $config['data']['list'],
            'total_record' => $this->numberFormat($config['data']['total_record']),
            'key' => '',
            'page' => ($request->get('start') + $request->get('length')) / $request->get('length'),
            'config' => $config
        );
//        $confirm_treasurer = Config::get('constants.response_text.title-button.CONFIRM_TREASURER');
//        $detail = Config::get('constants.response_text.title-button.DETAIL');
//        $notify = Config::get('constants.response_text.title-button.NOTIFY');
//        $send = Config::get('constants.response_text.title-button.SALARY_SEND');

        return json_encode($data_table);
    }



    public function numberFormat($num)
    {
        if (!is_numeric($num)) return $num;
        if ($num > 1000 || $num < -1000) {
            return number_format($num);
        } else {
            switch (strlen(substr(strrchr($num, "."), 1))) {
                case 0:
                    return number_format($num);
                case 1:
                    return number_format($num, 1);
                case 2:
                    return number_format($num, 2);
                default:
                    return number_format($num, 3);
            }
        }
    }

}



