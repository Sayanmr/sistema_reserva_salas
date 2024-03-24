document.addEventListener('DOMContentLoaded', function() {
    const asientos = document.getElementById('asientos');
    const numAsientos = 10;
    let asientosReservados = [];

    // Función para crear los asientos
    function crearAsientos() {
        for (let i = 1; i <= numAsientos; i++) {
            const silla = document.createElement('div');
            silla.classList.add('silla');
            silla.dataset.id = i;
            silla.textContent = i;
            silla.addEventListener('click', function() {
                reservarAsiento(i);
            });
            asientos.appendChild(silla);
        }
    }

    // Función para reservar un asiento
    function reservarAsiento(id) {
        if (!asientosReservados.includes(id)) {
            asientosReservados.push(id);
            actualizarEstadoAsiento(id);
            alert('¡Asiento ' + id + ' reservado!');
        } else {
            alert('¡El asiento ' + id + ' ya está reservado!');
        }
    }

    // Función para actualizar el estado visual de un asiento
    function actualizarEstadoAsiento(id) {
        const silla = document.querySelector('.silla[data-id="' + id + '"]');
        silla.classList.add('reservada');
    }

    // Inicializar la página con los asientos disponibles
    crearAsientos();
});