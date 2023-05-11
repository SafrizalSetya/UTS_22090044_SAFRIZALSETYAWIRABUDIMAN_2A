$(document).ready(function() {
    $("#btnsearch").click(function(e) {
        e.preventDefault();

        var txtInput = $("#sichInv").val();
        $("#infoinvarccr").html("Nama Anda: " + txtInput);

        $.ajax({
            type: "POST",
            url: "/assets/scripts/ajax/getcurl.php",
            success: function (response) {
                $("#infoinvarccr").append("<br/>Response:<br/>" + response);
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
            }
        });
    });
});
