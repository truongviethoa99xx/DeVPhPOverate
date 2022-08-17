let table_payment_bill;
$(function (){
    loadData();
})


async function loadData() {
    let action = ''
    table_payment_bill1 = await $('#table_data_payroll').DataTable({
        responsive: false,
        processing: true,
        serverSide: true,
        ordering: false,
        autoWidth : false,
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        buttons: [ 'colvis' ],
        paging: true,
        fixedHeader: true,
        fixedColumns: {
            leftColumns: 2,
            rightColumns: 2,
        },
        scrollX: true,
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
                "next":       "Đi tới",
                "previous":   "Quay lại"
            },
            info: " _END_ kết quả (tổng số _TOTAL_)",
        },
        ajax: {
            url: "datatable.data",
        },
        columns: [
            {data: 'punish_not_checkout', name: 'DT_RowIndex', class: 'text-center', width: '5%'},
            {data: "punish_not_checkout", name: "avatar", className: "text-center"},
            {data: "punish_not_checkout", name: "em_name", className: "text-center"},
            {data: "punish_not_checkout", name: "department", className: "text-center"},
            {data: "punish_not_checkout", name: "branch_working_sesion_time", className: "text-center"},
            {data: "punish_not_checkout", name: "total_leave_day_with_salary", className: "text-center"},
            {data: "punish_not_checkout", name: "total_leave_day_without_salary", className: "text-center"},
            {data: "punish_not_checkout", name: "kpi_score", className: "text-center"},
            {data: "punish_not_checkout", name: "basic_salary_in_term", className: "text-center"},
            {data: "punish_not_checkout", name: "total_working_day", className: "text-center"},
            {data: "punish_not_checkout", name: "salary_by_working_day", className: "text-center"},
            {
                data: "punish_not_checkout",
                name: "target_point_bonus_salary_in_branch",
                className: "text-center"
            },
            {data: "punish_not_checkout", name: "bonus_booking", className: "text-center"},
            {data: "punish_not_checkout", name: "total_customer_invited", className: "text-center"},
            {data: "punish_not_checkout", name: "customer_invited_bonus", className: "text-center"},
            {data: "punish_not_checkout", name: "other_bonus", className: "text-center"},
            {data: "punish_not_checkout", name: "chef_bonus_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "master_chef_bonus_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "bonus_support_overtime_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "total_bonus", className: "text-center"},
            {data: "punish_not_checkout", name: "punish_late_minute_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "punish_not_checkout_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "uniform_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "pre_paid_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "debt_amount", className: "text-center"},
            {data: "punish_not_checkout", name: "other_punish", className: "text-center"},
            {data: "punish_not_checkout", name: "total_punish", className: "text-center"},
            {data: "punish_not_checkout", name: "total_salary", className: "text-center"},
            {data: "punish_not_checkout", name: "status_name_id", className: "text-center"},
            {data: "punish_not_checkout", name: "employee_confirm", className: "text-center"},
            {data: "punish_not_checkout", name: "manage_confirm", className: "text-center"},
            {data: "punish_not_checkout", name: "general_manage_confirm", className: "text-center"},
            {data: "punish_not_checkout", name: "owner_confirm", className: "text-center"},
            {data: "punish_not_checkout", name: "treasurer_confirm", className: "text-center"},
            {
                data: "punish_not_checkout",
                name: "total_temporary_salary",
                className: "text-center background-color-highlight-table"
            },
            {data: "punish_not_checkout", name: "action", className: "text-center"},
        ],
        "drawCallback": function (settings) {
            let response = settings.json;
            console.log(response);
            // $(".tooltip").tooltip("hide");
            // $('#total-tab1-payment-bill').text(response.total_amount);
            // $('#total-record-tab0-payment-bill').text(response.waiting_confirm);
            // $('#total-record-tab1-payment-bill').text(response.waiting_pay_confirm);
            // $('#total-record-tab2-payment-bill').text(response.waiting_pay);
            // $('#total-record-tab3-payment-bill').text(response.pay_refuse);
            // $('#total-record-tab4-payment-bill').text(response.pay_success);
            // $('#total-record-tab5-payment-bill').text(response.pay_cancel);
            // $('#total-record-tab6-payment-bill').text(response.pay_auto);
        },
    });
    // $('#table-payment-bill1').on('draw.dt', function () {
    //     $('[data-toggle="tooltip"]').tooltip({
    //         trigger: 'hover'
    //     });
    // });
}
