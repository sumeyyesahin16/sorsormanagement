
    MessageBoxError = function(_message) {
        Swal.fire({
            title: 'Hatalı İşlem',
            text: _message,
            icon: 'error',
            buttonsStyling: false,
            confirmButtonText: 'Tamam',
            customClass: {
                confirmButton: 'btn btn-danger m-2'
            }
        });
    };

    MessageBoxSuccess = function(_message) {
        Swal.fire({
            title: "İşlem Başarılı",
            text: _message,
            icon: 'success',
            buttonsStyling: false,
            confirmButtonText: 'Tamam',
            customClass: {
                confirmButton: 'btn btn-dark m-2'
            }
        });
    };


    MessageBoxShow = function(_title, _message, _icon) {
        Swal.fire({
            title: _title,
            text: _message,
            icon: _icon,
            buttonsStyling: false,
            confirmButtonText: 'Tamam',
            customClass: {
                confirmButton: 'btn btn-danger m-2'
            }
        });
    };

    MessageBoxShowWithAction = function(_title, _message, _icon, _afterEvent) {
        Swal.fire({
            title: _title,
            text: _message,
            icon: _icon,
            buttonsStyling: false,
            showCancelButton: false,
            confirmButtonText: 'Tamam',
            allowOutsideClick: false,
            customClass: {
                confirmButton: 'btn btn-dark m-2'
            }
        }).then((result) => {
            console.log(result);

            if (result.value) {
                if (_afterEvent != null) {
                    _afterEvent();
                }
            }
        });
    };

    AlertBoxShow = function(_title, _message, _icon) {
        Swal.fire({
            title: _title,
            text: _message,
            icon: _icon,
            showCancelButton: false
        });
    };


    ConfirmBoxShow = function(_title, _message, _afterEvent) {
        Swal.fire({
            title: _title,
            text: _message,
            icon: 'info',
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: 'Tamam',
            cancelButtonText: 'İptal',
            customClass: {
                confirmButton: 'btn btn-dark m-2',
                cancelButton: 'btn btn-danger m-2'
            }
        }).then((result) => {
            console.log(result);

            if (result.value) {
                if (_afterEvent != null) {
                    _afterEvent();
                }
            }
        });
    };


    changePagePath = function(newTitle, newPath) {
        document.title = newTitle;
        window.history.pushState(null, newTitle, newPath);
    };



    var isLoaded = false;
    LoadingStart = function() {

        isLoaded = false;
        //setTimeout(function () {
        if(!isLoaded){
            //$('.content').css('filter', 'blur(2px)');
            $('#divLoader').css('display', '');
        }
        //}, 500);
    };

    LoadingFinish = function() {
        isLoaded = true;
        //$('.content').css('filter', '');
        $('#divLoader').css('display', 'none');
    };


    PostAction = function(formId, address, afterEvent) {
        LoadingStart();

        var tkn = document.getElementsByName('csrf-token')[0].content;

        if(tkn == ''){
            tkn = document.getElementsByName('_token')[0].content;
        }

        console.log('Post Action Token:' + tkn);

        $('#' + formId).append('<input type="hidden" name="csrf-token" value="' + tkn + '" />');
        $('#' + formId).append('<input type="hidden" name="_token" value="' + tkn + '" />');


        var formdata = null;
        if (formId != null) {
            formdata = $('#' + formId).serialize();
        }

        $.ajax({
            method: "POST",
            url: address,
            data: formdata
        }).done(function (data) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent(data);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent({success: false, data: null});
            }
        });
    };


    PostActionWithData = function(data, address, afterEvent) {
        LoadingStart();

        data['_token'] = document.getElementsByName('csrf-token')[0].content;
        console.log(data);

        $.ajax({
            method: "POST",
            url: address,
            data: data
        }).done(function (data) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent(data);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent({success: false, message: 'Sistemsel istek hatası oluştu!', data: null});
            }
        });
    };



    PostActionWithFile = function(formId, address, afterEvent) {

        formArray = $('#' + formId).serializeArray();
        var dts = new FormData();

        var images = document.querySelectorAll('#' + formId + ' input[type="file"]');

        for (i = 0; i < images.length; i++) {

            if (images[i].files.length > 0) {
                dts.append(images[i].name, images[i].files[0]);
            }
        }

        if (formArray != null) {
            for (var i = 0; i < formArray.length; i++) {
                dts.append(formArray[i]['name'], formArray[i]['value'])
            }
        }

        axios.defaults.baseURL = '/';
        //axios.defaults.headers.common['Authorization'] = AUTH_TOKEN;
        axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
        // axios.defaults.headers.post['Accept'] = 'application/json';
        var token = document.head.querySelector('meta[name="csrf-token"]');
        console.log(token.content)
        axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;


        axios({
            method: "POST",
            url: address,
            data: dts
        }).catch(function (error) {
            if (error.response) {

                return afterEvent(error.response.data);

            } else if (error.request) {
                console.log(error.request);
            } else {
                console.log('Error', error.message);
            }

            sweetAlert('Error !', error.message, 'error');

        }).then(function (response) {
            if (typeof response != 'undefined') {
                if (response.status == 200) {
                    var data = response.data;
                    return afterEvent(data);
                }
            }

        });
    }



    GetAction = function(address, afterEvent, isWithLoading = true) {
        if(isWithLoading)
            LoadingStart();

        $.ajax({
            method: "GET",
            url: address,
        }).done(function (data) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent(data);
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent({success: false, message: 'Sistemsel istek hatası oluştu!', data: null});
            }
        });
    };

    GetActionExternal = function(address, afterEvent) {
        LoadingStart();

        $.ajax({
            method: "GET",
            url: address,
        }).done(function (data) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent({success: true, data: data});
            }
        }).fail(function (jqXHR, textStatus, errorThrown) {
            LoadingFinish();

            if (afterEvent != null) {
                afterEvent({success: false, data: null});
            }
        });
    };


    getTable = function(selector, url, columns, orders, loadedEvent, pageLength = 10) {

        let errorCount = 0;

        var dt_ = selector.DataTable({

            "language": {
                "sDecimal": ",",
                "sEmptyTable": "Tabloda herhangi bir veri mevcut değil",
                "sInfo": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "sInfoEmpty": "Kayıt yok",
                "sInfoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "Sayfada _MENU_ kayıt göster",
                "sLoadingRecords": "Yükleniyor...",
                "sProcessing": "Yükleniyor...",
                "sSearch": "Ara:",
                "sZeroRecords": "Eşleşen kayıt bulunamadı",
                "oPaginate": {
                    "sFirst": "İlk",
                    "sLast": "Son",
                    "sNext": "Sonraki",
                    "sPrevious": "Önceki"
                },
                "oAria": {
                    "sSortAscending": ": artan sütun sıralamasını aktifleştir",
                    "sSortDescending": ": azalan sütun sıralamasını aktifleştir"
                }
            },

            serverSide: true,
            processing: true,
            ajax: {
                url: url,
                error: function (xhr, error, thrown){
                    if(errorCount == 0){
                        errorCount++;

                        setTimeout(function () {
                            dt_.ajax.reload();
                        }, 500);
                    }
                }
            },
            columns: columns,
            bFilter: false,
            "lengthChange": false,
            order: orders,

            "pageLength": pageLength,

        });

        dt_.on('draw', function () {

            if(loadedEvent != null)
                loadedEvent();

            // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            //     checkboxClass: 'icheckbox_minimal-blue',
            //     radioClass   : 'iradio_minimal-blue'
            // })
        });

        return dt_;
    };


    getTableForList = function(selector, url, columns, orders) {

        var dt_ = selector.DataTable({

            "language": dataTableLanguage,

            serverSide: true,
            processing: true,
            ajax: url,
            columns: columns,
            bFilter: false,
            "lengthChange": false,
            order: orders,
            "paging": false,
            "info": false,
            "pageLength": 30,

        });


        return dt_;
    };


    $(document).ready(function (){
        $('.enter-event').keyup(function(e){
            if(e.keyCode === 13){
                console.log('Enter key up');
                console.log('Enter Command; ' + $(this).data('enter-command'));

                var fn = window[$(this).data('enter-command')];
                if (typeof fn === "function") fn.apply(null, null);
            }

        });
    })
