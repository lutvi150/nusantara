$(document).ready(function() {
    $("#btn-cari").click(function() {
        $(this).html("SEARCHING...").attr("disabled", "disabled");

        $.ajax({
            url: baseurl + 'status_order/search',
            type: 'POST',
            data: {keyword: $("#keyword").val()},
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                  e.overrideMimeType("application/json;charset=UTF-8");
                }
            },
            success: function(response) {
                $("#view").html(response.hasil);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.responseText);
            }
        });
    });
});