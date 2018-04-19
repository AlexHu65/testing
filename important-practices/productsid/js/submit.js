/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#requestLogs').submit(function (e) {

    e.preventDefault(); // Prevent Default Submission

    $.ajax({
        url: '/logsmanager/show/',
        type: 'POST',
        data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
            .done(function (data) {
                $('#form-content').fadeOut('slow', function () {
                    $('#form-content').fadeIn('slow').html(data);
                });
            })
            .fail(function () {
                alert('Ajax Submit Failed ...');
            });
});