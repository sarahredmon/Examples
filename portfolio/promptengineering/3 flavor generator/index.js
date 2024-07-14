/* 
- Prompt GPT to create a function that generates random seltzer water flavors like Funky Raspberry Pineapple, Wacky Strawberry Whipped Cream, Zippy Pineapple Mango [Adjective Flavor Flavor].
- Flavor titles should be capitalized!
- Give GPT example inputs and outputs (function should accept an array of adjectives and an array of flavors)
- Ask GPT to generate the arrays. Your decision if they’re delicious, weird, bizarre 
- Test the function and iterate if GPT doesn’t produce exactly what you want 
*/

function suggestNewFlavor(flavors, adjectives) {
    // This function will generate a random number between 0 and max (exclusive)
    function getRandomIndex(max) {
      return Math.floor(Math.random() * max);
    }
  
    // Select a random adjective
    const randomAdjectiveIndex = getRandomIndex(adjectives.length);
    const selectedAdjective = adjectives[randomAdjectiveIndex];
  
    // Select two random flavors
    const randomFlavorIndex1 = getRandomIndex(flavors.length);
    let randomFlavorIndex2 = getRandomIndex(flavors.length);
  
    // Ensure that the two selected flavors are different
    while (randomFlavorIndex1 === randomFlavorIndex2) {
      randomFlavorIndex2 = getRandomIndex(flavors.length);
    }
  
    const selectedFlavor1 = flavors[randomFlavorIndex1];
    const selectedFlavor2 = flavors[randomFlavorIndex2];
  
    // Return the new flavor combination
    return `${selectedAdjective} ${selectedFlavor1} ${selectedFlavor2}`;
  }
  
  function capitalizeWords(seltzerFlavor) {
    // Split the input string into words using space as a delimiter
    const words = seltzerFlavor.split(' ');
  
    // Capitalize the first letter of each word and keep the rest of the letters unchanged
    const capitalizedWords = words.map(word => word.charAt(0).toUpperCase() + word.slice(1));
  
    // Join the capitalized words with spaces and return the result
    return capitalizedWords.join(' ');
  }
  
  // Example usage:
  const flavors = [
    'cake',
    'pineapple',
    'whipped cream',
    'chocolate',
    'strawberry',
    'caramel',
    'marshmallow',
    'blueberry',
    'cinnamon',
    'banana',
    'cherry',
    'coconut',
    'lemon',
    'raspberry',
    'brownie',
    'cookie dough',
    'vanilla',
    'apple pie',
    'cheesecake',
    'mango'
  ];
  
  const adjectives = [
    'buttery',
    'luscious',
    'artisanal',
    'zesty',
    'fizzy',
    'electric',
    'zippy',
    'bold',
    'wacky',
    'nutty',
    'tangy',
    'quirky',
    'whimsical',
    'cosmic',
    'snappy',
    'funky',
    'groovy',
    'jazzy',
    'sassy',
    'vibrant'
  ];
  
  console.log(capitalizeWords(suggestNewFlavor(flavors, adjectives)));