/*
1.-Definir los elementos
2.-Inicializar los elementos
3.-EL jugador en turno selecciona un acasilla
4.-Validar si hay algún ganador
    Si hay algún ganador el juego termina
    Si no hay algún ganador, cambiar el turno al jugador. Regresar al punto 3

    Sustantivo = Variable
    Verbo o Accion = Funcion ()
*/

var arr = [1, 2, 3];


function validar() {
    var n1 = $('#n_1').val();
    var n2 = $('#n_2').val();
    var n3 = $('#n_3').val();
    var n4 = $('#n_4').val();
    var n5 = $('#n_5').val();
    var entrada = [n1, n2, n3, n4, n5];
    var salida = '';
    for (let i = 0; i < entrada.length; i++) {
        for (let j = 0; j < arr.length; j++) {
            if (entrada[i] == arr[j]) {
                salida += '' + arr[j] + ', ';
            }
        }
    }
    if (salida) {
        $('#txt_validacion').html("Numeros hacertados: " + salida);
    } else {
        $('#txt_validacion').html("No hacerto nungun numero");
    }

}