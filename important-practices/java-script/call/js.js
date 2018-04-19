/**
 * Created by alejandro.chavez on 7/24/2017.
 */

//Creamos la funcion para calcular
function miFuncion(x) {

    return this.numero + x;

}

//Declaramos el objeto
var elObjeto = new Object();

//Seteamos la propiedad numero, en este caso 5
elObjeto.numero = 5;


var resultado = miFuncion.call(elObjeto, 4);

alert(resultado);