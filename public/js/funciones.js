$(document).ready(function(){

    $('#btn-confirmar').click(function(e) {
        e.preventDefault();
        enviarFormulario($('#form-inscripcion'));
    })   
})

function enviarFormulario(formulario) {
    var base_url = window.location.href;    
    $.ajax({
        type: 'POST',
        url: base_url + 'index.php/home/save_form',
        contentType: 'application/json',
        data: JSON.stringify(formulario.serializeArray()),
        dataType: 'json',
        success: function(response) {
            console.log(response);
        }
    });
}