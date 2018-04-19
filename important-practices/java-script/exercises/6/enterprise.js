var factura = {
    empresa: {
        nombre: '',
        direccion: 'Matanguaran',
        telefono: '',
        rfc: ''
    },
    cliente: {
        nombre: '',
        direcicon: '',
        telefono: '',
        ide: ''
    },

    elementos: [
        {descripcion: "Producto 1", quantity: 2, precio: 10},
        {descripcion: "Producto 2", quantity: 1, precio: 20},
        {descripcion: "Producto 3", quantity: 5, precio: 50}
    ],

    informacion: {
        baseImponible: 0,
        iva: 16,
        total: 0,
        formaPago: "contado"
    }

};

factura.calcularTotal = function () {

    for (var i = 0; i < this.elementos.length; i++) {
        this.informacion.baseImponible += (this.elementos[i].quantity * this.elementos[i].precio);
    }
    console.log(this.informacion.baseImponible);
    var importeIva = (this.informacion.iva / 100);
    this.informacion.total = this.informacion.baseImponible + (this.informacion.baseImponible * importeIva.toFixed(2));

};

factura.mostrarTotal = function () {
    this.calcularTotal();
    console.log("TOTAL A PAGAR: " + this.informacion.total);

};


factura.mostrarTotal();

