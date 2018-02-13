/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('#reg-form').submit(function (e) {

    function validate() {
        //default value valid
        var valid = true;
        //select the value of the input
        var input = $('#lname').val();

        //validation of the length value
        if (input.length == 0) {
            alert('invalid value');

            valid = false;
        }

        return valid;
    }

    e.preventDefault(); // Prevent Default Submission / Inputs prevent default

    if (validate()) {

        $.ajax({
            url: 'submit.php',
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
    }
});






