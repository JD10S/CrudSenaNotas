const boton = document.getElementById('botonsubmit');
const nombre = document.getElementById('nombre');
const apellido = document.getElementById('apellido');
const documento = document.getElementById('documento'); 
const nota1 = document.getElementById('nota1');
const nota2 = document.getElementById('nota2');
const nota3 = document.getElementById('nota3');
const alerta = document.getElementById('aviso');

function validar(){
    if(nombre.value !== "" && apellido.value !== "" && documento.value !== "" && nota1.value !== "" && nota2.value !== "" && nota3.value !== "" ){
        alerta.style.display = 'none';
        boton.disabled = false;
    }else{
        alerta.style.display = 'block';
        alerta.innerHTML = "Para enviar el formulario debes llenar todos los campos";
        boton.disabled = true; 
    }
}

nombre.addEventListener('keyup', validar); 
apellido.addEventListener('keyup', validar); 
documento.addEventListener('keyup', validar); 
nota1.addEventListener('keyup', validar); 
nota2.addEventListener('keyup', validar); 
nota3.addEventListener('keyup', validar); 
