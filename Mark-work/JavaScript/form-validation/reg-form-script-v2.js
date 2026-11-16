const form = document.getElementById("regForm");
const fname = document.getElementById("fname");
const sname = document.getElementById("sname");
const errors = document.getElementById("errors");

function validateForm(event) {
    let message = "";

    fname.classList.remove("error");
    sname.classList.remove("error");

    if (fname.value.trim() === "") {
        message = message + "Please enter your first name.\n";
        fname.classList.add("error");
    }
    
    if (sname.value.trim() === "") {
        message = message + "Please enter your surname.\n";
        sname.classList.add("error");
    }

    if (message !== "") {
        event.preventDefault();
    }

    errors.textContent = message;
}

form.addEventListener("submit", validateForm);