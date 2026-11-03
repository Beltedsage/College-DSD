const colourBox = document.getElementById("colour");
const btnGo = document.getElementById("btnGo");
const display = document.getElementById("display");

function pickColour() {
    const colour = colourBox.value;

    if (colour === "red") {
        display.className = "red";
        display.textContent = "Red - the colour of danger!";
    } else if (colour === "blue") {
        display.className = "blue";
        display.textContent = "Blue - the colour of calm.";
    } else if (colour === "green") {
        display.className = "green";
        display.textContent = "Green - the colour of nature.";
    } else if (colour === "purple") {
        display.className = "purple";
        display.textContent = "Purple - the colour of royalty.";
    } else if (colour === "yellow") {
        display.className = "yellow";
        display.textContent = "Yellow - the colour of bananas.";
    } else if (colour === "pink") {
        display.className = "pink";
        display.textContent = "Pink - the colour of people.";
    } else {
        display.className = "";
        display.textContent = "Please choose a colour.";
    }
}

btnGo.addEventListener("click", pickColour);