/**
 * Created by alejandro.chavez on 7/24/2017.
 */

var facture = {
    empresa: {
        nombre: 'Developers asociados S.A. de C.V.',
        telefono: '4434295226',
        rfc: '4865HMNH64890'
    },
    //En notacion de puntos y json , los corchetes cuadrados simbolizan el inicio de un array
    productos: [
        //Cada elemento dl array, es separado por llaves y sus respectivos valores
        {descripcion: 'Diseno web', cantidad: 1, precio: 50.00},
        {descripcion: 'Marketing', cantidad: 1, precio: 30.00},
        {descripcion: 'Posicionamiento', cantidad: 1, precio: 40.00}
    ],
    informacion: {
        baseImponible: 0,
        total: 0,
        iva: 16,
        formaPago: 'contado'
    }


};

facture.calTotal = function () {
    for (var i = 0; i < this.productos.length; i++) {
        this.informacion.baseImponible += (this.productos[i].cantidad * this.productos[i].precio);

    }
    var ivatotal  = (1 + (this.informacion.iva/100));
    this.informacion.total = (this.informacion.baseImponible * ivatotal).toFixed(2);

};

facture.muestraTotal = function () {

    this.calTotal();
    alert('El total de la compra es: ' + this.informacion.total );

};

facture.muestraTotal();





