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

class Juego {
    jugadorActual;
    casillas;
    constructor() {
        this.jugadorActual = 'X';
        this.casillas = ['', '', '', '', '', '', '', '', ''];
    }

    seleccionaCasilla(posicion) {
        if (this.casillas[posicion]) {
            return false
        } else {
            this.casillas[posicion] = this.jugadorActual;
            return true
        }
    }

    juegoGanado() {
        if (this.casillas[0] && this.casillas[0] == this.casillas[1] && this.casillas[1] == this.casillas[2]) {
            return true;
        }
        if (this.casillas[3] && this.casillas[3] == this.casillas[4] && this.casillas[4] == this.casillas[5]) {
            return true;
        }
        if (this.casillas[6] && this.casillas[6] == this.casillas[7] && this.casillas[7] == this.casillas[8]) {
            return true;
        }
        if (this.casillas[0] && this.casillas[0] == this.casillas[3] && this.casillas[3] == this.casillas[6]) {
            return true;
        }
        if (this.casillas[1] && this.casillas[1] == this.casillas[4] && this.casillas[4] == this.casillas[7]) {
            return true;
        }
        if (this.casillas[2] && this.casillas[2] == this.casillas[5] && this.casillas[5] == this.casillas[8]) {
            return true;
        }
        if (this.casillas[0] && this.casillas[0] == this.casillas[4] && this.casillas[4] == this.casillas[8]) {
            return true;
        }
        if (this.casillas[2] && this.casillas[2] == this.casillas[4] && this.casillas[4] == this.casillas[6]) {
            return true;
        }
        return false;
    }
    cambiarTurno() {
        if (this.jugadorActual == 'X') {
            this.jugadorActual = 'O'
        } else {
            this.jugadorActual = 'X'
        }
    }
}

var juego = null;

function iniciar() {
    juego = new Juego();
    actualizarPantalla();
}

function actualizarPantalla() {
    $('#td0').html(juego.casillas[0]);
    $('#td1').html(juego.casillas[1]);
    $('#td2').html(juego.casillas[2]);
    $('#td3').html(juego.casillas[3]);
    $('#td4').html(juego.casillas[4]);
    $('#td5').html(juego.casillas[5]);
    $('#td6').html(juego.casillas[6]);
    $('#td7').html(juego.casillas[7]);
    $('#td8').html(juego.casillas[8]);
    $('#salida').html('Turno del jugador ' + juego.jugadorActual);
}

function selecciona(posicion) {

    if (juego.juegoGanado()) {
        return;
    }

    if (juego.seleccionaCasilla(posicion) == false) {
        return;
    }
    actualizarPantalla();

    if (juego.juegoGanado()) {
        $('#salida').html('El ganador es el jugador ' + juego.jugadorActual)
        return;
    }

    juego.cambiarTurno();
    actualizarPantalla();
}