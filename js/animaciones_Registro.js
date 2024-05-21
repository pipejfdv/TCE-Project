var frame = document.getElementById("frame");
var contenido = document.getElementById("contenido");
var z = document.getElementById('elegir');
function Login(){
    contenido.classList.remove("tamanoContenido");
    frame.classList.remove("tamano");
    z.style.left="0px";
}

function Registrarme(){
    frame.classList.add("tamano");
    contenido.classList.add("tamanoContenido");
    z.style.left="120px";
}