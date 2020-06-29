$(document).ready(function(){
    $('#btn-confirmar').click(function(e) {
        e.preventDefault();
        enviarFormulario();
    })   
})

function enviarFormulario() {
    var base_url = window.location.href; 
    // console.log($('#form-inscripcion'), typeof());
    
    $.ajax({
        type: 'POST',
        url: base_url + 'index.php/home/save_form',
        contentType: 'application/json',
        // data: JSON.stringify(formulario.serializeArray()),
        data: $('#form-inscripcion').serialize(),
        dataType: 'html',
        success: function(response) {
            console.log(response);
        }
    });
}