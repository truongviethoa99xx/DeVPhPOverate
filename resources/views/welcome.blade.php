<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.4/b-html5-1.5.4/datatables.min.css"/>
        <link rel="stylesheet" href="{{asset('style.css')}}">    
</head>
    <body>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="card card-block p-3">
                <div class="table-responsive ">
                    <table class="table table-bordered" id="table_data_payroll">
                        <thead>
                            <tr>
                                <th class="text-center ">ID</th>
                                <th class="text-center ">Tên nhân viên</th>
                                <th class="text-center ">Hình ảnh</th>
                                <th class="text-center ">Bộ phận</th>
                                <th class="text-center ">Ca làm việc</th>
                                <th class="text-center ">Nghỉ CP</th>
                                <th class="text-center ">Nghỉ KP</th>
                                <th class="text-center ">KPI</th>
                                <th class="text-center ">Lương CB</th>
                                <th class="text-center ">Ngày công
                                    (NC)</th>
                                <th class="text-center  background-color-highlight-table">
                                    Thưởng ĐBH</th>
                                <th class="text-center ">
                                    Thưởng Booking</th>
                                <th class="text-center ">
                                    Số KH mới</th>
                                <th class="text-center ">
                                    Thưởng KH mới</th>
                                <th class="text-center ">
                                    Thưởng khác	</th>
                                <th class="text-center ">Đánh giá món ăn (ĐGMĂ)</th>
                                <th class="text-center ">
                                    ĐGMĂ
                                    </th>
                                <th class="text-center ">
                                    Hỗ trợ
                                   </th>
                                <th class="text-center ">Hỗ trợ</th>
                                <th class="text-center  background-color-highlight-table">
                                    Tổng tăng lương</th>
                                <th class="text-center ">
                                    Phạt trễq</th>
                                <th class="text-center ">
                                    Tiền phạt
                                   </th>
                                <th class="text-center ">
                                    Đồng phục	</th>
                                <th class="text-center ">
                                    Tạm ứng	</th>
                                <th class="text-center ">
                                    Nợ/Sai bill	</th>
                                <th class="text-center ">
                                    Phạt khác	</th>
                                <th class="text-center  background-color-highlight-table">
                                    Tổng trừ lương</th>
                                <th class="text-center  background-color-highlight-table">
                                    Thực lãnh</th>
                                <th class="text-center ">
                                    Trạng thái</th>
                                <th class="text-center">
                                    Nhân viên	</th>
                                <th class="text-center">
                                    Quản lý	</th>
                                <th class="text-center">
                                    Ban QL	</th>
                                <th class="text-center">
                                    Giám đốc</th>
                                <th class="text-center">
                                    Thủ quỹ chi	</th>
                                <th class="text-center  background-color-highlight-table">
                                    Tổng lương</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="css"></div>
    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="{{ asset('index.js')}}"></script>
</html>
