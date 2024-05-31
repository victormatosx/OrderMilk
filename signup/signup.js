function validateForm() {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const errorMessage = document.getElementById("errorMessage");

    if (password !== confirmPassword) {
        errorMessage.textContent = "As senhas não são iguais. Por favor, digite senhas iguais.";
        errorMessage.style.display = "block";
        return false;
    }

    errorMessage.style.display = "none";
    return true;
}

function togglePasswordVisibility(id) {
    const input = document.getElementById(id);
    const type = input.getAttribute("type") === "password" ? "text" : "password";
    input.setAttribute("type", type);
}
