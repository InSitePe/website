(function ($) {
    var nameForm = 'model';
    $.extend({
        fieldType: function (id, type, placeholder, len) {
            type = parseInt(type);
            var field = $('<input>');
            switch (type) {
                case 1:
                    field.addClass('form-control');
                    field.attr({
                        placeholder: placeholder,
                        maxlength: len,
                        id:'input_'+id,
                        name : nameForm+'[save]['+id+']',
                    });
                    break;
                case 6:
                    var divContent = $('<div>').addClass('input-group date datePicker datetime col-md-6 col-xs-7').attr({
                        'data-date-format': "dd MM yyyy"
                    });
                    field.addClass('form-control').attr({
                        size: "16",
                        type: 'text',
                        readonly: true,
                        id:'date_'+id,
                        name : nameForm+'[save]['+id+']',
                    });

                    field = divContent.html(field).append('<span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>');
                    break;
                case 7:
                    var divContent = $('<div>').addClass('input-group date timePicker datetime col-md-4 col-xs-7').attr({
                        'data-date-format': "dd MM yyyy"
                    });
                    field.addClass('form-control').attr({
                        size: "16",
                        type: 'text',
                        readonly: true,
                        id:'time_'+id,
                        name : nameForm+'[save]['+id+']',
                    });

                    field = divContent.html(field).append('<span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>');
                    break;
                    
                case 8:

                    var divFileContent = $('<div>').addClass('fileinput fileinput-new').attr({
                        'data-provides': "fileinput"
                    });
                    var inputTextHidden = $('<input>').attr({
                        type: "hidden",
                        value: "",
                        name: ""
                    });
                    var divPlaceHoderIgm = $('<div>').addClass('fileinput-new thumbnail').css({
                        width: '150px',
                        height: '150px',
                    });
                    var imgPlaceHolder = $('<img>').attr({
                        alt: "...",
                        src: "http://placehold.it/150x150/a8d232/ffffff"
                    });
                    var divImgThumbnail = $('<div>').addClass('fileinput-preview fileinput-exists thumbnail').css({
                        'max-width': '150px',
                        'max-height': '150px',
                        'line-height': '10px',
                    });
                    var divContentBtn = $('<div>');
                    var spanContentBtn = $('<span>').addClass('btn btn-primary btn-file');
                    var spanBtnSelect = $('<span>').addClass('fileinput-new').html('Seleccionar Imagen');
                    var spanBtnChange = $('<span>').addClass('fileinput-exists').html('Cambiar');
                    field.attr({
                        type: 'file',
                        id:'dile_'+id,
                        name : nameForm+'[image]',
                    });
                    var anclaRemove = $('<a>').addClass('btn btn-danger fileinput-exists').attr({
                        'data-dismiss': "fileinput",
                        'href': '#'
                    }).html('Eliminar');

                    spanContentBtn.html(spanBtnSelect);
//                    spanContentBtn.append(spanBtnSelect);
                    spanContentBtn.append(spanBtnChange);
                    spanContentBtn.append(field);

                    divContentBtn.html(spanContentBtn);
                    divContentBtn.append(anclaRemove);

                    divPlaceHoderIgm.html(imgPlaceHolder);

                    divFileContent.html(inputTextHidden);
                    divFileContent.append(divPlaceHoderIgm);
                    divFileContent.append(divImgThumbnail);
                    divFileContent.append(divContentBtn);

                    field = divFileContent;

                    break;
            }

            return field;
        },
        formDataBasic: function (obj, options) {

            this.default = {
                name: 'model'
            };
            this.option = options;
            setting = $.extend({}, this.default, this.option);

            nameForm = setting.name;
            $.each(obj, function (k, v) {
                if (parseInt(v.basico) == 1) {
                    var formGroup = $('<div>').addClass('form-group');
                    var label = $('<label>').html(v.nombre);
                    var field = $.fieldType(v.id, v.id_tipo, v.placeholder_tipo, v.valor);

                    formGroup.html(label);
                    formGroup.append(field);
                    formGroup.appendTo('#dataBasicInstitute');
                }
            });

        },
        formDataDetails: function (obj, options) {

            this.default = {
                name: 'model'
            };
            this.option = options;
            setting = $.extend({}, this.default, this.option);

            nameForm = setting.name;
            $.each(obj, function (k, v) {
                if (parseInt(v.basico) != 1) {
                    var formGroup = $('<div>').addClass('form-group');
                    if (parseInt(v.id_tipo) != 8) {
                        var label = $('<label>').html(v.nombre);
                    } else {
                        var label = $('<div>').html('<label>'+v.nombre+'</label>');
                    }

                    var field = $.fieldType(v.id, v.id_tipo, v.placeholder_tipo, v.valor);

                    formGroup.html(label);
                    formGroup.append(field);
                    formGroup.appendTo('#dataDetailInstitute');
                }
            });

        }

    });

})(jQuery);