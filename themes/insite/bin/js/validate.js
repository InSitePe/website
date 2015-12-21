function Validate(path, valor) {
    $.ajax({
        url: path,
        async: true,
        type: "POST",
        dataType: 'json',
        data: {
            valor: valor
        },
        beforeSend: function () {
            $('#loading-ok').addClass('hidden');
            $('#loading-wrong').addClass('hidden');
            $('#loading-key').removeClass('hidden');
            $('.FormReg').prop('disabled', true);
        },
        success: function (response) {
            $('#loading-key').addClass('hidden');
            if (response.estado == true) {
                $('#loading-ok').removeClass('hidden');
                $('.FormReg').prop('disabled', false);
                $('#key_proyecto').val(response.key);
            } else {
                $('#key_proyecto').val(" ");
                $('#loading-wrong').removeClass('hidden');
                $('.FormReg').prop('disabled', true);
            }
        }
    });
}
$(function () {
    $('.click-nav > ul').toggleClass('no-js js');
    $('.click-nav .js ul').hide();
    $('.click-nav .js').click(function (e) {
        $('.click-nav .js ul').slideToggle(200);
        $('.clicker').toggleClass('active');
        e.stopPropagation();
    });
    $(document).click(function () {
        if ($('.click-nav .js ul').is(':visible')) {
            $('.click-nav .js ul', this).slideUp();
            $('.clicker').removeClass('active');
        }
    });
});

jQuery.fn.ForceNumericOnly =
        function ()
        {
            return this.each(function ()
            {
                $(this).keydown(function (e)
                {
                    var key = e.charCode || e.keyCode || 0;
                    return (
                            key == 8 ||
                            key == 9 ||
                            key == 13 ||
                            key == 46 ||
                            key == 110 ||
                            key == 190 ||
                            (key >= 35 && key <= 40) ||
                            (key >= 48 && key <= 57) ||
                            (key >= 96 && key <= 105));
                });
            });
        };