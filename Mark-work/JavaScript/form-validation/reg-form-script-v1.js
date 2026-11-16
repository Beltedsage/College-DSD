const form = document.getElementById("regForm");
const fname = document.getElementById("fname");
const sname = document.getElementById("sname");

function validateForm(event) {
    if (fname.value.trim() === "") {
        alert("Please enter your first name");
        event.preventDefault();
    } else if (sname.value.trim() === "") {
        alert("Please enter your surname");
        event.preventDefault();
    }
}

form.addEventListener("submit", validateForm);