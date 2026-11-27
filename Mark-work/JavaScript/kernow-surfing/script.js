const fullName = document.getElementById("fullName");
const lessons = document.getElementById("lessons");
const people = document.getElementById("people");

const desc = document.getElementById("desc");

function hoverGroup() {
    // console.log("HELLO");
    desc.textContent = "For 1-8 people, costs £35 each. Good fun for beginners.";
};

function hoverPrivate() {
    desc.textContent = "For 1 or 2 people only, costs £65 each. More personal training experience.";
};

function hoverFamily() {
    desc.textContent = "For 1-8 people, costs £30 each. Great for teaching children and their parents.";
};

function clearDesc() {
    desc.textContent = "Please hover over a button to show more information.";
};

function submitForm() {
    console.log("1");

    const name = fullName.value.trim();
    const lesson = lessons.value;
    const numPeople = Number(people.value);

    if (lesson === "Private") {
        if (name !== "" && (numPeople >= 1 && numPeople <= 2)) {
            console.log("hello")
        }
    }

    else {
        if (name != "" && lesson != "" && numPeople >= 1 && numPeople <= 8) {
            console.log("hello2");
        }
    };
};