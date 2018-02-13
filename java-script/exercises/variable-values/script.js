/**
 * Created by alejandro.chavez on 7/17/2017.
 */

var variable1 = new Date(2009, 11, 25);
var variable2 = variable1;

//variable 1 obtiene el valor por referencia de variable2

variable2.setFullYear(2010, 11, 31);

alert(variable1);