document.addEventListener("DOMContentLoaded", function () {
    const senhaInput = document.getElementById("senhaInput");
    const mostrarSenhaCheckbox = document.getElementById("mostrarSenha");

    mostrarSenhaCheckbox.addEventListener("change", function () {
        if (mostrarSenhaCheckbox.checked) {
            senhaInput.type = "text";
        } else {
            senhaInput.type = "password";
        }
    });

    senhaInput.addEventListener("input", function () {
        const maxLength = 25; // Defina o limite de caracteres desejado
        if (senhaInput.value.length > maxLength) {
            senhaInput.value = senhaInput.value.slice(0, maxLength);
        }
    });
});
