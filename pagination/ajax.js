//evitamos el comportamiento por defecto de los links
$(document).on("click", "a", function(e){
    e.preventDefault();
});

function paginate(offset, limit)
{
//obtenemos los posts via get con jQuery
    $.get("data.php/data.php/?offset=" + offset + "&limit=" + limit, function(data){
        if(data)
        {
            $html = "";
//parseamos el json
            json = JSON.parse(data);
//lo recorremos e insertamos en la variable $html
            for(datos in json.posts)
            {
                $html += "<div class='panel'>";
                $html += "<p>Id: " + json.posts[datos].id + "</p>";
                $html += "<p>Título: " + json.posts[datos].titulo + "</p>";
                $html += "<p>Autor: " + json.posts[datos].autor + "</p>";
                $html += "<p>Contenido: " + json.posts[datos].cuerpo + "</p>";
                $html += "</div>";
            }

//cargamos los posts en el div paginacion
            $(".paginacion").html($html);
//cargamos los links en el div links
            $(".links").html(json.links);
//hacemos una sencilla animacion
            $(document.body).animate({opacity: 0.3}, 400);
            $("html, body").animate({ scrollTop: 0 }, 400);
            $(document.body).animate({opacity: 1}, 400);
        }
    })
}

//al cargar la página llamamos a la función paginate
$(window).bind("load", function(){
    paginate();
});