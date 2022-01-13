const { default: axios } = require("axios");
const { functions } = require("lodash");

(function ($) {
    "use strict";
    
    var buscadorArtesanos;
    const id = obtenerId()
    function obtenerId() {
        let url = window.location.pathname
        let indice = url.search("/")
        let url1 = url.slice(indice+1)
        let indice1 = url1.search("/")
        let id = url1.slice(indice1+1)
        return id
    }
    obtenerArtesanos(id)

    async function obtenerArtesanos (id) {
        await axios.get(`${window.location.origin}/api/buscador_artesanos/${id}`)   
        .then(respuesta => {
            buscadorArtesanos = respuesta.data
            console.log(buscadorArtesanos)
        }) 
    }

    $('#buscador_artesanos').on('keyup', function() {
        let buscar = this.value.toLowerCase()
        let artesanos = buscadorArtesanos;
        let artesanosFiltrados;
        let mostrarResultados = '';     

        artesanosFiltrados = artesanos.filter(
            (artesano) =>   artesano.name.toLowerCase().indexOf(buscar) !== -1
        ).slice(0, 10)
        
        artesanosFiltrados.forEach(artesanoFiltrado => {
            mostrarResultados += `
                <p>
                    <a target="_blank" href="/artesanos/${ artesanoFiltrado.id }">${ artesanoFiltrado.name } </a>
                </p>
            `            
        });

        if (buscar === '') {
            $('#mostrar_resultados').empty()        
        } else{
            $('#mostrar_resultados').empty().append(mostrarResultados)
    
        }
    })
})(jQuery);