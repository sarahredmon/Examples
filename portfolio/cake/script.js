/* // Access the form and relevant elements
const form = document.getElementById('entry-form');
const nameInput = document.getElementById('name');
const participantsList = document.getElementById('participants-list');
const drawButton = document.getElementById('draw-button');
const resetButton = document.getElementById('reset-button');
const winnerDisplay = document.getElementById('winner-display');

// Array to store participant names
const participants = [];

// Submit event listener for the form
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  // Get the entered name
  const name = nameInput.value;

  // Add the name to the participants array
  participants.push(name);

  // Display the name in the participants list
  participantsList.innerHTML += `<p>${name}</p>`;

  // Clear the input field
  nameInput.value = '';
});

// Click event listener for the draw button
drawButton.addEventListener('click', function() {
  // Check if there are participants
  if (participants.length > 0) {
    // Randomly select a winner
    const winnerIndex = Math.floor(Math.random() * participants.length);
    const winner = participants[winnerIndex];

    // Display the winner's name with emojis
    winnerDisplay.innerHTML = `<p>Winner: ${winner}</p>`;
  }
});

// Click event listener for the reset button
resetButton.addEventListener('click', function() {
    winnerDisplay.innerHTML = '';
    participantsList.innerHTML = '';
    participants.length = 0;
}); */



// Function to get element by ID
const getElement = (id) => document.getElementById(id);

// Access the form and relevant elements
const form = getElement('entry-form');
const nameInput = getElement('name');
const participantsList = getElement('participants-list');
const drawButton = getElement('draw-button');
const resetButton = getElement('reset-button');
const winnerDisplay = getElement('winner-display');

// Array to store participant names
const participants = [];

// Submit event listener for the form
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission

  // Get the entered name
  const name = nameInput.value;

  // Add the name to the participants array
  participants.push(name);

  // Display the name in the participants list
  participantsList.innerHTML += `<p>${name}</p>`;

  // Clear the input field
  nameInput.value = '';
});

// Click event listener for the draw button
drawButton.addEventListener('click', function() {
  // Check if there are participants
  if (participants.length > 0) {
    // Randomly select a winner
    const winner = participants[Math.floor(Math.random() * participants.length)];

    // Display the winner's name with emojis
    winnerDisplay.innerHTML = `<p>Winner: ${winner}</p>`;
  }
});

// Click event listener for the reset button
resetButton.addEventListener('click', function() {
    winnerDisplay.innerHTML = '';
    participantsList.innerHTML = '';
    participants.length = 0;
});