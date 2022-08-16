<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.0/css/fixedColumns.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            th, td { white-space: nowrap; }
            div.dataTables_wrapper {
                width: 800px;
                margin: 0 auto;
            }

            .DTFC_LeftBodyLiner {
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row d-flex justify-content-center align-item-center">
                <div class="col-lg-5 card card-block">
                    <div class="form-group">
                        <input type="email" class="form-control" id="domain" aria-describedby="emailHelp" placeholder="Domain">
                    </div>
                </div>
                <div class="col-lg-5 card card-block">
                    <div class="form-group">
                        <input type="email" class="form-control" id="token" aria-describedby="emailHelp" placeholder="Token">
                    </div>
                </div>
                <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <div class="card card-block">
                <div class="table-responsive ">
                    <table class="table table-bordered" id="table_data_payroll">
                        <thead>
                            <tr>
                                <th class="text-center fix-size">STT</th>
                                <th class="text-center fix-size">HÌNH ẢNH</th>
                                <th class="text-center fix-size">Tên nhân viên</th>
                                <th class="text-center fix-size">Bộ phận</th>
                                <th class="text-center fix-size">Ca làm việc</th>
                                <th class="text-center fix-size">Nghỉ CP</th>
                                <th class="text-center fix-size">Nghỉ KP</th>
                                <th class="text-center fix-size">KPI</th>
                                <th class="text-center fix-size">Lương CB</th>
                                <th class="text-center fix-size">Ngày công
                                    (NC)</th>
                                <th class="text-center fix-size background-color-highlight-table">
                                    Thưởng ĐBH</th>
                                <th class="text-center fix-size">
                                    Thưởng Booking</th>
                                <th class="text-center fix-size">
                                    Số KH mới</th>
                                <th class="text-center fix-size">
                                    Thưởng KH mới</th>
                                <th class="text-center fix-size">
                                    Thưởng khác	</th>
                                <th class="text-center fix-size">Đánh giá món ăn (ĐGMĂ)</th>
                                <th class="text-center fix-size">
                                    ĐGMĂ
                                    <br>(bếp trưởng)</th>
                                <th class="text-center fix-size">
                                    Hỗ trợ
                                    <br>@lang('app.payroll-manage.note-chef')</th>
                                <th class="text-center fix-size">Hỗ trợ</th>
                                <th class="text-center fix-size background-color-highlight-table">
                                    Tổng tăng lương</th>
                                <th class="text-center fix-size">
                                    Phạt trễq</th>
                                <th class="text-center fix-size">
                                    Tiền phạt
                                    <br>(k check-out)</th>
                                <th class="text-center fix-size">
                                    Đồng phục	</th>
                                <th class="text-center fix-size">
                                    Tạm ứng	</th>
                                <th class="text-center fix-size">
                                    Nợ/Sai bill	</th>
                                <th class="text-center fix-size">
                                    Phạt khác	</th>
                                <th class="text-center fix-size background-color-highlight-table">
                                    Tổng trừ lương</th>
                                <th class="text-center fix-size background-color-highlight-table">
                                    Thực lãnh</th>
                                <th class="text-center fix-size">
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
                                <th class="text-center fix-size background-color-highlight-table">
                                    Tổng lương</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="{{ asset('index.js')}}"></script>
</html>
