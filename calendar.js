const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

const monthYear = document.getElementById("monthYear");
const calendarBody = document.getElementById("calendar-body");

function generateCalendar(month, year) {
    // Clear previous cells
    calendarBody.innerHTML = "";

    // Get the first day of the month
    let firstDay = new Date(year, month).getDay();
    
    // Get number of days in the month
    let daysInMonth = 32 - new Date(year, month, 32).getDate();

    // Set the month and year in the header
    monthYear.innerHTML = `${monthNames[month]} ${year}`;

    // Create cells for the days
    let date = 1;
    for (let i = 0; i < 6; i++) {
        let row = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                let cell = document.createElement("td");
                cell.innerHTML = "";
                row.appendChild(cell);
            } else if (date > daysInMonth) {
                break;
            } else {
                let cell = document.createElement("td");
                cell.innerHTML = date;
                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.classList.add("today");
                }
                row.appendChild(cell);
                date++;
            }
        }
        calendarBody.appendChild(row);
    }
}

// Navigate to previous month
function prevMonth() {
    currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
    currentYear = (currentMonth === 11) ? currentYear - 1 : currentYear;
    generateCalendar(currentMonth, currentYear);
}

// Navigate to next month
function nextMonth() {
    currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
    currentYear = (currentMonth === 0) ? currentYear + 1 : currentYear;
    generateCalendar(currentMonth, currentYear);
}

// Initial Calendar Display
generateCalendar(currentMonth, currentYear);
