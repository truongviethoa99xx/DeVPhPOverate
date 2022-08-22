let table_payment_bill;
$(function (){
    loadData();
    $(document).on('click','.btn-filter-data-table', function (){
        $(this).parent().find('.list-filter-column-select').toggleClass('d-none');
    })
})


async function loadData() {
    let action = ''
    table_payment_bill1 = await $('#table_data_payroll').DataTable({
        responsive: false,
        processing: true,
        serverSide: true,
        ordering: false,
        autoWidth : true,
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging: true,
        fixedHeader: true,
        fixedColumns: {
            leftColumns: 3,
            rightColumns: 1,
        },
        aLengthMenu: [[5, -1], [5, "Tất cả"]],
        iDisplayLength: 5,
        language: {
            emptyTable: "<div class='empty-datatable-custom'><img src='../../../../files/assets/images/nodata-datatable2.png'></div>",
            processing: "Đang tải",
            search:"",
            searchPlaceholder: "Tìm kiếm",
            lengthMenu: " _MENU_ ",
            paginate: {
                "first":      "Trang đầu",
                "last":       "Trang cuối",
                "next":       ">>",
                "previous":   "<<"
            },
            info: "  tổng số _TOTAL_",
        },
        ajax: {
            url: "datatable.data",
        },
        columns: [
            {data: 'id', name: 'DT_RowIndex', class: 'text-center text-nowrap'},
            {data: "employee.name", name: "avatar", className: "text-center text-break", width: '100px' },
            {data: "employee.avatar", name: "em_name", className: "text-center text-break", width: '100px' },
            {data: "employee_role_name", name: "department", className: "text-center text-nowrap" },
            {data: "branch_working_sesion_time", name: "branch_working_sesion_time", className: "text-center text-nowrap" },
            {data: "total_leave_day_with_salary", name: "total_leave_day_with_salary", className: "text-center text-nowrap" },
            {data: "total_leave_day_without_salary", name: "total_leave_day_without_salary", className: "text-center text-nowrap" },
            {data: "kpi_score", name: "kpi_score", className: "text-center text-nowrap" },
            {data: "basic_salary_in_term", name: "basic_salary_in_term", className: "text-center text-nowrap" },
            {data: "total_working_day", name: "total_working_day", className: "text-center text-nowrap" },
            {data: "salary_by_working_day", name: "salary_by_working_day", className: "text-center text-nowrap" },
            {
                data: "target_point_bonus_salary_in_branch",
                name: "target_point_bonus_salary_in_branch",
                className: "text-center text-nowrap"
            },
            {data: "bonus_booking", name: "bonus_booking", className: "text-center text-nowrap" },
            {data: "total_customer_invited", name: "total_customer_invited", className: "text-center text-nowrap" },
            {data: "customer_invited_bonus_amount", name: "customer_invited_bonus", className: "text-center text-nowrap" },
            {data: "other_bonus", name: "other_bonus", className: "text-center text-nowrap" },
            {data: "chef_bonus_amount", name: "chef_bonus_amount", className: "text-center text-nowrap" },
            {data: "master_chef_bonus_amount", name: "master_chef_bonus_amount", className: "text-center text-nowrap" },
            {data: "bonus_support_overtime_amount", name: "bonus_support_overtime_amount", className: "text-center text-nowrap" },
            {data: "total_bonus", name: "total_bonus", className: "text-center text-nowrap" },
            {data: "punish_late_minute_amount", name: "punish_late_minute_amount", className: "text-center text-nowrap" },
            {data: "punish_not_checkout_amount", name: "punish_not_checkout_amount", className: "text-center text-nowrap" },
            {data: "uniform_amount", name: "uniform_amount", className: "text-center text-nowrap" },
            {data: "pre_paid_amount", name: "pre_paid_amount", className: "text-center text-nowrap" },
            {data: "debt_amount", name: "debt_amount", className: "text-center text-nowrap" },
            {data: "other_punish", name: "other_punish", className: "text-center text-nowrap" },
            {data: "total_punish", name: "total_punish", className: "text-center text-nowrap" },
            {data: "total_salary", name: "total_salary", className: "text-center text-nowrap" },
            {data: "status_name", name: "status_name_id", className: "text-center text-nowrap" },
            {data: "employee.normalize_name", name: "employee_confirm", className: "text-center text-nowrap" },
            {data: "employee_role_name", name: "manage_confirm", className: "text-center text-nowrap" },
            {data: "total_temporary_salary", name: "general_manage_confirm", className: "text-center text-nowrap" },
            {data: "total_temporary_salary", name: "owner_confirm", className: "text-center text-nowrap" },
            {data: "total_temporary_salary", name: "treasurer_confirm", className: "text-center text-nowrap" },
            {
                data: "punish_not_checkout",
                name: "total_temporary_salary",
                className: "text-center text-nowrap background-color-highlight-table"
            },
            {data: "action", name: "action", className: "text-center text-nowrap", width: '54px'},
        ],
        // dom : '<<"toolbar">f<t><"col-sm-1 col-md-2 col-lg-3"lip>',
        dom: "<'row'<'col-sm-1 col-md-2 col-lg-3'<'toolbar'>><'col-sm-11 col-md-10 col-lg-9 d-flex justify-content-end'f<'p-0'B>>>" +
             "<'row'<'col-12'tr>>" +
             "<'row'<'mt-3 p-0 d-flex col-2'l<'p-0'>i><'col-10'p>>",
        "initComplete": function (settings) {
            let response = settings.json;
            $('.paginate_button.previous').html('<i class="fas fa-backward"></i>');
            $('.paginate_button.next').html('<i class="fas fa-forward"></i>');
            $('#table_data_payroll' + '_wrapper .dataTables_filter').prepend(`<div class="m-auto class-date-from-to-validate d-inline-block">
                                                                                        <label class="input-group m-auto"><div class="input-group border-group">
                                                                                            <input type="text" id= data-validate="search" class="text-center input-date-time-picker date-from-validate" name="start" value="">
                                                                                            <span class="label-date-time-picker"><i class='bx bx-calendar' ></i></span>
                                                                                            <input type="text" id="" data-validate="search" class="text-center input-date-time-picker date-to-validate ml-0" name="end" value="">
                                                                                            <button id="" class="button-search-date-time-picker label-date-time-picker"><i class="fa fa-search p-r-0px"></i></button>
                                                                                        </div></label>
                                                                                    </div>`);
            $('#table_data_payroll' + '_wrapper .dataTables_filter').append(`<div class="filter-column-select">
            <button type="submit" class="btn-filter-data-table"><i class="fas fa-filter"></i></button>
                <ul class="list-filter-column-select d-none">
                 <li class="filter-column-select-item">
                    <div class="checkbox-zoom zoom-primary p-1 m-0 ">
                        <label>
                            <input type="checkbox" value="" data-column="1">
                            <span class="cr">
                                <i class="cr-icon fas fa-check txt-primary"></i>
                            </span>
                            <span>ID</span>
                        </label>
                    </div>
                </li>
                <li class="filter-column-select-item">
                    <div class="checkbox-zoom zoom-primary p-1 m-0 ">
                        <label>
                            <input type="checkbox" value="" data-column="2">
                            <span class="cr">
                                <i class="cr-icon fas fa-check txt-primary"></i>
                            </span>
                            <span>Tên nhân viên</span>
                        </label>
                    </div>
                </li>
                <li class="filter-column-select-item">
                    <div class="checkbox-zoom zoom-primary p-1 m-0 ">
                        <label>
                            <input type="checkbox" value="" data-column="3">
                            <span class="cr">
                                <i class="cr-icon fas fa-check txt-primary"></i>
                            </span>
                            <span>Hình ảnh</span>
                        </label>
                    </div>
                </li>
                <li class="filter-column-select-item">
                    <div class="checkbox-zoom zoom-primary p-1 m-0 ">
                        <label>
                            <input type="checkbox" value="" data-column="4">
                            <span class="cr">
                                <i class="cr-icon fas fa-check txt-primary"></i>
                            </span>
                            <span>Bộ Phận</span>
                        </label>
                    </div>
                </li>
                 <li class="filter-column-select-item">
                    <div class="checkbox-zoom zoom-primary p-1 m-0 ">
                        <label>
                            <input type="checkbox" value="" data-column="5">
                            <span class="cr">
                                <i class="cr-icon fas fa-check txt-primary"></i>
                            </span>
                            <span>Bộ Phận</span>
                        </label>
                    </div>
                </li>
            </ul>
            </div>
            `);
            $(".toolbar").html(
                '<label><button type="submit" class="btn-tool-data-table"><i class=\'bx bx-plus\'></i></button></label>'+
                '<label><button type="submit" class="btn-tool-data-table"><i class=\'bx bx-trash\'></i></button></label>'+
                '<label><button type="submit" class="btn-tool-data-table"><i class=\'bx bx-cog\'></i></button></label>' +
                '<label><button type="submit" class="btn-tool-data-table"><i class=\'bx bx-cog\'></i></button></label>'+
                '<label><button type="submit" class="btn-tool-data-table"><i class=\'bx bx-cog\'></i></button></label>'+
                '<label><button type="submit" class="btn-tool-data-table"><i class=\'bx bx-cog\'></i></button></label>'
            );
            // $('#table_data_payroll' + '_wrapper .dataTables_length').append(`<button type="submit" class="btn-tool-data-table"><i class='bx bx-plus'></i></button>`);
            // $('#table_data_payroll' + '_wrapper .dataTables_length').append(`<button type="submit" class="btn-tool-data-table"><i class='bx bx-trash'></i></button>`);
            // $('#table_data_payroll' + '_wrapper .dataTables_length').append(`<button type="submit" class="btn-tool-data-table"><i class='bx bx-cog'></i></button>`);

            // $('#table_data_payroll' + '_wrapper #table_data_payroll_info').prepend(`<label> <select name="table_data_payroll_length" aria-controls="table_data_payroll" class=""><option value="5">5</option><option value="-1">Tất cả</option></select> </label>`);
            // $(".tooltip").tooltip("hide");
            // $('#total-tab1-payment-bill').text(response.total_amount);
            // $('#total-record-tab0-payment-bill').text(response.waiting_confirm);
            // $('#total-record-tab1-payment-bill').text(response.waiting_pay_confirm);
            // $('#total-record-tab2-payment-bill').text(response.waiting_pay);
            // $('#total-record-tab3-payment-bill').text(response.pay_refuse);
            // $('#total-record-tab4-payment-bill').text(response.pay_success);
            // $('#total-record-tab5-payment-bill').text(response.pay_cancel);
            // $('#total-record-tab6-payment-bill').text(response.pay_auto);

            $('li.filter-column-select-item').on('click', function (e) {
                e.preventDefault();

                // Get the column API object
                var column = table_payment_bill1.column($(this).find('input').attr('data-column'));
                if($(this).find('input').is(':checked')){
                    // Toggle the visibility
                    $(this).find('input').prop('checked', false);

                    column.visible(column.visible());
                }else {
                    $(this).find('input').prop('checked', true);
                    column.visible(!column.visible());
                }

            });
        },
    });
}

function fixedColumnDataTable(tableId, columnIndex) {
    tableId.find('tbody .text-center.dtfc-fixed-left:nth-child(' + columnIndex + ')').css('border-right', '2px solid #c2c2c2');
}


function addRowDatatableTemplate(dt, data) {
    data.DT_RowIndex = dt.data().count() + 1;
    dt.row.add(data).draw(false);
    dt.page('last').draw(false);
    $(dt.table().node()).parent().scrollTop($(dt.table().node()).parent().get(0).scrollHeight);
    drawDataValidate($(dt.table().node()));
}
