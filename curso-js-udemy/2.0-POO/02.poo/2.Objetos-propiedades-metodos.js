/**
 * Created by alejandro.chavez on 3/22/2018.
 */


var objeto = {

    nombre: '',
    edad: '',
    //Metodos, cuando incluimos dentro de un objecto una funcion
    descripcion: function () {
        console.log('su nombre es ' + this.nombre + " y tiene " + this.edad + " años")
    },
    saludo: function (mensaje) {
        console.log(mensaje)
    }

};

objeto.nombre = 'Manuel Alejandro';
objeto.edad = 27;
objeto.descripcion();
objeto.saludo("Hola mundo mi nombre es :" + objeto.nombre);


//creamos una nueva funcion
var myFunction = function (x) {

    return this.numero = x + 1;


};

//Instancioamos un nuevo objecto con la clase primitiva object

var object = new Object();

//Declaramos una propiedad al objeto instanciado
object.numero = 5;

//Se declara el resultado utilizando la funcion call , esta funcion se utliiza para llamar una funcion dentro de otra
var resultado = myFunction.call(object, 4);

console.log('Objecto aplicando call: ', resultado);


/**
 * Objetos primitvios
 */

var d = new Date();
console.log("Date:", d);

var y = d.getFullYear();
console.log("Full year:"  , y);



