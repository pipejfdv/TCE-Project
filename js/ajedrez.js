// traer elemento del html//
var T = document.getElementById("tablero_Ajedrez");
//dar un contexto de la imagen o tablero//
var papel = T.getContext("2d");
//ruta de la imagen//
var mapa = "/imagenes/juegos/ajedrez/tablero_Ajedrez.png"

//-------------cargar imagen tablero-------------//
//contruir el objeto y la propiedad Image ya tiene sus caracteristicas
var fondo = new Image();
fondo.src = mapa;
//evento de carga de la imagen para que no tenga errores//
fondo.addEventListener("load", posicionar_Tablero);


//función de posicionamiento de imagen//
function posicionar_Tablero()
{
    //ajustar tamaño del tablero para dar tamaño a las casillas//    
    papel.drawImage(fondo, 0,0);
    //crear casillas apartir de la imagen tamaño
    var tamanoCasilla = fondo.width / 8;
    //ciclo de casillas
    for(var fila = 0; fila <8; fila ++){
        for (var columna = 0; columna <8; columna ++){
            var x = columna * tamanoCasilla;
            var y = fila * tamanoCasilla;
        
    
    //escoger los colores determinando pares
    var color_Casilla = (fila + columna)%2 === 0 ? "red" : "orange";
    //dibujar la casillas en el canvas
    papel.fillStyle = color_Casilla;
    papel.fillRect(x,y, tamanoCasilla, tamanoCasilla);
        }
    }
}
