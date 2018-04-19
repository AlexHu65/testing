/**
 * Created by alejandro.chavez on 5/23/2017.
 */

// Ejericio de arrays
/*var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

var i = 0;
for (i; i <= months.length; i++) {
    console.log(months[i]);

    if (months[i] == 'Enero') {
        console.log('SE ENCONTRO ENERO');
        break;
    }

}*/

//Ejercicio de control de flujos

var mostrar = false;
var mensajeUsuario = true;

if(!mostrar && mensajeUsuario){
    console.log('Es la primera vez que se muestra el mensaje');
}


var numero1 = 5;
var numero2 = 8;

if(numero1 < numero2) {
    console.log("numero1 no es mayor que numero2");
}
if(numero2 > 0) {
    console.log("numero2 es positivo");
}
if(numero1 < 0 || numero1 !=0) {
    console.log("numero1 es negativo o distinto de cero");
}
if(++numero1 <= numero2) {
    console.log("Incrementar en 1 unidad el valor de numero1 no lo hace mayor o igual que numero2 y el numero incrementado es " + numero1 );
}


// Inicia factorial
var numero = prompt('Introduce un numero para sacar factorial');
var resultado = 1;


for(i =1; i <= numero; i++){
    resultado *= i;
}

console.log('El factorial de ' + numero + ' es: ' + resultado);


