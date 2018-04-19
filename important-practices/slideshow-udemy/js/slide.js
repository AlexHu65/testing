/**
 * Created by alejandro.chavez on 4/17/2018.
 */


var p = {

    paginacion: document.querySelectorAll("#paginacion li"),
    item: 0,
    cajaSlide: document.querySelector("#slide ul"),
    flecha: document.querySelectorAll(".flechas"),
    cantidadImg: document.querySelectorAll("#slide ul li").length + 1,

};

var m = {

        inicioSlide: function () {

            for (var i = 0; i < p.paginacion.length; i++) {
                p.paginacion[i].addEventListener("click", m.paginacionSlide)
            }

            for (var i = 0; i < p.flecha.length; i++) {

                p.flecha[i].addEventListener("click", m.paginacionFlecha)

            }

        },

        paginacionSlide: function (item) {

            //Acceder al elemento del dom que le estas dando click
            p.item = item.target.parentNode.getAttribute("item") - 1;
            m.movimientoSlide(p.item);

        },

        paginacionFlecha: function (item) {

            if (item.target.parentNode.getAttribute("id") == 'avanzar') {
                m.avanzar();
            } else {
                m.retroceder();

            }
        },


        avanzar: function () {

            if (p.item == 0) {
                p.item++;
            }



        },

        retroceder: function () {


        },

        movimientoSlide: function (item) {

            p.cajaSlide.style.left = item * -100 + "%";
        }

    }
    ;


m.inicioSlide();