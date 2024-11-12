document.addEventListener("DOMContentLoaded", function () {
    fetch("php/get_events.php")
       .then((response) => response.json())
       .then((data) => {
          const calendarDiv = document.getElementById("events-calendar");
          data.forEach((event) => {
             const eventElement = document.createElement("div");
             eventElement.classList.add("event-item", "col-md-4");
             eventElement.innerHTML = `
                <h4>${event.title}</h4>
                <p>${event.description}</p>
                <p><strong>Date:</strong> ${event.event_date}</p>
                <p><strong>Location:</strong> ${event.location}</p>
             `;
             calendarDiv.appendChild(eventElement);
          });
       });
 });
 