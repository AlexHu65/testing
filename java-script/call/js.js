/**
 * Created by alejandro.chavez on 7/24/2017.
 */

//Creamos la funcion para calcular
function miFuncion(x) {
    //Declaramos la refeencia a 'elObjeto', se utiliza la palabra reservada this, para referirnos a la PROPIEDAD numero del objeto
    //NOTA: this.numero hace referencia al valor del objeto
    return this.numero + x;

}

//Declaramos el objeto
var elObjeto = new Object();

//Seteamos la propiedad numero, en este caso 5
elObjeto.numero = 5;

//Guardamos el resultado en memoria, los parametros del metodo call ,
// son el objeto y el parametro de la funcion a la que se hace referencia, en este caso a 'miFuncion''
//En resumen , con call , accedemos al objeto a traves de la funcion, se puede decir que es una herencia por referencia
var resultado = miFuncion.call(elObjeto, 4);

alert(resultado);