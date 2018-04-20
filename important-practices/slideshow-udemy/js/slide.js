/**
 * Created by alejandro.chavez on 4/17/2018.
 */


var p = {

    paginacion: document.querySelectorAll("#paginacion li"),
    item: 0,
    cajaSlide: document.querySelector("#slide ul"),
    flechas: document.querySelectorAll(".flechas"),
    cantidadImg: document.querySelectorAll("#slide ul li").length,
    indice: 1

};

var m = {

        inicioSlide: function () {

            for (var i = 0; i < p.paginacion.length; i++) {
                p.paginacion[i].addEventListener("click", m.paginacionSlide)
            }

            for (var i = 0; i < p.flechas.length; i++) {

                console.log(p.flechas[i]);

                p.flechas[i].addEventListener("click", m.paginacionFlecha);

            }

        },

        paginacionSlide: function (item) {

            //Acceder al elemento del dom que le estas dando click
            p.item = item.target.parentNode.getAttribute("item") - 1;
            m.movimientoSlide(p.item);

        },

        paginacionFlecha: function (item) {

            if (item.target.parentNode.getAttribute("id") == 'avanzar') {
                console.log('totimg: ', p.cantidadImg);
                console.log('numero de img: ', p.indice);

                if (p.cantidadImg > p.indice) {
                    m.avanzar();

                }
            } else {
                m.retroceder();


            }
        },

        avanzar: function () {

            p.cajaSlide.style.left = (p.indice ) * -100 + "%";
            p.indice++;


        },

        retroceder: function () {

            if (p.indice > 1) {
                p.indice--;
                p.cajaSlide.style.left = (p.indice - 1 ) * -100 + "%";
            }


        },

        movimientoSlide: function (item) {

            p.indice = item + 1;
            p.cajaSlide.style.left = item * -100 + "%";
        }

    }
    ;


m.inicioSlide();