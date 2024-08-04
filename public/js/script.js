document.addEventListener("DOMContentLoaded", function() {
    const usernameInput = document.querySelector(".input-fields-comp-child");
    const passwordInput = document.querySelector(".input-fields-comp-item");
    const validationMessage = document.querySelector(".validation-message");

    usernameInput.addEventListener("input", function() {
        const username = usernameInput.value;
        const regex = /^[a-z0-9_]+$/.test(username);

        let message = "";

        if (!regex) {
            message += "<p>Username must contain only lowercase alphabets, numbers and underscores(_).</p>";
        }

        validationMessage.innerHTML = message;

        if (message === "") {
            validationMessage.style.color = "green";
            validationMessage.innerHTML = "<p>Username is valid.</p>";
        } else {
            validationMessage.style.color = "red";
        }
    });

    passwordInput.addEventListener("input", function() {
        const password = passwordInput.value;
        const minLength = 12;
        const maxLength = 25;
        const hasUppercase = /[A-Z]/.test(password);
        const hasLowercase = /[a-z]/.test(password);
        const hasNumber = /[0-9]/.test(password);
        const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);

        let message = "";

        if (password.length < minLength) {
            message += "<p>Password length must be between 12 to 25.</p>";
        }
        if (password.length > maxLength) {
            message += "<p>Password length must be between 12 to 25.</p>";
        }
        if (!hasUppercase) {
            message += "<p>Password must contain at least ONE Uppercase Alphabet.</p>";
        }
        if (!hasLowercase) {
            message += "<p>Password must contain at least ONE Lowercase Alphabet.</p>";
        }
        if (!hasNumber) {
            message += "<p>Password must contain at least ONE Number.</p>";
        }
        if (!hasSpecialChar) {
            message += "<p>Password must contain at least ONE Special Character.</p>";
        }

        validationMessage.innerHTML = message;

        if (message === "") {
            validationMessage.style.color = "green";
            validationMessage.innerHTML = "<p>Password is valid.</p>";
        } else {
            validationMessage.style.color = "red";
        }
    });
});
