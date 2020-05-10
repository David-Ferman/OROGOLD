 document.addEventListener("DOMContentLoaded", function(event) {
    modalOpen("inicio","Bienvenido");
  });

const email=document.getElementById('email');
const flotante=document.getElementById('flotante');
const reservaID=document.getElementById('reservaID');
const modal=document.getElementById('modal-contenedor');
const modalIcono=document.getElementById('im');
const mensajeM=document.getElementById('mensajeM');
const nombre=document.getElementById('nombre');
const contrasena=document.getElementById('contrasena');
const formulario=document.getElementById('formulario');
const error=document.getElementById('error');
email.addEventListener('input',function(e){
const correo=e.target.value;

const data=new FormData();
		data.append("idPrecio",correo);
		const xml=new XMLHttpRequest();
			xml.open("POST","ajax/cita.php",true);
			xml.send(data);
			xml.onreadystatechange=function(){
			if(this.status==200 && this.readyState==4){
				if(this.responseText=="unico"){
					error.textContent="correo valido";
					error.className="correcto";
				}else{
					error.textContent="correo ya existente";
					error.className="correcto";
				}
				if(correo==""){
					error.textContent="";
					error.classList.remove('correcto');
				} 
		        
}}
});
formulario.addEventListener('submit',function(e){
e.preventDefault();
const correo=email.value;
const nom=nombre.value;
const cont=contrasena.value;
if(correo=="" || nom=="" || cont==""){
modalOpen("error","Llena los campos");
}else{
const data2=new FormData();
data2.append("idPrecio",correo);
const xml2=new XMLHttpRequest();
xml2.open("POST","ajax/cita.php",true);
xml2.send(data2);
xml2.onreadystatechange=function(){
if(this.status==200 && this.readyState==4){
if(this.responseText=="unico"){
const data=new FormData();
data.append("email_reg",correo);
data.append("nombre",nom);
data.append("contrasena",cont);
const xml=new XMLHttpRequest();
xml.open("POST","ajax/cita.php",true);
xml.send(data);
xml.onreadystatechange=function(){
if(this.status==200 && this.readyState==4){
console.log(this.responseText); 
modalOpen("insertar","datos insertados");		        
}}
}else{
	modalOpen("error","Email ya existente");
} 
		        
}}


}

formulario.reset();
});

window.addEventListener("scroll",function(){
	flotante.style.transform="rotate("+window.pageYOffset+"deg)";
})

flotante.addEventListener('click', () => window.scrollTo({
  top: 0,
  behavior: 'smooth',
}));
reservaID.addEventListener('click',function(e){
e.preventDefault();
window.scrollTo({
  top: 0,
  behavior: 'smooth',
})
});

function modalOpen(imagen,texto){
	if(imagen=="insertar"){
		modalIcono.classList.add('fas','fa-check-circle');
	}else if(imagen=="error"){
		modalIcono.classList.add('fas', 'fa-exclamation');
	}if(imagen=="inicio"){
		modalIcono.classList.add('fas','fa-handshake');
	}

mensajeM.textContent=texto;
modal.classList.add('bg-active');
setTimeout(function(){
modal.classList.remove('bg-active');
modalIcono.classList.remove('fas','fa-check-circle','fas', 'fa-exclamation','fas','fa-handshake');
},4600);

}


let animado=document.getElementsByClassName('tarjeta');
let anima=document.getElementById('anima-reserva');

function scroll2(){
	let scrollTop=document.documentElement.scrollTop;


		let altura2=anima.offsetTop;
		if(altura2 - 500 < scrollTop){
            anima.style.opacity=1;
            anima.classList.add('mostrarDerecha'); 
		}else{
			anima.style.opacity=0;
            anima.classList.remove('mostrarDerecha'); 
		}


	for (var i = 0; i < animado.length ; i++) {
		let altura=animado[i].offsetTop;
		if(altura - 500 < scrollTop){
            animado[i].style.opacity=1;
            animado[i].classList.add('mostrarArriba'); 
		}else{
			animado[i].style.opacity=0;
            animado[i].classList.remove('mostrarArriba'); 
		}
	}
}
window.addEventListener('scroll',scroll2);