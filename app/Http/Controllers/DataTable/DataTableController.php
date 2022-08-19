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
        $domain = "http://172.16.2.255:1488";
        $default = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Faenza-avatar-default-symbolic.svg/800px-Faenza-avatar-default-symbolic.svg.png";
        $config['data']['total_record'] = count($config['data']['list']);
        foreach ($config['data']['list'] as $key => $data){
            $config['data']['list'][$key]['action'] = '<div class="btn-group btn-group-sm">
                                                            <div class="btn-action-icon" data-css="success"><i class="fas fa-check"></i></div>
                                                            <div class="btn-action-icon" data-css="edit"><i class="fas fa-pen-fancy"></i></div>
                                                            <div class="btn-action-icon" data-css="detail"><i class="fas fa-eye"></i></div>
                                                            <div class="btn-action-icon" data-css="delete"><i class="fas fa-trash"></i></div>
                                                        </div>';
            $config['data']['list'][$key]['employee']['avatar'] = '<img onerror="this.onerror=null; this.src=' . "'" . $default . "'" . '"  src="' . $domain . $data['employee']['avatar'] . '" alt="">';

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



