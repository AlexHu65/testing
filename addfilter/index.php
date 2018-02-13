<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add filters</title>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="./js/addService.js"></script>

    </head>
    <body>
        <form action="send.php" onsubmit="submitForm();">
            <div class="form-group">
                <label for="service_l" class="col-sm-3 control-label">Service</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="service" name="service" maxlength="25" autocomplete="off" 
                           onkeypress="return addServiceEnter(event)"  />
                </div>
                <input type="button" value="Add" class="btn btn-info" onclick="addServices();" id="addService"  disabled />
                <input type="submit" value="Enviar">
            </div>    
        </form>

        <div class ="col-md-3">
            <div id="services">

                Services:
            </div>
        </div>
        <!--<div id="cargaexterna">
        <?php /*
          include './request.php';
         */ ?>

        </div>-->




        <script type="text/javascript" src="./js/addService.js"></script>
    </body>
</html>
