var input = document.getElementsByClassName('formularioInput');
for (var i = 0; i < input.length; i++) {
    input[i].addEventListener('keyup', function() {
        if(this.value.length >= 1) {
            this.nextElementSibling.classList.add('fijar')
        }else{
            this.nextElementSibling.classList.remove('fijar')
        }
    });
}
/*album*/
const grid = new Muuri('.grid', {
	layout: {
		rounding: false
	}
});

// Agregamos listener para las imagenes
const overlay = document.getElementById('overlay');
document.querySelectorAll('.grid .item img').forEach((elemento) => {
    elemento.addEventListener('click', () => {
        const ruta = elemento.getAttribute('src');
        const descripcion = elemento.parentNode.parentNode.dataset.descripcion;

        overlay.classList.add('activo');
        document.querySelector('#overlay img').src = ruta;
        document.querySelector('#overlay .descripcion').innerHTML = descripcion;
    });
});

// Eventlistener del boton de cerrar
document.querySelector('#btn-cerrar-popup').addEventListener('click', () => {
    overlay.classList.remove('activo');
});

// Eventlistener del overlay
overlay.addEventListener('click', (evento) => {
    evento.target.id === 'overlay' ? overlay.classList.remove('activo') : '';
});

