 const usuario = document.getElementById("Usuario");
 const contraseña = document.getElementById("Contraseña");
 const btnEnviar = document.getElementById("enviar");

 document.addEventListener('DOMContentLoaded', function() {
    const usuario = document.getElementById("Usuario");
    const contraseña = document.getElementById("Contraseña");
    const btnEnviar = document.getElementById("enviar");

    btnEnviar.addEventListener('click', function(event) {
        if (usuario.value.length !== 8 || contraseña.value.length !== 8) {
            event.preventDefault(); // Evitar el envío del formulario
            alert('Tanto el usuario como la contraseña deben tener exactamente 8 caracteres.');
        }
        

    });
});



