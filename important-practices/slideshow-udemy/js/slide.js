/**
 * Created by alejandro.chavez on 4/17/2018.
 */


var p = {

    paginacion: document.querySelectorAll("#paginacion li"),
    item: 0,
    cajaSlide: document.querySelector("#slide ul"),
    //flechas: document.querySelectorAll(".flechas"),
    cantidadImg: document.querySelectorAll("#slide ul li").length,
    indice: 1,
    animationSlide: "slide",
    imgSlide: document.querySelectorAll("#slide ul li"),
    avanzar: document.querySelector("#slide #avanzar"),
    retroceder: document.querySelector("#slide #retroceder"),
    intervalo: 3000,
    formatLoop: false

};

var m = {

    inicioSlide: function () {

        for (var i = 0; i < p.paginacion.length; i++) {
            p.paginacion[i].addEventListener("click", m.paginacionSlide)
        }

        /*for (var i = 0; i < p.flechas.length; i++) {*/

        // console.log(p.flechas[i]);

        //   p.flechas[i].addEventListener("click", m.paginacionFlecha);

        // }

        p.avanzar.addEventListener("click", m.avanzar);
        p.retroceder.addEventListener("click", m.retroceder);
        m.intervalo();

    },

    paginacionSlide: function (item) {

        //Acceder al elemento del dom que le estas dando click
        p.item = item.target.parentNode.getAttribute("item") - 1;
        m.movimientoSlide(p.item);

    },

    /*paginacionFlecha: function (item) {

     if (item.target.parentNode.getAttribute("id") == 'avanzar') {
     //  console.log('totimg: ', p.cantidadImg);
     //  console.log('numero de img: ', p.indice);

     if (p.cantidadImg > p.indice) {
     m.avanzar();

     }
     } else {
     m.retroceder();


     }
     },*/

    avanzar: function () {


        /* p.cajaSlide.style.left = (p.indice ) * -100 + "%";
         p.indice++;*/

        if (p.item == p.imgSlide.length - 1) {
            p.item = 0;
        } else {
            p.item++;

        }
        m.movimientoSlide(p.item);


    },

    retroceder: function () {

        if (p.item == 0) {
            p.item = p.imgSlide.length - 1;
        } else {

            p.item--;

        }
        m.movimientoSlide(p.item);


        /* if (p.indice > 1) {
         p.indice--;
         p.cajaSlide.style.left = (p.indice - 1 ) * -100 + "%";
         }*/


    },

    intervalo: function () {

        setInterval(function () {

            if (p.formatLoop) {
                p.formatLoop = false;
            } else {

                m.avanzar();

            }


        }, p.intervalo);


    },

    movimientoSlide: function (item) {

        p.formatLoop = true;

        p.indice = item + 1;
        p.cajaSlide.style.left = item * -30 + "%";

        for (var i = 0; i < p.paginacion.length; i++) {

            p.paginacion[i].style.opacity = .5;
        }

        p.paginacion[item].style.opacity = 1;

        if (p.animationSlide == "slide") {
            p.cajaSlide.style.transition = ".7s left ease-in-out";

        }

        if (p.animationSlide == "fade") {
            p.imgSlide[item].style.opacity = 0;

            setTimeout(function () {
                p.imgSlide[item].style.transition = ".7s opacity ease-in-out";

                p.imgSlide[item].style.opacity = 1;
            }, 50);

        }
    }

};


m.inicioSlide();