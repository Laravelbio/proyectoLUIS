$(function() {
    
    $('#Region').on('change', EstadoFR);

});



function EstadoFR() {
    var id_region = $(this).val();
    //alert(id_estado);
    if (!id_region) {
        $('#Estado').html('<option selected value="">Seleccione una Opcion</option>');
    }
    //ajax
    $.get('/TicketNOC/api/Estado_FR/' + id_region, function(data) {
        //console.log(data);
        var html_select = '<option selected value="">Seleccione una Opcion</option>';
        if (data == "" || data == null) {
            $('#Estado').html('<option selected value="">Seleccione una Opcion</option>');
        } else {
            for (var i = 0; i < data.length; i++) {

                html_select += '<option  value="' + data[i].id + '">' + data[i].Estado + '</option>';
                //console.log(html_select);
                $('#Estado').html(html_select);

            }
        }
    });
}

