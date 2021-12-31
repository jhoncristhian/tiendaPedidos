window.onload = function () {
	
}

//variables
var inputSearch = document.getElementById("buscar");
var cond=true;
const btodo = document.getElementById('btodo');
const boferta = document.getElementById('boferta');

//variables de busqueda
const txtbuscar = document.querySelector('#buscar');
const blupa = document.querySelector('#lupa');
const resultado = document.querySelector('#main');

const productos =[  {nombre:'Barbie Angie', valor:12},
					{nombre:'Ranch', valor:20},
					{nombre:'Peluches Mascotas', valor:20},
					{nombre:'Barbie Beaty', valor:23},
					{nombre:'SuperPeluches', valor:17},
					{nombre:'PJMASKS', valor:24},
					{nombre:'Pow Rescue', valor:36},
					{nombre:'Pow Rescue 2', valor:23},
					{nombre:'Dog Friends', valor:22},
					{nombre:'Heroes', valor:18},
					{nombre:'Punnys', valor:12},
					{nombre:'Rescue Center', valor:12},
					{nombre:'Dog Team', valor:13},
					{nombre:'Dog Park', valor:12},
					{nombre:'LifeGuard Pups', valor:15},
					{nombre:'Slide Car', valor:12},
					{nombre:'Angry Birds', valor:12},
					{nombre:'Bingo Neo', valor:18},
				];

//eventos
btodo.addEventListener('click',function () {
	
	cambiaColor(cond);
	cond=true;
	window.location.reload();
});

boferta.addEventListener('click',function () {
	
	cambiaColor(cond);
	cond=false;

});

//metodo de busqueda
const filtrar = () => {
	const filtrarProductos = [];
	resultado.innerHTML='';
	let texto = txtbuscar.value.toLowerCase();
	for (let producto of productos) {
		let nombre = producto.nombre.toLowerCase();
		if (nombre.indexOf(texto) != -1) {
			filtrarProductos.push(producto);
			resultado.innerHTML+=`<div>Nombre:${producto.nombre} - precio:${producto.valor}</div>`;
		}
	}
	if (resultado.innerHTML=='') {
		resultado.innerHTML+=`<div>Producto no encontrado</div>`;
		setTimeout(function(){window.location.reload()},6000);
	}
	resultado.innerHTML+=`<a id='bregresar' href='./'>regresar</a>`;
}



blupa.addEventListener('click',filtrar);
txtbuscar.addEventListener('keyup',filtrar);

 
//funciones


function cambiaColor(a) {
	if (a) {
		boferta.style.backgroundColor="#4CAF50";
		boferta.style.color='white';

		btodo.style.backgroundColor="white";
		btodo.style.color='black';
	}else{
		btodo.style.backgroundColor="#4CAF50";
		btodo.style.color='white';

		boferta.style.backgroundColor="white";
		boferta.style.color='black';
	}
}