$(document).ready(function(){
    $('#btn-confirmar').click(function(e) {
        e.preventDefault();
        enviarFormulario($('#form-inscripcion'));
    })   
})

function enviarFormulario(formulario) {
    console.log(formulario);
    
    // var button = $('#' + action);
    // var form = button.parent().parent();
    // var output = button.next();
    // var button_copy = button.next().next();

    // $.ajax({
    //     type: 'POST',
    //     url: action,
    //     contentType: 'application/json',
    //     data: JSON.stringify(form.serializeArray()),
    //     dataType: 'json',
    //     success: function(response) {
    //         output.html('<pre class="query">' + response + '</pre>');
    //         output.show();
    //         button_copy.show();
    //     }
    // });
}