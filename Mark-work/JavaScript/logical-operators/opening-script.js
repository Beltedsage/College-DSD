const now = new Date();
const day = now.getDay();
const hour = now.getHours();

const display = document.getElementById("display");
let message;

if (day === 0 || day === 6) { // Monday - Saturday.
    message = "Sorry, we are closed at weekends.";
} else if (hour >= 9 && hour < 17) { // Between 9AM and 5PM.
    message = "We are open now!";
} else { // Sundays and evenings / nights.
    message = "Sorry, we are closed at the moment"
}

display.textContent = message;