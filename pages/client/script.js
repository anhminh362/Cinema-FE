const container = document.querySelector(".container");
const seats = document.querySelectorAll(".row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");
const code=document.getElementById("code");
const m_code=document.getElementById("ticket_value");
const s_code=document.getElementById("seat_code");


populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}


// Update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".row .seat.selected");
  let ids = [];
  let values=[];
  for (let i = 0; i < selectedSeats.length; i++) {
    let idValue = selectedSeats[i].getAttribute('id');
    ids.push(idValue);
    let ticketInput = selectedSeats[i].querySelector('input[type="hidden"]');
    let ticketId = ticketInput.getAttribute('id');
    let ticketValue = ticketInput.getAttribute('value');
    values.push(ticketValue);
    console.log(ticketId, ticketValue);
    // console.log(ticketInput);
  }
  
  console.log("Ids of selected seats: " + ids);
  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));
  // const seatsCode=
  console.log('selectedSeats',selectedSeats);
  console.log('seatsIndex',seatsIndex);
 
  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
  code.innerText = ids;
  m_code.value=values;
  s_code.value=ids;
  if(selectedSeats)
  setMovieData(movieSelect.selectedIndex, movieSelect.value);
}


// Get data from localstorage and populate UI
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        console.log(seat.classList.add("selected"));
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
    console.log(selectedMovieIndex)
  }
}
console.log(populateUI())
// Movie select event
movieSelect.addEventListener("change", (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("sold")
  ) {
    e.target.classList.toggle("selected");

    updateSelectedCount();
  }
});

// Initial count and total set
updateSelectedCount();
