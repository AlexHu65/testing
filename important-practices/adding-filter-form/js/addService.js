/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var nextinput = 0;
var service = Array();

$(document).ready(function () {
    /* Im use this function to disable or enable the add button*/

    $("#service").on("keyup", function (event) {

        var lengthField = $("#service").val();

        if (lengthField != '') {
            $("#addService").removeAttr("disabled");

        } else {
            $("#addService").attr("disabled", "disabled");
        }
    });

    /* window.onbeforeunload = confirmExit;
     function confirmExit()
     {
     return $.post('request.php', {reload: 1}, function (htmlexterno) {
     $("#cargaexterna").html(htmlexterno);
     });
     }*/
});


//Function is used to add a filter when the client use the button enter
function addServiceEnter(e) {
    x = $('#service').val();

    if (e.keyCode == 13 && x != '')
    {
        addServices();
        return false;
    }
}

function addServices(val) {
    $("#addService").attr("disabled", "disabled");
    $("#request_http").hide();
    if (val == null || val == '')
    {
        var value = checkBannedWords($('#service').val().trim());
    } else
    {
        var value = checkBannedWords(val);
    }

    if (value == '')
    {
        alert('We have a problem with your filter, we can\'t process this filter because you\'re using a banned word');
        $('#info').val('');
    } else
    {
        var id = "inputArea_" + nextinput;
        var id2 = "remove_" + nextinput;
        var removeButton = "<a href='#' onclick=\"removeInputs('" + id + "', '" + id2 + "','" + value + "');\" >   <img height='16px' width='16px' src='img/close.png'></a> ";
        var div = "<li class='input-service1' id='" + id + "'><input type='text' value='" + value + "' id=ser_" + nextinput + " name=ser_" + nextinput + " class='input-service' readonly='readonly' /> " + removeButton + " </li>";
        $("#services").append(div);
        $('#service').val('');
        showServices(value);
        nextinput++;
    }
}

function showServices(service) {

    $.post('request.php', {service2: service}, function (htmlexterno) {
        $("#cargaexterna").html(htmlexterno);
    });

}


function submitForm() {

    //alert('Se envio el formulario');

    if (nextinput != 0) {
        for ($i = 0; $i < nextinput; $i++) {

            if ($("#ser_" + i).length > 0 && $("#ser_" + i).is(':visible'))
            {
                services[i] = checkBannedWords($('#ser_' + i).val());
            }

        }
    }

}



//Function is used to clear the input text fields
function checkBannedWords(wordToEval)
{
    return wordToEval.replace(/[*'";\\^$#]|<script[^>]*\>|<\/script[^>]*>?|eval/g, '');
}

//Function is used to remove the input of filters
function removeInputs(id, id2, value)
{
    $("#" + id).remove();
    $("#" + id2).remove();

    $.post('request.php', {remove: value}, function (htmlexterno) {
        $("#cargaexterna").html(htmlexterno);
    });


}


