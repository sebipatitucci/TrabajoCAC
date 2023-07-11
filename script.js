const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const correo = document.getElementById("correo");
const cantidad = document.getElementById("cantidad");
const categoria = document.getElementById("options");
const resultado = document.getElementById("resultado");
const btnBorrar = document.getElementById("boton-borrar");
const btnResumen = document.getElementById("boton-resumen");
const msjError = document.getElementById("error");
const cerrarMsj = document.getElementById("cerrar");
const ticket = 200;

btnResumen.addEventListener("click", () => {
    if(categoria.value == "estudiante"){
        cantidad.value == parseInt(cantidad.value)
        if(cantidad.value > 0 && nombre.value != "" && apellido.value != "" && correo.value != ""){
            let total = cantidad.value * ((ticket * 20)/100);
            resultado.innerHTML = total;
            cantidad.value = "";
            msjError.style.display = "none"
        }else{
            msjError.style.display = "block"
            cantidad.value = "";
        }
    }
    else if(categoria.value == "trainee"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0 && nombre.value != "" && apellido.value != "" && correo.value != ""){
            let total = cantidad.value * ((ticket * 50)/100);
            resultado.innerHTML = total;
            cantidad.value = "";
            msjError.style.display = "none"
        }else{
            msjError.style.display = "block"
            cantidad.value = "";
        }
    }
    else if(categoria.value == "junior"){
        cantidad.value = parseInt(cantidad.value)
        if(cantidad.value > 0 && nombre.value != "" && apellido.value != "" && correo.value != ""){
            let total = cantidad.value * ((ticket * 85)/100);
            resultado.innerHTML = total;
            cantidad.value = "";
            msjError.style.display = "none"
        }else{
            msjError.style.display = "block"
            cantidad.value = "";
        }
    }
})

btnBorrar.addEventListener("click", () => {
    nombre.value = "";
    apellido.value = "";
    correo.value = "";
    cantidad.value = "";
    resultado.innerHTML = "";
    
})

cerrarMsj.addEventListener("click", ()=>{
    msjError.style.display = "none"
})
