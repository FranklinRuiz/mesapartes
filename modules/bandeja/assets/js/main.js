$("#recepcionar").click(function () {
    $("#loader").show();
    let idDocumento = $("#idDocumento").val();
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: APP_URL + '/bandeja/default/recepcionar',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        data: {idDocumento: idDocumento},
        success: function (response) {
            if (response) {
                if (response > 0) {
                    location.reload();
                }
                console.log(response);
            }

        }
    });
});