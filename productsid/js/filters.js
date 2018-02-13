/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var nextinput = 0;
var services = {};



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

    $("#searchLog").on("keyup", function (event) {

        var lengthField = $("#searchLog").val();

        if (lengthField != '') {
            $("#datepickerStart").attr("disabled", "disabled");
            $("#datepickerFinal").attr("disabled", "disabled");
            $("#service").attr("disabled", "disabled");
        } else {

            $("#datepickerStart").removeAttr("disabled");
            $("#datepickerFinal").removeAttr("disabled");
            $("#service").removeAttr("disabled");

        }
    });

});

window.onload = function () {
    document.requestLogs.user.focus();
    document.requestLogs.addEventListener('submit', validate_form);
};

//Function add a filter when the client use the button enter
function addServiceEnter(e) {
    x = $('#service').val();

    if (e.keyCode == 13 && x != '')
    {
        addServices();
        return false;
    }
}

function validate_form(evObject) {

    evObject.preventDefault();
    var allClean = true;
    var formLogs = document.requestLogs;

    for (var i = 0; i < formLogs.length; i++) {

        if (formLogs[i].name == 'user' || formLogs[i].name == 'pass') {

            if (formLogs[i].value == null || formLogs[i].value.length == 0 || /^\s*$/.test(formLogs[i].value)) {

                var input = formLogs[i].name;
                var upperInput = input.toUpperCase();
                alert(upperInput + ' must not be null or empty');
                allClean = false;
                break;
            }
        }

        if (valuePartner() == 0) {
            alert('Please choose a partner');
            allClean = false;
            break;
        }

        if (valueEnvironment() == 0) {
            alert('Please choose an environment');
            allClean = false;
            break;
        }
    }

    if (allClean == true) {

        formLogs.submit();
    }
}

function valuePartner() {

    var inputPartner = document.getElementById("partner");
    var valueInput = inputPartner.options[inputPartner.selectedIndex].value;
    return valueInput;

}

function valueEnvironment() {
    var inputEnvironment = document.getElementById("enviroment");
    var valueInput = inputEnvironment.options[inputEnvironment.selectedIndex].value;
    return valueInput;
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
        var removeButton = "<a  href='#' onclick=\"removeInputs('" + id + "', '" + id2 + "','" + value + "');\" > <span class='glyphicon glyphicon-remove'></span>";
        var div = "<li style='list-style:none; display: inline;' class='input-service1' id='" + id + "'><input  type='text' value='" + value + "' id=ser_" + nextinput + " name=ser_" + nextinput + " class='input-service' readonly='readonly' /> " + removeButton + " </li>";

        $("#services").append(div);
        $('#service').val('');

        nextinput++;
    }
}

function saveFilters() {


    if (nextinput >= 0) {

        for (i = 0; i < nextinput; i++) {
            if ($("#ser_" + i).length > 0 && $("#ser_" + i).is(':visible'))
            {
                //Fill the filters array from the input #ser
                services[i] = $('#ser_' + i).val();
            }
        }

        var capsuleJson = JSON.stringify(services);
        document.getElementById('filters').value = capsuleJson;
    }
}

//Function is used to clear the input text fields
function checkBannedWords(wordToEval)
{
    return wordToEval.replace(/[*'";\\^$#]|<script[^>]*\>|<\/script[^>]*>?|eval/g, '');
}

//Function is used to remove the input of filters
function removeInputs(id, id2)
{
    $("#" + id).remove();
    $("#" + id2).remove();
}






















