const loadBtn = document.getElementById("loadBtn");
const output = document.getElementById("output");

loadBtn.addEventListener("click", async function () {
    try {
         const response = await fetch("workshop.json");
        // const response = await fetch("wrong-file.json");

        console.log("Status:", response.status);

        if (!response.ok) {
            throw new Error("Request failed with status " + response.status);
        }

        const data = await response.json();

        output.innerHTML = `
            <h2>${data.title}</h2>
            <p><strong>Course:</strong> ${data.course}</p>
            <p><strong>Topic:</strong> ${data.topic}</p>
            <p><strong>Instructor:</strong> ${data.instructor}</p>
            <p><strong>Date:</strong> ${data.date}</p>
        `;
    } catch (error) {
        output.textContent = "Error: " + error.message;
        console.error(error);
    }
});