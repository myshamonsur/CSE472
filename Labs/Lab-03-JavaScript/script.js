let availableSeats = 12;

function checkSeats() {
    let message = document.getElementById("seatMessage");

    if (availableSeats > 0) {
        message.textContent = "Seats are available. Remaining seats: " + availableSeats;
    } else {
        message.textContent = "Sorry, no seats are available.";
    }
}

function showGreeting() {
    let name = document.getElementById("studentName").value;
    let greeting = document.getElementById("greetingMessage");

    if (name === "") {
        greeting.textContent = "Please enter your name.";
    } else {
        greeting.textContent = "Welcome to the workshop, " + name + "!";
    }
}