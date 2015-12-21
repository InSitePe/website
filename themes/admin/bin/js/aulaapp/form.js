$(document).ready(function () {
    /*Date Range Picker*/
    $('#reservation').daterangepicker();
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
    });
    var cb = function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + "]");
    }

    var optionSet1 = {
        startDate: moment().subtract('days', 29),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2014',
        dateLimit: {days: 60},
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
            'Last 7 Days': [moment().subtract('days', 6), moment()],
            'Last 30 Days': [moment().subtract('days', 29), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    };

    var optionSet2 = {
        startDate: moment().subtract('days', 7),
        endDate: moment(),
        opens: 'left',
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
            'Last 7 Days': [moment().subtract('days', 6), moment()],
            'Last 30 Days': [moment().subtract('days', 29), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        }
    };

    $('#reportrange span').html(moment().subtract('days', 29).format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#reportrange').daterangepicker(optionSet1, cb);

    $('#reportrange').on('show', function () {
        console.log("show event fired");
    });
    $('#reportrange').on('hide', function () {
        console.log("hide event fired");
    });
    $('#reportrange').on('apply', function (ev, picker) {
        alert("mama mia");
        console.log("apply event fired, start/end dates are "
                + picker.startDate.format('MMMM D, YYYY')
                + " to "
                + picker.endDate.format('MMMM D, YYYY')
                );
    });
    $('#reportrange').on('cancel', function (ev, picker) {
        console.log("cancel event fired");
    });
    /*Switch*/
    $('.switch').bootstrapSwitch();
    /*DateTime Picker*/
    $(".datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
    $("#datetime1").datetimepicker({format: 'yyyy-mm-dd'});

//    /*Select2*/
//    $(".select2").select2({
//        width: '100%'
//    });
//
//    /*Tags*/
//    $(".tags").select2({tags: 0, width: '100%'});

    /*Slider*/
    $('.bslider').slider();

    /*Input & Radio Buttons*/
    $('.icheck').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });
    /*spinners*/
    $("input[name='cleaninit']").TouchSpin();
    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%'
    });
    $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='demo4']").TouchSpin({
        postfix: "a button",
        postfix_extraclass: "btn btn-default"
    });
    /*End of spinners*/
    /*Color Picker*/
    $('.demo1').colorpicker({
        format: 'hex', // force this format
    });
    $('.demo2').colorpicker({
        format: 'hex', // force this format
    });
    $('.demo-auto').colorpicker();
    // Disabled / enabled triggers
    $(".disable-button").click(function (e) {
        e.preventDefault();
        $("#demo_endis").colorpicker('disable');
    });

    $(".enable-button").click(function (e) {
        e.preventDefault();
        $("#demo_endis").colorpicker('enable');
    });


    /*End of Color Picker*/
});