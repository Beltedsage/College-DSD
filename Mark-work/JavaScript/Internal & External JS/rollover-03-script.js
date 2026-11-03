// Find the elements we need
const btn = document.getElementById("btn");
const display = document.getElementById("display");

// Changes the paragraph when the user hovers over the button
function hoverOver() {
    display.textContent = "You hovered over the button!";
}

// Attach the function to the mouseover event
btn.addEventListener("mouseover", hoverOver);