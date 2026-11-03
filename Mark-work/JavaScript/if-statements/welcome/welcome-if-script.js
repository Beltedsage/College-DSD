const now = new Date();
const hour = now.getHours();

const display = document.getElementById("display");
let greeting;

if (hour >= 18) {
    greeting = "Good Evening";
} else if (hour >= 12) {
    greeting = "Good afternoon";
} else {
    greeting = "Good morning";
}

display.textContent = greeting;