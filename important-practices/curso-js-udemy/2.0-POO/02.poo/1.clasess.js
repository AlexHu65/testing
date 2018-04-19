/**
 * Created by alejandro.chavez on 3/22/2018.
 */

/*Clases primitivas:
 example: var nombre = new Class();*/
//Clases string

//Se declara la clase primitiva , son funciones contructuros
var string = new String("This is a string");
console.log('string object: ', string);

//Clase number

var number = new Number(350);
console.log('number object: ', number);

//Clase booleana

var boolean = new Boolean(false);
console.log('boolean object: ', boolean);


/**
 * Clases compuestas
 */

//Clase array

var array = new Array("rojo", "amarillo", "verde");
console.log("array object: ", array);

//Clase object

var object = new Object(
    {
        nombre: 'Alejandro',
        edad: 22,

    }
);

console.log("object: ", object);

/**
 * Clases constructoras
 */

function persona() {
    this.nombre;
    this.edad;
}

var yo = new persona();

yo.nombre = 'Manuel Alejandro';
yo.edad = 27;

console.log("yo objeto", yo);


//Clases con parametros

function Animales(nombre, raza) {
    this.nombre = nombre;
    this.raza = raza;

}

var mascota = new Animales("Perro", "Canino");

console.log("Mascota ", mascota);



