function ajax(){


    const http = new XMLHttpRequest();
    const url = 'http://artesanos.test/catalogo/productos';

    http.onreadystatechange = function(){
        if(this.readyState == 3 && this.status == 200){

            let productos = JSON.parse(this.responseText)

            console.log(productos)

            productos.forEach(producto => {
                let filas = `
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="storage/${producto.imagenes[0].url}" alt="IMG-PRODUCT">
                            <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-producto="">
                                Vista Rápida
                            </a>
                        </div>
        
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    ${producto.nombre}
                                </a>
        
                                <span class="stext-105 cl3">
                                    <i>S/. ${producto.precio} </i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`
        
                $('#filas-producto').append(filas)
                
            });
        }
    }

    http.open("GET", url);
    http.send();

}

document.getElementById("ver-mas").addEventListener("click", function(){
    ajax();
});