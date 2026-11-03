// A function that shows an alert box
function rolloverAlert() {
    alert("You just hovered your mouse over a button!");
}

// Attack the function to the button's mouseover event
const btn = document.getElementById("btn");
btn.addEventListener("mouseover", rolloverAlert);