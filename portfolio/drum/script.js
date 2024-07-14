/* // Retrieve the kick button element
const kickButton = document.getElementById("kick");
const rideButton = document.getElementById("ride");
const snareButton = document.getElementById("snare");
const tomButton = document.getElementById("tom");
const hiHatButton = document.getElementById("hihat");

// Retrieve the kick sound element
const kickSound = document.getElementById("kick-sound");
const rideSound = document.getElementById("ride-sound");
const snareSound = document.getElementById("snare-sound");
const tomSound = document.getElementById("tom-sound");
const hiHatSound = document.getElementById("hihat-sound");

// Attach a click event listener to the kick button
kickButton.addEventListener("click", function() {
  // Reset the sound time to replay it
  kickSound.currentTime = 0;
  
  // Play the kick sound
  kickSound.play();
});

rideButton.addEventListener("click", function() {
  // Reset the sound time to replay it
  rideSound.currentTime = 0;
  
  // Play the kick sound
  rideSound.play();
});

snareButton.addEventListener("click", function() {
  snareSound.currentTime = 0;
  snareSound.play();
});

tomButton.addEventListener("click", function() {
  tomSound.currentTime = 0;
  tomSound.play();
});

hiHatButton.addEventListener("click", function() {
  hiHatSound.currentTime = 0;
  hiHatSound.play();
});

// Attach a keydown event listener to the document
document.addEventListener("keydown", function(event) {
  // Check if the pressed key is "a"
  if (event.key === "a") {
    kickSound.currentTime = 0;
    kickSound.play();
  } else if (event.key === "s") {
    rideSound.currentTime = 0;
    rideSound.play();
  } else if (event.key === "d") {
    snareSound.currentTime = 0;
    snareSound.play();
  } else if (event.key === "f") {
    tomSound.currentTime = 0;
    tomSound.play();
  } else if (event.key === "g") {
    hiHatSound.currentTime = 0;
    hiHatSound.play();
  }
}); */



// Function to handle drum button click and keyboard press
function playDrumSound(sound, button) {
    // Reset the sound time to replay it
    sound.currentTime = 0;

    // Play the drum sound
    sound.play();
}

// Function to set up drum button and keyboard event listeners
function setupDrum(drumButton, drumSound, key) {
    // Retrieve the drum button and sound elements
    const button = document.getElementById(drumButton);
    const sound = document.getElementById(drumSound);

    // Attach click event listener to the drum button
    button.addEventListener("click", () => playDrumSound(sound, button));

    // Attach keydown event listener to the document
    document.addEventListener("keydown", (event) => {
        // Check if the pressed key matches the assigned key
        if (event.key === key) {
            playDrumSound(sound, button);
        }
    });
}

// Set up drum elements
setupDrum("kick", "kick-sound", "a");
setupDrum("ride", "ride-sound", "s");
setupDrum("snare", "snare-sound", "d");
setupDrum("tom", "tom-sound", "f");
setupDrum("hihat", "hihat-sound", "g");