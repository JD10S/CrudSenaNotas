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
        if(documento.value.length == 10){
            alerta.style.display = 'none';
            boton.disabled = false;
        }else{
            alerta.innerHTML = "El número de documento no es valido";
        }
    }else{
        alerta.style.display = 'block';
        alerta.innerHTML = "Para enviar el formulario debes llenar todos los campos";
        boton.disabled = true; 
    }
}
function validarNota(e){
    if (Number(e.target.value) > 100){
        e.target.value = "100"; 
        e.target.classList.add('is-invalid');
        alerta.style.display = 'block';
        alerta.innerHTML = "La nota no puede ser mayor a 100";
    }else if(Number(e.target.value) < 20){
        e.target.value = "20";
        e.target.classList.add('is-invalid');
        alerta.style.display = 'block';
        alerta.innerHTML = "La nota no puede ser menor a 20";
    }else{
        e.target.classList.remove('is-invalid');
    }
    validar();
}
function validacionDocumento(e){
    if(e.target.value.length != 10){
        alerta.style.display = 'block';
        alerta.innerHTML = "Documento no valido";
        e.target.classList.add('is-invalid');
    }else{
        alerta.style.display = 'none';
        e.target.classList.remove('is-invalid');
        validar();
    }
}

nombre.addEventListener('keyup', validar); 
apellido.addEventListener('keyup', validar); 
documento.addEventListener('change', (e)=>validacionDocumento(e)); 
nota1.addEventListener('change', (e)=>validarNota(e)); 
nota2.addEventListener('change', (e)=>validarNota(e)); 
nota3.addEventListener('change', (e)=>validarNota(e)); 