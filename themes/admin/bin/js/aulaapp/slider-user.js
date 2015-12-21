(function ($) {
    var urlFileConfig = null;
    $.extend({
        listactionUser: function (obj) {


            var lstFunctions = $('<li>').addClass('parent');
            var nameFunction = $('<a>').attr({
                href :'#'
            });
            var spanNameFunction = $('<span>');
            var actions = $('<ul>').addClass('sub-menu');

            spanNameFunction.html(obj.funcion_nombre);
            nameFunction.html('<i class="fa fa-home"></i>');
            nameFunction.append(spanNameFunction);
            lstFunctions.html(nameFunction);

            $.each(obj.acciones_funcion, function (k, v) {
                var lstActions = $('<li>');
                var nameActions = $('<a>').attr({
                    href: v.accion_link
                });
                nameActions.html('<span class="label label-primary pull-right">New</span>');
                nameActions.append(v.accion_nombre);
                lstActions.append(nameActions);

                actions.append(lstActions);
            });


            lstFunctions.append(actions);

            return lstFunctions;


        },
        actionsUser: function (options) {
            this.default = {
                url: null,
                rol: 1,
            };

            this.option = options;
            settings = $.extend({}, this.default, this.option);


            var settingObj = $.getJSON(settings.url, function (data) {
                var _countRoles = parseInt(Object.keys(data.roles).length)
                if(_countRoles <= 0){
                    var msg = '<div class="alert alert-warning"><i class="fa fa-warning sign"></i><strong>Alerta!</strong> Aún no cuneta con acciones</div>';
                    $('#actionsUser').html('<li>'+msg+'</li>');
                    return false;
                }
                var actionsRol = data.functions.rol[settings.rol].funciones;
                $.each(actionsRol, function (k, v) {
                    var lstFunctins = $.listactionUser(v);
                    lstFunctins.appendTo('#actionsUser');
                });
            });
            
        }
    });


})(jQuery);