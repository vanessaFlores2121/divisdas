//aqui creamos nuestro .js donde tenemos el el despliegue Registra un evento a un objeto en específico. El Objeto especifico puede ser un simple elemento en un archivo, el mismo documento

document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration:150,
        dist: 0,
        shift: 5,
        paddng: 5,
        numVisible: 5,
        indicators: true,
        noWrap: false
    });

});